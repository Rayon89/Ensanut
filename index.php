<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="#" />
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">        
        <title>Inicio de Sesión - Tecnológico Nacional de México</title>
        <link rel="shortcut icon" href="dashboard/imgs/logo_ensanut.png" type="image/x-icon">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="login.css">
        <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">        
        <link rel="stylesheet" type="text/css" href="fuentes/iconic/css/material-design-iconic-font.min.css">
        <script src="js/menu.js"></script>
        <script src="js/lightbox.js"></script>
    </head>
    
    <body>
        <div class="container-login">
            <div class="wrap-login">
                <form class="login-form validate-form" id="formLogin" action="" method="post">
                    <span class="login-form-title">Bienvenido !</span>
            
                    <div class="wrap-input100" data-validate = "Usuario incorrecto">
                        <input class="input100" type="text" id="usuario" name="usuario" placeholder="Usuario:">
                        <span class="focus-efecto"></span>
                    </div>
                
                    <div class="wrap-input100" data-validate="Password incorrecto">
                        <input class="input100" type="password" id="password" name="password" placeholder="Password:">
                        <span class="focus-efecto"></span>
                    </div>
                
                    <div class="container-login-form-btn">
                        <div class="wrap-login-form-btn">
                            <div class="login-form-bgbtn"></div>
                            <button type="submit" name="submit" class="login-form-btn">Ingresar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>          
        
     <script src="jquery/jquery-3.3.1.min.js"></script>    
     <script src="bootstrap/js/bootstrap.min.js"></script>    
     <script src="popper/popper.min.js"></script>            
     <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>    
     <script src="login.js"></script>    
    </body>
</html>