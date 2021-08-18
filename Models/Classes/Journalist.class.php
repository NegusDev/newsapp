<?php

class Journalist extends Dbcontroller {

    public function getAllJournalists() {
        $sql = "SELECT journalist.*, category.category_name FROM journalist INNER JOIN
                category ON journalist.category_id = category.category_id ORDER BY date_reg DESC";
        $result  = $this->conn->query($sql) or die($this->conn->error);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $journalists[] = $row;
            }

        }
        return $journalists;
    }

    public function getJournalistById($id):array {
        $sql = "SELECT * FROM journalist WHERE id = $id";
        $result = $this->conn->query($sql) or die($this->conn->error);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $journalist = $row;
            }
        }
        return $journalist ?? [];
    }

    public function ViewJournalists(array $editors):string {
        $html = '<div class="row justify-content-center my-3">'; 
        foreach ($editors as  $editor) {
            $html .= '
            <div class="col-md-4 col-12 ">
            <div class="post-container p-1 pb-2" >'.
            '<img src="./assets/img/' . $editor['profile_img']. '" alt="'.$editor['profile_img'].'"class="img-fluid">'.
            '<h5>' . $editor['first_name'] . ' '.$editor['last_name'].'</h5>'.
            '<div> <strong>category: </strong>'  . $editor['category_name'] .'</div>'.
            '<div class="clear-fix">'.
                '<a class="btn button primary-button float-start" 
                href="./journalists.php?id='.$editor['id'].'">View Profile</a>'.
                '<a class="btn button primary-button float-end" 
                href="./journalists.php?id='.$editor['id'].'">Follow Journalist</a>'

            .'</div>
            </div>';
        }
        $html .= '</div></div>';
        return $html;
    }

    //MAKE CHANGES / EDIT 
    public function editJournalist($id,$firstname,$lastname,$username,$email,$bio,$phone){

        $sql = "UPDATE journalist SET first_name = '$firstname', last_name = '$lastname', username = '$username',
                email = '$email', bio = '$bio', phone_number = '$phone'
                WHERE id = '$id'";
        $result = $this->conn->query($sql) or die($this->conn->error);
        if ($result) {
            return true;
        }else {
            return false;
        }

    }
}