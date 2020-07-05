# dockeric
Docker integración continua
primera versión
presentado por:

German David Bautista Montaña cod: 171102765

Angie Paola Narvaez Paez Cod: 1921982589

Karol Viviana Andrade Sanchez Código: 1721023616

Zaidy Yuliet  Rincon Manrique Cod: 1721980949


 
pasos para correr los contenedores en una terminal:
en una terminal dentro de la carpeta del proyecto correr
docker-compose -f docker/docker-compose.yml up -d 

si estoy dentro de la carpeta docker, es decir en la misma carpeta donde esta el archivo docker-compose.yml puedo correr:
docker-compose up

para verificar que contenedores estan corriendo:
docker ps

para verificar que contenedores estan corriendo y los detenidos:
docker ps -a

para detener el contenedor en una terminal:
docker-compose down

para detener un contenedor:
docker stop nombre_contenedor

para eliminar un contenedor:
docker rm nombre_contenedor

nota: para navegar dentro de los directorios:
para cambiar de directorio:
cd nombre_directorio

para listar los archivos y carpetas:
ls

para saber en que carpeta estoy ubicado:
pwd

para conectarse los contenedores en windows se debe usar la ip 192.168.99.100

para entrar al contenedor:
docker exec -it docker_bd_1 /bin/bash

para arrancar el contenedor jenkins con un volumen para que las configuraciones que se realizen persistan debemos usar el siguiente comando:
docker run -p 8080:8080 -p 50000:50000 -v jenkins_home:/var/jenkins_home jenkins/jenkins

comando para construir imagen jenkins:
docker-compose build

comando para arrancar elcontenedor con jenkins:
docker-compose up –d

comando para obtener la contraseña del usuario admin de jenkins:
docker exec -it jenkins_master_1 cat /var/jenkins_home/secrets/initialAdminPassword