FROM nginx

RUN apt-get update

RUN apt-get install -y nano curl git lsof

RUN apt-get install -y php7.0-fpm

RUN apt-get install -y php-curl php-mbstring php-bcmath php-xml php-pgsql php-mysql php-memcached php-calendar 

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

ENV TZ=Asia/Kolkata
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone
