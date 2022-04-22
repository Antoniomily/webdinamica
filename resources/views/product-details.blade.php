@extends('layouts.fronted.product-details')
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
    </a>
    <div class="menu-toggle" ></div>
        <nav>
            <ul>
                <li><a href="{{ url('/')}}" >INICIO</a></li>
                <li><a href="{{ url('/contact')}}">CONTÁCTENOS</a></li>
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
					    <br><br>
                        <h1 class="tipeo1">VARIEDAD DE SERVICIOS</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 
@section('content')
<main class="container_product">
    <div class="left-column">
        <img data-image="red" class="active" src="{{asset('/img/productos/'.$producto->image)}}">
    </div>
    <!-- Right Column -->
    <div class="right-column">
    <!-- Product Description -->
    <div class="product-description">
        <span>{{$producto->visible == 1 ? "En Stock":"Agotado"}}</span>
        <h1>{{$producto->name}}</h1>
        <p>{{$producto->extract}}</p>
    </div>

    <!-- Product Configuration -->
    <div class="product-configuration">
        <!-- Cable Configuration -->
        <div class="cable-config">
            <span>Categoría: </span><br>
                <div class="cable-choose">
                    <button>
                        <a href="{{ route('searchCategory' , $producto->categoria->slug)}}">
                            {{$producto->categoria->name}}
                        </a>
                    </button>
                </div>
        </div>
    </div>

    <!-- Product Pricing -->
    <div class="product-price">
        <span>S/{{$producto->price}}</span>
            <a target="none" href="https://wa.me/5619918278?text=Hola%2CEstoy+interesad%40+en+unirme+a+CIUTecNM{{$producto->name}}" class="cart-btn">
            Consultar
            </a>
    </div>
  </div>
</main><br><br>
<div class="container">
<div class="media">
    <img width="100" height="100"  src="{{asset('/img/productos/'.$producto->image)}}" class="align-self-start mr-3" alt="...">
    <div class="media-body">
      <h5 class="mt-0">Descripción:</h5>
      <p>{{$producto->descriptions}}</p>
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
