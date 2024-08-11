<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>sort</title>
 </head>
 
 <body>
    <p>
     <?php
     function sort_1($array, $order) {

        if ($order) {
            echo '昇順にソートします。<br>';
            sort($array);
        }else {
            echo '降順にアソートします。<br>';
            rsort($array);
        }

        foreach($array as $num) {
            echo $num . '<br>';
        }
     }
     $nums = [15 , 4 , 18 , 23 , 10];  // 関数を定義する
     $order = true; //　昇順にソートする

     sort_1($nums , $order);

     $order = false; //　降順にアソートする
     
     sort_1($nums , $order);
        ?>
    </p>
 </body>
 
 </html>
