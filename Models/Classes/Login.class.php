<?php

class Login extends Dbcontroller  {
     public function createJournalist($table, $data = []) {
        // get columns
        $columns = implode(',', array_keys($data));
        $values  = "'". implode("','", array_values($data)) . "'";

        $sql = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table, $columns, $values);
        $result = $this->conn->query($sql) or die($this->conn->error);
        return $result;

     }

     // LOGIN 
     public function loginAuth($table,$username,$password) {
        $sql ="SELECT * FROM {$table}  WHERE username= '$username' AND password= '$password' " or die($this->conn->error);
        return $this->conn->query( $sql);
     }
}