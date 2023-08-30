<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charaset="UTF-8">
        <title>PHP基礎編</title>
    </head>

    <body>
        <p>
            <?php

            class Food{
                private $name;
                private $price;

                public function __construct(string $name, int $price){
                    $this->name = $name;
                    $this->price = $price;
                }

                public function show_price(){
                    echo $this->price . "<br>";
                }
            }

            class Animal{
                private $name;
                private $height;
                private $weight;

                public function __construct(string $name, int $height, int $weight){
                    $this->name = $name;
                    $this->height = $height;
                    $this->weight = $weight;
                }

                public function show_heigh(){
                    echo $this->height . "<br>";
                }
            }

            //インスタンス化
            $food = new Food("potato" , 250);
            $animal = new Animal("dog", 60, 5000);

            //オブジェクトの読み出し
            print_r($food);
            echo "<br>";
            print_r($animal);
            echo "<br>";

            //メソッドの読み出し
            $food->show_price();
            $animal->show_heigh();
            ?>
        </p>
    <body>
</html>    