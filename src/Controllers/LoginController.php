<?php

namespace BlogApp\Controllers;

class LoginController
{
    private UserController $User;

    public function __construct(UserController $User)
    {
        $this->User = $User;
    }

    public function login(array $RequestData): void
    {
        //TODO: validate Raw Data from user!!

        $RequestUserName = $RequestData['username'];

        $UserData = $this->User->getByName($RequestUserName);

        if (!empty($UserData) && password_verify($RequestData['password'], $UserData['password'])) {
            // TODO: Flash alles gut, redirect to main page
            $_SESSION['userid'] = $UserData['id'];
            echo "GOOD";
        } else {
            //TODO: Flash Wrong username or password
            echo "Wrong pass and Uname";
        }

    }


}