<?php

    namespace Controller;

    use App\Router;
    use Model\SujetManager;
    use Model\MembreManager;
    use Model\MessageManager;
    use App\Session;
    


    class HomeController
    {


        public function index(){

            return [
                "view" => VIEW_PATH."login.php",
                "data" => null
            ];
      
        }


         public function sujets(){

            $sujetmodel = new SujetManager();
            $membremodel = new MembreManager();
            $sujets = $sujetmodel->findAll();

            
            foreach($sujets as $sujet){
                $idsujet = $sujet->getId();
                $membres = $membremodel->findUserBySubject($idsujet);
                
            }
           var_dump($membres);

            return [
                "view" => VIEW_PATH."sujets.php",
                "data" =>  [
                    "sujets" => $sujets,
                    "membres" => $membres
                ]
                
            ];
            
        }


        public function messages(){

            $messagemodel = new MessageManager();
            $sujetmodel = new SujetManager();

            $sujets = $sujetmodel->findAll();

            foreach($sujets as $sujet){
                $messages = $messagemodel->findBySujet($sujet->getId());
            }
           

            return [
                "view" => VIEW_PATH."messages.php",
                "data" =>  [
                    "messages" => $messages
                ]
                
            ];
            
        }





        // public function MembreSujet(){

        //     $sujetmodel = new SujetManager();
            
        //     $sujets = $sujetmodel->findAll();

        //     foreach($sujets as $sujet){

        //         $membres = $membremodel->findOne($sujet->getId());
        //         $sujet->setUsers($membres);
        //     }
           

        //     return [
        //         "view" => VIEW_PATH."sujets.php",
        //         "data" =>  [
        //             "sujets" => $sujets
        //         ]
                
        //     ];
            
        // }



        public function membres(){

            $membremodel = new MembreManager();
            $membres = $membremodel->findAll();


            return [
                "view" => VIEW_PATH."membres.php",
                "data" => [
                    "membres" => $membres
                ]
            ];
            
        }



        public function nouveauxPosts(){

            return [
                "view" => VIEW_PATH."home.php",
                "data" => null
            ];
            
        }

        public function monProfil(){

            $membremodel = new MembreManager();
            if(Session::getUser()){
                  $id = Session::getUser()->getId(); 
                  $membres = $membremodel->findOnebyId($id);
            }

            else {
                $membres = null;
            }
          
            return [
                "view" => VIEW_PATH."monProfil.php",
                "data" => $membres
            ];
            
        }


        public function contact(){

            return [
                "view" => VIEW_PATH."contact.php",
                "data" => null
            ];
            
        }







        

        



        }
    