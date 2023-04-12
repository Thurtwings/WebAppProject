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
        $req = "SELECT " . $column . " FROM " . $table . " WHERE " . $row . " = '" . $id . "'; ";

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


    public function getUserSpeedrunRuns($user_id) 
    {
        $req = "SELECT * FROM user_speedrun_runs WHERE user_id = " . $user_id;
        $result = $this->sql->query($req);
        $runs = array();
        while ($row = $result->fetch()) {
            $runs[] = array(
                'id' => $row['id'],
                'user_id' => $row['user_id'],
                'game_title' => $row['game_title'],
                'category' => $row['category'],
                'youtube_link' => $row['youtube_link']
            );
        }
        return $runs;
    }
    
    public function addNewUser($username, $user_email, $profile_picture, $password)
    {
        $req = "INSERT INTO `users`(`id`, `username`, `user_email`, `profile_picture`, `password`, `registration_time`) 
            VALUES (NULL ,'".$username."','".$user_email."', '".$profile_picture."', '".$password."', NOW());";
        
        $this->sql->query($req);
    }


    public function addNewVideo($table, $id, $title, $description, $video_url, $user_id = 0, $game_id = 0, $category_id = 0)
    {
        $req = "INSERT INTO `".$table."`(`id`, `title`, `description`, `video_url`, `user_id`, `game_id`, `category_id`) 
            VALUES (NULL ,'".$id."','".$title."', '".$description."', '".$video_url."', '".$user_id."', '".$game_id."', '".$category_id."');";
        
        $this->sql->query($req);
    }
    public function addNewGame($title, $description, $gamePicturePath)
    {
        $req = "INSERT INTO `games`(`id`, `title`, `description`, `game_picture`) 
            VALUES (NULL ,'".$title."','".$description."', '".$gamePicturePath."');";
        
        $this->sql->query($req);
    }
    public function addNewCategory($name, $game_id)
    {
        $req = "INSERT INTO `categories`(`id`, `name`, `game_id`) 
            VALUES (NULL ,'".$name."', '".$game_id."');";
        
        $this->sql->query($req);
    }

    public function addNewRanking($user_id, $game_id, $category_id, $time_seconds)
    {
        $req = "INSERT INTO `rankings`(`id`, `user_id`, `game_id`, `category_id`, `time_seconds`) 
            VALUES (NULL ,'".$user_id."', '".$game_id."', '".$category_id."', '".$time_seconds."');";
        
        $this->sql->query($req);
    }

    public function addNewRunner($runners_alias)
    {
        $req = "INSERT INTO `runners`(`runners_id`, `runners_alias`) 
            VALUES (NULL ,'".$runners_alias."');";
        
        $this->sql->query($req);
    }

    
    public function addNewUserSpeedrunRun($user_id, $game_title, $category, $youtube_link)
    {
        $req = "INSERT INTO `user_speedrun_runs`(`id`, `user_id`, `game_title`, `category`, `youtube_link`) 
            VALUES (NULL ,'".$user_id."', '".$game_title."', '".$category."', '".$youtube_link."');";
        
        $this->sql->query($req);
    }
    
    public function Set($table, $column, $row  ,$id, $value)
    {
        $req = "UPDATE ".$table." SET ".$column." = '".$value."' WHERE `".$row."` ='".$id."';";
        
        $this->sql->query($req);
    }

}









?>


