<?php

namespace App\Controllers;

use App\Models\User;

class AuthController extends Controller
{
    public function login()
    {
        if(isset($_COOKIE['login']))
        {
            header('Location:/admin');
        }
        else{
            include $this->template.'login.php';
        }

    }

    public function auth()
    {

        $login = $_POST['email'];
        $password = $_POST['password'];
        if($_POST)
        {
            $user_data = User::getInstance()->where('email',$login)->get();
            $user = User::getInstance()->assoc($user_data);

//            dd(mysqli_num_rows($user));
            if(mysqli_num_rows($user_data) && $user['email']==$login && $user['password']==$password)
            {
                setcookie('login',$login,time()+3600*24);
                setcookie('password',$password,time()+3600*24);

                header('Location:/admin');
            }
            else
            {
                header('Location:/login');
            }
        }
    }
    public function logout()
    {
        $login = $_COOKIE['login'];
        $password = $_COOKIE['password'];
        setcookie('login',$login,time()-3600*24);
        setcookie('password',$password,time()-3600*24);

        header('Location:/login');
    }

}
