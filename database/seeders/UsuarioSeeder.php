<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $usuario = new Usuario();
        $usuario->Nombre = 'Johan Chate';
        $usuario->fecha_nacimiento = '2005-06-12'; 
        $usuario->correo = 'soytcljohant@gmail.com';
        $usuario->genero = 'masculino';
        $usuario->password = bcrypt('tcl88');
        $usuario->save();
        Usuario::factory(10)->create();

        
    }
}
