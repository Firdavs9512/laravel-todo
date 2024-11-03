# Laravel Todo App

A simple Todo application built with Laravel, featuring user authentication and CRUD operations for managing todos.

## Features

-   User authentication (register, login, logout)
-   Create, read, update and delete todos
-   Toggle todo completion status
-   Responsive design using Tailwind CSS
-   Form validation
-   BladeWind UI components

## Requirements

-   PHP 8.2 or higher
-   Composer
-   Node.js & NPM
-   MySQL or SQLite

## Installation & Setup

1. Clone the repository

```bash
git clone https://github.com/your-username/laravel-todo-app.git
```

2. Install dependencies

```bash
composer install
```

3. Create a copy of the `.env.example` file and set up your environment variables

```bash
cp .env.example .env
```

4. Run the database migrations

```bash
php artisan migrate
```

5. Start the development server

```bash
php artisan serve
```

6. Install NPM dependencies and compile assets

```bash
npm install
npm run build
# or dev server
npm run dev
```

7. Access the application in your browser at `http://localhost:8000`

## License

This project is open-sourced under the MIT License. See the [LICENSE](LICENSE) file for details.
