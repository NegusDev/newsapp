<?php

class Likes extends Dbcontroller {
    
    public function getLikes() {
        $sql = "SELECT posts.* FROM posts";
        $result = $this->conn->query($sql) or die($this->conn->error);

        while ($row = $result->fetch_assoc()) {
            $posts[] = $row;
        }
        // echo '<pre>', print_r($posts,true), '</prev>';
        // exit();
        return $posts;
    }

    public function insertLikes($session_id, $post_id) {
        $sql = "INSERT INTO post_likes (user,post) SELECT {$session_id}
                FROM users JOIN journalist SELECT {$post_id} FROM posts WHERE EXISTS 
                (SELECT post_id FROM posts WHERE post_id = {$post_id}) 
                AND NOT EXISTS (SELECT like_id FROM post_likes WHERE 
                user = {$session_id} AND post =  {$post_id} ) LIMIT 1 ";
        $result = $this->conn->query($sql) or die($this->conn->error);
        return $result;
    }
}