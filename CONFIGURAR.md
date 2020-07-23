PASOS A SEGUIR PARA CONFIGURAR BIEN ESTE PROYECTO

1) Descargar el proyecto, ya sea mediante .ZIP o clonandolo desde Git: 

	git clone https://github.com/ReneIsaias/ProyectoResidenciasProfesionales.git

2) Ahora abrimos la terminal y ejecutamos dentro del proyecto: 

	composer install

3) Compiamos el archivo : ".env.example" y lo pegamos con el nombre : ".env"  O tambien podemos ir a la ruta de ese proyecto y compiar y cambiarlo por ".env"

	cp .env.example .env

4) Debemos de generar una nueva llave para el proyecto, para ejecutamos el siguiente comando:

	php artisan key:generate

5) Configuramos la base de datos en el archivo ".env":

	DB_CONNECTION=mysql
	DB_HOST=127.0.0.1
	DB_PORT=3306
	DB_DATABASE=nombreDB
	DB_USERNAME=root
	DB_PASSWORD=password

6) Verificamos si la conexion esta correcta, para eso ejecutamos:

	php artisan migrate 

7) Ejecutamos este comando para instalar las depenciad necesarias de node:

	npm install

8) Ahora activamos algunas configuraciones con este comando:

	npm run dev

9) Ejecutamos los seeder para llenar con los datos necesarios algunas tablas:

	php artisan db:seed

10) Ejecutamos esta linea para vincular la carpeta public con storage:

	php artisan storage:link

11) Ahora debemos de pegar en la siguiente ruta la imagen por defecto a todos los usuario:

	/ProyectoResidenciasProfecionales/storage/app/public/user.png

la imagen se debe de llamar user y el formato debe ser .png, ya que es la imagen que cargara a todos los usuarios por defecto

13) Ahora creamos una cuenta en mailtrap.io y creamos un nuevo inbox:

	Se puede registrar con Google para mas facil

	Lo que importa es que obtengas el user_name y el password, para que los reemplazes en el archivo ".env":

	Esta es la estructura, solo tenemos que reemplazar los que tiene el asterisco(*) :

		MAIL_MAILER=smtp
		MAIL_HOST=smtp.mailtrap.io
		MAIL_PORT=2525
	*	MAIL_USERNAME=clave_del_user_name
	*	MAIL_PASSWORD=clave_del_password
		MAIL_ENCRYPTION=tls
		MAIL_FROM_ADDRESS=admin@admin.com
		MAIL_FROM_NAME="${APP_NAME}"

14) Necesitamos instalar phpOffice para los reportes, para eso ejecutamos :

	composer requiere phpoffice/phpword

20) Si todo esta bien, ahora solo que probarlo, para eso ejecutamos:

	php artisan r:l

y por ultimo :

	php artisan serve

21) Para probar en modo dios nos logeamos al sistema como Admin con las siguientes credenciales:

	email:
		
		admin@admin.com

	password:

		maquiabelico

Y supongo que ya debe de estar funcionda de la manera correcta el sistema de las residencias profecionales XD
