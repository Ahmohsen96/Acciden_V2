# Accident

## Overview

This the second version of task i prefer to make it with filament and using livewire to make simple view 

## Installation Steps

1. **Clone the Repository**

   ```bash
   git clone [https://github.com/Ahmohsen96/Accident_V2.git)
   cd your-repository

   Install Dependencies

2-Ensure you have Composer installed. Then run:
composer install

3-Setup Environment File
Copy the example environment file and set up your database connection:
cp .env.example .env

4-Edit the .env file to configure your database connection:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=accident_reportv2
DB_USERNAME=your_username
DB_PASSWORD=your_password
Generate Application Key

5-Run the following command to generate your application key:
php artisan key:generate

6-Migrate Database
Run the migrations to create the required tables:
php artisan migrate

7-Serve the Application
You can serve the application using the built-in PHP server:
php artisan serve
Access the application at http://localhost:8000.

8-open this url in your browser 
http://127.0.0.1:8000/1/login
then input this creadintals 
admin@example.com
123456789

Approach and Thought Process
I selected a task management application as it simple .
I created project and related configrations
I design the table that i will record form fields on it
I used filament  


Database Schema Design
accident_reports Table: Contains the following fields:
 Schema::create('accident_reports', function (Blueprint $table) {
             $table->id();
            $table->date('accident_date');
            $table->time('accident_time');
            $table->string('region');
            $table->string('location');
            $table->string('injured_employee_name');
            $table->string('department');
            $table->text('description');
            $table->text('loss')->nullable();
            $table->text('immediate_causes')->nullable();
            $table->text('underlying_causes')->nullable();
            $table->text('root_causes')->nullable();
            $table->text('recommendations')->nullable();
            $table->string('acknowledgement_name');
            $table->string('acknowledgement_signature');
            $table->date('acknowledgement_date');
            $table->timestamps();

Assumptions or Challenges
Assumptions:
Users are familiar with basic CRUD operations.
The application will be accessed by a single user for this simple version.

Challenges:
Implementing proper validation for task input fields to ensure data integrity.
Ensuring a responsive and user-friendly UI while keeping the code maintainable.

