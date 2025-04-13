# Simple Session-Based To-Do App (Laravel)

A basic in session To-Do list application built with Laravel.

## Requirements

* PHP >= 8.2
* Composer (<https://getcomposer.org/>)
* Make sure both added in environment path

## Installation

1. **Clone the repository:**

    ```bash
    git clone https://github.com/hmdfrds/php-todo-app
    cd php-todo-app
    ```

2. **Install PHP dependencies:**

    ```bash
    composer install
    ```

3. **Set up environment file:**
    Copy the example environment file.

    ```bash
    cp .env.example .env
    ```

    Set the value `SESSION_LIFETIME` for the inactivity timeout (default is 120 seconds).

4. **Generate application key:**
    This is required by Laravel to secure session data and other encrypted elements.

    ```bash
    php artisan key:generate
    ```

## Running the Application

1. **Start the Laravel development server:**

    ```bash
    php artisan serve
    ```

2. Open your web browser and navigate to the URL provided (usually `http://127.0.0.1:8000`).
