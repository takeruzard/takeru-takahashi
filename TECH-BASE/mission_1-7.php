<html>
<head>
   <meta charset="UFT-8">
</head>
<body>

   <?php

//テキストファイルのパス指定
   $filename='mission_1-6.txt';
//配列に格納
   $array=@file($filename);
   foreach ($array as $value){
   echo $value."<br/>\n";
   }

   ?>
</body>
</html>
