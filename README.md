# Tasks
Project Laravel to manage your Tasks


## Hosted on Heroku
- https://valmir-tasks.herokuapp.com


## Set up environment

- copy env.example to .env
- docker-compose up -d
- docker exec -it tasks-web composer install
- docker exec -it tasks-web php artisan key:generate
- docker exec -it tasks-web php artisan config:cache
- docker exec -it tasks-web php artisan migrate


## How to run

- docker-compose up -d
- docker exec -it tasks-web php artisan serve --host 0
