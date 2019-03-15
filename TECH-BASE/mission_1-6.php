<html>
<head>
   <meta charset="UTF-8">
</head>
<body>
   <form action="mission_1-6.php" method="POST">
      <input type="text" name="name" size="40" value="コメント">
      <input type="submit" value="送信">
   </form> 

   <?php

   $filename=('mission_1-6.txt');
   $fp = fopen("mission_1-6.txt", "a");
   fwrite($fp, $_POST["name"]."\n");
   fclose($fp);

   ?>
</body>
</html>