@extends('layouts.base-layout')

@section('title', 'Three 🌲')

@section('content')
    <div id="contenido" class="container"></div>
    <script src="{{asset('js/three.js')}}"></script>
    <script>

        
        three_line_animate();
        three_cube();
        three_triangle();

        function three_cube(){
            const scene = new THREE.Scene();
            scene.background = new THREE.Color(0x16A085);
            scene.fog = new THREE.Fog("white", 0.1, 12);
            const loader = new THREE.TextureLoader();
            loader.load("{{asset('img/bc.jpg')}}", texture => scene.background = texture);



            const camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 0.1, 1000 );

            const renderer = new THREE.WebGLRenderer();
            renderer.setSize(window.innerWidth-17, window.innerHeight );
            //document.getElementById("contenido").appendChild( renderer.domElement );
            document.body.appendChild( renderer.domElement );


            window.addEventListener('resize', function(){
                let width = window.innerWidth-17;
                let height = window.innerHeight;
                renderer.setSize(width, height);
            });

            const geometry = new THREE.BoxGeometry( 2, 2, 2 );
            let material = new THREE.MeshBasicMaterial( { color: 0x00ff00 } );
            const cube = new THREE.Mesh( geometry, material );
            scene.add( cube );
            window.onscroll = function() {cube.material.color.setHSL( Math.random(), 1, 0.5 )};

            cube.position.y = 0;
            cube.position.x = 0; 
            camera.position.z = 5;


            function animate() {
                requestAnimationFrame( animate );
                renderer.render( scene, camera );
                cube.rotation.x += 0.01;
                cube.rotation.y += 0.01;
            }
            animate();
        }

        function three_triangle(){
            const scene = new THREE.Scene();

            const camera = new THREE.PerspectiveCamera( 45, window.innerWidth / window.innerHeight, 1, 500 );
            camera.position.set( 0, 0, 100 );
            camera.lookAt( 0, 0, 0 );

            const renderer = new THREE.WebGLRenderer();
            renderer.setSize( window.innerWidth-17, window.innerHeight );
            document.body.appendChild( renderer.domElement );

            window.addEventListener('resize', function(){
                let width = window.innerWidth-17;
                let height = window.innerHeight;
                renderer.setSize(width, height);
            });

            let material = new THREE.LineBasicMaterial( { color: 0xC92750 } );

            const points = [];
            points.push( new THREE.Vector3( - 10, 0, 0 ) );
            points.push( new THREE.Vector3( 0, 10, 0 ) );
            points.push( new THREE.Vector3( 10, 0, 0 ) );
            points.push( new THREE.Vector3( -10, 0, 0 ) );
            points.push( new THREE.Vector3( -10, 0, 0 ) );

            const geometry = new THREE.BufferGeometry().setFromPoints( points );

            const line = new THREE.Line( geometry, material );

            scene.add( line );
            //window.onscroll = function() {line.material.color.setHSL( Math.random(), 1, 0.5 )};

            function animate(){
                requestAnimationFrame(animate);
                renderer.render(scene, camera);
                line.rotation.x += 0.02;
                line.rotation.y += 0.01;
            }
            animate();
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
                renderer.setSize( window.innerWidth-17, window.innerHeight );
                document.body.appendChild( renderer.domElement );

                window.addEventListener('resize', function(){
                    let width = window.innerWidth-17;
                    let height = window.innerHeight;
                    renderer.setSize(width, height);
                });


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

@endsection