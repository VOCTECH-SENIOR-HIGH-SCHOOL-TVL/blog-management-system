<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('short_description')->nullable();
            $table->text('content')->nullable();
            $table->string('picture')->default('no-picture.png');
            $table->unsignedBigInteger('user_id');
            $table->timestamp('published_at')->nullable();
        });

        DB::table('posts')->insert([
            [
                'title' => 'Getting Started with HTML: The Building Blocks of the Web',
                'slug' => 'getting-started-with-html-the-building-blocks-of-the-web',
                'short_description' => 'An introduction to HTML, its structure, and how to create your first web page.',
                'content' => '<p>HTML, or HyperText Markup Language, is the standard language for creating web pages. It provides the structure of a webpage, allowing you to define elements like headings, paragraphs, links, and images. In this blog, we will explore the basic syntax of HTML and how to create your first web page. We will start with the essential elements, such as <html>, <head>, and <body>, and discuss how to use tags to format text and add multimedia. You’ll learn how to create lists, tables, and forms, which are crucial for interactive web applications. By the end of this post, you will have a solid understanding of HTML and be ready to dive deeper into web development.</p>',
                'picture' => 'html-1.jfif',
                'user_id' => 1,
                'published_at' => now(),
            ],
            [
                'title' => 'Styling Your Web Pages with CSS: A Beginner’s Guide',
                'slug' => 'styling-your-web-pages-with-css-a-beginners-guide',
                'short_description' => 'Learn how to use CSS to style your HTML elements and create visually appealing web pages.',
                'content' => '<p>Cascading Style Sheets (CSS) is a stylesheet language used to describe the presentation of a document written in HTML. In this blog, we will cover the basics of CSS, including how to apply styles to HTML elements, use selectors, and create layouts. We will explore different ways to include CSS in your projects, such as inline styles, internal stylesheets, and external stylesheets. You’ll learn about properties like color, font, margin, padding, and how to create responsive designs using media queries. By the end of this post, you will be equipped with the knowledge to enhance the visual appeal of your web pages and create a better user experience.</p>',
                'picture' => 'css-2.png',
                'user_id' => 1,
                'published_at' => now(),
            ],
            [
                'title' => 'JavaScript Fundamentals: Making Your Web Pages Interactive',
                'slug' => 'javascript-fundamentals-making-your-web-pages-interactive',
                'short_description' => 'An introduction to JavaScript, covering its syntax, data types, and how to manipulate the DOM.',
                'content' => '<p>JavaScript is a powerful programming language that enables you to create dynamic and interactive web pages. In this blog, we will introduce you to the fundamentals of JavaScript, including its syntax, data types, and control structures. You will learn how to manipulate the Document Object Model (DOM) to change the content and style of your web pages in real-time. We will cover essential concepts such as functions, events, and error handling, providing you with the tools to create engaging user experiences. By the end of this post, you will have a solid foundation in JavaScript and be ready to explore more advanced topics like asynchronous programming and APIs.</p>',
                'picture' => 'js-3.png',
                'user_id' => 1,
                'published_at' => now(),
            ],
            [
                'title' => 'PHP Basics: Server-Side Scripting for Dynamic Web Pages',
                'slug' => 'php-basics-server-side-scripting-for-dynamic-web-pages',
                'short_description' => 'An introduction to PHP, its syntax, and how to create dynamic web applications.',
                'content' => '<p>PHP (Hypertext Preprocessor) is a popular server-side scripting language designed for web development. In this blog, we will explore the basics of PHP, including its syntax, variables, and control structures. You will learn how to embed PHP code within HTML to create dynamic web pages that can interact with users and databases. We will cover essential topics such as form handling, session management, and file uploads, providing you with the skills to build robust web applications. By the end of this post, you will have a foundational understanding of PHP and be ready to dive deeper into more advanced topics like object-oriented programming and frameworks.</p>',
                'picture' => 'php-4.jfif',
                'user_id' => 1,
                'published_at' => now(),
            ],
            [
                'title' => 'Understanding SQL: The Language of Databases',
                'slug' => 'understanding-sql-the-language-of-databases',
                'short_description' => 'A beginner’s guide to SQL, covering basic queries, data manipulation, and database design.',
                'content' => '<p>Structured Query Language (SQL) is the standard language for managing and manipulating databases. In this blog, we will introduce you to the basics of SQL, including how to create, read, update, and delete data in a database. We will cover essential SQL commands such as SELECT, INSERT, UPDATE, and DELETE, and discuss how to use conditions and joins to retrieve data from multiple tables. You will also learn about database design principles, including normalization and relationships between tables. By the end of this post, you will have a solid understanding of SQL and be ready to work with databases in your web applications.</p>',
                'picture' => 'sql-5.jfif',
                'user_id' => 1,
                'published_at' => now(),
            ],
            [
                'title' => 'Using Composer for Dependency Management in PHP',
                'slug' => 'using-composer-for-dependency-management-in-php',
                'short_description' => 'Learn how to use Composer to manage libraries and dependencies in your PHP projects.',
                'content' => '<p>Composer is a dependency manager for PHP that simplifies the process of managing libraries and packages in your projects. In this blog, we will explore how to install Composer and create a composer.json file to define your project’s dependencies. You will learn how to install packages from Packagist, the default package repository for Composer, and how to autoload classes to streamline your development process. We will also discuss best practices for managing dependencies, including how to update packages and handle version constraints. By the end of this post, you will understand how Composer can simplify your PHP development workflow, allowing you to focus on building features rather than managing libraries manually.</p>',
                'picture' => 'composer-6.png',
                'user_id' => 1,
                'published_at' => now(),
            ],
            [
                'title' => 'Version Control with Git: A Comprehensive Guide for Beginners',
                'slug' => 'version-control-with-git-a-comprehensive-guide-for-beginners',
                'short_description' => 'An introduction to Git, covering its basic commands and how to use it for version control in your projects.',
                'content' => '<p>Git is a powerful version control system that allows developers to track changes in their code and collaborate with others. In this blog, we will cover the fundamental concepts of Git, including repositories, commits, branches, and merges. You will learn how to initialize a Git repository, make your first commit, and push changes to a remote repository. We will also explore branching strategies, which enable you to work on features independently without affecting the main codebase. By the end of this post, you will have a solid understanding of Git and be ready to use it effectively in your development projects.</p>',
                'picture' => 'git-7.png',
                'user_id' => 1,
                'published_at' => now(),
            ],
            [
                'title' => 'Setting Up a Local Development Environment with WAMP',
                'slug' => 'setting-up-a-local-development-environment-with-wamp',
                'short_description' => 'A step-by-step guide to installing and configuring WAMP for PHP development on Windows.',
                'content' => '<p>WAMP (Windows, Apache, MySQL, PHP) is a popular local development environment that allows you to run PHP applications on your Windows machine. In this blog, we will guide you through the installation process of WAMP, including how to configure Apache and MySQL. You will learn how to create a new database, set up virtual hosts, and manage your PHP settings. We will also cover how to deploy your PHP applications locally and troubleshoot common issues that may arise during setup. By the end of this post, you will have a fully functional local development environment, enabling you to develop and test your PHP applications efficiently.</p>',
                'picture' => 'wamp-8.png',
                'user_id' => 1,
                'published_at' => now(),
            ],
            [
                'title' => 'XAMPP vs. WAMP: Which Local Server is Right for You?',
                'slug' => 'xampp-vs-wamp-which-local-server-is-right-for-you',
                'short_description' => 'A comparison of XAMPP and WAMP, highlighting their features, advantages, and use cases.',
                'content' => '<p>When it comes to setting up a local server for PHP development, two popular options are XAMPP and WAMP. In this blog, we will compare these two platforms, discussing their features, installation processes, and performance. XAMPP is a cross-platform solution that works on Windows, macOS, and Linux, making it versatile for developers who work on multiple operating systems. WAMP, on the other hand, is specifically designed for Windows users and offers a more Windows-centric experience. We will also explore the pros and cons of each platform, helping you decide which one is best suited for your development needs. By the end of this post, you will have a clearer understanding of the differences between XAMPP and WAMP.</p>',
                'picture' => 'xampp-wamp-9.jfif',
                'user_id' => 1,
                'published_at' => now(),
            ],
            [
                'title' => 'MAMP: A Local Development Environment for macOS',
                'slug' => 'mamp-a-local-development-environment-for-macos',
                'short_description' => 'Learn how to set up MAMP for PHP development on macOS and configure your local server.',
                'content' => '<p>MAMP (Mac, Apache, MySQL, PHP) is a local server environment specifically designed for macOS users. In this blog, we will walk you through the installation process of MAMP and how to configure it for PHP development. You will learn how to start and stop the servers, create databases, and manage your PHP settings. We will also cover how to set up virtual hosts for your projects, allowing you to work on multiple applications simultaneously. By the end of this post, you will have a fully functional local development environment on your Mac, enabling you to develop and test your PHP applications with ease.</p>',
                'picture' => 'mamp-10.jfif',
                'user_id' => 1,
                'published_at' => now(),
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
