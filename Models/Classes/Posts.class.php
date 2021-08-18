<?php

class Posts extends Dbcontroller {
    
    //GET ALL POSTS
    public function getAllPosts() {
        $sql = "SELECT posts.* , journalist.first_name , category.category_name FROM posts 
                LEFT JOIN journalist ON posts.journalist_id = journalist.username 
                LEFT JOIN category ON posts.category = category.category_name ORDER BY date_created DESC";
        $result = $this->conn->query($sql) or die($this->conn->error);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $posts[] = $row;
            }

        }
        return $posts;
    }

    //CREATE A POST
    public function createPost($table,$data = []) {

        //get columns
        $columns = implode(',', array_keys($data));
        $values  = "'". implode("','", array_values($data)) . "'";

        $sql = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table, $columns, $values);
        $result = $this->conn->query($sql) or die($this->conn->error);
        return $result;

    }

    //GET A SINGLE POST
    public function getPostById(int $post_id):array {
        $sql = "SELECT * FROM posts WHERE post_id = $post_id";
        $result = $this->conn->query($sql) or die($this->conn->error);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $post = $row;
            }
        }
        return $post ?? [];
    }

    // EDIT POST
    public function editPost($post_id,$category,$title,$body) {
        $sql = "UPDATE posts SET category = '$category', title = '$title', body = '$body' WHERE post_id = '$post_id'";
        $result = $this->conn->query($sql) or die($this->conn->error);
        if ($result) {
            return true;
        }else {
            return false;
        }
    }

    // DELETE POST
    public function deletePost($post_id) {
        $sql = "DELETE FROM posts WHERE post_id = $post_id";
        $result = $this->conn->query($sql) or die($this->conn->error);
        return $result;
    }
}