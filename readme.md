# Event Management System (AtmaEvent)

## Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/downloads.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)

### How to Run the Project using [Devilbox](http://devilbox.org/)

1. Install docker and docker tool box [here](https://docs.docker.com/install/)
2. `git clone https://github.com/cytopia/devilbox`
3. `cd devilbox`
4. `cp env-example .env`
5. modify the `.env` file:
   ```
    make sure to PHP 7.2 version
   ```
6. put the project in `devilbox/data/www`.
7. `cd data/www && git clone https://github.com/antoniuscs/website.git && cd ralali`
8. duplicate and rename the file`.env.temp` to `.env` and modify the file with the following instructions : 
    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=atmaevent_db
    DB_USERNAME=root
    DB_PASSWORD=
    DB_PREFIX=ae_
    ```   
9. Create a shorcut for `public` folder and name it as `htdocs`, run this command in your project:
	```
	ln -s public htdocs
	``` 
10. install all the dependencies in the project
 	```
 	- in Devilbox path, run this command : `sudo ./shell.sh`
 	- `ls` command to display the project that has been put in the devilbox
 	- cd website
 	- composer install --no-scripts
 	```
11. start Devilbox and check your project in devilbox path
	````
	- sudo docker-compose up -d
	- http://localhost/vhosts.php
	````
15. Virtual Host
   ```
   - sudo nano /etc/hosts
   - 1 additional line -> "127.0.0.1 website.loc"
   ```
   
    ![alt text](readme_images/etc-hosts.png)
	
note: additional step for Mac / linux, Run: `sudo chmod -R 777 storage/` 
 
## Frontend Setup & Material:
1. [click here](resources/material).
2. `npm install` in the root directory (not a `resource/material` folder).
3. `npm run dev` This builds our assets but does not minify or produce a production-ready build.
4. `npm run watch` Similar to `npm run dev` but will watch for changes to our assets and automatically re-compile any changed

Note: 
- `npm run dev` running automation on server development.

## Any a question ?
send a message to antonius.christiyanto@ralali.com, antonchristiyanto@gmail.com, 150708525@students.uajy.ac.id
