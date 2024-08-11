<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>sort</title>
 </head>
 
 <body>
    <p>
        <?php
            echo '昇順にソートします。';
        ?>
    </p>
    <p>
     <?php
        $ar1 = array('15' , '4' , '18' , '23' , '10');
        
        sort($ar1);
        foreach ($ar1 as $val) {
            echo $val . '<br>';
        }
        ?>
    </p>
    <p>
        <?php
            echo '降順にソートします。';
        ?>
    </p>
    <p>
        <?php
        $ar1 = array('15' , '4' , '18' , '23' , '10');
        
        rsort($ar1);
        foreach ($ar1 as $val) {
            echo $val . '<br>';
        }
        ?>
    </p>
 </body>
 
 </html>
