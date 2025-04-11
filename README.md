# Blog Management System Project | Laravel 9  <img height="25" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png" />

>Welcome to Blog Management System, a comprehensive platform designed to empower bloggers and content creators to share their thoughts, ideas, and stories with the world. Our user-friendly interface and robust features make it easy for anyone to start and manage their own blog, whether you're a seasoned writer or just starting out.
This project also includes a content management system (CMS) for blog posts. More information is provided below...

<img src="https://iili.io/3ASi0zv.png" />
<img src="https://iili.io/3AUHMBe.png" />
<img src="https://iili.io/3AUHHzP.png" />

## Requirements 
* PHP 8.0 and above
* Composer 
* Since this project is running Laravel 9, I suggest checking out the official requirements

## Installation
* Clone the repository by running the following command in your command line below (Or you can download the zip file from GitHub)
```shell
git clone https://github.com/VOCTECH-SENIOR-HIGH-SCHOOL-TVL/blog-management-system.git
 ```
* Head to the projects directory
```shell
cd blog-management-system
 ```
* Install/Update Composer dependencies
```shell
composer install | composer update
```

* Copy .env.example file into .env file and configure based on your environment
```shell
cp .env.example .env
```
* Generate an encryption key
```shell
php artisan key:generate
```
* Migrate the database
```shell
php artisan migrate 
```
* Seed database 

    - Use the following command
    
        ```shell
        php artisan db:seed
        ```
        
* For development or testing purposes, you can use the Laravel built-in server by running 
```shell
php artisan serve
```

After running the above commands, you should be able to access the application at http::/localhost or your designated domain name depending on the configuration.

## Setup
* Log in to the application with the following credentials
    * Email: admin@gmail.com
    * Password: password
    
* Project Workflow
    - When you log in, you would be redirected to a Homepage
    - On this page, you can create a blog post, view your profile, logout and many more
    - Click on Profile to view your Profile and edit your profile information
    - In the CMS you can manage all of your blog posts, or if you are an administrator, you can manage all blog posts on the platform and users also
    - As an administrator, you are able to view platform analytics
    - As an administrator, you can also delete a certain user or all users by selecting
    - Inside your profile settings you can edit your name, email address, picture and it requires password to update.
* There are two roles: 
- `administrator` and `user`

## Roles

### Administrator
* Ability to create, edit, view, and delete all blog posts on the platform
* Ability to create, edit, view, and delete all users on the platform
* Can view analytics page

### User
* Ability view all blog posts on the platform
* Ability to create, edit, view, and delete their blog posts
* Can view other user's profile on the platform but can't delete them

## Features
* When an administrator deletes someone's post, that post automatically relates to that administrator
* Used Laravel Sluggable for SEO
* Added CSRF protection
* Added Middleware protection for unregistered users 
* Added session messages
* Added Factories for users and blog posts using <i>faker</i>
* Every user has a default picture
* Added pagination on homepage
* Added TinyMCE as HTML editor
* Users have PMS (Post Management System )
* Forms Validation

## 🚀 Tech used
* PHP v.8
* Laravel v.9
* MySQL
* HTML v.5 / CSS v.3 / Bootstrap v.5
* JavaScript 
