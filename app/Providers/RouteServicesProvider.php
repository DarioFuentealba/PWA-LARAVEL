<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider{
    /**
     * Ruta a la que redirigir los usuarios después del login/registro.
     */
    public const HOME = '/dashboard'; // Cambialo por la ruta que desees

    public function boot(): void{
        $this->routes(function (){
            Route::middleware('web')
                ->group(base_path('routes/web.php'));

            Route::prefix('api')
                ->middleware('api')
                ->group(base_path('routes/api.php'));
        });
    }
}
