<!DOCTYPE html>
 <html lang="ja">

 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>

 <body>
     <p>
         <?php
         $variable_name = ['名前' => '玉ねぎ', '値段' => 200, '生産地' => '北海道'];

       //  配列$user_namesの要素を1つずつ順番に出力する
         foreach ($variable_name as $key => $value) {
             echo "{$key}: {$value}<br>";
         }
         ?>
     </p>
 </body>

 </html>