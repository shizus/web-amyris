# web-amyris

## Correr localhost
Basadado en el tutorial de https://writing.pupius.co.uk/apache-and-php-on-docker-44faef716150
Dejé listo un Docker file para que corra un apache localmente en el puerto 8080 con los comandos:
> docker build -t mysite .
> docker run -p 8080:80 -d -v /usr/sitio:/var/www/site mysite

Donde /usr/sitio es la dirección asboluta al directorio que contiene el código del sitio y mysite es el nombre de la imagen de docker creada a partir del Dockerfile

# Uso de git en windows

- Abrimos el programa git bash que se instaló cuando instalamos git
- vamos a la carpeta /d/xampp/htdocs donde está apuntando el xampp (porque los proyectos que pongamos ahí los podemos ver en localhost)
- Con el comando:
> git clone <url del repo>
Traemos el proyecto de git
- Una ve traído, vamos a tener el proyecto disponible en localhost/web-amyris (porque así se llamaba el respositorio)
En este caso en particular, la raíz del proyecto no tiene index, hay que ir /sitio para ver la web.

Ahora queremos empezar a trabajar así que creamos un branch.

> git checkout -b <nombre del branch>

Con git checkout indicamos que nos queremos mover a un branch, con -b indicamos que ese 
branch debe ser creado, y finalmente, indicamos el nombre del branch.

Ahora todo lo que hagamos se va a marcar como un cambio siempre que trabajemos dentro de la carpeta del respositorio.