<?php 

use App\Session;
use App\Router;
if(App\Session::getUser()){  

?>

<h1>Mon profil </h1>

<p>Mon pseudo : <?= $data->getPseudo(); ?></p>
<p>Mon avatar : <img src="<?=IMG_PATH ?>avatar.jpg" alt=""></p>


<?php
}

else App\Router::redirectTo("security","login");

?>
  
  

  



    


 