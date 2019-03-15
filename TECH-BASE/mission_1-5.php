<html>
<head>
   <meta charset="UTF-8">
</head>
<body>
   <form action="mission_1-5.php" method="POST">
      <input type="text" name="name" size="40" value="コメント">
      <input type="submit" value="送信">

   </form> 

   <?php

   if($_POST['name']=="完成！"){
   $filename='mission_1-5.txt';
   $fp=fopen($filename,'w');
   fwrite($fp,$_POST['name']);
   fclose($fp);
   echo "おめでとう";

   }elseif($_POST['name']!=" "){
   $filename='mission_1-5.txt';
   $fp=fopen($filename,'w');
   fwrite($fp, $_POST['name']);
   fclose($fp);
   }

   ?>
</body>
</html>