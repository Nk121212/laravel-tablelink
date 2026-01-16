<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

-   **[Vehikl](https://vehikl.com)**
-   **[Tighten Co.](https://tighten.co)**
-   **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
-   **[64 Robots](https://64robots.com)**
-   **[Curotec](https://www.curotec.com/services/technologies/laravel)**
-   **[DevSquad](https://devsquad.com/hire-laravel-developers)**
-   **[Redberry](https://redberry.international/laravel-development)**
-   **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

LARAVEL TABLELINK TECHNICAL TEST APPLICATION

<p align="center"> <img src="https://laravel.com/img/logomark.min.svg" alt="Laravel" height="100"> <img src="https://www.docker.com/wp-content/uploads/2022/03/vertical-logo-monochromatic.png" alt="Docker" height="100"> </p>
📋 TABLE OF CONTENTS
Project Overview

Technology Stack

Prerequisites

Installation Guide

Windows Installation

MacOS Installation

Linux Installation

Quick Start

Detailed Setup

Application Features

API Documentation

Testing

Troubleshooting

Project Structure

🎯 PROJECT OVERVIEW
This is a Laravel 12 web application developed for PT. Tablelink Digital Inovasi technical test. The application implements:

User Authentication & Authorization with two roles: Admin and User

Admin Dashboard with interactive charts (Line, Bar, Pie)

User Management with CRUD operations (Admin only)

Flight Information scraping from Tiket.com

Dockerized Deployment with MySQL, Nginx, and PHP-FPM

RESTful API endpoints

🛠 TECHNOLOGY STACK
Component Technology
Backend Framework Laravel 12
Database MySQL 8.0
Web Server Nginx
PHP Version 8.2
Containerization Docker & Docker Compose
Frontend Bootstrap 5, Chart.js
Authentication Laravel Session-based
Authorization Role-based (Admin/User)
📦 PREREQUISITES
Before installation, ensure you have the following:

Minimum System Requirements:
RAM: 4GB minimum (8GB recommended)

Storage: 10GB free space

OS: Windows 10/11, macOS 10.15+, or Linux

Required Software:
Docker Desktop (for Windows/Mac) or Docker Engine (for Linux)

Git (for cloning repository)

Composer (optional, for local development)

🚀 INSTALLATION GUIDE
WINDOWS INSTALLATION
Step 1: Install Docker Desktop on Windows
Download Docker Desktop:

Visit Docker Desktop for Windows

Download the installer for Windows

Install Docker Desktop:

powershell

# Run the installer as Administrator

# Follow the installation wizard

# Enable WSL 2 when prompted (recommended)

Enable WSL 2 (Recommended):

powershell

# Open PowerShell as Administrator

wsl --install

# Set WSL 2 as default

wsl --set-default-version 2
Configure Docker Desktop:

Open Docker Desktop

Go to Settings → Resources

Set Memory: 4GB minimum

Set CPUs: 2 minimum

Apply & Restart

Step 2: Install Git for Windows
Download Git:

Visit Git for Windows

Download and run the installer

Verify Installation:

cmd
git --version
docker --version
docker-compose --version
MACOS INSTALLATION
Step 1: Install Docker Desktop on Mac
Download Docker Desktop:

bash

# For Intel Macs

https://desktop.docker.com/mac/main/amd64/Docker.dmg

# For Apple Silicon (M1/M2/M3)

https://desktop.docker.com/mac/main/arm64/Docker.dmg
Install and Configure:

bash

# Move Docker to Applications

# Open Docker Desktop

# Grant necessary permissions

Install Homebrew (if not installed):

bash
/bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"
Install Git via Homebrew:

bash
brew install git
LINUX INSTALLATION (Ubuntu/Debian)
Step 1: Install Docker Engine
bash

# Update package index

sudo apt-get update

# Install prerequisites

sudo apt-get install -y \
 ca-certificates \
 curl \
 gnupg \
 lsb-release

# Add Docker's official GPG key

sudo mkdir -p /etc/apt/keyrings
curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo gpg --dearmor -o /etc/apt/keyrings/docker.gpg

# Set up the repository

echo \
 "deb [arch=$(dpkg --print-architecture) signed-by=/etc/apt/keyrings/docker.gpg] https://download.docker.com/linux/ubuntu \
 $(lsb_release -cs) stable" | sudo tee /etc/apt/sources.list.d/docker.list > /dev/null

# Install Docker Engine

sudo apt-get update
sudo apt-get install -y docker-ce docker-ce-cli containerd.io docker-compose-plugin

# Add user to docker group

sudo usermod -aG docker $USER

# Verify installation

docker --version
Step 2: Install Git
bash
sudo apt-get install -y git
⚡ QUICK START
If you want to get the application running quickly, follow these steps:

1. Clone the Repository
   bash
   git clone <repository-url>
   cd laravel-tablelink
2. Start the Application
   bash

# One command to start everything

docker-compose up -d --build 3. Access the Application
Main URL: http://localhost:8080

Login Credentials:

Admin: admin@tablelink.com / password

User: user@tablelink.com / password

🔧 DETAILED SETUP
Step 1: Clone and Prepare
bash

# Clone the repository

git clone <repository-url>
cd laravel-tablelink

# Check the project structure

ls -la
Step 2: Configure Environment
bash

# Copy environment file

cp .env.example .env

# Check important files exist

ls docker-compose.yml Dockerfile
Step 3: Build and Start Containers
bash

# Build and start all services

docker-compose up -d --build

# Check container status

docker-compose ps

# Expected output:

# Name Command State Ports

# ----------------------------------------------------------------

# laravel_app docker-php-entrypoint php-fpm Up 9000/tcp

# laravel_db docker-entrypoint.sh mysqld Up 0.0.0.0:3307->3306/tcp

# laravel_nginx nginx -g daemon off; Up 0.0.0.0:8080->80/tcp

Step 4: Install Dependencies
bash

# Install PHP dependencies inside container

docker-compose exec app composer install

# Generate application key

docker-compose exec app php artisan key:generate
Step 5: Setup Database
bash

# Run database migrations

docker-compose exec app php artisan migrate

# Seed database with default users

docker-compose exec app php artisan db:seed

# Verify database

docker-compose exec db mysql -utablelink -psecret tablelink -e "SHOW TABLES;"
Step 6: Set Permissions
bash

# Fix file permissions

docker-compose exec app chmod -R 777 storage bootstrap/cache
Step 7: Verify Installation
bash

# Check Laravel version

docker-compose exec app php artisan --version

# Check routes

docker-compose exec app php artisan route:list
🎮 APPLICATION FEATURES
🔐 Authentication & Authorization
Registration: New users can register (default role: User)

Login: Session-based authentication

Roles: Admin and User with different access levels

📊 Admin Dashboard
Access: http://localhost:8080/admin/dashboard (Admin login required)

Features:

Line Chart - Performance trends over time

Bar Chart - Category comparison

Pie Chart - Distribution analysis

User Management - Full CRUD operations

Flight Information - Scraped flight data

👥 User Management (Admin Only)
List users with pagination (10 users/page)

Update user information with validation

Soft delete users (sets deleted_at timestamp)

✈️ Flight Information
Scrapes flight data from Tiket.com with criteria:

Route: Jakarta (CGK) → Bali (DPS)

Time: Departure before 17:00

Class: Economy

Display: Data-table format with sorting/filtering

🔌 API DOCUMENTATION
Authentication Endpoints
Method Endpoint Description Access
GET /login Show login form Public
POST /login Authenticate user Public
GET /register Show registration form Public
POST /register Register new user Public
POST /logout Logout user Authenticated
Admin Endpoints (Admin only)
Method Endpoint Description
GET /admin/dashboard Admin dashboard view
GET /admin/chart-data Chart data (JSON)
GET /admin/users List users (paginated)
PUT /admin/users/{id} Update user
DELETE /admin/users/{id} Soft delete user
GET /admin/flights Flight information page
GET /admin/flights/data Flight data (JSON)
User Endpoints
Method Endpoint Description Access
GET /user/dashboard User dashboard view All Users
🧪 TESTING
Run All Tests
bash
docker-compose exec app php artisan test
Run Specific Test Suites
bash

# Authentication tests

docker-compose exec app php artisan test tests/Feature/AuthTest.php

# User management tests

docker-compose exec app php artisan test tests/Feature/UserManagementTest.php

# Dashboard tests

docker-compose exec app php artisan test tests/Feature/DashboardTest.php
Test Coverage
bash

# Generate test coverage report

docker-compose exec app php artisan test --coverage
🔧 TROUBLESHOOTING
Common Issues and Solutions

1. Docker Containers Not Starting
   bash

# Check Docker Desktop is running

# Windows/Mac: Open Docker Desktop

# Linux: sudo systemctl status docker

# Check if ports are in use

netstat -ano | findstr :8080 # Windows
sudo lsof -i :8080 # Mac/Linux 2. Port Conflicts
If port 8080 or 3307 is already in use:

bash

# Edit docker-compose.yml and change ports:

# nginx: ports: - "8081:80" # Change 8080 to 8081

# db: ports: - "3308:3306" # Change 3307 to 3308

3. Database Connection Error
   bash

# Check database container is running

docker-compose ps

# Check database logs

docker-compose logs db

# Test database connection

docker-compose exec db mysql -utablelink -psecret tablelink -e "SELECT 1;" 4. Permission Errors
bash

# Fix storage permissions

docker-compose exec app chmod -R 777 storage bootstrap/cache 5. Slow Performance on Windows
bash

# Use WSL 2 backend in Docker Desktop

# Increase Docker memory to 8GB

# Or run development without Docker:

docker-compose up -d db
php artisan serve --port=8000
Docker Commands Cheatsheet
bash

# Start all services

docker-compose up -d

# Stop all services

docker-compose down

# Stop and remove volumes

docker-compose down -v

# View logs

docker-compose logs -f app
docker-compose logs -f nginx
docker-compose logs -f db

# Rebuild containers

docker-compose up -d --build --force-recreate

# Enter container

docker-compose exec app bash
docker-compose exec db bash

# Check container status

docker-compose ps

# Check resource usage

docker stats
📁 PROJECT STRUCTURE
text
laravel-tablelink/
├── app/
│ ├── Http/
│ │ ├── Controllers/
│ │ │ ├── Admin/
│ │ │ │ ├── DashboardController.php
│ │ │ │ └── UserController.php
│ │ │ ├── FlightController.php
│ │ │ └── AuthController.php
│ │ └── Middleware/
│ │ └── CheckAdmin.php
│ └── Models/
│ └── User.php
├── bootstrap/
│ └── app.php
├── config/
├── database/
│ ├── migrations/
│ │ └── 2024_01_01_000001_create_users_table.php
│ └── seeders/
│ └── DatabaseSeeder.php
├── docker/
│ ├── nginx/
│ │ └── default.conf
│ ├── php/
│ │ └── php.ini
│ └── mysql/
│ └── my.cnf
├── public/
├── resources/
│ └── views/
│ ├── admin/
│ │ └── dashboard.blade.php
│ ├── auth/
│ │ ├── login.blade.php
│ │ └── register.blade.php
│ ├── user/
│ │ └── dashboard.blade.php
│ └── layouts/
│ └── app.blade.php
├── routes/
│ ├── web.php
│ └── api.php
├── storage/
├── tests/
├── .env.example
├── .gitignore
├── artisan
├── composer.json
├── docker-compose.yml
├── Dockerfile
└── README.md
📞 SUPPORT
Application Issues
Check the Troubleshooting section above

Verify all containers are running: docker-compose ps

Check application logs: docker-compose logs app

Docker Issues
Ensure Docker Desktop is running

Check Docker resources allocation

Verify Docker version: docker --version

Database Issues
Check MySQL container status

Verify credentials in .env file

Test connection: docker-compose exec db mysql -u tablelink -psecret tablelink

📝 ADDITIONAL NOTES
Development without Docker (Faster)
For faster development on Windows/Mac:

bash

# Start only database

docker-compose up -d db

# Run Laravel with PHP server

php artisan serve --host=127.0.0.1 --port=8000

# Update .env for localhost

DB_HOST=127.0.0.1
DB_PORT=3307
Production Deployment
For production deployment:

Update .env with production values

Enable HTTPS with SSL certificates

Configure proper server hardening

Set up backup strategies

Monitor with logging and alerts

Security Considerations
Passwords are hashed using Laravel Hash

SQL injection prevented with Eloquent ORM

CSRF protection enabled

Input validation on all requests

Role-based middleware protection
