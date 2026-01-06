<?php
session_start();
require_once "../config/database.php";
abstract class users extends connection
{

    protected $id;
    protected $nom;
    protected $prenom;
    protected $email;
    protected $role;
    protected $photo;
    private $password;

    public function __construct($id, $nom, $prenom, $email, $photo, $role, $password)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->role = $role;
        $this->photo = $photo;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }
    //getters
    public function getId()
    {
        return $this->id;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function getPhoto()
    {
        return $this->photo;
    }
    public function getRole()
    {
        return $this->role;
    }
    public function getEmail()
    {
        return $this->email;
    }
    //setters
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }
    public function setPhoto($prenom)
    {
        $this->prenom = $prenom;
    }
    public function setRole($role)
    {
        $this->role = $role;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function setPass($password)
    {
        $this->password = $password;
    }
    ////////////////////////////////////
    //insert into mysql
    ///////////////////////////////////
    public function signup()
    {
        $pdo = $this->connect();
        $sql = "select * from users where email = :email";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([
            ':email' => $this->email
        ]);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($results) {
            header("");
            exit();
        }
        $sql = "insert into users (nom, prenom, email,photo, role, password) values(:nom, :prenom, :email, :photo,:role, :password)";

        $stmt = $pdo->prepare($sql);

        $stmt->execute([
            ':nom' => $this->nom,
            ':prenom' => $this->prenom,
            ':email' => $this->email,
            ':photo' => $this->photo,
            ':role' => $this->role,
            ':password' => $this->password
        ]);

        $userId = $pdo->lastInsertId();
        if (!$userId) {
            throw new Exception("User insert failed");
        }

        return (int)$userId;
    }

    //////////////////////
    //login
    //////////////////////
    public function login($emailCheck, $passCheck)
    {
        $sql = "select * from users where email = :email";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([
            ':email' => $emailCheck
        ]);

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($results as $row) {
            $id = $row['id'];
            $emails = $row['email'];
            $role = $row['role'];
            $nom = $row['nom'];
            $prenom = $row['prenom'];
            $pass = $row['password'];
        }

        if ($emailCheck === $emails) {
            if (password_verify($passCheck, $pass)) {
                if ($role == 'client') {
                    $_SESSION['id'] = $id;
                    $_SESSION['nom'] = $nom;
                    $_SESSION['prenom'] = $prenom;
                    $_SESSION['role'] = 'client';
                    $_SESSION['is_logged'] = true;
                    header("location: ../pages/matchs.php");
                    exit();
                } elseif ($role == 'organisateur') {
                    $_SESSION['id'] = $id;
                    $_SESSION['nom'] = $nom;
                    $_SESSION['prenom'] = $prenom;
                    $_SESSION['role'] = 'organisateur';
                    $_SESSION['is_logged'] = true;
                    header("location: ../pages/orga.home.php");
                    exit();
                } elseif ($role == 'admin') {
                    $_SESSION['id'] = $id;
                    $_SESSION['nom'] = $nom;
                    $_SESSION['prenom'] = $prenom;
                    $_SESSION['role'] = 'admin';
                    $_SESSION['is_logged'] = true;
                    header("location: ../admin/dashboard.php");
                    exit();
                }
            } else {
                echo "not";
            }
        } else {
            echo "email n'existe pas";
        }
    }

    //gerer profile
    public function modifierProfile() {}
}
