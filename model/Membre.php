<?php 

        namespace Model;

        use App\AbstractEntity;

        class Membre extends AbstractEntity {

                private $id;
                private $pseudo;
                private $avatar;
                private $mdp;
                private $creationDate;
                private $acces;

        

        public function __construct($data){
            parent::hydrate($data, $this);
        }


            /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }


        /**
         * Get the value of pseudo
         */ 
        public function getPseudo()
        {
                return $this->pseudo;
        }

        /**
         * Set the value of pseudo
         *
         * @return  self
         */ 
        public function setPseudo($pseudo)
        {
                $this->pseudo = $pseudo;

                return $this;
        }

        /**
         * Get the value of avatar
         */ 
        public function getAvatar()
        {
                return $this->avatar;
        }

        /**
         * Set the value of avatar
         *
         * @return  self
         */ 
        public function setAvatar($avatar)
        {
                $this->avatar = $avatar;

                return $this;
        }

        /**
         * Get the value of mdp
         */ 
        public function getMdp()
        {
                return $this->mdp;
        }

        /**
         * Set the value of mdp
         *
         * @return  self
         */ 
        public function setMdp($mdp)
        {
                $this->mdp = $mdp;

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
         * Get the value of acces
         */ 
        public function getAcces()
        {
                return $this->acces;
        }

        /**
         * Set the value of acces
         *
         * @return  self
         */ 
        public function setAcces($acces)
        {
                $this->acces = $acces;

                return $this;
        }

        
        public function __toString()
        {
                return $this->pseudo;
        }

    
    }