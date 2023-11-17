#Laravel 10 User Roles and Permissions with Crud tool


## Installation 

### Require Install composer
- Download the project (or clone using GIT)
- Copy `.env.example` into `.env` and configure your database credentials
- Start Docker `docker compose up -d` 
- Go to the project's root directory using terminal window/command prompt
- Run `composer install`
- Copy all files inside `/docker/templates vendor crestapp` to `/vendor/crestapps/laravel-code-generator/templates`  [readme crud tool](https://github.com/CrestApps/laravel-code-generator)
- Set the application key by running `php artisan key:generate --ansi`
- Run migrations `php artisan migrate:fresh --seed`
- Run `npm install`
- Run `npm run build` to build assets
- Start local server by executing `php artisan serve` or Docker: `http://localhost:9999` phpMyadmin: `http://localhost:8888`

