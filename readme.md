# Take Home
Web developer test repo. Please clone the repo and follow instructions below.

How to setup: (*please follow the order*)
* `composer install`
* `npm install`
* `cp .env.example .env`, create a database and put credentials in new `.env` file in fields `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`
* `php artisan key:generate`
* `php artisan migrate`
* `php artisan db:seed`
* `php artisan parse:xml`
* `php artisan passport:install`
* `npm run dev`
* `php artisan serve` finally to serve the application

Login details are store in a `database/seeds/UserTableSeeder.php`

If all was successfull, please visit homepage http://127.0.0.1:8000 and login using new credentials.

## API
Api is developed using Laravel Passport and in order to get your `accessToken` please login and go to http://127.0.0.1:8000/api-access page. 

This is a standard JSON API.

## API routes
Get all users details
```
GET /api/user-details
```

Get vehicle details based on user_id
```
GET /api/vehicle-details/{user_id}
```

## Tests
All tests are done in `phpunit` tests format. (make sure phpunit command is available, if not use `./vendor/bin/phpunit`)
To get test results for API use following command
```
phpunit --filter APITest
```
