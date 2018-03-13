<?php 
 session_start();
 require('dbconnect.php');

 // var_dump($_GET['tweet_id'])
if (isset($_GET)) {
  $sql = 'SELECT * FROM `tweets` WHERE `tweet_id`=?';
  $data = array($_GET['tweet_id']);
  $stmt = $dbh->prepare($sql);
  $stmt->execute($data);
  $tweet_edit = $stmt->fetch(PDO::FETCH_ASSOC);
}

// var_dump($tweet_edit);



 ?>

 <!DOCTYPE html>
 <html lang="ja">
 <head>
   <meta charset="UTF-8">
   <title>edit.php</title>
 </head>
 <body>
   <div>
     <form action="" method="POST">
      <!-- SELECT文dでとってきた値をデフォルトで設置しておく -->
       <input type="text" name="tweet" value="<?php echo $tweet_edit['tweet']; ?>">
       <input type="submit" value="更新">
     </form>
   </div>
 </body>
 </html>