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



    <div class="row justify-content-end text-center align-items-center pt-5">
      <div data-tilt class="col-md-6 justify-content-center text-center">
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



    <div class="row mt-12 text-center align-items-center justify-content-center pt-5">
      <div class="col-md-11">    
        <h1>Skills 🔥</h1>
        <br>
        <div class="autoplay">
          <div><img class="displayed" src="{{asset("img/skills/html5-logo.png")}}" class="img-fluid rounded" alt="html5-logo" style=" height : 200px"> HTML</div>
          <div><img class="displayed" src="{{asset("img/skills/css-logo.png")}}" class="img-fluid rounded" alt="css-logo" style=" height : 200px"> CSS</div>
          <div><img class="displayed" src="{{asset("img/skills/js-logo.png")}}" class="img-fluid rounded" alt="js-logo" style=" height : 200px"> JS</div>
          <div><img class="displayed" src="{{asset("img/skills/jquery-logo.png")}}" class="img-fluid rounded" alt="jquery-logo" style=" height : 200px"> JQuery</div>
          <div><img class="displayed" src="{{asset("img/skills/php-logo.png")}}" class="img-fluid rounded" alt="php-logo" style=" height : 200px"> PHP</div>
          <div><img class="displayed" src="{{asset("img/skills/mysql-logo.png")}}" class="img-fluid rounded" alt="mysql-logo" style=" height : 200px"> MySQL</div>
          <div><img class="displayed" src="{{asset("img/skills/laravel-logo.png")}}" class="img-fluid rounded" alt="laravel-logo" style=" height : 200px"> Laravel</div>
        </div>
      </div>
    </div>




    <div class="row mt-12 text-center align-items-center justify-content-center pt-5 pb-5">
      <div class="col-md-11" data-aos="fade-up" data-aos-duration="1000">    
        <h1>Contacto 📥</h1>
        <br>
        <form>
          <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="name" placeholder="Rezi" name="name" required>
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="hola@mundo.com" required>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Mensaje</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="texto" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>


  </div>

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
