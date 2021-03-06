
## deployment tutorials

sudo apt update & upgrade
sudo apt install nginx

#check os board architechture

uname -m
x86_64

#install docker


## alternative install 
sudo apt install apt-transport-https ca-certificates curl software-properties-common
curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -
sudo add-apt-repository "deb [arch=amd64] https://download.docker.com/linux/ubuntu bionic test"
sudo apt update
sudo apt install docker-ce

## check docker installation in https://docs.docker.com/engine/install/ubuntu/


#Set up the repository


sudo apt-get update

sudo apt-get install \
    apt-transport-https \
    ca-certificates \
    curl \
    gnupg \
    lsb-release

curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo gpg --dearmor -o /usr/share/keyrings/docker-archive-keyring.gpg


#Install Docker Engine

sudo apt-get update

sudo apt-get install docker-ce docker-ce-cli containerd.io

apt-cache madison docker-ce


*/ select docker packages

    docker-ce | 5:20.10.7~3-0~ubuntu-focal | https://download.docker.com/linux/ubuntu focal/stable amd64 Packages
    docker-ce | 5:20.10.6~3-0~ubuntu-focal | https://download.docker.com/linux/ubuntu focal/stable amd64 Packages
    docker-ce | 5:20.10.5~3-0~ubuntu-focal | https://download.docker.com/linux/ubuntu focal/stable amd64 Packages
    docker-ce | 5:20.10.4~3-0~ubuntu-focal | https://download.docker.com/linux/ubuntu focal/stable amd64 Packages
    docker-ce | 5:20.10.3~3-0~ubuntu-focal | https://download.docker.com/linux/ubuntu focal/stable amd64 Packages
    docker-ce | 5:20.10.2~3-0~ubuntu-focal | https://download.docker.com/linux/ubuntu focal/stable amd64 Packages
    docker-ce | 5:20.10.1~3-0~ubuntu-focal | https://download.docker.com/linux/ubuntu focal/stable amd64 Packages
    docker-ce | 5:20.10.0~3-0~ubuntu-focal | https://download.docker.com/linux/ubuntu focal/stable amd64 Packages
    docker-ce | 5:19.03.15~3-0~ubuntu-focal | https://download.docker.com/linux/ubuntu focal/stable amd64 Packages
    docker-ce | 5:19.03.14~3-0~ubuntu-focal | https://download.docker.com/linux/ubuntu focal/stable amd64 Packages
    docker-ce | 5:19.03.13~3-0~ubuntu-focal | https://download.docker.com/linux/ubuntu focal/stable amd64 Packages
    docker-ce | 5:19.03.12~3-0~ubuntu-focal | https://download.docker.com/linux/ubuntu focal/stable amd64 Packages
    docker-ce | 5:19.03.11~3-0~ubuntu-focal | https://download.docker.com/linux/ubuntu focal/stable amd64 Packages
    docker-ce | 5:19.03.10~3-0~ubuntu-focal | https://download.docker.com/linux/ubuntu focal/stable amd64 Packages
    docker-ce | 5:19.03.9~3-0~ubuntu-focal | https://download.docker.com/linux/ubuntu focal/stable amd64 Packages

    sudo apt-get install docker-ce=<VERSION_STRING> docker-ce-cli=<VERSION_STRING> containerd.io
/*

#use latest

sudo apt-get install docker-ce=5:20.10.7~3-0~ubuntu-focal docker-ce-cli=5:20.10.7~3-0~ubuntu-focal containerd.io

# test

sudo docker run hello-world



## docker install ubuntu 20 

https://www.digitalocean.com/community/tutorials/how-to-install-and-use-docker-on-ubuntu-20-04

sudo apt update
sudo apt install apt-transport-https ca-certificates curl software-properties-common
curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -
sudo add-apt-repository "deb [arch=amd64] https://download.docker.com/linux/ubuntu focal stable"

apt-cache policy docker-ce

sudo apt install docker-ce

sudo systemctl status docker



# Install Compose on Linux systems

sudo curl -L "https://github.com/docker/compose/releases/download/1.29.2/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose


sudo chmod +x /usr/local/bin/docker-compose

# Example

```bash

sudo ln -s /usr/local/bin/docker-compose /usr/bin/docker-compose

docker-compose --version


```
# Install PHP8  -- https://php.tutorials24x7.com/blog/how-to-install-php-8-on-ubuntu-20-04-lts

```bash

    sudo apt update
    sudo apt install software-properties-common
    sudo add-apt-repository ppa:ondrej/php


    sudo apt update

    sudo apt install php8.0

    php --version

    sudo apt autoclean

    sudo apt autoremove

```
## alternative php8 install  - https://readerstacks.com/how-to-install-php-8-0-in-ubuntu-20-04-lts/


# for <= ubunt 12.04
sudo apt install python-software-properties 
# for >12.04
sudo apt install software-properties-common

sudo add-apt-repository ppa:ondrej/php

sudo apt-get update

sudo apt show php

# apache 
sudo apt install php8.0
# nginx 
sudo apt install php8.0-fpm


php pg


# Install Composer


wget https://raw.githubusercontent.com/composer/getcomposer.org/cf159a6439958e2d132a9c13cf4012a16ac2c1e1/web/installer -O - -q | php -- --quiet


curl -s https://getcomposer.org/installer | php

sudo mv ./composer.phar /usr/bin/composer

composer --version

# alternatively use verified latest version of composer installation 

cd ~

curl -sS https://getcomposer.org/installer -o composer-setup.php

HASH=`curl -sS https://composer.github.io/installer.sig`

echo $HASH

php -r "if (hash_file('SHA384', 'composer-setup.php') === '$HASH') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"

## Installer verified

# install composer globally

sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer

# install github

sudo apt-get update

sudo apt-get install git

git --version

git clone git@github.com:whatever folder-name

git clone https://github.com/Jerick-CM/larevel8_sail_projectwebsite.git backend

# use docker command without without sudo 

# set up root password 
sudo -i 
passwd

sudo usermod -aG docker ${USER}
su - ${USER}
id -nG

sudo usermod -aG docker username

# change user 

su "username"

# add backend repo


cd ~
git clone https://github.com/Jerick-CM/larevel8_sail_projectwebsite.git backend

# sail dependency fix 

docker run --rm \
    -v $(pwd):/opt \
    -w /opt \
    laravelsail/php80-composer:latest \
    composer install

# missing dependencies needed in sail 

sudo apt install openssl php-common php-curl php-json php-mbstring php-mysql php-xml php-zip

# copy .env 

cp .env.dev .env
cp .env.2022 .env

# add user in linux 
adduser username

su -username 
# 


## try installation of nginx for laravel installation
 sudo apt install nginx


# check running ports in ubuntu 

sudo ss -ltnp

sudo service stop httpd

netstat -ntl | grep 80

apt install net-tools

sudo systemctl status nginx


# if port 80 is being used by apache2 try to stop the service first


$ service apache2 stop
$ service nginx restart


# setup lets encrypt with nginx 
https://www.nginx.com/blog/using-free-ssltls-certificates-from-lets-encrypt-with-nginx/


# add website pointing directory and domain in nginx

https://www.digitalocean.com/community/tutorials/how-to-install-nginx-on-ubuntu-20-04

sudo ufw app list
sudo ufw allow 'Nginx HTTP'
sudo ufw status
systemctl status nginx

sudo chown -R $USER:$USER /var/www/backendapp
sudo chmod -R 755 /var/www/backendapp


sudo nano /etc/nginx/sites-available/backendapp

server {
        listen 80;
        listen [::]:80;

        root /var/www/backendapp/public;
        index index.html index.htm index.nginx-debian.html;

        server_name your_domain backend.inhinyeru.com;

        location / {
                try_files $uri $uri/ =404;
        }
}


sudo ln -s /etc/nginx/sites-available/backendapp /etc/nginx/sites-enabled/


sudo nginx -t

sudo systemctl restart nginx


# fix 403 forbidden issue

https://www.digitalocean.com/community/tutorials/how-to-set-up-a-firewall-with-ufw-on-ubuntu-20-04


## Uninstall apache2 in ubuntu lts

sudo service apache2 stop
sudo apt-get purge apache2 apache2-utils apache2.2-bin apache2-common
sudo apt-get autoremove

whereis apache2
apache2: /etc/apache2
sudo rm -rf /etc/apache2


## NGINX http server command 



sudo apt install nginx
sudo systemctl status nginx

sudo ufw allow http
sudo ufw reload


## setup GCP ingress and egress

ingress income 
egress outgoing


# run laravel sail app

## tuts
https://phoenixnap.com/kb/docker-nginx-reverse-proxy
