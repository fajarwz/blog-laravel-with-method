# Laravel with(): How to Solve the N+1 problem with Eager Loading Relationships
This is an implementation of solving N+1 problem with eager loading relationships in Laravel. A blog about this can be found here: [Laravel with(): How to Solve the N+1 problem with Eager Loading Relationships | Fajarwz](https://fajarwz.com/blog/laravel-with-how-to-solve-the-n+1-problem-with-eager-loading-relationships).

## Installation

### Composer Packages 
```
composer install
```

## Configuration

### Create `.env` file from `.env.example`
```
cp .env.example .env
```

### Generate Laravel App Key
```
php artisan key:generate
```

### Database Integration
1. Create a database and connect it with Laravel with filling the DB name in `DB_DATABASE`
2. Adjust `DB_USERNAME`
3. Adjut `DB_PASSWORD`

### Migrate the Database Migration and Run the Seeder
```
php artisan migrate --seed
```

## Run App
```
php artisan serve
```