<a href="?ctrl=ajout&method=ajoutMessage">Ajouter un message</a>
<?php 

foreach($data['messages'] as $message){
?>


<article class="uk-comment uk-comment-primary">
    <section class="uk-comment-header uk-grid-medium uk-flex-middle" uk-grid>
        <div class="uk-width-auto">
            <img class="uk-comment-avatar" src="<?=IMG_PATH ?>avatar.jpg "width="80" height="80" alt="">
        </div>
        <div class="uk-width-expand">
            <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset" href="#">Auteur</a></h4>
            <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
                <li><a href="#"><?= $message-> getCreationDate();?></a></li>
                <li><a href="#">Répondre</a></li>
            </ul>
        </div>
    </section>
    <div class="uk-comment-body">
        <p><?= $message-> getTexte();?></p>
    </div>
</article>
<br>
<br>


<?php

}

?>