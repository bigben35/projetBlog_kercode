<?php

namespace ProjetBlogKercode\Models;


class AdminModel extends Manager
{
    public function creatAdmin($firstname, $mdp, $mail)
    {
        $bdd = $this->dbConnect();
        $user = $bdd->prepare('INSERT INTO administrateurs( firstname,mdp, mail )  VALUE ( ?, ?, ?)');
        $user->execute(array($firstname, $mdp, $mail));
    
        return $user;
    }
}