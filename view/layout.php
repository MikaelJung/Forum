<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" <?=CSS_PATH ?>style.css">
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.3/dist/css/uikit.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.3/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.3/dist/js/uikit-icons.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/foundation/5.0.2/css/foundation.css">

    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <title>Mon Forum</title>
</head>  
<body>

  <header id="#top">
    <div class="row">
      <div class="large-4 column lpad">
        <a href="?ctrl=security&method=login">
          <div class="logo">
            <span>Mon super</span>
            <span>Forum</span>
          </div>
        </a>
      </div>
      <div class="large-8 column ar lpad">
        <nav class="menu">
          <a href="?ctrl=home&method=sujets">Forum</a>
          <a href="?ctrl=home&method=membres">Membres</a>
          <a href="?ctrl=home&method=nouveauxPosts">Nouveaux posts</a>
          <a href="?ctrl=home&method=monProfil">Mon profil</a>
          <a href="?ctrl=home&method=contact">Contact</a>
          <?php 
          if(App\Session::getUser()){ ?>
          <a href="?ctrl=security&method=logout">Déconnexion</a>
          <?php } 
          else {
          ?>
          <a href="?ctrl=security&method=register">Inscription</a>
          <?php } ?>
        </nav>     
      </div>
    </div>
  </header>

   <?php

            $data = $result['data'];
            require $result['view'];
    ?> 
      
</body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>   
    <script src="<?=JS_PATH ?>script.js"></script>

</html>    


  
  
