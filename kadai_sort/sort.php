<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset = "UTF-8">
    <title>PHP基礎編</title>
  </head>

  <body>
    <p>
      <?php
        function sort_2away($order){
          $nums =[15 , 4 , 18 , 23 , 10];
          $order === TRUE || FALSE;

          if($order === TRUE){
            sort($nums);
            echo '昇順にソートします。<br>';
            foreach($nums as $array){
              echo $array . '<br>';
            }
          } else{
            rsort($nums);
            echo '降順にソートします。<br>';
            foreach($nums as $array){
              echo $array . '<br>';
            }
          }
        }
        
        sort_2away(TRUE);
        sort_2away(FALSE);
      ?>
    </p>
  </body>
</html>