# Tueste Norte

Tueste Norte es una página web educativa sobre una cafetería de especialidad. El proyecto se ha desarrollado durante la primera semana de prácticas para trabajar con HTML, CSS, JavaScript, PHP, XAMPP y Git.

## Tecnologías utilizadas

- HTML5 para la estructura de las páginas.
- CSS3 para el diseño.
- JavaScript para la interacción y el conversor de precios.
- PHP para recibir, validar y mostrar datos enviados desde formularios.
- Git y GitHub para el control de versiones.

## Funcionalidades

- Página principal de Tueste Norte.
- Catálogo de cafés presentado mediante tarjetas.
- Información de las catas que puede mostrarse y ocultarse.
- Formulario de contacto con validación.
- Ficha de cata de un café.
- Conversor del precio de un paquete de 250 g al precio por kilo.
- Formulario de inscripción a una cata con validación en PHP.
- Protección de los datos mostrados mediante `htmlspecialchars()`.

## Requisitos

- Tener XAMPP instalado.
- Utilizar un navegador web.
- No es necesario iniciar MySQL para probar este proyecto.

## Instalación y ejecución con XAMPP

1. Descargar o clonar este repositorio.
2. Asegurarse de que la carpeta del proyecto se llama `tueste-norte`.
3. Copiar la carpeta completa dentro de:

   ```text
   C:\xampp\htdocs
   ```

4. Abrir el panel de control de XAMPP.
5. Pulsar `Start` en el módulo Apache.
6. Esperar hasta que Apache aparezca en verde.
7. Abrir en el navegador:

   `http://localhost/tueste-norte/`

## Páginas disponibles

- Página principal:

  `http://localhost/tueste-norte/`

- Ficha de cata:

  `http://localhost/tueste-norte/ficha-cata.html`

- Conversor de precios:

  `http://localhost/tueste-norte/conversor.html`

- Inscripción a la próxima cata:

  `http://localhost/tueste-norte/cata.html`

## Cómo probar el formulario de contacto

1. Abrir la página principal.
2. Ir hasta el formulario de contacto.
3. Rellenar sus campos.
4. Enviar el formulario.
5. Comprobar que PHP muestra el resultado correspondiente.

## Cómo probar el conversor

1. Abrir `conversor.html`.
2. Introducir el precio de un paquete de 250 g.
3. Pulsar el botón `Calcular` o la tecla `Enter`.
4. Comprobar que aparece el precio por kilo con dos decimales.
5. Probar también dejando el campo vacío o introduciendo un valor menor o igual que cero.

## Cómo probar la inscripción a la cata

1. Abrir `cata.html`.
2. Introducir un nombre.
3. Seleccionar entre 1 y 4 plazas.
4. Pulsar `Reservar plaza`.
5. Comprobar que aparece el mensaje de reserva confirmada.
6. Para probar la validación de PHP, retirar temporalmente los atributos `required`, `min` o `max` desde DevTools y enviar datos incorrectos.
7. Comprobar que PHP muestra los errores en una lista y permite volver al formulario.

## Estado del proyecto

Proyecto educativo realizado durante la primera semana de prácticas.

## Autor

Miguel Ángel Pérez Rodríguez