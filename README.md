# Catalog API Project

 **Project by [rahmet-internship](https://gitlab.com/snippets/1796165)**
***
## Startup Instructions

1. git clone (https://github.com/GSedi/rahmet-internship.git)
2. cd into project root
3. install composer dependencies
   - composer install
4. copy .env.example file to .env file
5. generate encryption key
   - php artisan key:generate
6. start XAMPP server(MySQL, Apache2) 
7. get to (localhost/phpmyadmin)
8. create database 'catalog'

> 6,7,8 or run your own server and database, 
>then update .env file with new info
>especially DB_Username and DB_Password

9. migrate the database
   - php artisan migrate
10. run the app
    - php artisan serve

**You can see verification emails in telescope (localhost:8000/telescope)**
***
## Time spent for tasks

- Getting a list of all categories and Getting a list of products in a particular category {CRUD operations}__
    2 - 3,5 hours
- User Authentication__
    3,5 - 4,5 hours
- Adding / Editing / Deleting a Category (for authorized users) and Adding / Editing / Deleting a Product (for authorized users) {Authorization Permissions}__
    1,5 hour
- Add email verification upon registration__
    3 hour
- Add filters to products (color, weight, price, etc.), and implement the method of obtaining products by filter__
    30 minutes
- Add roles (admin, moderator, user) and on all methods with add / edit / delete operations put validation of admin and moderator roles__
    2 - 3 hours
- Add the essence of tags to products and categories, write methods for displaying tags by products and categories__
    2 - 3 hours
- Write this README.md file__
    1 hour
