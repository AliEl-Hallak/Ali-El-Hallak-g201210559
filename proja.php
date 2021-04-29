<?php
    $kulancı=$_POST['ad'];
    $şifre=$_POST['şifre'];
    if(($kulancı=="g201210559@sakarya.edu.tr") && ($şifre=="g201210559"))
    {
        echo "<script>location.replace('index.html')</script>";
    }
    else
    {
        echo "<script>location.replace('proja.html')</script>";
    }
?>
