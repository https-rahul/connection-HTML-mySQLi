# Connection HTML-mySQLi using php
This repo is to establish connection between HTML form and mySQLi using PHP

**HTML**<br/>
Form tag needs to have
```
<form action="connect.php" method="post">
```
this will send the form credentials to connect.php which needs to be relatively linked.

**PHP**<br/>
PHP will declare form elements locally at the beginning
```
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$password = $_POST['password'];
$number = $_POST['number'];
```
upon that we will make connection between mySQLi and php using following syntex:
```
$conn = new mysqli('<hostname>','<username>','<password>','<databaseName>');
```
the following syntex will push the form entries to desired table in the database if connection was made:
```
$stmt = $conn->prepare("insert into <tablename>(firstName, lastName, gender, email, password, number) values(?, ?, ?, ?, ?, ?)");
```
