# Docker Complete LEMP Stack 


## Introduction
* I have created this project so that it can be used for running PHP projects without using any third party softwares like XAMPP or Wampp Servers/Softwares.
* The nice thing about this project is that you can easily work on multiple projects on your machine, each one having different dependencies without them clashing.
* The docker files consists of containers of Nginx Server(with PHP modules alredy setup), MYSQL Server and a Phpmyadmin Server thereby completing a whole LEMP Stack. All these containers are in CentOS and Debian based Operating System.
* It is capable of running Php, Flask, Django and Node applications.

## Installation

* Run install_docker.sh for install docker as well as docker-compose (if not installed)

## Usage

1. Adding Project in application:

* For PHP projects -> add your folder in ./PhpFiles root folder. 

* For Flask projects -> add your folder in ./FlaskFiles root folder.
 
* For Django projects -> add your folder in ./DjangoFiles root folder. 

* For Node projects -> add your folder in ./NodeFiles root folder. 

2. My docker configurations will automatically mount your project files to their respective containers.

3. Change Directory in ```docker``` folder.

4. Run Command in this dir ```docker-compose up``` or ```docker-compose up -d``` for background and you are good to go...

### Demo Projects

I have added a demo projects for all technologies. To test it, run the above commands and then hit these urls

* For PHP : ```http://localhost/Demo/index.php``` 
* For Flask : ```http://localhost:81``` 
* For Django : ```http://localhost:82``` 
* For Node : ```http://localhost:83``` 

## Default Running Ports

* NGINX: ```80```
* Flask Server: ```81```
* Django Server: ```82```
* Node Server: ```83```
* PHP: ```9000```
* MYSQL: ```3306```
* PHPMYADMIN: ```8080```

## Configs

* Nginx configs are in ```./docker/nginx/``` folder
* PHP configs are in ```./docker/php/``` folder

## Container Names

* docker_nginx
* docker_flask
* docker_django
* docker_node
* docker_mysql
* docker_phpmyadmin

## Logs

* Nginx Logs are in ```./docker/logs/``` folder
* other logs can be seen by running command ```docker logs container_name -f```

### Note

* Host for MYSQL server is ```docker_mysql:3306``` , default user and password are ```user_root``` for both (You can change them accordingly)
* Make Sure above mentioned ports are not already used. If yes, then either free that port or change the port in docker-compose.yml file

