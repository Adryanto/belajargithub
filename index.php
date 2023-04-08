<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Belajar PHP Pertama</h1>
    <?php
        echo "You and i";
        echo "<br>";
        echo "<h1>Variabel</h1>";
        $data1="data pertama";
        $data2="data kedua";
        $data3=100;
        $data4=20.5;
        //Komentar 1 baris
        /*
            Komentar lebi
            dari 1 baris
            shortcut comment dan uncomment
            (blok kemudian tekan CTRL /)
        */
        echo $data1." dan ".$data2." ".$data3." + ".$data4;
        echo "Operator Aritmatika <br>";
        echo "$data3 * $    data4 = ".($data3*$data4);
        echo "Operator pembanding<br>";
        echo "$data3 == $data4 = <br>";
        if ($data3==$data4){
            echo "$data3==$data4(sama)";
        }else{
            echo "$data3!=$data4(beda)";
        }
    ?>
</body>
</html>