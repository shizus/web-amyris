# web-amyris

## Correr localhost
Basadado en el tutorial de https://writing.pupius.co.uk/apache-and-php-on-docker-44faef716150
Dejé listo un Docker file para que corra un apache localmente en el puerto 8080 con los comandos:
> docker build -t mysite .
> docker run -p 8080:80 -d -v /usr/sitio:/var/www/site mysite

Donde /usr/sitio es la dirección asboluta al directorio que contiene el código del sitio y mysite es el nombre de la imagen de docker creada a partir del Dockerfile
