<?php 

        namespace Model;

        use App\AbstractEntity;

        class Sujet extends AbstractEntity {

                private $id;
                private $titre;
                private $description;
                private $creationDate;
                private $membre;

        public function __construct($data){
            parent::hydrate($data, $this);
        }


        /**
         * Get the value of id_sujet
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id_sujet
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of titre
         */ 
        public function getTitre()
        {
                return $this->titre;
        }

        /**
         * Set the value of titre
         *
         * @return  self
         */ 
        public function setTitre($titre)
        {
                $this->titre = $titre;

                return $this;
        }

        /**
         * Get the value of description
         */ 
        public function getDescription()
        {
                return $this->description;
        }

        /**
         * Set the value of description
         *
         * @return  self
         */ 
        public function setDescription($description)
        {
                $this->description = $description;

                return $this;
        }

        /**
         * Get the value of creationDate
         */ 
        public function getCreationDate()
        {
                return $this->creationDate;
        }

        /**
         * Set the value of creationDate
         *
         * @return  self
         */ 
        public function setCreationDate($creationDate)
        {
                $this->creationDate = $creationDate;

                return $this;
        }

        

        /**
         * Get the value of membre
         */ 
        public function getMembre()
        {
                return $this->membre;
        }

        /**
         * Set the value of membre
         *
         * @return  self
         */ 
        public function setMembre($membre)
        {
                $this->membre = $membre;

                return $this;
        }
    }