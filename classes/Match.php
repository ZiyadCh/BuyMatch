<?php
session_start();
require_once "../config/databases.php";
class  matche extends connection{

    protected $id;
    protected $equipe1;
    protected $equipe2;
    protected $date;
    protected $location;

    public function __construct($id,$equipe1,$equipe2,$date,$location)
    {
        $this->id = $id;
        $this->equipe1 = $equipe1;
        $this->equipe2 = $equipe2;
        $this->date = $date;
        $this->location = $location;
    }
    ////////////////////////
 public function getId()
    {
        return $this->id;
    }
 public function getEquipe1()
    {
        return $this->id;
    } public function getEquipe2()
    {
        return $this->id;
    } public function getDate()
    {
        return $this->id;
    } public function getLocation()
    {
        return $this->id;
    }

///////////////////////////

    public function afficherMatch(){

    }

    public function afficherComment(){

    }
}
?>
