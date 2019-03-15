<html>
<head>
   <meta charset="UTF-8">
</head>

<body>

<form action="mission_2-1.php" method="POST">
  名前:<br />
  <input type="text"name="name"size="40" value=" "><br />
  コメント:<br />
  <input type="text"name="comment"size="40" value=" "><br />
  <br />
  <input type="submit" value="送信" />
</form>

</body>
</html>


<?php

   $filename='mission_2-1.txt';
   if(empty($_POST['name'])!=true){
     $name=$_POST["name"];
     $comment=$_POST["comment"];
     $time=date('Y')."年".date("m月d日 H.i.s");

     if(@file($filename)==false) $num=0;
     else $num=(int)(count(@file($filename)));
     $newdate=$num."<>".$name."<>".$comment."<>".$time."\n";
     $fp=fopen("mission_2-1.txt","a");
     fwrite($fp,$newdate);
     fclose($fp);
   }
?>