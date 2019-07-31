# Thank You Next
Thank You Next is a simple webapp created as a task management tool. This application allows users to create and store to-do lists in a location where they will be able to log in and review at any time.

## Index
* [Getting Started](#Getting-Started)
* [How It Works](#How-It-Works)
* [Contributing Guidelines](#Contributing-Guidelines)
* [Authors](#Authors)
* [License](#License)

## Getting Started
### 1. Setting Up Apache
Update and install apache in your local package by using this command on the terminal:
```
$ sudo apt update
$ sudo apt install apache2
```
Afterwards you can check whether Apache is running on your system by typing this command:
```
$ sudo systemclt status apache2
```

### 2. Installing MariaDB
Install mariadb-server from the command line:
```
$ sudo apt install mariadb-server
```
Check whether mariadb is running on your system:
```
$ sudo systemclt status mariadb
```
Then run the mariadb secure installation:
```
$ sudo mysql_secure_installation
```
Then just answer (Yes) to all questions.


### 3. Setting up the Database
After finishing installtion of MariaDB, you need to set up the database.
First login to root user:
```
$ mysql -u root -p
```
**root** user default password is "empty" so just press enter afterwards.
Then run the .sql script which you can find [here](https://github.com/kenaszogara/POSS107G08/blob/master/admin.sql)
and execute it with this line of code
```
$ mysql> source location\to\sql\script;
```
Then a user called **admin** should be available on your mariadb with privileges of the **root** user and the password of *admin*. 
Then just log out and login with the **admin** user.
```
$ mysql -u admin -p
```
Then create a databse called *user* with the tables *accounts* and *tasks*
```
mysql> CREATE DATABASE user;
mysql> USE user;
```
Create table *accounts*:
```
mysql> CREATE TABLE accounts (
  user_id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(100),
  pass VARCHAR(100),
  email VARCHAR(100)
  );
```
Create table *tasks*:
```
mysql> CREATE TABLE tasks (
  id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  description VARCHAR(100),
  user_id MEDIUMINT NOT NULL
);
```
Then you need to add a foreign key from *accounts.user_id* to the tasks *tasks.user_id*:
```
mysql> ALTER TABLE tasks
  ADD FOREIGN KEY (user_id) REFERENCES accounts (user_id);
```
And now you are done, and your db is ready to go!

### 4. Clone Repository to Apache root/folder 
1. [Clone](https://help.github.com/en/articles/cloning-a-repository) this repository.
2. Put everything(copy and replace) under /var/www/html/*.
3. Done!

## How It Works
* Utilizing Linux as our host machine, we coded in PHP, HTML, CSS, and JS for the to-do list application.
* A SQL database was established using MariaDB to store user accounts and users' tasks.
* Apache 2 was used as the web server for our web application.

## Contributing Guidelines
This is the final version of our project but we would appreciate feedback of any kind that will help us improve in any aspect of our execution of this project.

## Authors
#### Group Introduction (POSS107G08)
We are a group of university students doing a project for our Practice of Open Source Software course. This course requires us to create a web application and because we wanted to make something practical that students like us will find useful, we made a to-do list. 
* **Wendy Narmada** - *IIT-2SE* - [wendynarmada](https://github.com/wendynarmada)
* **Zogara Kenas** - *IIT-3SE* - [kenaszogara](https://github.com/kenaszogara)
* **Hannah Fakatou** - *IIT-3AI* - [Langi17](https://github.com/langi17)

## License
Thank You Next is released under [MIT License](https://opensource.org/licenses/MIT).
