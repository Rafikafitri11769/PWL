<!DOCTYPE HTML>
<html>
    <body>
        <?php
        $gust_str = "Sunrise di puncak gunung sangat indah";
        //Menghitung dan menampilkan jumlah string pada kata
        echo str_word_count($gust_str);
        ?>
    </body>
<br>
<br> 
</html>

<!DOCTYPE HTML>
<html>
    <body>
        <?php
        $gust_str = "Saya sudah lelah tolong berikan saya semangat";
        //Menampilkan string yg di replace
        echo str_replace("semangat", "uang", $gust_str);
        ?>
    </body>
<br> <br>
</html>

<!DOCTYPE HTML>
<html>
    <body>
        <?php
        $gust_str = "Jangan sambat mari semangat";
        //Menampilkan string yg di replace
        echo strrev($gust_str)
        ?>
    </body>
</html>