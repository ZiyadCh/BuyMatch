<?php
session_start();
require_once "../config/databases.php";

class matche extends connection {

    protected $id;
    protected $equipe1;
    protected $equipe2;
    protected $date;
    protected $location;

    public function __construct($id, $equipe1, $equipe2, $date, $location)
    {
        $this->id = $id;
        $this->equipe1 = $equipe1;
        $this->equipe2 = $equipe2;
        $this->date = $date;
        $this->location = $location;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getEquipe1()
    {
        return $this->equipe1;
    }

    public function getEquipe2()
    {
        return $this->equipe2;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setEquipe1($equipe1)
    {
        $this->equipe1 = $equipe1;
    }

    public function setEquipe2($equipe2)
    {
        $this->equipe2 = $equipe2;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function setLocation($location)
    {
        $this->location = $location;
    }

    public function afficherMatch()
    {
    }

    public function afficherComment()
    {
    }
}
/////////////////
//categorie
////////////////
class categorie {
}
?>
