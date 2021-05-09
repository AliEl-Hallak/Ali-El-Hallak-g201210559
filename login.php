<?php
    $kulancı=$_POST['ad'];
    $şifre=$_POST['şifre'];
    if(($kulancı=="g201210559@sakarya.edu.tr") && ($şifre=="g201210559"))
    {
  
        echo " <script>location.replace('index.html')  
        alert('hoş geldiniz g201210559')   </script>";
      
    }
    elseif ($kulancı=="g201210559@sakarya.edu.tr")
    { 
        echo " <script>location.replace('login.html')
        alert('mail adrersi bulunmaktadır yalnız şiferinizi yanlıştır')  </script>";
        
    }
    else 
    { 
        echo " <script>location.replace('login.html')
        alert('mail adresi bulunmamaktadır')  </script>";
        
    }
?>
