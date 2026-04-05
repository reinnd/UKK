<?php 

namespace App\c_auth;

class guard {

  public static function start() {
    if(session_status() == PHP_SESSION_NONE){
      session_start();
    }
  }

  public static function gate() {
    self::start();
    return isset($_SESSION['login']) && $_SESSION['login'] === true;
  }

  public static function isadmin() {
    self::start();
    return isset($_SESSION['role']) && $_SESSION['role'] === 'admin';
  }

  public static function notlogedin(){
    if (!self::gate()) {
      header("Location: ../view/login.php");
      exit();
    }
  }

  public static function logedin(){
    if (self::gate()) {
      if(self::isadmin()) {
        header("Location: ../view/admin/a_dashboard.php");
      } else {
        header("Location: ../view/user/u_dashboard.php");
      }
    }
  }

  public static function soadmin(){
    self::notlogedin();
    if (!self::isadmin()) {
      header("Location: ../view/user/u_dashboard.php");
      exit();
      
    }
  }
}