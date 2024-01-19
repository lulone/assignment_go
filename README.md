# assignment_go
To run locally:
1. For the database, I used MySQL that is available along with XAMP:
- Run the Apache and MySQL module on the xampp control pannel.
- Access https://localhost/phpmyadmin/ and create a database.
- Configure the config.php file in the config folder according to the information of the just created database.
- Run the dbseed.php file or use the database.sql file in the database folder to create a table containing our data.

2. For the backend, I used pure PHP:
- Open the terminal and cd to the back_end folder.
- Run the composer install command line to download the dependencies.
- Run the command php -S 127.0.0.1:8000 -t public to start the php server on port 8000.

3. For the frontend, I used HTML, CSS and JavaScript:
- Open the index.html file on a browser or run it with the live server extension on Visual Studio Code.
