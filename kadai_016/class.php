<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset = "UTF-8">
    <title>PHP基礎編</title>
  </head>

  <body>
    <p>
      <?php
      //クラスの定義
      class Food{
        //プロパティの定義
        private $name;
        private $price;

        //コンストラクタの定義
        public function __construct(string $name , int $price){
          $this -> name = $name;
          $this -> price = $price;
        }

        //メソッドの定義
        public function show_price(){
          echo $this -> price . '<br>';
        }
      }

      //クラスの定義
      class Animal{
        //プロパティの定義
        private $name;
        private $height;
        private $weight;

        //コンストラクタの定義
        public function __construct(string $name , int $height , int $weight){
          $this -> name = $name;
          $this -> height = $height;
          $this -> weight = $weight;
        }

        //メソッドの定義
        public function show_height(){
          echo $this -> height . '<br>';
        }
      }

      //potatoのインスタンス化(初期化)
      $potato = new Food('potato' , 250);
      print_r($potato);
      echo '<br>';
      //dogのインスタンス化(初期化)
      $dog = new Animal('dog' , 60 , 5000);
      print_r($dog);
      echo '<br>';

      //potatoのメソッド実行
      $potato -> show_price();
      //dogのメソッド実行
      $dog -> show_height();
      ?>
    </p>
  </body>
</html>