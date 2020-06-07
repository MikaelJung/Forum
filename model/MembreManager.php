<?php 

    namespace Model;

    use App\AbstractManager;
    use Model\Membre;


    class MembreManager extends AbstractManager{


            private static $classname = "Model\Membre" ;

            public function __construct(){
                self::connect(self::$classname);
            }


            public function findOnebyId($id){

                $sql = "SELECT * FROM membre WHERE id= :id";
    
                return  self::getOneOrNullResult(
                        self::select($sql, ['id' => $id], false),
                        self::$classname
                );
    
            }



            public function findUser($username){

                $sql = "SELECT * FROM membre WHERE pseudo = :username";
    
                return  self::getOneOrNullResult(
                        self::select($sql, ['username' => $username], false),
                        self::$classname
                );
    
            }



            public function findUserBySubject($idsujet){
                $sql = "SELECT pseudo FROM membre,sujet WHERE sujet.membre_id = membre.id AND sujet.id = :id";
                
                return self::getResults(
                    self::select($sql, ['id' => $idsujet], true),
                    self::$classname
                );
            }



        
            public function addUser($username, $hash){
            
                $sql ="INSERT INTO membre(pseudo, mdp) VALUES (:username, :password)";
    
                return self::create($sql, [
                    'username' => $username,
                    'password' => $hash
                ]);
            }


      

        public function findAll(){

            $sql = "SELECT * FROM membre";

            return self::getResults(
                self::select($sql, null, true),
                self::$classname
            );
        }
    }