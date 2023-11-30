# AHLS association Project

## Description
This project involved revamping the outdated website of the AHLS Neighborhood Association. The focus was on creating a modern, informative website to better serve the community and enhance the association's online presence.

## Getting Started

These instructions will guide you on how to get a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites
- PHP 7.4 or higher
- MySQL
- Composer

## Steps

1. **Clone the repository**
    ```
    git clone https://github.com/bugBuster42/AHLS-Association.git
    ```

2. **Install PHP Dependencies**
   
    Navigate to the cloned repository directory:
    ```
    cd AHLS-Association
    ```
    and run:
    ```
    composer install
    ```


3. **Database Configuration**
To set up the database for the project, follow these steps

    **Create a MySQL Database :**
   
   First, create a new MySQL database for the project. You can name it as you like, for example, `ahls_db`
  
     **Open your Terminal :**
   
   Type the following command
   ```
    mysql -u root -p
   ```
   
     You will be prompted to enter the password for the MySQL `root` user.
    Enter it, and press Enter.
       
     **Create the Database :**
   
     Once connected to MySQL, create the database by executing
   ```
   CREATE DATABASE ahls_db;
   ```
     **Exit MySQL :**
   
     To leave the MySQL interface, type
   ```
   exit;
    ```
- **Configure Database Credentials**
  - Copy `config/db.php.dist` to `config/db.php`.
  - In `db.php`, set your database parameters:
    ```
    define('APP_DB_USER', 'user');
    define('APP_DB_PASSWORD', 'password');
    define('APP_DB_HOST', 'localhost');
    define('APP_DB_NAME', 'database_name');

    ```
  - Replace `localhost`, `database_name`, `user`, and `password` with your actual database host, name, username, and password.

- **Import `database.sql` in Your SQL Server**
  - First, create a new MySQL database named as per your `db.php` configuration.
  - Then, import the `database.sql` file. This can be done in two ways:
    - **Manually using MySQL Command Line**:
      ```
      mysql -u your_db_user -p your_db_name < path/to/database.sql
      ```
    - **Using the `migration.php` Script**:
      ```
      php migration.php
      ```

4. **Run the Application**
- Start the internal PHP webserver with:
  ```
  php -S localhost:8000 -t public/
  ```
- The option `-t public` means your localhost will target the `/public` folder.

5. **Access the Application**
- Open `localhost:8000` in your browser.



