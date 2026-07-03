📌 Project Description

A vanilla PHP + MySQL authentication system.

Tech Stack: PHP, MySQL, HTML, CSS, XAMPP

📸Screenshots

<img width="1087" height="601" alt="image" src="https://github.com/user-attachments/assets/9b24187b-0661-47c8-9426-57353db3c29b" />

<img width="947" height="698" alt="image" src="https://github.com/user-attachments/assets/f67fa6c9-2400-465f-827b-e15dd78a5034" />


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
