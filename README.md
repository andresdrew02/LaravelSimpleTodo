# LaravelSimpleTodo 📝✅

## Descripción

Bienvenido a **LaravelSimpleTodo** 🚀, una aplicación de gestión de tareas "Todos" creada por Andrés 👨‍💻. Esta aplicación está diseñada para ayudarte a mantener un registro de tus tareas pendientes de manera simple y eficiente. Utilizando una base de datos local **SQLite** 🗃️, podrás guardar tus tareas, marcarlas como completadas, editar su contenido, borrar tareas individuales o incluso eliminar todas las tareas de una vez.

## Características

- **Agregar Tarea:** Puedes agregar nuevas tareas a tu lista especificando su contenido.

- **Marcar como Completado:** Para mantener un seguimiento de tus logros, puedes marcar las tareas como completadas.

- **Editar Contenido:** Si necesitas hacer cambios en una tarea existente, la opción de edición te permitirá actualizar su contenido.

- **Borrar Tarea:** Si una tarea ya no es relevante, puedes borrarla de tu lista.

- **Detalle de Tarea:** Explora en detalle cualquier tarea para recordar su contenido y estado.

- **Borrar Todos:** Si deseas comenzar de nuevo, puedes borrar todas las tareas almacenadas en tu lista.

## Cómo Usar

1. Clona este repositorio en tu máquina local:

   ```bash
   git clone https://github.com/andresdrew02/LaravelSimpleTodo.git
   ```

2. Accede al directorio del proyecto:

   ```bash
   cd LaravelSimpleTodo
   ```

3. Instala las dependencias necesarias:

   ```bash
   composer install
   ```

4. Configura la base de datos SQLite en el archivo `.env`:

   ```
   DB_CONNECTION=sqlite
   DB_DATABASE=/ruta/a/la/carpeta/database.sqlite
   ```

5. Ejecuta las migraciones para crear las tablas de la base de datos:

   ```bash
   php artisan migrate
   ```

6. Inicia el servidor local:

   ```bash
   php artisan serve
   ```

7. Abre tu navegador y ve a `http://localhost:8000` para acceder a LaravelSimpleTodo.

## Contribuciones

¡Se agradecen las contribuciones para mejorar y expandir LaravelSimpleTodo! Si tienes ideas para nuevas características, mejoras de rendimiento o correcciones de errores, no dudes en abrir un problema o enviar una solicitud de extracción en el repositorio.

## Contacto

Si tienes alguna pregunta, comentario o sugerencia sobre LaravelSimpleTodo, no dudes en ponerte en contacto con el creador, Andrés, a través de su dirección de correo electrónico: pointed@parguelassinfronteras.com.

¡Esperamos que LaravelSimpleTodo te ayude a mantenerte organizado y productivo! 📝✅