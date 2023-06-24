## MySQL
### Comandos
mysql --version

mysql --user root -p

mysql> show databases;
mysql> create database contacts_app;
mysql> use contacts_app;
mysql> CREATE TABLE contacts (id INT AUTO_INCREMENT PRIMARY KEY, name VARCHAR(255), phone_number VARCHAR(255));
mysql> SHOW TABLES;
mysql> DESCRIBE contacts;
mysql> DROP TABLE contacts;
mysql>INSERT INTO contacts (name, phone_number) VALUES("Antionio", "345343344");

mysql> select * from contacts;
mysql>UPDATE contacts SET name = "Nate" WHERE name = "Pepe"
mysql>DELETE FROM contacts where id = 3;
