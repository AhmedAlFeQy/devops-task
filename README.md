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

  - IP Address
      An IP address is a unique numerical identifier assigned to every device connected to a network that uses the Internet Protocol (IP) for communication. It is used to identify and communicate with devices on the network. IPv4 addresses are 32-bit addresses represented in dotted-decimal notation (e.g. 192.168.1.1), while IPv6 addresses are 128-bit addresses represented in hexadecimal notation (e.g. 2001:0db8:85a3:0000:0000:8a2e:0370:7334).
    
   -  MAC Address
    A Media Access Control (MAC) address is a unique identifier assigned to the network interface controller (NIC) of a device. It is used to identify devices on a network at the data link layer of the OSI model. MAC addresses are 48-bit addresses represented in hexadecimal notation (e.g. 00:0a:95:9d:68:16).
    
   - Switches
    A switch is a network device that connects devices together on a network. It operates at the data link layer of the OSI model and uses MAC addresses to forward packets between devices. Switches can be managed or unmanaged, and may support features such as VLANs, port mirroring, and Quality of Service (QoS).
    
   - Routers
    A router is a network device that connects multiple networks together, such as the Internet and a local area network (LAN). It operates at the network layer of the OSI model and uses IP addresses to forward packets between networks. Routers may support features such as NAT, VPN, and firewalling.
    
   - Routing Protocols
    Routing protocols are algorithms used by routers to determine the best path for forwarding packets between networks. Examples of routing protocols include OSPF, BGP, and RIP.
    
   - Connecting to a Cloud Instance from a Remote 
     
      - To connect to a cloud instance from a remote machine, you can use the SSH (Secure Shell) protocol. Here are the steps to connect using SSH:
      
      - Obtain the IP address or hostname of the cloud instance.
      
      - Open a terminal or command prompt on your local machine.
      
      - Enter the following command, replacing username with your username and hostname or IP address with the hostname or IP address of the cloud instance:
        
      
              ssh username@hostname
      
        Enter your password when prompted
        
        OR
     
      
              ssh -i privateKey.pem username@IPAddress
      
        OR
                
              ssh -i privateKey.pem username@DNS name 
          
      
  
