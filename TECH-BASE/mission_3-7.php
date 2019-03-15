<?php

  $dsn = '';

  $user = '';

  $password = '';

  $pdo = new PDO($dsn,$user,$password,array(PDO::ATTR_ERRMODE=>

  PDO::ERRMODE_WARNING));

  $id = 1;

  $name = "たくみ";

  $comment = "夢は近づくと目標に変わる";

  $sql = 'update tbtest set name=:name,comment=:comment where id=:id';

  $stmt = $pdo->prepare($sql);

  $stmt->bindParam(':name',$name,PDO::PARAM_STR);

  $stmt->bindParam(':comment',$comment,PDO::PARAM_STR);

  $stmt->bindParam(':id',$id,PDO::PARAM_INT);

  $stmt->execute();

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