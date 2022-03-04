<?php

namespace ProjetBlogKercode\Controllers;

class adminController
{
    // connexion à la page connexion
    function createPageAdmin()
    {
        require 'app/Views/Admin/createAdmin.php';
    }
}