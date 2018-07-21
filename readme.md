# Laravel Starter Tempelate

This starter template is perfect for starting a new laravel project.

This consists of following features :

* Based on bootstrap 4
* Auth Scaffolding
* Email Verification on registration
* Integrated admin panel template
* Noty for notifications on frontend
* Passport Setup for api auth
* VueX setup
* MediaLibrary (Spatie/MediaLibrary) for image and video uploads

## Steps to install

1. clone this repository:
```
git clone https://github.com/riteshsingh1/laravel-starter.git
```
2. copy .env.example to .env
```
cp .env.example .env
```
3. install dependencies
```
composer install
```
4. genereate encryption key
```
php artisan key:generate
```
5. create database and update in .env

6. run migrations
```
php artisan migrate
```
7. generate keys for passport
```
php artisan passport:install
```
8. For File Uploads
```
 php artisan storage:link
```
9. run in broswer and enjoy !!!
