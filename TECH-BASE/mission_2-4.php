<?php
  $filename='mission_2-1.txt';
  if(isset($_POST['name'])){
    $name=$_POST["name"];
    $comment=$_POST["comment"];
    $time=date('Y')."年".date("m月d日 H.i.s");

    if($_POST['edit2']==""){
      $first = true;
      $data = @file($filename);
      $cnt = count($data);
      if($data!==false){
        $cnt = $cnt+1;
      }
      $newdata=$cnt."<>".$name."<>".$comment."<>".$time."\n";
      $fp=fopen("mission_2-1.txt","a");
      fwrite($fp,$newdata);
      fclose($fp);
    }
  }

    $array=@file($filename);

  if(isset($_POST["delate"])){
    $delate = $_POST["delate"];
  }
  if(isset($_POST["edit"])){
    $edit = $_POST["edit"];
  }
  
  if(isset($_POST["edit2"])){
    $edit2 = $_POST["edit2"];
  }

  $fp = fopen($filename,"w");
  foreach ($array as $value){
    $data = explode("<>",$value);
    if($data[0] == $edit){
       $name2 = $data[1];
       $comment2 = $data[2];
      //nameとコメント取得
    }
    if($data[0] == $edit2){
      fwrite($fp,$newdata=$edit2."<>".$name."<>".$comment."<>".$time."\n");
      //上書き
    }else if($data[0] != $delate){
      fwrite($fp,$value);
    }else{
      fwrite($fp,"消去しました。\n");
    }
  }
     fclose($fp);

?>

<html>
<head>
   <meta charset="UTF-8">
</head>

<body>

<form action="mission_2-4.php" method="POST">
  名前:<br />
  <?php echo '<input type="text"name="name"size="40" value="'.$name2.'"><br />' ?>
  コメント:<br />
  <?php echo '<input type="text"name="comment"size="40" value="'.$comment2.'"><br />'?>
  編集番号:<br />
  <?php echo '<input type="hidden"name="edit2"size="40" value="'.$edit.'"><br />'?>
  <br />
  <input type="submit" value="送信" /><br />
  <br />
</form>

<form action="mission_2-4.php" method="POST">
  削除対象番号:<br />
  <input type="text"name="delate"size="40" value=" "><br />
  <br />
  <input type="submit" value="削除"><br />
</form>

<form action="mission_2-4.php" method="POST">
  編集番号：<br />
  <input type="text"name="edit"size="40" value=" "><br />
  <br />
  <input type="submit" value="編集する"><br />
</form>
</body>
</html>

<?php 
    $array=@file($filename);
    foreach ($array as $value){
      $data = explode("<>",$value);
      echo $data[0];
      echo $data[1];
      echo $data[2];
      echo $data[3];
      echo $data[4];
      echo "<br/>";
   }
?>