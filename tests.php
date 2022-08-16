<?php



$file = file_get_contents("https://xivapi.com/freecompany/9232801448574661821?data=FCM");

$members = json_decode($file)->FreeCompanyMembers;




foreach($members AS $member)
{
    echo '<img src="'.$member->Avatar.'">';
    echo '<img src="'.$member->RankIcon.'"> '.$member->Rank.' Name: '.$member->Name.' <br>';
}





