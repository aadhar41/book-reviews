# Book Reviews Application

## Overview

This is a Laravel-based web application designed for managing and reading book reviews. It allows users to browse through a collection of books, read detailed reviews, and share their own perspectives. The application aims to provide a clean and organized platform for book lovers.

## Features

- **Book Management**: Review and manage a comprehensive collection of books.
- **Review System**: Detailed book summaries and honest reviews with ratings.
- **Search & Filter**: Easily find books by genre, author, or title.
- **Responsive Design**: A user-friendly interface accessible on various devices.

## Tech Stack

- **Framework**: Laravel 10.x
- **Language**: PHP 8.1+
- **Database**: MySQL
- **Frontend**: Blade Templates
- **Asset Bundling**: Vite

## Installation and Setup

Follow these steps to set up the project locally:

1. **Clone the Repository**

    ```bash
    git clone https://github.com/aadhar41/book-reviews.git
    cd book-reviews
    ```

2. **Install PHP Dependencies**

    ```bash
    composer install
    ```

3. **Install NPM Dependencies**

    ```bash
    npm install && npm run dev
    ```

4. **Environment Configuration**
    Copy the example environment file and generate the application key:

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

5. **Database Configuration**
    - Create a database (e.g., `book_reviews`) in your MySQL server.
    - Update the `.env` file with your database credentials:

        ```env
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=book_reviews
        DB_USERNAME=root
        DB_PASSWORD=
        ```

6. **Run Migrations**

    ```bash
    php artisan migrate
    ```

7. **Start the Server**

    ```bash
    php artisan serve
    ```

    Access the application at `http://localhost:8000`.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
