<?php

// require_once '../controller/rooms.controller.php';
// session_start();
// if(isset($_SESSION['email'])){
//   header('location:admin.php');
// }
// $room_id['room_id']=$_GET['id'];
// $update = new ADD_room();
//  $rooms = $update->getroom($room_id);


?>


<?php

class RoomBookingView
{
    private $roomTypes;
    private $suiteTypes;

    public function __construct($roomTypes, $suiteTypes)
    {
        $this->roomTypes = $roomTypes;
        $this->suiteTypes = $suiteTypes;
    }

    public function render()
    {
        ?>
        <form method="post" action="process_form.php">
            <label for="room_type">Room Type:</label>
            <select name="room_type" id="room_type" onchange="updateForm()">
                <?php
                foreach ($this->roomTypes as $roomType) {
                    echo '<option value="' . $roomType . '">' . $roomType . '</option>';
                }
                ?>
            </select>
            <br>
            <div id="suite_type_section" style="display: none;">
                <label for="suite_type">Suite Type:</label>
                <select name="suite_type" id="suite_type">
                    <?php
                    foreach ($this->suiteTypes as $suiteType) {
                        echo '<option value="';
                    }
                }
            }?>


<script src="./js/script.js"></script>


































<!--  in room controller
    public  function getavailable(){
    if(isset($_post[stype'])){
        'rtype'=>$_post['rtpe']. ' '.$_POST['stype'],

    }
};else{
    $available =array(
        'rtype'=>$_POST[rtype'],
    );
}
$Arooms=roomsmodel::getavailablerooms($available);
return $Arooms;
} -->