<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class AvatarSeeder extends Seeder{
    public function run(){
        $path = public_path('images/avatars');  //Carpeta con las imágenes
        $files = File::files($path); //Obtiene todos los archivos de la carpeta

        foreach ($files as $file){
            DB::table('avatar')->insert([
                'nombre' => pathinfo($file->getFilename(), PATHINFO_FILENAME), //nombre sin extensión
                'imagen' => file_get_contents($file->getRealPath()), //contenido binario de la imagen
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
