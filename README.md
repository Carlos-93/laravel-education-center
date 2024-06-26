<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="50%" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Welcome to my Comprehensive Educational System

This project involves the development of a comprehensive educational system incorporating a simplified CRM, focused on assisting teachers in efficiently managing, controlling, and communicating with their students, as well as in administering courses and evaluations.

## Prerequisites

Before starting, ensure you meet the following prerequisites:
- PHP >= 8.0
- Composer
- NPM (optional, for asset management)
- A compatible database (MySQL, PostgreSQL, etc.)

## Installation

Follow these steps to set up the project locally:

1. Clone the repository to your local machine:
    ```bash
    git clone https://github.com/Carlos-93/laravel-education-center.git
    ```
2. Change into the project directory:
    ```bash
    cd laravel-education-center
    ```
3. Install PHP dependencies:
    ```bash
    composer install
    ```
4. Install NPM packages:
    ```bash
    npm install && npm run dev
    ```
5. Copy `.env.example` to `.env` and configure your environment variables:
    ```bash
    cp .env.example .env
    ```
    Update the database connection details in the `.env` file.

7. Generate an application key:
    ```bash
    php artisan key:generate
    ```
8. If you need to reset and reseed the database, use:
    ```bash
    php artisan migrate:fresh --seed
    ```
9. Start the local development server:
    ```bash
    php artisan serve
    ```
    Access the application at http://localhost:8000.

## Additional Commands

1. To install additional packages for modal support run:
   
    ```bash
    composer require wire-elements/modal
    ```

2. To install additional package for ramonrietdijk-livewire-tables run:

    ```bash
    composer require ramonrietdijk/livewire-tables
    ```

3. To install additional package for storage run:

    ```bash
    php artisan storage:link
    ```

## Modifying Components

To modify the components.layout file, you can find it in the vendor/livewire/config directory.

Edit this file to change the layout as per your requirements.

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Contact

Carlos Araujo Galván

- Email: cagalvan93@gmail.com
- LinkedIn: [Profile](https://www.linkedin.com/in/carlos-araujo-galvan)

Project Link: [GitHub Repository](https://github.com/Carlos-93/laravel-education-center)