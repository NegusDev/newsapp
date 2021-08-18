<?php

class Category extends Dbcontroller{

    public function getCategory() {
            $sql = "SELECT * FROM category";
            $result = $this->conn->query($sql) or die($this->conn->error);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $categories[] = $row;
                }
                return  $categories;
            }
    }

    public function showCategory(array $categories):string {
        $html = '<option value="" selected disabled>--Select--</option>';
        foreach ($categories as $category) {
            $html .= '
                <option value="' . $category['category_id'] . '">' . $category['category_name'] . '</option>
            ';
        }
        return $html;
    }
}