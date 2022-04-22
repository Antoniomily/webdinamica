@extends('layouts.fronted.index')
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
                <li><a href="" class="active">INICIO</a></li>
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
                        <h4>CARD <span>ID</span> <span>UNIVERSITY</span></h4>
						<br>
						<br>
                        <h1 class="tipeo1">CIU TecNM</h1>
                        <h1 class="tipeo2"><span class="type"></span></h1>
                        <div class="botonesinfo">
                        <a href="" class="btn hero-btn">MAS INFORMACIÓN</a>
                        <a href="{{ url('/productos')}}" class="btn hero-btn2 btn1">VER PRODUCTOS</a>
                        </div>
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
                    <a href="" class="btn_modal_wel mt-5" data-toggle="modal" data-target=".bd-example-modal-x3">Ver mas</a>  
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3 text-center">
            <div class="single-content_service">
                <div class="service">
                    <i class="fas fa-shopping-cart fa-4x"></i>
                    <h4 class="title_services">Porque con CIUTecNM</h4>
                    <p class="description_services">Variedad de servicios</p><br>
                    <a href="" class="btn_modal_wel mt-5" data-toggle="modal" data-target=".bd-example-modal-xl2">Ver mas</a>  
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3 text-center">
            <div class="single-content_service">
                <div class="service">
                    <i class="fas fa-user-check fa-4x"></i>
                    <h4 class="title_services">Clientes Satisfechos</h4>
                    <p class="description_services">Nuestros clientes felices con los servicios</p>
                    <a href="{{ url('/nosotros')}}" class="btn_modal_wel mt-5">Ver mas</a>  
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3 text-center">
            <div class="single-content_service">
                <div class="service">
                    <i class="fas fa-thumbs-up fa-4x"></i>
                    <h4 class="title_services">Descarga nuestra app CIUTecNM</h4>
                    <p class="description_services">Consume nuestro servicio y valida tu identidad</p>
                    <a href="" class="btn_modal_wel mt-5" data-toggle="modal" data-target=".bd-example-modal-xl">Ver mas</a>          
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('cards')
<div class="container_cards">    
    <div class="row_cards">
        <div class="col-md-3 col-sm-6 mb-3">
            <div class="single-content">
                <img src="{{ asset('img/categoria/cate1.jpg')}}" alt="CIUTecNM">
                <div class="text-content">
                    <h3>Servicios tecnológicos</h3>
                    <hr class="style2">
                    <h6>Telecomunicaciones, plataformas, redes sociales</h6>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3">
            <div class="single-content">
                <img src="{{ asset('img/categoria/cate2.jpg')}}" alt="CIUTecNM">
                <div class="text-content">
                    <h3>Servicios profesionales</h3>
                    <hr class="style2">
                    <h6>Área contable, administrativa, informática, comunicaciones</h6>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3">
            <div class="single-content">
                <img src="{{ asset('img/categoria/cate3.jpg')}}" alt="CIUTecNM">
                <div class="text-content">
                    <h3>Servicios de salud</h3>
                    <hr class="style2">
                    <h5>Clínicas, consultorios, sector sanitario</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3">
            <div class="single-content">
                <img src="{{ asset('img/categoria/cate4.jpg')}}" alt="CIUTecNM">
                <div class="text-content">
                    <h3>Servicios de entretenimiento</h3>
                    <hr class="style2">
                    <h6>Actividades recreativas, deportes, actividades culturales</h6>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3">
            <div class="single-content">
                <img src="{{ asset('img/categoria/cate5.jpg')}}" alt="CIUTecNM">
                <div class="text-content">
                    <h3>Servicios gastronómicos</h3>
                    <hr class="style2">
                    <h6>Restaurantes, bares, cafeterías</h6>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3">
            <div class="single-content">
                <img src="{{ asset('img/categoria/cate6.jpg')}}" alt="CIUTecNM">
                <div class="text-content">
                    <h3>Servicios educativos y de formación</h3>
                    <hr class="style2">
                    <h6>Cursos, colegios, servicios comunitarios</h6>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('title5')
<div class="col-12 pt-2" style="background: #0781b6">
		<div class="proveedor-title">
			<h5 style="color: black">CONOCE A</h5>
            <h3 style="color: white">NUESTROS PROVEEDORES DE SERVICIOS</h3>
            <hr class="style5">
	    </div>
</div>
@endsection
@section('Proveedores')
<div class="container_prove">
    <div class="carousel_prove">
        <div class="buttons_prove">
            <span class="prev"> &#8592; </span>
            <span class="next"> &#8594; </span>
        </div>
        @foreach($proveedores as $proveedore)
        <div class="item">
            <div class="content">
                <h1>{{$proveedore->name}}</h1>
                <hr class="">
                <h5 style="color: white">CIUTecNM</h5>
            </div>
            <div class="img">
                <img src="{{asset('/img/proveedore/'.$proveedore->image)}}" alt="">
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
@section('title2')
<div class="col-12">
		<div class="testimonial-title">
			<h5>CONOCE</h5>
            <h3>LOS DIVERSOS SERVICIOS</h3>
            <hr class="style1">
	    </div>
</div>
@endsection

@section('products')
<div class="producst_body autoplay ">
    @foreach($productos as $producto)
    <div class="wrapper">
        <div class="container">
            <img class="top"src="{{asset('/img/productos/'.$producto->image)}}" alt="{{$producto->image}}">
          <div class="bottom">
            <div class="left">
              <div class="details">
                <h2 class="txt_products">{{$producto->name}}</h2>
                <p>S/{{$producto->price}}</p>
              </div>
              <div class="buy text-center">
                <a href="{{route('product-details', $producto->slug)}}">
                    <i class="fas fa-eye"></i>
                </a>  
            </div>
            </div>
          </div>
        </div>
        <div class="inside">
          <div class="icon"><i class="fas fa-plus"></i></div>
          <div class="contents">
            <h1>{{$producto->extract}}</h1>
            <h5 style="color: white">{{$producto->descriptions}}</h5>
          </div>
        </div>
      </div>
    @endforeach 
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
                        <a href="https://instagram.com/ciutecnm?igshid=YmMyMTA2M2Y=" target="_blank">Gmail</a>
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
            <p>Todos los Derechos reservados by <a href="#" target="_blank">©CIUTecNM-2022</a></p>
        </div>
</footer>
@endsection
@section('title')
<div class="col-12">
		<div class="testimonial-title">
			<h5>CONOCE</h5>
            <h3>NUESTRAS CATEGORÍAS</h3>
            <hr class="style1">
	    </div>
</div>
@endsection
<!--MODALS-->
@section('modals')
<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="text-center modal-title" id="exampleModalCenterTitle">Descarga Nuestra App CIUTecNM</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="principalPagos">
                    <div id="contenedor" class="row_p">
                        <div id="naranja" class="">
                            <img class="popou_img"src="{{ asset('img/pagos.jpg')}}" alt="">
                        </div>       
                        <div id="verde" class="content_pagos"> 
                            <h2 class=" frm_pagos text-center">VALIDA TU IDENTIDAD, ¡NUESTRA APP ES GRATIS!</h2>
                <hr class="style3"> 

                <div id="price">
                    <!--price tab-->
                    <!-- end of price tab-->
                    <!--price tab-->
                    <div class="plan basic">
                      <div class="plan-inner">
                        <div class="entry-title">
                          <h3>App CIUTecNM</h3>
                          <div class="price"><i class="mt-3 fa-2x fas fa-mobile-alt"></i>
                          </div>
                        </div>
                        <div class="entry-content">
                          <ul>
                            <li><a href="{{asset('img/CIUTECNM.apk')}}"><font color="aqua"></li>
                            <li>Download</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!-- end of price tab-->
                    <!--price tab-->
                    <!-- end of price tab--> 
                </div>
                        </div>
                    </div>
                </div> 
            </div>
    </div>
</div>

<div class="modal fade bd-example-modal-xl2" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div id="contenedor" class="row_p">
            <div id="naranja" class="">
                <img class="popou_img"src="{{ asset('img/entrega.jpg')}}" alt="">
            </div>       
            <div id="verde" class="content_pagos"> 
                <h2 class=" frm_pagos text-center">ATENDIENDO SUS NECESIDADES</h2>  
                <hr class="style3">   
                <h5>Los diversos servicios que se ponen a su disposición están comprometidos a brindar la mejor de
                    sus atenciones en busca de ganar su confianza y afianzar su fidelidad a su producto-servicio.</h5>                    
            </div>
        </div>
    </div>
</div>

<div class="modal fade modal fade bd-example-modal-x3" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="text-center modal-title" id="exampleModalCenterTitle">OFERTAS DEL DÍA</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="principal">
                @foreach($ofertas as $oferta)
                <div id="contenedor" class="row_p">
                    <div id="naranja" class="">
                        <img class="popou_img"src="{{asset('/img/ofertas/'.$oferta->image)}}" alt="{{$oferta->image}}">
                    </div>       
                    <div id="verde" class="content_pagos"> 
                        <strong><h2 class=" frm_pagos text-center">{{$oferta->titulo}}</h2></strong>  
                        <br>    
                        <h4>{{$oferta->texto}}</h4>  
                        <button type="button" class="btnwssp btn btn-outline-success btn-lg">
                            <a target="none" href="https://wa.me/5619918278?text=Hola%2CEstoy+interesad%40+en+unirme+a+CIUTecNM">
                               Preguntar
                            </a>
                        </button> 
                    </div>
                </div>
                @endforeach  
            </div> 
        </div>
    </div>
    <div class='icon-scroll'></div> 
    <h6 style="color: white" class="text-center">Si hay más promociones por favor siga bajando</h6>     
</div>
@endsection
