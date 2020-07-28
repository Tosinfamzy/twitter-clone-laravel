# Twitter Clone (Tweety)

Work in progress Twitter clone webapp using laravel 7.x and tailwind css
## Installation
After cloning the repo change the .env.example file to .env and use your local database details

In your terminal 
1. ```composer install```
2. ```npm install```
3. ```npm run dev```
3. ```php artisan migrate```

### Factories
Create factories for users and tweets in your terminal

```php artisan tinker```

```factory('App\Tweet')->create()'```
