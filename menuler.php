<?php
session_start(); 
?>


<div class="mainmenu-area">
    <div class="container">
        <div class="row">
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">


                <?php

                require_once('baglan.php');

                if ($_SESSION['uye_adi']!='') 
                {

                    $sonuc = mysqli_query($baglanti,"SELECT * FROM menuler LIMIT 7");

                    if (mysqli_num_rows($sonuc)!=0) 
                    {
                    while ($row = mysqli_fetch_assoc($sonuc)) 
                        {

                ?>

                            <li class=""> <a href="<?php echo $row['menu_url']; ?>"><?php echo $row['menu_ad']; ?></a></li>


                <?php
                        }
                    }
                
                   
                    
                }
                else
                {

                    $sonuc = mysqli_query($baglanti,"SELECT * FROM menuler LIMIT 6");

                    if (mysqli_num_rows($sonuc)!=0) 
                    {
                    while ($row = mysqli_fetch_assoc($sonuc)) 
                        {

                ?>

                            <li class=""> <a href="<?php echo $row['menu_url']; ?>"><?php echo $row['menu_ad']; ?></a></li>


                <?php
                        }
                    }

                }

                ?>
                        
                            

                            
                </ul>
            </div>
        </div>
    </div>
</div>
