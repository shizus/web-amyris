# web-amyris

## Correr localhost
Basadado en el tutorial de https://writing.pupius.co.uk/apache-and-php-on-docker-44faef716150
Dejé listo un Docker file para que corra un apache localmente en el puerto 8080 con los comandos:
> docker build -t mysite .
> docker run -p 8080:80 -d -v /usr/sitio:/var/www/site mysite

Donde /usr/sitio es la dirección asboluta al directorio que contiene el código del sitio y mysite es el nombre de la 
imagen de docker creada a partir del Dockerfile

# Uso de git en windows

- Abrimos el programa git bash que se instaló cuando instalamos git
- vamos a la carpeta /d/xampp/htdocs donde está apuntando el xampp (porque los proyectos que pongamos ahí los podemos 
ver en localhost)
- Con el comando:
> git clone <url del repo>
Traemos el proyecto de git
- Una ve traído, vamos a tener el proyecto disponible en localhost/web-amyris (porque así se llamaba el respositorio)
En este caso en particular, la raíz del proyecto no tiene index, hay que ir /sitio para ver la web.

Ahora queremos empezar a trabajar así que creamos un branch.

> git checkout -b <nombre del branch>

Con git checkout indicamos que nos queremos mover a un branch, con -b indicamos que ese 
branch debe ser creado, y finalmente, indicamos el nombre del branch.

Ahora todo lo que hagamos *y guardemos* se va a marcar como un cambio siempre que trabajemos dentro de la carpeta del
 respositorio.

Se puede ver desde git bash (la primera que mostré, con línea de comandos) o desde git UI (la segunda)

## Para abrir git UI basta con hacer clic derecho en la carpeta de web-amyris y hacer click en "guit UI here"

## Para ver los cambios en git bash hay que hacer
>git status

Siempre que un cambio nos gusta, lo commiteamos, esto lo va a guardar localmente en nuestro repositorio, en nuestra máquina.
*Pero no le llega a los demás miembros del equipo*

Primero armamos el paquete con lo que queremos guardar en el commit
>git add README.md

Estamos agregando el README.md al paquete

>git commit -m "Algún comentario de lo que estoy guardando"

Luego, si hacemos git status vamos a ver que no nos aparece más como marcado el archivo que modificamos, porque ya lo
commiteamos.

Probemos con git UI. Funciona igual:
- Primero pasamos lo que queremos commitear a staged to commit
- Luego escribimos un comentario para el commit.

##Pusheando

Pushear comparte los cambios commiteados con nuestro equipo.

Primero debemos asegurarnos de no tener cambios pendientes de borrar o commitear, porque sino los cambios te acompañan
al otro branch.

Una vez que nos aseguramos que no hay nada que nos vaya a seguir, vamos a pasar al branch master.

> git checkout master

vamos a traer los cambios del branch al master

> git merge <nombre del branch>

Listo, ahora vamos a ver que los cambios vinieron con nosotros, *por elección nuestra*

En el medio, parados en el master, podemos modificar lo que nos parezca necesario antes de compartir con el equipo. 
*Pero no se aconseja,* en general hay que trabajar en el branch.

Ahora estamos por subir cambios para que los vean todos, pero antes tenemos que asegurarnos de que no se hicieron
cambios al proyecto mientras que estuviamos trabajando.

Para eso hacemos

> git pull

Si no hubo cambios, ya estamos listos para subir.

> git push

Nos pide usuario y contraseña y lo subimos sin problema.

Si hubo cambios el git pull va a mezclar lo que hicieron mis compañeros con lo que hice yo, en ese caso estoy 
obligado a probar la web otra vez para asegurarme de que no se rompió nada.