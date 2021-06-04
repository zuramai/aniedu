# AniEdu 
## Installation
1. Clone the repository
```
git clone https://github.com/zuramai/aniedu
cd aniedu
```
2. Install dependencies
```
composer install
npm install
```
3. Change your database details in `.env` file
3. Setup the application
```
php artisan key:generate
php artisan migrate
php artisan db:seed
```
5. Run the app locally
```
php artisan serve
```
6. Open `localhost:8000`
