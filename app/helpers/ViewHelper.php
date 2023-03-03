<?php

namespace App\helpers;
class ViewHelper{

    public function ChangePasswordPage($data=[])
    {
        require_once "../app/views/change_password/ChangePasswordPage.php";

    }

    public function DashboardPage($data=[])
    {
        require_once "../app/views/dashboard/DashboardPage.php";
    }

    public function LoginPage($data=[])
    {
        require_once "../app/views/login/LoginPage.php";
    }

    public function RegisterPage($data=[])
    {
        require_once "../app/views/register/RegisterPage.php";
    }

    public function ResetPasswordPage($data=[])
    {
        require_once "../app/views/reset_password/ResetPasswordPage.php";
    }
}