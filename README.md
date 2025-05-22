<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Ejercico 1- Instalación de Laravel. Definición de las rutas  
  
### Rutas del sitio web  
  
1.  Definir las rutas principales que va a tener nuestro sitio web.  
![Ejemplo](./images/imagenesReadme/1_01.png)  
  
2. Uso el comando de artisan que devuelve un listado de rutas para verificar que funciona:  
![Ejemplo](./images/imagenesReadme/1_02.png)  
  
3. Lo pruebo también en el navegador:  
![Ejemplo](./images/imagenesReadme/1_03.png)  
    
    
## Ejercico 2 - Layout principal de las vistas  
  
1. Crear las vistas asociadas a cada ruta.  
![Ejemplo](./images/imagenesReadme/2_01.png)  
![Ejemplo](./images/imagenesReadme/2_02.png)  
    
    
## Ejercico 3 - Controladores  
  
1. Añadir los siguientes dos controladores: CategoryController.php y HomeController.php, utilizando el comando de artisan.  
![Ejemplo](./images/imagenesReadme/3_01.png)  
![Ejemplo](./images/imagenesReadme/3_02.png)  
  
2. Así queda el web.php:  
![Ejemplo](./images/imagenesReadme/3_03.png)  
  
3. Acá importo los scripts CategoryController.php y HomeController.php.  
![Ejemplo](./images/imagenesReadme/3_04.png)  
  
4. El HomeController es diferente del CategoryController debido a que tiene 1 sola función llamada __invoke y esto hace que no sea necesario agregar el nombre de la función.  
![Ejemplo](./images/imagenesReadme/3_05.png)  
![Ejemplo](./images/imagenesReadme/3_06.png)  
  
    
## Ejercico 4.1 - Configuración de la base de datos y migraciones  
  
    
## Ejercico 4.2  
  
1. Comando de Artisan para crear el modelo llamado Post.  
![Ejemplo](./images/imagenesReadme/4-2_01.png)  
  
2. Crea el script Post.php en myblog/app/Models/Post.php
![Ejemplo](./images/imagenesReadme/4-2_02.png)  
  
3. ¿Qué hace este modelo?  
Laravel, por convención, asocia el modelo Post con la tabla posts en la base de datos.  
No es necesario indicar el nombre de la tabla si sigo la convención (modelo en singular, tabla en plural). Pero si quiero hacerlo explícito, puedo agregar dentro del modelo:  
![Ejemplo](./images/imagenesReadme/4-2_03.png)  
  
4. Si quiero indicar los campos asignables masivamente (por ejemplo, desde formularios), agrego la propiedad $fillable:  
![Ejemplo](./images/imagenesReadme/4-2_04.png)  
  Esto permite que pueda crear registros facilmente.  
![Ejemplo](./images/imagenesReadme/4-2_05.png)  
  
5. Quedaría así:  
![Ejemplo](./images/imagenesReadme/4-2_06.png)  
  
6. Yo lo dejo vacío.  
![Ejemplo](./images/imagenesReadme/4-2_07.png)  




