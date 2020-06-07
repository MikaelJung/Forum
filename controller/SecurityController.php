<?php

    namespace Controller;

    use App\Router;
    use Model\MembreManager;
    use App\Session;


    class SecurityController
    {


        public function login(){
            if(!empty($_POST)){
                $username = filter_input(INPUT_POST, "username");
                $password = filter_input(INPUT_POST, "password");

            $model = new MembreManager();
                if($user = $model->findUser($username)){

                    if(password_verify($password, $user->getMdp())){
                         Session::setUser($user);
                         Router::redirectTo("home","sujets");
                    }
                    else var_dump("MOT DE PASSSE POURRI");
                }
                else var_dump("USER INEXISTANT");
            }
            

            return [
                "view" => "login.php",
                "data" => null
            ];
        }
        
            public function register(){

                if(!empty($_POST)){

                    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
                    $pass1 = filter_input(INPUT_POST, "pass1");
                    $pass2 = filter_input(INPUT_POST, "pass2");

                
                    if($username && $pass1 && $pass2){

                        if($pass1 == $pass2){

                        $model = new MembreManager();

                            if(!$model->findUser($username)){
                                $hash = password_hash($pass1, PASSWORD_ARGON2I);
                                if($model->addUser($username, $hash)){

                                    Router::redirectTo("security", "login");
                                }
                            }
                            else var_dump("USER DEJA EXISTANT");
                        }
                        else var_dump("MOTS DE PASSE DIFFERENTS");
                    }

                else var_dump("CHAMPS MANQUANTS!!!!!!!!!!!!!!!!!!!!");
                
                }


                return [
                    "view" => "register.php",
                    "data" => null
                ];

            }

            public function logout(){
                Session::removeUser();
                Router::redirectTo("home");
            }

            
        }




       
    