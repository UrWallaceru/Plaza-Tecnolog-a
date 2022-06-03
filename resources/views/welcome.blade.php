<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

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
            padding-right: 45px;
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
            width: 40%;
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
    </style>
    <body>
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>

        <header>
            <div class="header_style">
                <div class="space_header"><img class="header_image_icon" src="images/logoColor2.png" alt="logoColor2"></div>
                <div class="adjust_menu"><a href="homepage.html"><i href="homepage.html" class="material-icons" style="font-size:36px">home</i> home</a></div>
                <div class="adjust_menu"><a href="cart.html"><i class="material-icons" style="font-size:36px">add_shopping_cart</i> carrito</a></div>
                <div class="adjust_menu"><a href="login.html"><i class="material-icons" style="font-size:36px">account_box</i> salir</a></div>
            </div>
            <div class="margin"></div>
            <div class="header_color"></div>
            <div class="margin"></div>
        </header>

        <div class="slide">
            <div class="slide-inner">
                <input class="slide-open" type="radio" id="slide-1" 
                      name="slide" aria-hidden="true" hidden="" checked="checked">
                <div class="slide-item">
                    <img src="images/image1.jpg" style="height:500px">
                </div>
                <input class="slide-open" type="radio" id="slide-2" 
                      name="slide" aria-hidden="true" hidden="">
                <div class="slide-item">
                    <img src="images/Image2.jpg" style="height: 500px; width: 2000px;">
                </div>
                <input class="slide-open" type="radio" id="slide-3" 
                      name="slide" aria-hidden="true" hidden="">
                <div class="slide-item">
                    <img src="images/Image3.png" style="height: 500px; width: 2000px;">
                </div>
                <label for="slide-3" class="slide-control prev control-1">‹</label>
                <label for="slide-2" class="slide-control next control-1">›</label>
                <label for="slide-1" class="slide-control prev control-2">‹</label>
                <label for="slide-3" class="slide-control next control-2">›</label>
                <label for="slide-2" class="slide-control prev control-3">‹</label>
                <label for="slide-1" class="slide-control next control-3">›</label>
                <ol class="slide-indicador">
                    <li>
                        <label for="slide-1" class="slide-circulo">•</label>
                    </li>
                    <li>
                        <label for="slide-2" class="slide-circulo">•</label>
                    </li>
                    <li>
                        <label for="slide-3" class="slide-circulo">•</label>
                    </li>
                </ol>
            </div>
        </div>
        <section>
            <div><h1>Locales</h1></div>
            @foreach($negocios as $negocio)
            <div class="row">
                <div class="locals_style">
                        <div class="col-md-2">
                            <div class="locals">
                                <a href="#{{$negocio->id}}"><img src="images/local.jpg" style="height: 90%; width: 90%;" alt=""></a>
                                <div><p class="order_1">{{$negocio->nombre}}</p></div>
                                <div><p class="order_2">{{$negocio->numLocal}}</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            
        </section>
    
        <div class="margin"></div>
        <footer class="footer_style">
            <div><img class="login_image_icon_2" src="images/logoColor2.png" alt="logoColor2"></div>
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
