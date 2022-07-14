@extends('layouts.base-layout')

@section('title', 'Hi! 😎')

@section('content')

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

        <div class="row justify-content-end text-center align-items-center mt-5">
            <div class="col-md-6" data-aos="fade-up" data-aos-duration="1000">    
                <h1>Experiencia 📚</h1>
                <p>
                    La experiencia es algo importante y es algo que no lo tengo mucho actualmente, pero no paro de aprender y tengo muchas ganas de mejorar, la única experiencia demostrable que tengo es esta misma página, no está mal no? 
                </p>
            </div>
        </div>

        <div class="row mt-12 text-center align-items-center">
            <div class="col-md-12" >    
                <h1>Lenguajes 🔥</h1>

                    <img class="demo-content animation-keyframes-demo1"  src="{{asset("img/profile.png")}}" class="img-fluid rounded" alt="profile_img" style=" height : 400px"> 
                    <img class="demo-content animation-keyframes-demo2" src="{{asset("img/profile.png")}}" class="img-fluid rounded" alt="profile_img" style=" height : 400px"> 
                    <img src="{{asset("img/profile.png")}}" class="img-fluid rounded" alt="profile_img" style=" height : 400px">
                    <img src="{{asset("img/profile.png")}}" class="img-fluid rounded" alt="profile_img" style=" height : 400px">
                    <img src="{{asset("img/profile.png")}}" class="img-fluid rounded" alt="profile_img" style=" height : 400px">
                    <img src="{{asset("img/profile.png")}}" class="img-fluid rounded" alt="profile_img" style=" height : 400px">   
                    <img src="{{asset("img/profile.png")}}" class="img-fluid rounded" alt="profile_img" style=" height : 400px">  
                    <img src="{{asset("img/profile.png")}}" class="img-fluid rounded" alt="profile_img" style=" height : 400px">     

            </div>
        </div>


    </div>

    <script>
    anime({
    targets: '.animation-keyframes-demo1 ',
    keyframes: [

        {translateX: 300},
        {translateX: 0}
    ],
    duration: 8000,
    easing: 'easeOutElastic(1, .8)',
    loop: true
    });

    anime({
    targets: '.animation-keyframes-demo2 ',
    keyframes: [

        {translateY: 300},
        {translateY: 0}
    ],
    duration: 8000,
    easing: 'easeOutElastic(1, .8)',
    loop: true
    });
    </script>
@endsection
