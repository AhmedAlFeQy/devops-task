# Devops-Task

Sub-task #1 Linux Server Simulation:
  - install apache
    
               sudo apt update
               sudo apt install apache2 -y
  - install mysql

                sudo apt install mysql-server -y 
                sudo mysql
                mysql> ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'password';
                mysql> Exit

  - install php

               sudo apt install php libapache2-mod-php php-mysql

  - Configure Apache to serve the website from the /var/www/html/ directory. (by default apache serve this directory  )
  - Create a simple website that displays the message &quot;Hello World!&quot; when accessed through a web
browser
![helloworld](https://github.com/AhmedAlFeQy/devops-task/assets/95620707/12a0ca5e-a8e1-4b71-a5fc-fc191f144834)

  - Configure MySQL to create a new database, user, and password for the website.

              sudo mysql
              mysql> CREATE DATABASE user_database;
              mysql> CREATE USER 'user'@'%' IDENTIFIED BY 'password';
              mysql> GRANT ALL ON user_database.* TO 'user'@'%';
              mysql> Use user_database;
              mysql> CREATE TABLE visitors (
                id INT(11) NOT NULL AUTO_INCREMENT,
                ip_address VARCHAR(255) NOT NULL,
                timestamp TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
                PRIMARY KEY (id)
              );
              mysql> Exit

  - Modify the website to use the newly created database to display a message that includes the visitor&#39;s
IP address and the current time.

    - show on file index.php
    - secrets to connect my sql in config.php which include (eplace your_username, your_password, and your_database with the actual values for your MySQL setup.)
          
                        <?php
                          $host = 'localhost';
                          $username = 'your_username';
                          $password = 'your_password';
                          $database = 'your_database';
                        ?>
                          
  - Test the website by accessing it through a web browser and verifying that it displays the expected
message.
![test](https://github.com/AhmedAlFeQy/devops-task/assets/95620707/782c1238-4c27-4e00-b95f-f3fcf0a7b058)

Sub-task #2 Git &amp; GitHub:
  - Initialize a new Git repository on your local machine. ( run this command in the project directory)

                      git init
  - Create a (.gitignore) file to exclude any sensitive files (like configuration files with passwords).
  - Commit your Markdown documentation file in the Git repository.
  - Create a new repository on GitHub and push your local repository to GitHub.

                      git add README.md
                      git commit -m "first commit"
                      git branch -M main
                      git remote add origin https://github.com/AhmedAlFeQy/devops-task.git
                      git push -u origin main

Sub-task #3 Networking Basics:
