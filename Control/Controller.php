<?php

session_start();
// require "Database.php";

class Controller
{
    private static $instance = null;

    private function __construct()
    {

    }

    public static function getInstance()
    {
        if(self::$instance = null)
        {
            self::$instance = new Controller;
        }
        return self::$instance;
    }

    public function postNews_nopic($db)
    {
        $success = "<script>;
		window.location.href ='./groups.php'</script>";
        $content = $_POST['content'];
        $query = 'INSERT INTO news (content) VALUES (?)';
        $stmt = $db->prepare($query);
        $result = $stmt->execute($content);

        if($result)
        {
            echo $success;
        }
        else
        {
            print_r($stmt->errorInfo());
            die();
        }
    }

    public function getMembers()
    {
        $file = file_get_contents("https://xivapi.com/freecompany/9232801448574661821?data=FCM");

        $members = json_decode($file)->FreeCompanyMembers;

        foreach($members AS $member)
        {
            echo '<img src="'.$member->Avatar.'">';
            echo '<img src="'.$member->RankIcon.'"> '.$member->Rank.' Name: '.$member->Name.' <br>';
        }
    }
}