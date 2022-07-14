<div class="bg-image d-flex justify-content-center align-items-center" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg'); height: 100vh">
    <div data-aos="fade-down" data-aos-duration="1000">
        <h1 id="titulo">Hola mundo</h1>
        
    </div>
    
</div>
<nav class="navbar navbar-expand-lg navbar-light justify-content-center align-items-center">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
        <div class="navbar-nav justify-content-center align-items-center">
            <a class="nav-link active" href="{{route("welcome")}}">Home</a>
            <a class="nav-link" href="{{route("three")}}">Features Three.js</a>
        </div>
    </div>
</nav>

<script>
anime({
    targets: '#titulo',
    translateY: [30,-20]
  });
</script>
