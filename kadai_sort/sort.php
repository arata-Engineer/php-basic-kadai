<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>sort</title>
 </head>
 
 <body>
 <p>
        <?php
        function sort_2way($array, $order) {
            if ($order) {
                echo '昇順にソートします。<br>';
                sort($array);
            } else {
                echo '降順にソートします。<br>';
                rsort($array);
            }

            foreach($array as $num) {
                echo $num . '<br>';
            }
        }

        // ソート対象の配列
        $nums = [15, 4, 18, 23, 10];

        // 昇順にソートする場合
        $order = true;
        sort_2way($nums, $order);

        echo '<br>'; // 区切りとしての改行を挿入

        // 降順にソートする場合
        $order = false;
        sort_2way($nums, $order);
        ?>
    </p>
 </body>
 
 </html>
