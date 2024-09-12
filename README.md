## About Assignment
You are tasked with developing a user management system using the Laravel framework (version 10) that includes user registration, login functionality, and a dashboard to display registered user information. Additionally, you need to implement secure password storage using MD5 encryption and utilize Laravel Eloquent ORM for database operations

## Requirements:

# Install Laravel 10 

    composer create-project laravel/laravel:10.0^ assignment


# 1. User Registration Form:

    Create a user registration form with the following basic details:
    Full Name
    Email Address
    Password (MD5 encrypted)
    Confirm Password
    Date of Birth
    Gender
    Country, State, City (Implement dependable dropdowns for city, state, and country selection) - values should come from the database

# 2. Login Form:

    Develop a login form with the following fields:
    Email Address
    Password

# 3. Dashboard:

    Upon successful login, create a dashboard that displays the registered user's information:
    Full Name
    Email Address
    Date of Birth
    Gender
    Country
    State
    City

# 4. Logout Option:

    Implement a logout option that securely logs the user out of the system.

# 5. Email Notification:

    After successful user registration, send an email to the registered user with their username and password.

# 6. Database Integration:

    Utilize MySQL database for storing user information.
    Implement Laravel Eloquent ORM for interacting with the database.

# 7. Technical Considerations:

    Ensure that passwords are stored using MD5 encryption.
    Use Laravel's built-in validation features to validate form inputs.
    Implement middleware for securing routes and checking user authentication status.
    Follow best practices for Laravel development, including proper folder structure and code organization.
    Use Laravel eloquent ORM and relationships (avoid raw SQL queries)
