<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="login.css" media="screen">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
</head>
<style>
    .background_style{
        display: flex;
        background-color: #e5e5e5;
        height: 850px;
        width: 100%;
        align-items: center;
        justify-content: center;
    }

    html, body{
        margin:0px; 
    }

    .login_image_icon{
        padding-top: 45px;
        height: 175px;
        width: 155px;
    }

    .login_image_icon_2{
        height: 145px;
        width: 125px;
        padding-right: 80px;
    }

    .white_box{
        display: flexbox;
        background-color: white;
        height: 85%;
        width: 30%;
        border-radius: 85px;
        justify-content: center;
    }

    .footer_style{
        display: flex;
        justify-content: center;
        padding: 0px;
        margin: 35px;
    }


    .format_login{
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .spacement{
        display: flex;
        justify-content: center;
        padding-top: 10%;
        width: 100%;
    }

    .spacement_register{
        display: flex;
        justify-content: space-around;
        padding-top: 10%;
        width: 100%;
        font-family: 'Open Sans',sans-serif;
        font-size: 120%;
    }

    a{
        color: #111111;
        text-decoration: underline;
    }


    .input_boxes{
        width: 80%;
    }

    input[type=text]{
        background-color: #f2f2f2;
        color:#111111;
        border: none;
        padding: 20px 12px;
        width: 100%;
        font-family: 'Open Sans',sans-serif;
        font-size: 100%;
    }

    input[type=password]{
        background-color: #f2f2f2;
        color:#111111;
        border: none;
        padding: 20px 12px;
        width: 100%;
        font-family: 'Open Sans',sans-serif;
        font-size: 100%;
    }

    input[type=submit]{
        background-color: #111111;
        color: whitesmoke;
        padding: 15px 15px;
        width: 45%;
        font-family: 'Open Sans',sans-serif;
        font-size: 100%;
        cursor: pointer;
        border-radius: 5px;
        text-align: center;
        user-select: none;
    }

    input[type=submit]:hover{
        background-color: dimgray;
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
    <section class="background_style">
        <div class="white_box">
            <div class="format_login">
                <img class="login_image_icon" src="images/logoColor2.png" alt="logoColor2">
            </div>
            <div class="format_login"><h2>Iniciar sesion</h2></div>
            <div class="format_login">

                <form class="input_boxes" action="{{ route('verificar') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="spacement"><input class="" type="text" placeholder="Correo" name="correo"></div>
                    <div class="spacement"><input class="" type="password" placeholder="Contrase??a" name="password"></div>
                    <div class="spacement"><input type="submit" value="Enviar"></div>

                    <div class="spacement_register">
                        <a href="{{ route('crearUsuario') }}">registro Usuario</a> 
                        <a href="{{ route('crearDue??o') }}">registro Due??o</a>
                    </div>
                </form>
            </div>
            
        </div>
    </section>

    <div class="margin"></div>

        <footer class="footer_style">
        <div><img class="login_image_icon_2" src="images/logoColor2.png" alt="logoColor2"></div>
        <div class="input_boxes">
            <table>
                <tr>
                    <th>PRINCIPAL</th>
                    <th>POL??TICAS</th>
                    <th>CATEGOR??AS</th>
                </tr>
                <tr>
                    <td>Acerca de nosotros</td>
                    <td>T??rminos de uso</td>
                    <td>Promociones</td>
                </tr>
                <tr>
                    <td>Cont??ctenos</td>
                    <td>Pol??ticas de privacidad</td>
                    <td>C??mputo (Hardware)</td>
                </tr>
                <tr>
                    <td>Promociones</td>
                    <td>Pol??tica de devoluciones</td>
                    <td>Computadoras</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Audio y V??deo</td>
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