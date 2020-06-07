<h1>Les membres du forum !</h1>
<?php


if(App\Session::getUser()){  

    foreach($data['membres'] as $membre){
        ?>

        </br><li><?= $membre->getPseudo()?>

        est membre depuis le <?= $membre->getCreationDate("d/m/Y")?>


        </li>

        <?php
    }

}


else echo "</br>"."Vous devez vous connecté pour accéder à nos membres";

?>