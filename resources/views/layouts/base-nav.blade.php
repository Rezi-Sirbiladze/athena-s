<style>
    #titulo{
        font-size:6vw;
        letter-spacing:0.2em;
        text-decoration:none;
        color:white;
        background:linear-gradient(to right,#363636 0%,#363636 100%);
        background-repeat: no-repeat;
        background-position: left 100%;
        transition-duration: 1s;
        background-size: 0 6%;
    }
    #titulo:hover{
        background-size:100% 6%;
        color: #363636;
    }
    

    nav a {
        font-size: 2rem;
        background:linear-gradient(to right,#363636 0%,#363636 100%);
        background-repeat: no-repeat;
        background-position: left 100%;
        transition-duration: 1s;
        background-size: 0 6%;
    }

    nav a:hover {
        background-size:100% 6%;
        color: #363636;
    }

    nav ul li:not(:last-child){
        padding-right: 100px; 
    }


</style>

<div class="bg-image d-flex justify-content-center align-items-center" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg'); height: 60vh; background-size: cover;">
    <div data-aos="fade-down" data-aos-duration="1000">
        <h1 id="titulo">Hola mundo</h1>
    </div>
</div>
<nav class="navbar sticky-top navbar-expand-lg navbar-light justify-content-center align-items-center" style="background-color: white">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
        <div class="navbar-nav justify-content-center align-items-center">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route("welcome")}}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Features
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route("three")}}">Three js</a></li>
                    </ul>
                </li>
            </ul>

        </div>
    </div>
</nav>

<br>

<script>
    anime({
        targets: '#titulo',
        translateY: [30,-20]
    });
</script>
