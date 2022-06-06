<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>productos</title>
    <link rel="stylesheet" href="productos_style.css" media="screen">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<style>
    .header_style{
        display:flex;
        padding: 10px;
        margin: 0px;
    }

    html, body{
        margin:0px; 
    }

    .header_image_icon{
        display: flex;
        height: 80px;
        width: 80px;
        align-self: flex-start;
    }

    .space_header{
        padding-left: 25px;
        padding-right: 70%;
    }

    .adjust_menu{
        display: flex;
        padding-top: 10px;
        padding-right: 15px;
        align-items: center;
    }

    a{
        text-align: center;
        font-size: 150%;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        text-decoration: none;
        color: black;
    }

    .header_color{
        background-color: #fda65d;
        width: 100%;
        height: 20px;
    }

    .min_icon{
        height: 25px;
        width: 25px;
        padding-right: 10px;
    }

    .slide {
        position: relative;
        box-shadow: 0px 1px 6px rgba(0, 0, 0, 0.64);
        margin-top: 0px;
    }

    .slide-inner {
        position: relative;
        overflow: hidden;
        width: 100%;
        height: 450px;
    }

    .slide-open:checked + .slide-item {
        position: static;
        opacity: 100;
    }

    .slide-item {
        position: absolute;
        opacity: 0;
        -webkit-transition: opacity 0.6s ease-out;
        transition: opacity 0.6s ease-out;
    }

    .slide-item img {
        display: block;
        height: auto;
        max-width: 100%;
    }

    .slide-control {
        background: rgba(0, 0, 0, 0.28);
        border-radius: 50%;
        color: #fff;
        cursor: pointer;
        display: none;
        font-size: 40px;
        height: 40px;
        line-height: 35px;
        position: absolute;
        top: 50%;
        -webkit-transform: translate(0, -50%);
        cursor: pointer;
        -ms-transform: translate(0, -50%);
        transform: translate(0, -50%);
        text-align: center;
        width: 40px;
        z-index: 10;
    }

    .slide-control.prev {
        left: 2%;
    }

    .slide-control.next {
        right: 2%;
    }

    .slide-control:hover {
        background: rgba(0, 0, 0, 0.8);
        color: #aaaaaa;
    }

    #slide-1:checked ~ .control-1,
    #slide-2:checked ~ .control-2,
    #slide-3:checked ~ .control-3 {
        display: block;
    }

    .slide-indicador {
        list-style: none;
        margin: 0;
        padding: 0;
        position: absolute;
        bottom: 2%;
        left: 0;
        right: 0;
        text-align: center;
        z-index: 10;
    }

    .slide-indicador li {
        display: inline-block;
        margin: 0 5px;
    }

    .slide-circulo {
        color: #828282;
        cursor: pointer;
        display: block;
        font-size: 35px;
    }

    .slide-circulo:hover {
        color: #aaaaaa;
    }

    #slide-1:checked ~ .control-1 ~ .slide-indicador 
        li:nth-child(1) .slide-circulo,
    #slide-2:checked ~ .control-2 ~ .slide-indicador 
        li:nth-child(2) .slide-circulo,
    #slide-3:checked ~ .control-3 ~ .slide-indicador 
        li:nth-child(3) .slide-circulo {
        color: #428bca;
    }

    #titulo {
        width: 100%;
        position: absolute;
        padding: 0px;
        margin: 0px auto;
        text-align: center;
        font-size: 27px;
        color: rgba(255, 255, 255, 1);
        font-family: 'Open Sans', sans-serif;
        z-index: 9999;
        text-shadow: 0px 1px 2px rgba(0, 0, 0, 0.33), 
            -1px 0px 2px rgba(255, 255, 255, 0);
    }

    h1{
        padding-left: 8%;
        padding-top: 50px;
        font-family: 'Open Sans', sans-serif;
    }

    .locals{
        display: flex;
        flex-direction: column;
        justify-content: center;
        margin-right: 35px;
        width: 100%;
        border:5px solid black;
    }

    .locals_style{
        display:flex;
        justify-content: space-around;
        padding: 80px;
        margin: 60px;
        margin-top: 0px;
        margin-bottom: 10px;
        padding-top: 10px;
        padding-bottom: 10px;
    }

    .locals{
        font-family: 'Open Sans', sans-serif;
        margin: 10px;
        margin-top: 0px;
        margin-bottom: 0px;
    }

    .order_size{
        height: 100%;
        width: 100%;
    }

    .order_1{
        display: flex;
        justify-content: flex-start;
        font-size: 35px;
        margin-top: 0px;
        margin-bottom: 0px;
    }

    .order_2{ 
        display: flex-start;
        justify-content: flex-end;
        text-align: end;
        font-size: 20px;
        margin-top: 0px;
        margin-bottom: 0px;
    }

    .footer_style{
        display: flex;
        justify-content: center;
        padding: 0px;
        margin: 35px;
    }

    .login_image_icon_2{
        height: 145px;
        width: 125px;
        padding-right: 80px;
    }
    .input_boxes{
        width: 80%;
    }


    table{
        width: 100%;
    }


    td,th{
        padding-top: 10px;
        padding-right: 10px;
        font-family: 'Open Sans',sans-serif;
        text-align: left;
    }

    .copyrigth{
        background-color: #fda65d;
        display: flex;
        padding: 0px;
        margin: 0px;
        height: 65px;
        font-family: 'Open Sans',sans-serif;
        font-size: 20px;
        justify-content: space-between;
    }

    .margin{
        width: 100%;
        height: 1px;
        background-color: black;
    }

    .tabla_productos{
        width: 100%;
        height: 800px;
    }
</style>
<body>
    <header>
        <div class="header_style">
            <div class="space_header"><img class="header_image_icon" src="images/logoColor2.png" alt="logoColor2"></div>
            <div class="adjust_menu"><a href="{{ route('verPedidos',$id) }}"><i class="material-symbols-outlined" style="font-size:36px">file_open</i> pedidos</a></div>
            <div class="adjust_menu"><a href="{{ route('inicio',$id) }}"><i href="homepage.html" class="material-icons" style="font-size:36px">home</i> home</a></div>
            <div class="adjust_menu"><a href="{{ route('carrito',$id) }}"><i class="material-icons" style="font-size:36px">add_shopping_cart</i> carrito</a></div>
            <div class="adjust_menu"><a href="{{ route('loginUser') }}"><i class="material-icons" style="font-size:36px">account_box</i> salir</a></div>
        </div>
        <div class="margin"></div>
        <div class="header_color"></div>
        <div class="margin"></div>
    </header>
    
<!--OFERTAS-->
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">OFERTAS</h5>
          <p class="card-text">Laptop Game + Mouse 15% Descuento</p>
        </div>
    </div>

    <div class="tabla_productos">
        <div><h1>Productos de {{$negocio->nombre}}</h1></div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Precio</th>
                <th scope="col">Cantidad</th>
              </tr>
            </thead>
            @foreach ($productos as $producto)
                <form method="POST" action="{{ route('guardarProducto',[$producto->id,$id,$negocio->id]) }}">    
                    @csrf
                    <tbody>
                        <tr>
                            <input type="hidden" name="id_producto" value="{{$producto->id}}">
                            <th scope="row"><input class="" type="text" value="{{$producto->nombre}}" name="nombre" readonly></th>
                            <th scope="row"><input class="" type="text" value="{{$producto->descripcion}}" name="descripcion" readonly></th>
                            <th scope="row"><input class="" type="text" value="{{$producto->precio}}" name="precio" readonly></th>
                            <td>
                                <div class="form-group col-md-4">
                                    <select name="cantidad">
                                    @for ($i=1; $producto->cantidad >= $i ; $i++)
                                        <option>{{$i}}</option>
                                    @endfor
                                    </select>
                                </div>
                            </td>
                            <td><input type="submit" value="Agregar al carrito"></td>
                        </tr>
                    </tbody>
                </form>
            @endforeach
          </table>

        
    </div>

    <div class="margin"></div>
    <footer class="footer_style">
        <div><img class="login_image_icon_2" src="images/logoColor2.png" alt=""></div>
        <div class="input_boxes">
            <table>
                <tr>
                    <th>PRINCIPAL</th>
                    <th>POLÍTICAS</th>
                    <th>CATEGORÍAS</th>
                </tr>
                <tr>
                    <td>Acerca de nosotros</td>
                    <td>Términos de uso</td>
                    <td>Promociones</td>
                </tr>
                <tr>
                    <td>Contáctenos</td>
                    <td>Políticas de privacidad</td>
                    <td>Cómputo (Hardware)</td>
                </tr>
                <tr>
                    <td>Promociones</td>
                    <td>Política de devoluciones</td>
                    <td>Computadoras</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Audio y Vídeo</td>
                </tr>
            </table>
        </div>
    </footer>
    <div class="margin"></div>
    <div class="copyrigth">
        <div style="padding-left: 65px;"><p>2022. Todos los derechos reservados</p></div>
        <div style="padding-right: 65px;"><p>imagenes bonitas</p></div>
    </div>
</body>
</html>