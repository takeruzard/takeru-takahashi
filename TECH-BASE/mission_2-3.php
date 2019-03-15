<html>
<head>
   <meta charset="UTF-8">
</head>

<body>

<form action="mission_2-3.php" method="POST">
  名前:<br />
  <input type="text"name="name"size="40" value=" "><br />
  コメント:<br />
  <input type="text"name="comment"size="40" value=" "><br />
  <br />
  <input type="submit" value="送信" /><br />
  <br />
</form>

<form action="mission_2-3.php" method="POST">
  削除対象番号:<br />
  <input type="text"name="delate"size="40" value=" "><br />
  <br />
  <input type="submit" value="削除"><br />
</form>

</body>
</html>

<?php

 $filename='mission_2-1.txt';
   if(empty($_POST['name'])!=true){
     $name=$_POST["name"];
     $comment=$_POST["comment"];
     $time=date('Y')."年".date("m月d日 H.i.s");

     $first = true;
     $data = @file($filename);
     $cnt = count($data);
     if($data!==false){
       $cnt = $cnt+1;
     }
     $newdate=$cnt."<>".$name."<>".$comment."<>".$time."\n";
     $fp=fopen("mission_2-1.txt","a");
     fwrite($fp,$newdate);
     fclose($fp);
   }

    $array=@file($filename);
    foreach ($array as $value){
      $date = explode("<>",$value);
      echo $date[0];
      echo $date[1];
      echo $date[2];
      echo $date[3];
      echo $date[4];
      echo "<br/>";
   }

  if(isset($_POST["delate"])){
    $delate = $_POST["delate"];
  }
   $fp = fopen($filename,"w");
   foreach ($array as $value){
     $date = explode("<>",$value);
  if($date[0] != $delate){
     fwrite($fp,$value );
  }else{
     fwrite($fp,"消去しました。\n");
  }
  }
     fclose($fp);
?>
