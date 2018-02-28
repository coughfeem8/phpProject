<?php
/**
 * stores all data about al users.
 */
class AccountList
{
    public static $userNumber = 0;
    private $users = array();


    function __construct($newUser){
        if ($newUser === null) {
          $newUser = new UserAcount();
        }
        
    }
}

 ?>
