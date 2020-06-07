<?php 

    namespace Model;

    use App\AbstractManager;
    use Model\Message;


    class MessageManager extends AbstractManager{


            private static $classname = "Model\Message" ;

            public function __construct(){
                self::connect(self::$classname);
            }


            public function findOnebyId($id){

                $sql = "SELECT * FROM message WHERE id= :id";
    
                return  self::getOneOrNullResult(
                        self::select($sql, ['id' => $id], false),
                        self::$classname
                );
    
            }

      

        public function findAll(){

            $sql = "SELECT * FROM message";

            return self::getResults(
                self::select($sql, null, true),
                self::$classname
            );
        }


        public function findBySujet($idsujet){
            $sql = "SELECT * FROM message WHERE sujet_id = :id ";
            $idsujet = $_GET['id'];

            return self::getResults(
                self::select($sql, ['id' => $idsujet], true),
                self::$classname
            );
        }


         public function createMessage($titre,$id_membre,$id_sujet){
            $sql = "INSERT INTO message(texte, membre_id, sujet_id) VALUES (:texte, :idMembre, :idSujet )";

            return self::create($sql, [
                'texte'=> $texte,
                'idMembre'=>$id_membre,
                'idSujet'=>$id_sujet
            ]);
        }






        
    }