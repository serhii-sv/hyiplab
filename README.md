Hyiplab

How to install:

- git clone git@github.com:serhii-sv/hyiplab.git
- cd hyiplab
- If you would like to use Docker (installing may take some while, first time installing 30-60 min depends on your perfomance):
    - git clone https://github.com/Laradock/laradock.git laradock-hyiplab
    - cd laradock-hyiplab
    - cp env-example .env
    - docker-compose up -d nginx mysql php-fpm phpmyadmin workspace redis mailhog
    - docker-compose exec --user=laradock workspace bash
- composer install
- cp .env.example .env
- php artisan key:generate
- php artisan migrate
- php artisan db:seed
- chmod -R 777 storage/logs/ storage/framework