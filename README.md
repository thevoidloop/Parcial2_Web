# Proyecto CRUD de Productos de Ferretería

Este proyecto, desarrollado utilizando Laravel 10, facilita la gestión de un inventario de productos de ferretería a través de una interfaz CRUD (Crear, Leer, Actualizar, Eliminar), junto con una barra de búsqueda para encontrar productos específicos.

## Características

- **CRUD Completo**: Facilita la administración de productos con funcionalidades de crear, leer, actualizar y eliminar productos.
- **Barra de búsqueda**: Permite a los usuarios buscar productos específicos en la base de datos.

## Requisitos

- PHP >= 7.3
- Composer
- Node.js & NPM
- MySQL

## Instalación

1. **Clona el repositorio**

`git clone https://github.com/thevoidloop/Parcial2_Web.git`

2. **Instala las dependencias**

`composer install`
`npm install`

3. **Configura el entorno**

Copia el archivo `.env.example` a un nuevo archivo llamado `.env` y configura las variables de entorno, incluyendo la conexión a la base de datos.

`cp .env.example .env`

4. **Genera la llave de la aplicación**

`php artisan key:generate`


5. **Ejecuta las migraciones y seeders**

Esto creará las tablas necesarias en tu base de datos y llenará la base de datos con algunos datos iniciales.

`php artisan migrate --seed`


## Uso

Para iniciar el servidor de desarrollo, ejecuta:

`php artisan serve`


Ahora puedes abrir tu navegador y visitar `http://127.0.0.1:8000` para ver la aplicación en funcionamiento.

## Contribuciones

Las contribuciones son bienvenidas. Por favor, abre una issue o realiza un pull request para cualquier contribución.

