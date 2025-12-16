Project Overview

The goal of this assignment is to evaluate your full-stack development skills, understanding of Laravel/PHP, REST APIs, and general project structure. This is a mini REST API project for managing products.

You are required to implement a Laravel API that allows CRUD operations on products, including basic authentication. Bonus points will be given for clean code, proper project structure, and optional Docker setup.

Project Requirements
1. Core Requirements

Build a Laravel API project (latest stable version)

Implement Authentication using Laravel Sanctum or JWT

Implement CRUD operations for Products

Product fields:

id (auto-increment)

name (string)

price (decimal)

description (text)

created_at & updated_at timestamps

Input validation for API requests

Proper HTTP status codes for responses

Well-structured project following Laravel conventions

2. Bonus (Optional)

Docker setup for easy local environment setup

Pagination for listing products

Unit or feature tests for API endpoints

Setup Instructions
1. Clone the Repository
git clone <your-repo-link>
cd <repo-folder>

2. Install Dependencies
composer install

3. Configure Environment

Copy .env.example to .env:

cp .env.example .env


Set up database credentials in .env

Generate app key:

php artisan key:generate

4. Run Migrations
php artisan migrate

5. Run the Server
php artisan serve


The API will run at http://localhost:8000.

6. (Optional) Docker Setup

If Docker is configured:

docker-compose up -d


Access the app at http://localhost:8000

API Endpoints
Method	Endpoint	Description
POST	/api/register	Register a new user
POST	/api/login	Login and get auth token
GET	/api/products	List all products
POST	/api/products	Create a new product
GET	/api/products/{id}	Get product details
PUT	/api/products/{id}	Update a product
DELETE	/api/products/{id}	Delete a product
Submission Guidelines

Push your code to a GitHub repository.

Include a README.md with:

Setup instructions

API endpoints

Brief explanation of your design decisions

Submit the GitHub link via email by the deadline.

Deadline: 48 hours from receiving the as