<?php
session_start();
require_once "User.php";
class  acheteur extends users{

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function acheterTicket(){

    }

    public function afficherHistorique(){

    }

    public function laisserCommentaire(){

    }

}
?>