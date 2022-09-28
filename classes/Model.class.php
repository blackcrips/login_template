<?php


class Model extends Dbh
{
    protected function validLogin($username,$password)
    {
        $sql = "SELECT * FROM user_accounts WHERE username = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$username]);
        $rowCount = $stmt->rowCount();

        $results = $stmt->fetch();

        if($rowCount == 0){
            return false;
        } else {
            if(!password_verify($password,$results['password'])){
                return false;
            } else {
                return true;
            }
        }
    }

    protected function insertLoginAction($credentials)
    {
        $sql = "INSERT INTO user_action (`device`,`ip_address`) VALUES (?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$credentials[0],$credentials[1]]);
        return;
    }
}