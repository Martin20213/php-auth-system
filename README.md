📌 Project Description

A vanilla PHP + MySQL authentication system implementing user registration, login, email verification, password reset, and session-based authentication.

Tech Stack: PHP, MySQL, HTML, CSS, XAMPP

📸Screenshots



⚙️ Installation & Setup

Follow these steps to run the project locally:

1. Clone the repository

Clone the project into your XAMPP htdocs directory:

git clone https://github.com/Martin20213/php-auth-system.git

Project location should be:

C:\xampp\htdocs\php-auth-system
2. Start local server

Open XAMPP Control Panel and start:

Apache
MySQL
3. Import database

Open phpMyAdmin:

http://localhost/phpmyadmin
Go to SQL tab
Run the SQL file located in:
/sql/database.sql

This will:

create the database
create required tables (e.g. users)
insert default admin user
4. Run the project

After setup, the application will be available at:

http://localhost/php-auth-system/public/
🧠 Notes
Make sure Apache and MySQL are running before accessing the project
If the database connection fails, check your config file inside the project
Default admin user is created automatically via database.sql