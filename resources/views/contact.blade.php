@extends('layouts.fronted.contact')
@section('redes')
<div class="red">
    <div id="facebook">
        <a href="https://www.facebook.com/Ciutecnm-104251618932716/" target="none" class="fab fa-facebook-f "></a>
    </div>
    <div id="instagram">
        <a href="https://instagram.com/ciutecnm?igshid=YmMyMTA2M2Y=" target="none" class="fab fa-instagram"></a>
    </div>
    <div id="twiter">
        <a href="https://twitter.com/ciutecnm" target="none" class="fab fa-twitter-square"></a>
    </div>
    <div id="whatsaap">
        <a href="https://wa.me/5619918278?text=Hola%2CEstoy+interesad%40+en+unirme+a+CIUTecNM" target="none" class="fab fa-whatsapp"></a>
    </div>
    <div id="gmail">
        <a href="mailto:ciutecnm@gmail.com" target="none" class="fab fa-gmail"></a>
    </div>
</div>
@endsection
@section('navbar_top')
<div class="header-top">
    <div class="container d-flex justify-content-between">
        <div class="d-inline-flex ml-auto">
            <div class="headcont">
                <i class="fas fa-2x fa-mobile-alt messenge"></i>
                5619918278
            </div>
            <div class="headcont">
                <i class="fas fa-2x fa-envelope messenge"></i>
                ciutecnm@gmail.com
            </div>
        </div>
    </div>
</div>
@endsection
@section('navbar')
    <header>
    <a href="#" class="logo">
        <h2 style="color: white" class="imgtamaño">CIUTecNM</h2>
        <!--<img  class="imgtamaño" src="{{ asset('img/jldm.png')}}" alt="JLDM ! Proyects">-->
    </a>
    <div class="menu-toggle" ></div>
        <nav>
            <ul>
                <li><a href="{{ url('/')}}" >INICIO</a></li>
                <li><a class="active" href="{{ url('/contact')}}">CONTÁCTENOS</a></li>
                <li><a href="{{ url('/productos')}}">PRODUCTOS</a></li>
                <li><a href="{{ url('/nosotros')}}">NOSOTROS</a></li>
            </ul>
        </nav>
        <div class="clearfix"></div>
    </header>
@endsection
@section('banner')
<div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hero-text">
                        <h4>PAGINA <span>WEB</span></h4>
						<br>
						<br>
                        <h1 class="tipeo1">COMUNÍCATE CON NOSOTROS</h1>
                        <h1 class="tipeo2"><span class="type"></span></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 
@section('cards_service')
<div class="container_cards">
    <div class="row_cards">
        <div class="col-md-3 col-sm-6 mb-3 text-center">
            <div class="single-content_service">
                <div class="service">
                    <i class="fas fa-percent fa-4x"></i>
                    <h4 class="title_services">Ofertas del Día</h4>
                    <p class="description_services">Ofertas especiales</p><br>
                    <!--<a href="" class="btn_modal_wel mt-5" data-toggle="modal" data-target=".bd-example-modal-xl">Ver mas</a>-->
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3 text-center">
            <div class="single-content_service">
                <div class="service">
                    <i class="fas fa-shopping-cart fa-4x"></i>
                    <h4 class="title_services">Porque con CIUTecNM</h4>
                    <p class="description_services">Variedad de servicios</p><br>
                    <!--<a href="" class="btn_modal_wel mt-5" data-toggle="modal" data-target=".bd-example-modal-xl2">Ver mas</a>-->  
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3 text-center">
            <div class="single-content_service">
                <div class="service">
                    <i class="fas fa-user-check fa-4x"></i>
                    <h4 class="title_services">Clientes Satisfechos</h4>
                    <p class="description_services">Nuestros clientes felices con los servicios</p>
                    <!--<a href="{{ url('/nosotros')}}" class="btn_modal_wel mt-5">Ver mas</a>-->
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3 text-center">
            <div class="single-content_service">
                <div class="service">
                    <i class="fas fa-thumbs-up fa-4x"></i>
                    <h4 class="title_services">Descarga nuestra app CIUTecNM</h4>
                    <p class="description_services">Consume nuestro servicio y valida tu identidad</p>
                    <!--<a href="" class="btn_modal_wel mt-5" data-toggle="modal" data-target=".bd-example-modal-xl">Ver mas</a>-->          
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('Content_messege')
<div class="conatiner">
    <div class="form">
        <div class="contact-info">
                <h3 class="contact_tittle">ESTAMOS UBICADOS EN</h3>
                <p class="contact_text">Diferentes puntos estratégicos  para
                    una mejor atención a nuestra comunidad y que puedan
                    localizarnos, así como aprovechar el maximo de beneficios.   
                </p>

            <div class="contactos_info">
                <div class="contact_information">
                    <i class="fas fa-2x fa-map-marker-alt"></i>
                    <p>Av Estanislao Ramírez Ruiz 301, Amp. Selene, Tláhuac, CDMX </p>
                </div>
                <div class="contact_information">
                <i class="fas fa-2x fa-phone-volume"></i>
                    <p>5619918278</p>
                </div>
                <div class="contact_information">
                    <i class="far fa-2x fa-envelope"></i>
                    <p>ciutecnm@gmail.com</p>
                </div>
            </div>
            <div class="social_media">
                <p>REDES SOCIALES</p>
                <div class="social-icons">
                    <a href="https://www.facebook.com/Ciutecnm-104251618932716/" target="none">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://instagram.com/ciutecnm?igshid=YmMyMTA2M2Y=" target="none">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://twitter.com/ciutecnm" target="none">
                        <i class="fab fa-twitter-square"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="contact-form">
            <form action="" autocomplete="off">
                <h3 class="contact_tittle">COMUNÍCATE CON NOSOTROS</h3>
                <div class="input-container ">
                    <input type="text" name="name" class="contact_input" placeholder="NOMBRE COMPLETO">
                </div>
                <div class="input-container">
                    <input type="text" name="email" class="contact_input" placeholder="EMAIL">
                </div>
                <div class="input-container">
                    <input type="tel" name="celular" class="contact_input" placeholder="CELULAR">
                </div>
                <div class="input-container">
                    <textarea name="mensaje" class="contact_input" id="" placeholder="MENSAJE"></textarea>
                </div>
                <input type="submit" value="ENVIAR" class="contact_btn">
            </form>
        </div>
    </div>
</div>
@endsection
@section('footer')
<footer class="footer">
    <div class="l-footer">
        <h2 style="color: white" class="footer_img">CIUTecNM</h2>
    <p>CIUTecNM es una tarjeta de descuentos digital, la cual es recibida en establecimientos afiliados mediante servicios que
        proporciona la comunidad perteneciente al TecNM campus Tláhuac.
    </p>
    </div>
        <ul class="r-footer">
            <li>
            <h2>Social</h2>
                <ul class="box">
                    <li class="button_social">
                        <i class="fab mr-2 fa-facebook"></i>
                        <a href="https://www.facebook.com/Ciutecnm-104251618932716/" target="_blank">Facebook</a>
                    </li>
                    <li class="button_social">
                        <i class="fab mr-2 fa-twitter"></i>
                        <a href="https://twitter.com/ciutecnm">Twitter</a>
                    </li>
                    <li class="button_social">
                        <i class="fab mr-2 fa-instagram"></i>
                        <a href="https://instagram.com/ciutecnm?igshid=YmMyMTA2M2Y=" target="_blank">Instagram</a>
                    </li>
                    <li class="button_social">
                        <i class="fab mr-2 fa-gmail"></i>
                        <a href="mailto:ciutecnm@gmail.com" target="_blank">Gmail</a>
                    </li>
                </ul>
            </li>
            <li class="features">
            <h2>Información</h2>
            <ul class="box">
                <li><a href="#">Políticas de Privacidad</a></li>
                <li><a href="https://wa.me/5619918278?text=Hola%2CEstoy+interesad%40+en+unirme+a+CIUTecNM">Unete a nosotros</a></li>
            </ul>
            </li>
            <li class="features">
                <h2>Descarga Nuestra App CIUTECNM</h2>
                <ul class="box">
                    <li><a type="button" class="btn btn-outline-info"  data-toggle="modal" data-target=".bd-example-modal-xl" href="{{asset('img/CIUTECNM.apk')}}">Download</a></li>
                </ul>
                </li>
        </ul>
        <div class="b-footer">
            <p>Todos los Derechos reservados by <a href="#/" target="_blank">©CIUTecNM-2022</a></p>
        </div>
</footer>
@endsection
