
![Laravel](https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white)
![Vue.js](https://img.shields.io/badge/vuejs-%2335495e.svg?style=for-the-badge&logo=vuedotjs&logoColor=%234FC08D)
![TailwindCSS](https://img.shields.io/badge/tailwindcss-%2338B2AC.svg?style=for-the-badge&logo=tailwind-css&logoColor=white)
![MySQL](https://img.shields.io/badge/mysql-%2300f.svg?style=for-the-badge&logo=mysql&logoColor=white)


## Requirements

* PHP 8.2
* Composer
* Laravel 10
* MySQL
* npm


## Installation


* First we download the repository to our computer. 
* Once the repository is downloaded we access the project directory and execute the following command to install the dependencies:

```
composer install
```

* We create the database in MySQL with the name "taxo".
* Copy the .env.example file to the root folder of your project and rename the file to ".env".
* We open the ".env" file and in the DB section we change the values of the environment variables to our connection data such as user and password.

```
DB_USERNAME= your-user

DB_PASSWORD= your-password
```

* Now we execute the following commands in order to have our database ready:

```
php artisan migrate
php artisan db:seed
```
* Now we execute the following commands to run the application:

```
php artisan serv
npm run dev
```

* Now in our browser we place the following address: <a href="http://localhost:8000/login">http://localhost:8000/login</a> and enter the following information.

```
User: admin@gmail.com

Pass: Admin123
```
* When we enter we go to the ALL section and we will be able to manage our tasks.
