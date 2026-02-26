# Problem Statement

A Laravel-based food delivery management application with SSO authentication.

# Foodpanda App

A Laravel-based food delivery management application with SSO authentication.

## Features

- **SSO Authentication** - Secure login via Single Sign-On
- **Dashboard** - View business statistics and recent orders
- **Food Management** - Add, edit, and remove menu items
- **Order Tracking** - Monitor order status and history
- **Customer Management** - Manage customer information

## Tech Stack

- **Backend**: Laravel 12
- **Frontend**: Bootstrap 5 (CDN)
- **Authentication**: SSO (Single Sign-On)
- **Database**: MySQL/SQLite

## Used Packages

### Composer Packages
- `laravel/framework` ^12.0 - Laravel framework
- `firebase/php-jwt` ^7.0 - JWT authentication
- `laravel/tinker` ^2.10.1 - Tinker REPL

### NPM Packages
- `laravel-vite-plugin` ^2.0.0 - Vite integration
- `axios` ^1.11.0 - HTTP client
- `vite` ^7.0.7 - Build tool

## Prerequisites

- **ecommerce-app** must be running on **port 8000** before starting this application.
  - Repository: https://github.com/Shuaibbinreza/ecommerce-app
  - Follow the installation instructions in that repository first.

## Installation

1. Clone the repository:
```bash
git clone <repository-url>
cd foodpanda-app
```

2. Install dependencies:
```bash
composer install
npm install
```

3. Configure environment:
```bash
cp .env.example .env
```

4. Generate application key:
```bash
php artisan key:generate
```

5. Run migrations:
```bash
php artisan migrate
```

6. Start the development server on port 8001:
```bash
php artisan serve --port=8001
```

## Routes

| Route | Description |
|-------|-------------|
| `/` | Home - Food list |
| `/dashboard` | Dashboard - Statistics |
| `/login` | SSO Login |

## Project Structure

```
foodpanda-app/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       └── SsoController.php    # SSO authentication
│   └── Models/
│       └── User.php                   # User model
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php         # Main layout
│       ├── dashboard.blade.php       # Dashboard view
│       └── foods.blade.php           # Food list view
├── routes/
│   └── web.php                       # Web routes
└── .env                             # Environment config
```

## License

MIT License
