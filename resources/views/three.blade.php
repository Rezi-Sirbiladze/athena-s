<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Three</title>
    <style>
        body {
            margin: 0;
        }

        #info {
            position: absolute;
            top: 10px;
            width: 100%;
            text-align: center;
            z-index: 100;
            display: block;
            color: white;
            font-family: courier;
        }
    </style>
</head>

<body>
    <div id="info">Description</div>
    <script src="{{asset('js/three.js')}}"></script>
    <script>
        three_line_animate();
        three_cube();
        three_line();

        function three_cube(){
            const scene = new THREE.Scene();
            scene.background = new THREE.Color(0x16A085);
            scene.fog = new THREE.Fog("white", 0.1, 12);
            const loader = new THREE.TextureLoader();
            loader.load("{{asset('img/bc.jpg')}}", texture => scene.background = texture);



            const camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 0.1, 1000 );

            const renderer = new THREE.WebGLRenderer();
            renderer.setSize( window.innerWidth, window.innerHeight );
            document.body.appendChild( renderer.domElement );

            const geometry = new THREE.BoxGeometry( 2, 2, 2 );
            const material = new THREE.MeshBasicMaterial( { color: 0xA569BD } );
            const cube = new THREE.Mesh( geometry, material );
            scene.add( cube );

            cube.position.y = 1;
            cube.position.x = -1; 
            camera.position.z = 5;

            function animate() {
                requestAnimationFrame( animate );
                renderer.render( scene, camera );
                cube.rotation.x += 0.01;
                cube.rotation.y += 0.01;
            }
            animate();
        }

        function three_line(){
            const scene = new THREE.Scene();

            const camera = new THREE.PerspectiveCamera( 45, window.innerWidth / window.innerHeight, 1, 500 );
            camera.position.set( 0, 0, 100 );
            camera.lookAt( 0, 0, 0 );

            const renderer = new THREE.WebGLRenderer();
            renderer.setSize( window.innerWidth, window.innerHeight );
            document.body.appendChild( renderer.domElement );



            const material = new THREE.LineBasicMaterial( { color: 0x0000ff } );

            const points = [];
            points.push( new THREE.Vector3( - 10, 0, 0 ) );
            points.push( new THREE.Vector3( 0, 10, 0 ) );
            points.push( new THREE.Vector3( 10, 0, 0 ) );
            points.push( new THREE.Vector3( -10, 0, 0 ) );
            points.push( new THREE.Vector3( -10, 0, 0 ) );

            const geometry = new THREE.BufferGeometry().setFromPoints( points );

            const line = new THREE.Line( geometry, material );

            scene.add( line );
            renderer.render( scene, camera );
        }

        function three_line_animate(){

            let renderer, scene, camera;

            let line;
            const MAX_POINTS = 300;
            let drawCount;

            init();
            animate();

            function init() {

                // info
                const info = document.createElement( 'div' );
                info.style.position = 'absolute';
                info.style.top = '30px';
                info.style.width = '100%';
                info.style.textAlign = 'center';
                info.style.color = '#fff';
                info.style.fontWeight = 'bold';
                info.style.backgroundColor = 'transparent';
                info.style.zIndex = '1';
                info.style.fontFamily = 'courier';
                info.innerHTML = "---";
                document.body.appendChild( info );

                // renderer
                renderer = new THREE.WebGLRenderer();
                renderer.setPixelRatio( window.devicePixelRatio );
                renderer.setSize( window.innerWidth, window.innerHeight );
                document.body.appendChild( renderer.domElement );

                // scene
                scene = new THREE.Scene();

                // camera
                camera = new THREE.PerspectiveCamera( 45, window.innerWidth / window.innerHeight, 1, 10000 );
                camera.position.set( 0, 0, 700 );

                // geometry
                const geometry = new THREE.BufferGeometry();

                // attributes
                const positions = new Float32Array( MAX_POINTS * 3 ); // 3 vertices per point
                geometry.setAttribute( 'position', new THREE.BufferAttribute( positions, 3 ) );

                // drawcalls
                drawCount = 2; // draw the first 2 points, only
                geometry.setDrawRange( 0, drawCount );

                // material
                const material = new THREE.LineBasicMaterial( { color: 0xff0000 } );

                // line
                line = new THREE.Line( geometry,  material );
                scene.add( line );

                // update positions
                updatePositions();

            }

            // update positions
            function updatePositions() {

                const positions = line.geometry.attributes.position.array;

                let x, y, z, index;
                x = y = z = index = 0;

                for ( let i = 0, l = MAX_POINTS; i < l; i ++ ) {

                    positions[ index ++ ] = x;
                    positions[ index ++ ] = y;
                    positions[ index ++ ] = z;

                    x += ( Math.random() - 0.5 ) * 30;
                    y += ( Math.random() - 0.5 ) * 30;
                    z += ( Math.random() - 0.5 ) * 30;

                }

            }

            // render
            function render() {

                renderer.render( scene, camera );

            }

            // animate
            function animate() {

                requestAnimationFrame( animate );

                drawCount = ( drawCount + 1 ) % MAX_POINTS;

                line.geometry.setDrawRange( 0, drawCount );

                if ( drawCount === 0 ) {

                    // periodically, generate new data

                    updatePositions();

                    line.geometry.attributes.position.needsUpdate = true; // required after the first render

                    line.material.color.setHSL( Math.random(), 1, 0.5 );

                }

                render();

            }
        }

    </script>
</body>

</html>