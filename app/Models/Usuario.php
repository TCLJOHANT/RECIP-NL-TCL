<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash; //lo usè con el objetivo de encriptar contraseña usuario

class Usuario extends Model
{
    use HasFactory;
    //Por ejemplo, si tienes un formulario de actualización de contraseña en tu aplicación y el usuario ingresa una nueva contraseña, puedes utilizar este método para asegurarte de que la contraseña se almacene como un hash en la base de datos. 
    public function setContraseñaAttribute($value)
    {
        // $this->attributes['contraseña'] = Hash::make($value);

        // $hashedPassword = Hash::make($value);
        // $this->attributes['contraseña'] = $hashedPassword;
    }

    public static function create(array $attributes = [])
    {
        if (isset($attributes['contraseña'])) {
            $attributes['contraseña'] = Hash::make($attributes['contraseña']);
        }

        return parent::create($attributes);
    }
    //relación "hasMany" (tiene muchos) entre la clase Usuario y la clase Receta, indicando que usuario puede tener muchas recetas.
        public function recetas()
    {
        return $this->hasMany(Receta::class);
    }



    //metodo de login 

    // public function login(Request $request)
    // {
    //     $email = $request->input('email');
    //     $password = $request->input('password');

    //     // Obtener el usuario por su email
    //     $user = User::where('email', $email)->first();

    //     if (!$user) {
    //         // El usuario no existe
    //         return redirect()->back()->withErrors('El usuario no existe');
    //     }

    //     if (password_verify($password, $user->password)) {
    //         // Las contraseñas coinciden, el usuario está autenticado correctamente
    //         // Realizar las acciones necesarias (redirección, almacenamiento de datos de sesión, etc.)
    //         return redirect()->route('dashboard');
    //     } else {
    //         // Las contraseñas no coinciden
    //         return redirect()->back()->withErrors('La contraseña es incorrecta');
    //     }
    // }
}
