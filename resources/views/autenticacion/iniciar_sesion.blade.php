       <!-- iniciar secion -->
       <div class="container-form " id="login-container">
        <form action="" class="formulario" >
            <i class='bx bx-exit salir' id="exit_login"></i>
        <img src="{{asset('img/logo_recip.png')}}" alt="logo Recip-nl" class="formulario__logo">
            <h2 class="create-account">Iniciar Sesión</h2>
            <div class="formulario__iconos">
            <div class="iconos__red-social">
               <a href="https://www.instagram.com/accounts/login/" target="_blank" id="cuenta_link"> 
                   <img src="{{asset('img/iconos/Instagram_logo.webp')}}" alt="" width="50px">
                </a>
            </div>
                <div class="iconos__red-social">
                    <a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwjfy7KZ4cz9AhURSDABHaaSAkUQFnoECAgQAQ&url=https%3A%2F%2Faccounts.google.com%2F&usg=AOvVaw33vbO0yD5ue-bN0tdaehNC" target="_blank" id="cuenta_link">
                        <img src="{{asset('img/iconos/google_logo.png')}}" alt="" width="50px">
                    </a>
                </div>
           
            <div class="iconos__red-social">
                <a href="https://es-la.facebook.com/" target="_blank" id="cuenta_link">
                    <img src="{{asset('img/iconos/Facebook_logo.webp')}}" alt="" width="50px">
                </a>
            </div>
        </div>
            <a href="#" id="cuenta_link"><p class="cuenta-gratis">¿aun no tienes una cuenta?</p></a>
            <input class="formulario__input" type="email" name="usuario" id="usuario" placeholder="Ingresa tu Email">
            <input class="formulario__input" type="password" name="contraseña" id="contraseña" placeholder=" Ingresa Contraseña">
            <input type="button" value="Iniciar Sesion"> 
            {{-- <button type="submit" class="btn btn-danger">Iniciar Sesión</button> --}}
        </form>
    </div>