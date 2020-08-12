# Twitter Clone (Tweety)

Work in progress Twitter clone webapp using laravel 7.x and tailwind css following best practices and solid design principles
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

## Completed Features
- Authentication and Authorization
- Follow toggle (Follow and unfollow user)
- CRUD Operations on tweets
- File upload for user avatar
- Explore other users and their tweets
- Pagination of timeline

Upcoming Features
- Like and Dislike tweets
- Dynamic Profile Banner
