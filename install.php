<?php
require "config.php";
// $connection = new PDO(data source name, username, password, options);

$connection = new PDO("mysql:host=$host", $username, $password, $options);

try {
  $connection = new PDO("mysql:host=$host", $username, $password, $options);
  $sql = file_get_contents("data/init.sql");
  $connection->exec($sql);
  echo "Database and table users created successfully.";
} catch (PDOException $error) {
  echo $sql . "<br>" . $error->getMessage();
}