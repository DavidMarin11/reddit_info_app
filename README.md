#Paso 1:
##Clona el proyecto y asegúrate de tener instalados los siguientes componentes: XAMPP, PHP, Composer y Laravel 8.

#Paso 2:
##Instala las dependencias del proyecto ejecutando el siguiente comando: composer install

#Paso 3:
##Inicia XAMPP y asegúrate de que los servicios de MySQL y Apache estén corriendo.

#Paso 4:
##Crea una base de datos llamada reddit_info. Una vez creada, configura la conexión a la base de datos en el archivo .env del proyecto.

#Paso 5:
##Levanta el proyecto ejecutando el siguiente comando en la termina: php artisan serve

#Paso 6:
##Ejecuta las migraciones para crear las tablas necesarias en la base de datos con el comando: php artisan migrate

#Paso 7:
##Utiliza Postman para consumir la API que poblará la base de datos. La URL de la API es la siguiente (ajústala según el entorno): http://127.0.0.1:8000/api/register_reddit_data

#Paso 8:
##Desde Postman, puedes consumir las siguientes APIs:

##Para obtener la lista de todos los reddits creados previamente: http://127.0.0.1:8000/api/get_all_reddits

##Para obtener los detalles de un reddit específico por su ID:http://127.0.0.1:8000/api/get_reddit/2
##(Reemplaza {id} por el ID del reddit que desees consultar.)

##Tambien desde el front obtenemos la misma informacion.

