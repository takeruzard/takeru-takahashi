<?php

  $dsn = '';

  $user = '';

  $password = '';

  $pdo = new PDO($dsn,$user,$password,array(PDO::ATTR_ERRMODE=>

  PDO::ERRMODE_WARNING));

  $sql = "CREATE TABLE IF NOT EXISTS tbtest"

  ."("

  ."id INT,"

  ."name char(32),"

  ."comment TEXT"

  .");";

  $stmt = $pdo->query($sql);