Job Search Platform.

A modern web platform for job searching and posting built with Laravel and Tailwind CSS.

🚀 Features

Job search with filters
Job posting for employers
Tag system for categorization
User authentication
Responsive design

🛠 Tech Stack

Backend: PHP 8.2+, Laravel 11
Frontend: Blade, Tailwind CSS, Vite
Database: MySQL/SQLite
Testing: Pest PHP

📋 Requirements

PHP >= 8.2
Composer
Node.js >= 16
MySQL or SQLite

⚡ Installation
bash# Clone repository
git clone https://github.com/dianakerekesha/job-search.git
cd job-search

# Install dependencies
composer install
npm install

# Setup environment
cp .env.example .env
php artisan key:generate

# Configure database in .env file
DB_CONNECTION=mysql
DB_DATABASE=job_search
DB_USERNAME=your_username
DB_PASSWORD=your_password

# Run migrations
php artisan migrate
php artisan db:seed

# Build assets
npm run dev

# Start server
php artisan serve
Visit: http://localhost:8000
🗃 Database

users - system users
employers - company profiles
jobs - job listings
tags - skill/category tags
job_tag - pivot table

🎯 Main Routes

/ - homepage
/jobs - all jobs
/jobs/create - post new job
/search - search jobs
/login - user login
/register - user registration

🧪 Testing
bashphp artisan test
🚀 Production
bash# Optimize for production
php artisan config:cache
php artisan route:cache
php artisan view:cache
npm run build

GitHub: @dianakerekesha
