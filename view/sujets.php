  
<?php 

use App\Session;
use App\Router;


if(App\Session::getUser()){  ?>

<a href="#top" id="top-button">
    <i class="icon-angle-up"></i>
  </a>
  <div class="row">
    <div class="large-6 column lpad top-msg breadcrumb">
      <span id="breadcrumb">
     
      </span>
    </div> 
    <div class="large-6 small-12 column lpad top-msg ar">
      Bienvenue 
      <a href="#" class="underline"><?= App\Session::getUser();?></a>
    </div>
  </div> 
  
  <div class="row mt">
    <div class="large-12">
      <div class="large-12 forum-category rounded top">
        <div class="large-8 small-10 column lpad">
          Votre forum de musculation 
        </div>
        <div class="large-4 small-2 column lpad ar">
          <a data-connect>
            <i class="icon-collapse-top"></i>
          </a>
        </div>
      </div>
      
      <div class="toggleview">
        <div class="large-12 forum-head">
          <div class="large-8 small-8 column lpad">
            Sujets <a href="?ctrl=ajout&method=ajoutSujet"> Ajouter un sujet</a>
          </div>
          <div class="large-1 column lpad">
            Vues
          </div>
          <div class="large-1 column lpad">
            Messages
          </div>
          <div class="large-2 small-4 column lpad">
            Auteur
          </div>
        </div>


          <?php
         
          foreach($data['sujets'] as $sujet){
          ?>

        <div class="large-12 forum-topic">
          <div class="large-1 column lpad">
            <i class="icon-file"></i>
          </div>
          <div class="large-7 small-8 column lpad">
            <span class="overflow-control">
              <a href="?ctrl=home&method=messages&id=<?= $sujet->getId() ?>">
              <?= $sujet->getTitre()?></a>
            </span>
            <span class="overflow-control">
            <?= $sujet->getDescription()?>
            </span>
          </div>
          <div class="large-1 column lpad">
            <span class="center">96587</span>
          </div>
          <div class="large-1 column lpad">
            <span class="center">678</span>
          </div>
          <div class="large-2 small-4 column pad">
            <span>
              <a href="#">#####</a>
            </span>
            <span> <?= $sujet->getCreationDate()?></span>
            <span>par 
            <?php 
            foreach($data['membres'] as $membre){
            ?>
            <a href="#"><?= $membre->getPseudo(); ?></a></span>
            <?php 
                } 
            ?>
          </div>
        </div>


        <?php
        }


        ?>
        
        
        
      </div>
    </div>
  </div>

  


<?php }

else App\Router::redirectTo("security","login");

   

?>
  
  

  



    


 