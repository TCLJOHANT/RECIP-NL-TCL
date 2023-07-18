formulario creacion de usuario
<!doctype html>
<html lang="es">

<head>
  <title>Inicio</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!--controla el ancho de la página dependiendo del dispositivo en el que se encuentre el usuario.-->
  <link rel="stylesheet" href="{{asset ('../resources/css/login_styles/form.css')}}">
  <link rel="shortcut icon" href="{{asset ('img/logo_recip.png')}}" type="image/x-icon"> 
  <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'> <!--iconos redes sociales-->
</head>

<body id="b">
    


    <div class="container-form ">
            <form  class="formulario" action="{{url('/usuario')}}" method="post" enctype="multipart/form-data">
                @csrf <!--identificador(llave de seguridad) -->
                <img src="{{asset ('img/logo_recip.png')}}" alt="logo Recip" class="logo">
                <h2 class="create-account">Crear Cuenta</h2>
                <div class="iconos">
                <div class="border-icon">
                   <a href="https://www.instagram.com/accounts/login/" target="_blank" id="cuenta_link"> 
                        <i class='bx bxl-instagram'></i>
                    </a>
                </div>
                    <div class="border-icon">
                        <a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwjfy7KZ4cz9AhURSDABHaaSAkUQFnoECAgQAQ&url=https%3A%2F%2Faccounts.google.com%2F&usg=AOvVaw33vbO0yD5ue-bN0tdaehNC" target="_blank" id="cuenta_link">
                            <i class='bx bxl-google' ></i>
                        </a>
                    </div>
                <div class="border-icon">
                    <a href="https://es-la.facebook.com/" target="_blank" id="cuenta_link">
                        <i class='bx bxl-facebook-circle' ></i>
                    </a>
                </div>
            </div>
                <a href="../login.html" id="cuenta_link"><p class="cuenta-gratis">¿ya tienes una cuenta?</p></a>
                <input type="text" name="Nombre" id="Nombre" placeholder="Ingresa tu Nombre">
                <label for="">Fecha de Nacimiento </label>
                <input type="date" name="fecha_nacimiento" id="fecha_nacimiento">
                <label for="">correo </label>
                <input type="email" name="correo" id="correo">
                <input type="text" placeholder="genero" name="Genero" id="Genero">
                <input type="password" name="contraseña" id="contraseña" placeholder=" Ingresa Contraseña">
                {{-- <input type="button" value="Crear cuenta">  --}}
                <button type="submit" class="btn btn-danger">Crear cuenta</button>
            </form>
        </div>
    </body>