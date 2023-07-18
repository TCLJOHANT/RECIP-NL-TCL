mostrar lista de empleados
<table class="table table-light">
   {{-- name columnas base de datos --}}
    <thead class="thead-light">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>fecha_nacimiento</th>
            <th>correo</th>
            <th>Genero</th>
            <th>contraseña</th>
            <th>Acciones</th>     
         </tr>
    </thead>
   {{-- desplefue de informacion base de datos --}}
    <tbody>
        <!--uso la variable proporcionada por el controlador en el metod index-->
        <!--utilizo un for para imprimir la informacion-->
        @foreach ($usuarios as $usuario)
        <tr>
            <td>{{$usuario->id}}</td>
            <td>{{$usuario->Nombre}}</td>
            <td>{{$usuario->fecha_nacimiento}}</td>
            <td>{{$usuario->correo}}</td>
            <td>{{$usuario->genero}}</td>
            <td>{{$usuario->contraseña}}</td>
            <td>Editar
                <form action="{{url('/usuario/'.$usuario->id)}}" onclick="return confirm ('¿Quieres borrar?')" method="POST">
                    @csrf <!--llave o token-->
                    {{method_field('DELETE')}} <!--ENVIAR POR METHODO DELETE-->  
                    <input type="submit" value="Borrar">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>