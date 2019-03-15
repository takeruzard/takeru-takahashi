<html>
<head>
   <meta charset="UFT-8">
</head>
<body>

<?php

  $dsn = '';

  $user = '';

  $password = '';

  $pdo = new PDO($dsn,$user,$password,array(PDO::ATTR_ERRMODE=>

  PDO::ERRMODE_WARNING));

  $sql = 'SELECT * FROM tbtest';

  $stmt = $pdo->query($sql);

  $result = $stmt->fetchAll();

  foreach ($result as $row){

    //$rowの中にはテーブルのカラム名が入る

    echo $row['id'].',';

    echo $row['name'].',';

    echo $row['comment'].'<br>';

  }

?>
