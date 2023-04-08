<?php

class Utilities
{
    # Variables
    private $table = "";
    public $index = "";
    public $sql ="";
    
    # Constructeur Syntaxe exclusive __construct
    public function __construct($id)
    {
        $this->index = $id;
        $this->sql = new PDO('mysql:host=localhost;dbname=speedrun_website', 'root', 'root1234');

    }

    public function SelectAll($table)
    {
        $req = "SELECT * FROM `" . $table."`";
       
        $result = $this->sql->query($req);
        $tlbresult = $result->fetchAll();
        return $tlbresult;
    }

    public function FetchOptions($column)
    {
        $options = [];
        
            $req = "SELECT COLUMN_TYPE FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = '".$this->table."' AND COLUMN_NAME = '" . $column . "'";
            $stmt = $this->sql->prepare($req);
            $stmt->execute();
            $result = $stmt->fetch();
            $enum_list = explode(',', preg_replace('/[^\w,]/', '', $result['COLUMN_TYPE']));
            foreach ($enum_list as $value) 
            {
                $options[$value] = $value;
            }
            
        return $options;
    }

    public function Get($column, $table, $row ,$id)
    {
        $req = "SELECT " . $column . " FROM " . $table . " WHERE '".$row."' = '" . $id . "'; ";
        $result = $this->sql->query($req);

        if ($result !== false) 
        {
            $tlbresult = $result->fetchAll();

            if (count($tlbresult) > 0) 
            {
                return $tlbresult[0][0];
            } 
            else 
            {
                return null; 
            }
        } 
        else 
        {
            
            return null;
        }
    }



    public function addNew($table, $id, $title, $description, $video_url, $user_id = 0, $game_id = 0, $category_id = 0)
    {
        $req = "INSERT INTO `".$table."`(`id`, `title`, `description`, `video_url`, `user_id`, `game_id`, `category_id`) 
            VALUES (NULL ,'".$id."','".$title."', '".$description."', '".$video_url."', '".$user_id."', '".$game_id."', '".$category_id."');";
        
        $this->sql->query($req);
    }


    public function Set($table, $column, $row  ,$id, $value)
    {
        $req = "UPDATE ".$table." SET ".$column." = '".$value."' WHERE `".$row."` ='".$id."'";
        $this->sql->query($req);
    }

}









?>


