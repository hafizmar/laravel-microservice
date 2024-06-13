# API Gateway with Laravel and Microservices

### Project Overview

This project demonstrates how to implement an API Gateway using Laravel, orchestrating multiple Laravel-based microservices. An API Gateway serves as a single entry point for all client requests, managing and routing them to the appropriate microservices, thus providing a unified and efficient interface.

### Features 

* Centralized API Gateway: A single entry point to manage and route client requests to various * microservices.
* Microservices Architecture: Multiple Laravel applications serving different functionalities as microservices.
* Efficient Routing: Dynamic and efficient routing of requests to the appropriate microservice.
* Scalability: Easily add new microservices without disrupting existing ones.
* Security: Implement middleware for authentication, rate limiting, and other security measures.

### Prerequisites

* PHP 7.4 or higher
* Composer
* Laravel 8.x or higher
* Docker (optional, for containerization)
* MySQL or any other supported database

### Installation

1. Clone the repo

* git clone https://github.com/hafizmar/laravel-microservice.git
* cd api-gateway-laravel-microservices

2. Set up API Gateway

* cd api-gateway
* composer install
* cp .env.example .env
* php artisan key:generate

3. Set up Microservices

* Repeat the following steps for each microservice

* cd ../profile
* composer install
* cp .env.example .env
* php artisan key:generate

4. Run Migrations

* php artisan migrate

### Contributing

Contributions are welcome! Please submit a pull request or open an issue to discuss any changes or improvements.

### License 

This project is use for assessment only.