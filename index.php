<?php 
    class Movie{
        public $name;
        public $year;

        function __construct($_name, $_year){
            $this->name = $_name;
            $this->year = $_year;
        }
        public function setName($_name){
            $this->name =$_name;
        }
        public function setyear($_year){
            $this->year =$_year;
        }
        public function getyear($_year){
            return $this->year;
        }
        public function getName($_name){
            return $this->name;
        }
    }
    $rocky=new Movie("rocky",1985);
    echo $rocky->name.'<br>';
    echo $rocky->year.'<br>';
    $A_New_Hope=new Movie("Episode IV – A New Hope",1977);
    echo $A_New_Hope->name.'<br>';
    echo $A_New_Hope->year.'<br>';
?>