# Right Company MicroService

##To run

1) Clone this project
2) Execute in folder: `composer install`
3) Rename env file: `cp env.example env`
4) Create database in your DBMS

Configure to env file 

    `DB_CONNECTION=pgsql`
    `DB_HOST=127.0.0.1`
    `DB_PORT=5432`
    `DB_DATABASE=your_database`
    `DB_USERNAME=your_user`
    `DB_PASSWORD=your_password`
`
Execute this migrations

    `php artisan migrate`
    
Configure Domain/Model to call company or lawyer service. Alter host and number port

     `const URL = "http://localhost";`
     `const PORT = ":3004/api/v1";`
     `const URI = self::URL . self::PORT;`

Generate key for application

    `php artisan key:generate    
    
 Run project

    `php artisan serve`
    
    
Obs: For run the test execute the phpunit:
 
    `phpunit`

phpunit Documentation

https://phpunit.de/manual/current/pt_br/installation.html
