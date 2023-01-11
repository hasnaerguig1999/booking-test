




<?php

// use post as GlobalPost;

require_once '../models/rooms.model.php';
     class ADD_room{
        
        
        public function add_room(){

            
             $data = array(
                'room_type'=>$_POST['room_type'].' '.$_POST['suite_type'],
                'room_price'=>$_POST['room_price'],
                'room_image'=>$_POST['room_image'],
                
            );
           
            
            $result=room::addroom($data);
        }
        public function getrooms(){
            return room::getAllrooms();
            // header('location:chambresimple.php');
        }
        public function getroom($room_id){
            
            
            
            $rooms = room::getOneroom($room_id);
            return $rooms;
            header('location:updateroom.php');
            
        }
        
        public function delete_room(){
            $room_id = array(
                'room_id' => $_POST['room_id']
            );
            room::delete_room($room_id);
            header('location:dashboard.php');
        }
        

        
        public function update_room(){
            $data_update = array(
                'room_id'=>$_POST['room_id'],
                'room_type'=>$_POST['room_type'],
                'room_price'=>$_POST['room_price'],
                'room_image'=>$_POST['room_image'],
                // 'reservation'=>$_POST['reservation'],
            );
            $result=room::update_room($data_update);
            
            header('location:dashboard.php');
        }
    }

    $data = new ADD_room();
$new_rooms = $data->getrooms();








if (isset($_POST['add'])) {
    $room = new ADD_room();
    $room->add_room();
    header('location:dashboard.php');

    
}
if (isset($_POST['delete'])) {
    $delete = new ADD_room();
    $delete->delete_room();
    header('location:dashboard.php');

}

if (isset($_POST['update_room'])) {
    $update = new ADD_room();
    $update->update_room();
    header('location:dashboard.php');
}


























