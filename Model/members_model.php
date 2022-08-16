
<?php
$file = file_get_contents("https://xivapi.com/freecompany/9232801448574661821?data=FCM");

$members = json_decode($file)->FreeCompanyMembers;

echo ' <h3 class="mb-5 text-uppercase">Custos</h3>';
foreach ($members as $member)
{
    if ($member->Rank == "Custos")
    {
        echo '
                        <div class="row justify-content-center">
                        <div class="col-md-auto">
                        <table class="table table-sm table-borderless">
                        <tr>
                        <td><img src="' . $member->Avatar . '" > </td> 
                        <tr>
                        <td><img src="' . $member->RankIcon . '">' . '<a target="_blank" href="https://de.finalfantasyxiv.com/lodestone/character/'.$member->ID.'" style="text-decoration: none"> ' . $member->Name . '</a></td>
                        </tr>
                        </tr>
                        </table>                                                                     
                        </div>
                        </div>';
    }
}
echo "<hr class='mt-5' style='color:#871D33'>";
echo ' <h3 class="mb-5 mt-5 text-uppercase">Astator</h3>';
echo '<div class="row justify-content-center">';
foreach($members AS $mem)
{
    if($mem->Rank == 'Astator')
    {
        echo '
                         <div class="col-md-auto">
                        <table class="table table-sm table-borderless">
                        <tr>
                        <td><img src="' . $mem->Avatar . '" > </td> 
                        <tr>
                        <td><img src="' . $mem->RankIcon . '">' . '<a target="_blank" href="https://de.finalfantasyxiv.com/lodestone/character/'.$mem->ID.'" style="text-decoration: none"> ' . $mem->Name . '</a></td>
                        </tr>
                        </tr>
                        </table>                                                                     
                        </div>
                        ';
    }
}
echo '</div>
                        <hr class="mt-5" style="color:#871D33">
                        <h3 class="mb-5 mt-5 text-uppercase">Administrators</h3>
                        <div class="row justify-content-center">
                        ';
foreach($members AS $m)
{
    if($m->Rank == 'Administrators')
    {
        echo '
                         <div class="col-md-auto">
                        <table class="table table-sm table-borderless">
                        <tr>
                        <td><img src="' . $m->Avatar . '" > </td> 
                        <tr>
                        <td><img src="' . $m->RankIcon . '">' . '<a target="_blank" href="https://de.finalfantasyxiv.com/lodestone/character/'.$m->ID.'" style="text-decoration: none"> ' . $m->Name . '</a></td>
                        </tr>
                        </tr>
                        </table>                                                                     
                        </div>
                        ';
    }
}


echo '<hr class="mt-5" style="color:#871D33">
                        <h3 class="mb-5 mt-5 text-uppercase">Faber</h3>
                        <div class="row justify-content-center">
                        ';
foreach($members AS $me)
{

    if($me->Rank == 'Faber')
    {
        echo '
                         <div class="col-md-auto">
                        <table class="table table-sm table-borderless">
                        <tr>
                        <td><img src="' . $me->Avatar . '" > </td> 
                        <tr>
                        <td><img src="' . $me->RankIcon . '">' . '<a target="_blank" href="https://de.finalfantasyxiv.com/lodestone/character/'.$me->ID.'" style="text-decoration: none"> ' . $me->Name . '</a></td>
                        </tr>
                        </tr>
                        </table>                                                                     
                        </div>
                        ';
    }
    else
    {
        echo '';
    }

}

echo '</div>
                        <hr class="mt-5" style="color:#871D33">
                        <h3 class="mb-5 mt-5 text-uppercase">Gladii</h3>
                        <div class="row justify-content-center">
                        ';

foreach($members AS $memb)
{
    if($memb->Rank == 'Gladii')
    {
        echo '
                         <div class="col-md-auto">
                        <table class="table table-sm table-borderless">
                        <tr>
                        <td><img src="' . $memb->Avatar . '" > </td> 
                        <tr>
                        <td><img src="' . $memb->RankIcon . '">' . '<a target="_blank" href="https://de.finalfantasyxiv.com/lodestone/character/'.$memb->ID.'" style="text-decoration: none"> ' . $memb->Name . '</a></td>
                        </tr>
                        </tr>
                        </table>                                                                     
                        </div>
                        ';
    }
}
echo '</div>
                        <hr class="mt-5" style="color:#871D33">
                        <h3 class="mb-5 mt-5 text-uppercase">Amicus</h3>
                        <div class="row justify-content-center">
                        ';
foreach($members AS $membe)
{
    if($membe->Rank == 'Amicus')
    {
        echo '
                         <div class="col-md-auto">
                        <table class="table table-sm table-borderless">
                        <tr>
                        <td><img src="' . $membe->Avatar . '"> </td> 
                        <tr>
                        <td><img src="' . $membe->RankIcon . '">' . '<a  target="_blank" href="https://de.finalfantasyxiv.com/lodestone/character/'.$membe->ID.'" style="text-decoration: none"> ' . $membe->Name . '</a></td>
                        </tr>
                        </tr>
                        </table>                                                                     
                        </div>
                        ';
    }
}
echo '</div>
                       <hr class="mt-5" style="color:#871D33">
                      <h3 class="mb-5 mt-5 text-uppercase">Inductee</h3>
                      <div class="row justify-content-center">';
foreach($members AS $ind)
{
    if($ind->Rank == 'Inductee')
    {
        echo '
                         <div class="col-md-auto">
                        <table class="table table-sm table-borderless">
                        <tr>
                        <td><img src="' . $ind->Avatar . '"> </td> 
                        <tr>
                        <td><img src="' . $ind->RankIcon . '">' . '<a  target="_blank" href="https://de.finalfantasyxiv.com/lodestone/character/'.$ind->ID.'" style="text-decoration: none"> ' . $ind->Name . '</a></td>
                        </tr>
                        </tr>
                        </table>                                                                     
                        </div>
                        ';
    }
    else
    {
        echo '';
    }
}
echo '</div>
                       <hr class="mt-5" style="color:#871D33">
                      <h3 class="mb-5 mt-5 text-uppercase">Twinks</h3>
                      <div class="row justify-content-center">';
foreach($members AS $twink)
{
    if($twink->Rank == 'Twink')
    {
        echo '
                         <div class="col-md-auto">
                        <table class="table table-sm table-borderless">
                        <tr>
                        <td><img src="' . $twink->Avatar . '"> </td> 
                        <tr>
                        <td><img src="' . $twink->RankIcon . '">' . '<a  target="_blank" href="https://de.finalfantasyxiv.com/lodestone/character/'.$twink->ID.'" style="text-decoration: none"> ' . $twink->Name . '</a></td>
                        </tr>
                        </tr>
                        </table>                                                                     
                        </div>
                        ';
    }
    else
    {
        echo '';
    }
}
echo '</div>
                       <hr class="mt-5" style="color:#871D33">
                      <h3 class="mb-5 mt-5 text-uppercase">Former</h3>
                      <div class="row justify-content-center">';
foreach($members AS $former)
{
    if($former->Rank == 'Former')
    {
        echo '
                         <div class="col-md-auto">
                        <table class="table table-sm table-borderless">
                        <tr>
                        <td><img src="' . $former->Avatar . '"> </td> 
                        <tr>
                        <td><img src="' . $former->RankIcon . '">' . '<a  target="_blank" href="https://de.finalfantasyxiv.com/lodestone/character/'.$former->ID.'" style="text-decoration: none"> ' . $former->Name . '</a></td>
                        </tr>
                        </tr>
                        </table>                                                                     
                        </div>
                        ';
    }
    else
    {
        echo '';
    }
}
echo '<div>';


?>