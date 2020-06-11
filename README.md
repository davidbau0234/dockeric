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
