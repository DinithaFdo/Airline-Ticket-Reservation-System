<h1 class="maint">Where Dreams Take Flight</h1><br>
<h1 class="welcome"><?php 
                    if(isset($_SESSION["fname"])){
                    echo 'Welcome ' . $_SESSION["fname"].' !';
                    } else {
                        echo 'Hello New User !';
                    }
                    ?></h1>
