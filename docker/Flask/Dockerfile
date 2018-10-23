FROM python:3

RUN apt-get update

RUN apt-get -y install python3-pip python3-dev

RUN pip3 install flask mysqlclient

ENV TZ=Asia/Kolkata
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone
