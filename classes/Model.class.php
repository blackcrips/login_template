<?php


class Model extends Dbh
{
    protected function validLogin($username,$password)
    {
        $sql = "SELECT * FROM user_accounts WHERE username = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$username]);

        $results = $stmt->fetch();

        if(!password_verify($password,$results['password'])){
            return false;
        } else {
            return true;
        }
    }
}