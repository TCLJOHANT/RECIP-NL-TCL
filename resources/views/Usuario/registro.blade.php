<link rel="stylesheet" href="{{ asset('css/estilos-RECIP/loguin.css')}}"> 
<link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'> 

<i class='bx bx-exit salir'></i>
<div class="container-vista-loguin" id="container-vista-loguin">
   
	<div class="form__contenedor crear-cuenta-contenedor">
		<form action="{{url(route('usuario.create'))}}" method="post">
            @csrf <!--identificador(llave de seguridad) -->
			<h1 class="form__titulo">Crear Cuenta</h1>
			<div class="social-container">
				<a href="#" class="social"><i class='bx bxl-facebook-circle'></i></a>
				<a href="#" class="social"><i class='bx bxl-google'></i></a>
				<a href="#" class="social"><i class='bx bxl-twitter' ></i></i></a>
			</div>
			<span>o use su correo electrónico para registrarse</span>
			<input type="text" name="nombre" id="nombre" placeholder="Nombre" />
			<input type="email" name="correo" id="correo" placeholder="Email" />
			<input type="password" name="password" id="password" placeholder="Contraseña" />
			<button type="submit">Crear Cuenta</button>
		</form>
	</div>
	<div class="form__contenedor iniciar-sesion-contenedor">
		<form action="#">
			<h1  class="form__titulo">Iniciar sesión</h1>
			<div class="social-container">
                <a href="#" class="social"><i class='bx bxl-facebook-circle'></i></a>
				<a href="#" class="social"><i class='bx bxl-google'></i></a>
				<a href="#" class="social"><i class='bx bxl-twitter' ></i></i></a>
			</div>
			<span>o usa tu cuenta</span>
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Contraseña" />
			<a href="#">¿Olvidaste tu contraseña?</a>
			<button>Iniciar sesión</button>
		</form>
	</div>

	<div class="bienvenida__contenedor">
		<div class="bienvenida">
			<div class="bienvenida__panel bienvenida-izquierda">
				<h1  class="titulo">¡Bienvenido de nuevo!</h1>
				<p class="bienvenida__panel__texto">Para mantenerse conectado con nosotros, inicie sesión con su información personal</p>
				<button class="ghost" id="signIn">Iniciar sesión</button>
			</div>
			<div class="bienvenida__panel bienvenida-derecha">
				<h1  class="titulo">Hola, Amig@!</h1>
				<p class="bienvenida__panel__texto">Ingresa tus datos personales y comienza tu viaje con nosotros</p>
				<button class="ghost" id="signUp">Crear Cuenta</button>
			</div>
		</div>
	</div>
</div>
<script>
       //loguin chimba
   const signUpButton = document.getElementById('signUp');
   const signInButton = document.getElementById('signIn');
   const container = document.getElementById('container-vista-loguin');
   
   signUpButton.addEventListener('click', () => {
     container.classList.add('derecha-panel-active');
   });
   
   signInButton.addEventListener('click', () => {
     container.classList.remove('derecha-panel-active');
   });
</script>