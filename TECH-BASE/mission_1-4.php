<form action="mission_1-4.php" method="POST">
</p>
<p>
<input type="text" name="comment" size="40" value="コメント">
<input type="submit" value="送信">
</p>
</form> 

<?php
  $comment = $_POST["comment"];

  echo $comment."を受け付けました。";

  ?>