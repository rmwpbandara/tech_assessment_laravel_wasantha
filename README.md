<p align="center">

# Install Guide

### Install Guide

Clone the repository.
 
`git clone https://github.com/rmwpbandara/tech_assessment_laravel_wasantha.git`
 
Change the project directory.
 
`cd tech_assessment_laravel_wasantha`
 
Install PHP Dependencies using the following command.
 
`composer install`
 
Create env file using the following command.
  
`copy .env.example .env`

Generate App Key using the following command.
  
`php artisan key:generate`

Fill all needed credentials in env and setup database.

Create database tables using the following command.
  
`php artisan migrate`

Insert dummy data to the database using the following command.
  
`php artisan db:seed`

Run Server using the following command.

`php artisan serve`
