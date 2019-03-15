<?php

  $dsn = '';

  $user = '';

  $password = '';

  $pdo = new PDO($dsn,$user,$password,array(PDO::ATTR_ERRMODE=>

  PDO::ERRMODE_WARNING));

  $sql = $pdo -> prepare("INSERT INTO tbtest (id,name,comment) VALUES('3',:name,:comment)");

  $sql -> bindParam(':name',$name,PDO::PARAM_STR);

  $sql -> bindParam(':comment',$comment,PDO::PARAM_STR);

  $name = 'たける';

  $comment = '君の名前で僕を呼んで';//好きな名前、好きな言葉は自分で決める

  $sql -> execute();

?>