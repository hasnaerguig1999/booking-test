<?php
    require '../database/db_connection.php';
  
class room{
    
    static public function addroom($data){
        $db=Database::connect()->prepare("INSERT INTO rooms(room_type, room_price, room_image, reservation) VALUES(:room_type, :room_price , :room_image,'non reserver')");
      
    //   die(print_r($data));
    //    
       $db->bindParam(':room_type',$data['room_type']);
       $db->bindParam(':room_price',$data['room_price']);
       $db->bindParam(':room_image',$data['room_image']);
       
       $db->execute();
       
}
    static public function getAllrooms(){
        $db=Database::connect()->prepare("SELECT * FROM rooms");
        $db->execute();
        $rooms=$db->fetchAll();
        $db=NULL;
        
        
        
        return $rooms;
    }
    static public function getOneroom($room_id){
        $db=Database::connect()->prepare("SELECT * FROM rooms WHERE room_id = :room_id");
        
        $db->bindParam(':room_id',$room_id['room_id']);
        $db->execute();
        $rooms=$db->fetchAll();
        $db=NULL;
        
        
        
        return $rooms;
    }
    static public function update_room($data_update){
        $db=Database::connect()->prepare("UPDATE rooms SET room_type = :room_type, room_price = :room_price , room_image = :room_image WHERE room_id = :room_id");


        
        $db->bindParam(':room_type',$data_update['room_type']);
        $db->bindParam(':room_price',$data_update['room_price']);
        $db->bindParam(':room_image',$data_update['room_image']);
        $db->bindParam(':room_id',$data_update['room_id']);
        $db->execute();
    }



    static public function delete_room($data){
        $db=Database::connect()->prepare("DELETE FROM rooms WHERE room_id = :room_id ");
        $db->bindParam(':room_id',$data['room_id']);
        $db->execute();
    }
}