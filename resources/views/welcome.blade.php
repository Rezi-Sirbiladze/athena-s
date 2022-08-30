@extends('layouts.base-layout')

@section('title', 'Hi! 😎')

@section('content')
  <style>
    IMG.displayed {
    display: block;
    margin-left: auto;
    margin-right: auto }

    figcaption a {
      text-decoration: none;
    }

    .autoplay img{
      height: 200px;
      width: 170px;
    }

    .row:not(:first-child){
      padding-top: 100px;
    }
  </style>

  <div class="container">

    <div class="row align-items-center pt-5">
      <div class="col-md-6 text-center " data-aos="fade-up" data-aos-duration="1000">    
        <h1>Hey! Soy Rezi ⚡</h1>
        <p>
          Soy full stack developer, puedo encargarme de diseñar tu página web (frontend) personalizada a tu gusto y conectarlo al backend si es necesario, a su vez también puedo conectar a un base de datos para almacenar algunos datos para luego poder analizar en backend.
        </p>
      </div>
      <div data-tilt class="col-md-6 justify-content-center text-center">
        <img src="{{asset("img/profile.png")}}" class="img-fluid rounded" alt="profile_img" style=" height : 500px">
      </div>
    </div>



    <div class="row justify-content-end text-center align-items-center">
      <div data-tilt class="col-md-6 order-md-first order-last justify-content-center text-center">
        <figure>
          <img src="{{asset("img/exp.jpg")}}" class="img-fluid rounded" alt="Foto_de_Mitchell" style=" height : 400px; width : 400px">
          <figcaption>Foto de <a target="_blank" href="https://unsplash.com/@mitchel3uo?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Mitchell Luo</a> en <a target="_blank" href="https://unsplash.com/es/s/fotos/dise%C3%B1o?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a>
          </figcaption>
        </figure>
      </div>
      <div class="col-md-6" data-aos="fade-up" data-aos-duration="1000">    
        <h1>Experiencia 📚</h1>
        <p>
          La experiencia es algo importante y es algo que no lo tengo mucho actualmente, pero no paro de aprender y tengo muchas ganas de mejorar, la única experiencia demostrable que tengo es esta misma página, no está mal no? 
        </p>
      </div>
    </div>



    <div class="row mt-12 text-center align-items-center justify-content-center">
      <div class="col-md-11">    
        <h1>Skills 🔥</h1>
        <br>
        <div class="autoplay">
          <div><img class="displayed" src="{{asset("img/skills/html5-logo.png")}}" class="img-fluid rounded" alt="html5-logo"> HTML</div>
          <div><img class="displayed" src="{{asset("img/skills/css-logo.png")}}" class="img-fluid rounded" alt="css-logo"> CSS</div>
          <div><img class="displayed" src="{{asset("img/skills/js-logo.png")}}" class="img-fluid rounded" alt="js-logo"> JS</div>
          <div><img class="displayed" src="{{asset("img/skills/jquery-logo.png")}}" class="img-fluid rounded" alt="jquery-logo"> JQuery</div>
          <div><img class="displayed" src="{{asset("img/skills/php-logo.png")}}" class="img-fluid rounded" alt="php-logo"> PHP</div>
          <div><img class="displayed" src="{{asset("img/skills/mysql-logo.png")}}" class="img-fluid rounded" alt="mysql-logo"> MySQL</div>
          <div><img class="displayed" src="{{asset("img/skills/laravel-logo.png")}}" class="img-fluid rounded" alt="laravel-logo"> Laravel</div>
        </div>
      </div>
    </div>




    <div class="row mt-12 text-center align-items-center justify-content-center pb-5">
      <div class="col-md-11" data-aos="fade-up" data-aos-duration="1000">    
        <h1>Contacto 📥</h1>
        <br>
        @if (Session::has('message'))
          <div class="alert alert-success" role="alert">
            Email Enviado
          </div>
        @endif
        <form method="POST" action="{{route("stonksMail")}}">
          @csrf
          <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" placeholder="Rezi" name="name" required>
          </div>
          <div class="mb-3">
            <label for="mail" class="form-label">Email</label>
            <input type="mail" class="form-control" aria-describedby="mailHelp" name="mail" placeholder="hola@mundo.com" required>
          </div>
          <div class="mb-3">
            <label for="textArea" class="form-label">Mensaje</label>
            <textarea class="form-control" rows="3" name="text" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>

      </div>
    </div>


  </div>

  {{-- Slider --}}
  <script>
    $('.autoplay').slick
    ({
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 1000,
      pauseOnFocus: false,
      infinite: true,
      centerPadding: '60px',
      arrows: false,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
          }
        },
        {
          breakpoint: 700,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            infinite: true,
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
          }
        }
      ]
    });
  </script>

@endsection
