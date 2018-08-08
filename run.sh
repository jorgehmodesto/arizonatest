echo Downloading git
apt-get install git -y

echo Downloading app
if [ ! -d "/var/www/app" ]; then
    git clone https://github.com/jorgehmodesto/arizonatest.git /var/www/html/arizonatest
fi

echo Uploading Application container
docker-compose up -d

docker exec -it php apt-get update

docker exec -it php apt-get install curl php-cli php-mbstring git unzip

docker exec -it php curl -sS https://getcomposer.org/installer -o composer-setup.php

docker exec -it php php composer-setup.php --install-dir=/var/www/html/arizonatest --filename=composer

echo Install dependencies
docker exec -it php arizonatest/composer install

echo Generate key
docker exec -it php php arizonatest/artisan key:generate

echo Make migrations
docker exec -it php php arizonatest/artisan migrate

echo Make seeds
docker exec -it php php arizonatest/artisan db:seed