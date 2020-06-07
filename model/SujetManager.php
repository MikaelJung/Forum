<?php 

    namespace Model;

    use App\AbstractManager;
    use Model\Membre;
    use Model\Sujet;



    class SujetManager extends AbstractManager{


            private static $classname = "Model\Sujet" ;

            public function __construct(){
                self::connect(self::$classname);
            }


            public function findOnebyId($id){

                $sql = "SELECT * FROM sujet WHERE id = :id";
    
                return  self::getOneOrNullResult(
                        self::select($sql, ['id' => $id], false),
                        self::$classname
                );
    
            }


      

        public function findAll(){

            $sql = "SELECT * FROM sujet";

            return self::getResults(
                self::select($sql, null, true),
                self::$classname
            );
        }


        // public function findOne($idmembre){

        //     $sql ="SELECT * FROM membre WHERE membre_id = :id";

        //     return self::getResults(
        //         self::select($sql, ['id' => $idmembre], true),
        //         self::$classname
        //     );
        // }



        public function createSujet($titre,$description,$id_membre){
            $sql = "INSERT INTO sujet(titre, description, membre_id) VALUES (:titre, :description, :idMembre )";

            return self::create($sql, [
                'titre'=> $titre,
                'description'=>$description,
                'idMembre'=>$id_membre
            ]);
        }




    }