# Simple MVC

## Steps

1. **Clone the repo from Github.**
    ```
    git clone https://github.com/bugBuster42/AHLS-Association.git
    ```

3. **Run composer install.**
   
    Navigate to the cloned repository directory and run
   
    `composer install`


5. **Create _config/db.php_ from _config/db.php.dist_ file and add your DB parameters.**
    Don't delete the _.dist_ file, it must be kept.

    In `db.php`, set your database parameters:
    ```php
    define('APP_DB_HOST', 'your_db_host');
    define('APP_DB_NAME', 'your_db_name');
    define('APP_DB_USER', 'your_db_user_wich_is_not_root');
    define('APP_DB_PASSWORD', 'your_db_password');
    ```

6. **Import _database.sql_ in your SQL server,**
   
    First, create a new MySQL database named as per your db.php configuration.
    Then, import the database.sql file. This can be done in two ways:
    - Manually using MySQL command line:
      `mysql -u your_db_user -p your_db_name < path/to/database.sql`
      Replace your_db_user, your_db_name, and path/to/database.sql with your actual database username, the database name you created
    - Using the migration.php script:
      Run the script from your project root to import the database.sql file:
      `php migration.php`


8. **Run the internal PHP webserver with:**
   
    `php -S localhost:8000 -t public/`
   
    The option -t with public as parameter means your localhost will target the /public folder.

10. `Go to localhost:8000` with your favorite browser.


## Windows Users  

If you develop on Windows, you should edit you git configuration to change your end of line rules with this command :

`git config --global core.autocrlf true`



## Run it on docker

If you don't know what is docker, skip this chapter. ;)

Otherwise, you probably see, this project is ready to use with docker.

To build the image, go into the project directory and in your CLI type:

```
docker build -t simple-mvc-container .
```

then, run it to open it on your localhot :

```
docker run -i -t --name simple-mvc  -p 80:80 simple-mvc-container
```
