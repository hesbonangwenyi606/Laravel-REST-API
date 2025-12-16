# Laravel Product Management API

## Setup Instructions

1. composer install
2. cp .env.example .env
3. php artisan key:generate
4. Configure database in .env
5. php artisan migrate
6. php artisan serve

## Authentication
Uses Laravel Sanctum for API authentication.

## API Endpoints
- GET /api/products
- POST /api/products
- GET /api/products/{id}
- PUT /api/products/{id}
- DELETE /api/products/{id}

## Design Decisions
- Form Requests for validation
- RESTful API resource controller
- Pagination enabled
