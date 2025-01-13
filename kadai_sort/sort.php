<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset = "UTF-8">
    <title>PHP基礎編</title>
  </head>

  <body>
    <p>
      <?php
        function sort_2way($nums , $order){
          if($order === TRUE){
            sort($nums);
            echo '昇順にソートします。<br>';
            foreach($nums as $array){
              echo $array . '<br>';
            }
          } elseif($order === FALSE){
            rsort($nums);
            echo '降順にソートします。<br>';
            foreach($nums as $array){
              echo $array . '<br>';
            }
          }
        }
        
        $nums =[15 , 4 , 18 , 23 , 10];
        sort_2way($nums , TRUE);
        sort_2way($nums , FALSE);
      ?>
    </p>
  </body>
</html>
