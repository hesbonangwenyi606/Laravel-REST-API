Product Management REST API (Laravel)
📌 Project Overview

This project is a mini RESTful API built with Laravel (latest stable version) to manage products.
It demonstrates full-stack backend skills including authentication, CRUD operations, validation, and API best practices.

The API allows users to:

Register and authenticate

Create, read, update, and delete products

Secure endpoints using token-based authentication

🛠 Tech Stack

PHP (8.x recommended)

Laravel (latest stable version)

Laravel Sanctum (Authentication)

MySQL / PostgreSQL (Any supported Laravel database)

Docker (Optional)

🔐 Authentication

Authentication is implemented using Laravel Sanctum.

Users receive a token after login

Protected routes require a valid Bearer Token

📦 Product Model

Each product contains the following fields:

Field	Type
id	Auto-increment
name	String
price	Decimal
description	Text
created_at	Timestamp
updated_at	Timestamp
🚀 Setup Instructions
1️⃣ Clone the Repository
git clone <your-repo-link>
cd <repo-folder>

2️⃣ Install Dependencies
composer install

3️⃣ Environment Configuration

Copy the example environment file:

cp .env.example .env


Update database credentials in .env:

DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password


Generate the application key:

php artisan key:generate

4️⃣ Run Migrations
php artisan migrate

5️⃣ Start the Server
php artisan serve


The API will be available at:

http://localhost:8000

🐳 (Optional) Docker Setup

If Docker is configured:

docker-compose up -d


Access the application at:

http://localhost:8000

🔗 API Endpoints
🔑 Authentication
Method	Endpoint	Description
POST	/api/register	Register a new user
POST	/api/login	Login and receive auth token
📦 Products (Protected Routes)

All product endpoints require authentication
Add header:

Authorization: Bearer {token}

Method	Endpoint	Description
GET	/api/products	List all products
POST	/api/products	Create a new product
GET	/api/products/{id}	Get product details
PUT	/api/products/{id}	Update a product
DELETE	/api/products/{id}	Delete a product
## Validation & Error Handling
All incoming requests are validated
Meaningful validation error messages are returned

**Proper HTTP status codes are used:***
200 OK
201 Created
401 Unauthorized
404 Not Found
422 Validation Error

## Project Structure
The project follows standard Laravel conventions:
app/Models – Eloquent models
app/Http/Controllers – API controllers
routes/api.php – API routes
database/migrations – Database schema

## Author
Hesbon Angwenyi
Full-Stack Developer
Laravel | REST APIs | React | Node.js

## License
This project is open-source and available for educational and assessment purposes.