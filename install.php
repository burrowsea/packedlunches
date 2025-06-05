<?php
include_once("connection.php");

##Create Users Table

$stmt = $conn->prepare("DROP TABLE IF EXISTS tblusers;
CREATE TABLE tblusers 
(userid INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
role TINYINT(1),
username VARCHAR(50) NOT NULL,
email VARCHAR(70) NOT NULL,
password VARCHAR(100) NOT NULL,
surname VARCHAR(50) NOT NULL,
forename VARCHAR(100) NOT NULL,
house VARCHAR(20) NOT NULL)"
);
$stmt->execute();
$stmt->closeCursor();
echo("tblusers created");

#categories table

$stmt = $conn->prepare("DROP TABLE IF EXISTS categories
catname VARCHAR(40)
");
$stmt->execute();
$stmt->closeCursor();
echo("tblcategory created");

##Create Table for Items

$stmt = $conn->prepare("DROP TABLE IF EXISTS tblitems;
CREATE TABLE tblitems
(itemid INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100) NOT NULL,
description TEXT,
allergyinfo VARCHAR(255),
category VARCHAR(50),
FOREIGN KEY (category) REFERENCES categories(catname),
available BOOLEAN,
quantity INT(3) UNSIGNED)"
);
$stmt->execute();
$stmt->closeCursor();
echo("tblitems created");
