<?php

    namespace Controller;

    use App\Router;
    use App\Session;
    use Model\SujetManager;
    use Model\MembreManager;
    use Model\Membre;
    use Model\Sujet;


    class AjoutController
    {


        public function ajoutSujet(){

            if(!empty($_POST)){
                $titre = filter_input(INPUT_POST, "titre");
                $description = filter_input(INPUT_POST, "description");
               

                if($titre && $description){
                    $id_membre = Session::getUser()->getId();
                    $model = new SujetManager();
                    $model->createSujet($titre,$description,$id_membre);
                    ROUTER::redirectTo("home","sujets");    
            
                }

                else echo "erreur"; 

            } else echo "Champs manquants";

            return [
                "view" => "CreaSujet.php",
                "data" => null
            ];

        }



        public function ajoutMessage(){

            if(!empty($_POST)){
                $texte = filter_input(INPUT_POST, "texte");
               

                if($texte){
                    $id_membre = Session::getUser()->getId();
                    $model = new MessageManager();
                    $model->createMessage($titre,$id_membre,$id_sujet);
                    ROUTER::redirectTo("home","messages");    
            
                }

                else echo "erreur"; 

            } else echo "Champs manquants";

            return [
                "view" => "CreaMessage.php",
                "data" => null
            ];

        }









    }