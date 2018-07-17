# Docker Complete LEMP Stack 


## Introduction
* I have created this project so that it can be used for running PHP projects without using any third party softwares like XAMPP or Wampp Servers/Softwares.
* The nice thing about this project is that you can easily work on multiple projects on your machine, each one having different dependencies without them clashing.
* The docker files consists of containers of Nginx Server(with PHP modules alredy setup), MYSQL Server and a Phpmyadmin Server thereby completeing a whole LEMP Stack. All these containers are in CentOS and Debian based Operating System.

## Usage

1. Just place your PHP project/s in root folder and my docker configurations will automatically mount your project files to their respective containers.

2. Run Command in root dir ```docker-compose up``` and you are good to go...

### Demo Project

I have added a demo php project. To test it, run the above command and then hit the url ```http://localhost/Demo/index.php``` 

## Default Running Ports

* NGINX: ```80```
* PHP: ```9000```
* MYSQL: ```3306```
* PHPMYADMIN: ```8080```

## Configs

* Nginx configs are in ```./docker/nginx/``` folder
* PHP configs are in ```./docker/php/``` folder

## Logs

* Nginx Logs are in ```./docker/logs/``` folder

### Note

* Host for MYSQL server is ```docker_mysql:3306``` (You can change them accordingly)
* Make Sure above mentioned ports are not already used. If yes, then either free that port or change the port in docker-compose.yml file
