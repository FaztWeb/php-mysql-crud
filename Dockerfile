FROM ubuntu 
RUN apt-get install -y software-properties-common
RUN add-apt-repository ppa:ondrej/php
RUN apt-get update 
RUN apt-get install -y apache2 
RUN apt-get install -y apache2-utils
RUN apt-install php8.0 libapache2-mod-php8.0
RUN apt clean 
COPY . /var/www/html/
ADD ports.conf /etc/apache2/
EXPOSE 80
RUN echo ServerName 127.0.0.1 >> /etc/apache2/apache2.conf
CMD ["apache2ctl", "-D", "FOREGROUND"]
