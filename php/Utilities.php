<?php

class Utilities
{
    # Variables
    
    public $index = "";
    public $sql ="";
    
    # Constructeur Syntaxe exclusive __construct
    public function __construct($id)
{
    $this->index = $id;
    
    $dsn = 'mysql:host=localhost;dbname=speedrun_website';
    $username = 'root';
    $password = '';
    
    try 
    {
        // Try connecting without a password
        $this->sql = new PDO($dsn, $username, $password);
    } 
    catch (PDOException $e) 
    {
        // If the first attempt fails, try with the password "root1234"
        $password = 'root1234';
        $this->sql = new PDO($dsn, $username, $password);
    }
}

    public function SelectAll($table)
    {
        $req = "SELECT * FROM `" . $table."`";
       
        $result = $this->sql->query($req);
        $tlbresult = $result->fetchAll();
        return $tlbresult;
    }

    public function FetchOptions($column, $table)
    {
        $options = [];
        
            $req = "SELECT COLUMN_TYPE FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = '".$table."' AND COLUMN_NAME = '" . $column . "'";
            $stmt = $this->sql->prepare($req);
            $stmt->execute();
            $result = $stmt->fetch();
            $enum_list = explode(',', preg_replace('/[^\w,]/', '', $result['COLUMN_TYPE']));
            foreach ($enum_list as $value) 
            {
                $option_value = str_replace('enum', '', $value);
                $options[$option_value] = $option_value;
                
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

    public function addNewUser($username, $user_email, $profile_picture, $password, $user_status = 'Active', $user_role = 'User')
    {
        $req = "INSERT INTO `users`(`id`, `username`, `user_email`, `profile_picture`, `password`, `user_description`, `registration_time`, `is_admin`, `user_status`, `user_role`) 
        VALUES (NULL ,'".$username."','".$user_email."', '".$profile_picture."', '".$password."', NULL, NOW(), '".$user_status."', '".$user_role."');";

        $this->sql->query($req);
    }
    public function addNewStaffMember($username, $user_email, $profile_picture, $password,  $user_status = 'Active', $user_role)
    {
        $req = "INSERT INTO `users`(`id`, `username`, `user_email`, `profile_picture`, `password`, `user_description`, `registration_time`, `user_status`, `user_role`) 
        VALUES (NULL ,'".$username."','".$user_email."', '".$profile_picture."', '".$password."', NULL, NOW(), '".$user_status."', '".$user_role."');";
        
        $this->sql->query($req);
    }

    public function addNewVideo($title, $video_url, $user_id = 0, $game_id = 0, $category_speedrun = 'Any%', $run_time = '01:00:00')
    {
        $req = "INSERT INTO `videos`(`id`, `title`, `description`, `video_url`, `user_id`, `game_id`, `category_speedrun`, `run_time`) 
        VALUES (NULL ,'".$title."', NULL, '".$video_url."', '".$user_id."', '".$game_id."', '".$category_speedrun."', '".$run_time."');";

        $this->sql->query($req);
    }

    public function addNewArticle($title, $content, $user_id, $article_cover_picture_link = NULL)
    {
        if (is_numeric($user_id))
        {
            $req = "INSERT INTO `articles`(`article_id`, `article_cover_picture_link`, `article_title`, `article_content`, `user_id`) 
                    VALUES (NULL ,'".$article_cover_picture_link."','".$title."','".$content."',".$user_id.")";
            if ($this->sql->query($req))
            {
                echo "L'article a été ajouté avec succès !";
            } else {
                $error_info = $this->sql->errorInfo();
                echo "Erreur lors de l'ajout de l'article : " . $error_info[2];
            }
        }
        else
        {
            echo "Invalid user id";
        }
    }



    public function addNewGame($title, $description, $game_picture)
    {
        $req = "INSERT INTO `games`(`id`, `title`, `description`, `game_picture`) 
        VALUES (NULL ,'".$title."','".$description."', '".$game_picture."');";

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

    public function addNewBan($table, $ban_reason = 'ForbiddenWord', $ban_start_date, $user_id, $ban_Type)
    {
        $req = "INSERT INTO `".$table."`(`softban_id`, `softban_reason`, `softban_start_date`, `user_id`) 
                VALUES (NULL,'" . $ban_reason . "','" . $ban_start_date . "','" . $user_id . "')";
        $this->Set("users", "user_status", "id", $user_id, $ban_Type);
        $this->sql->query($req);        
    }

}









?>


