<?php 

require_once 'db_connect.php';


function showAllEvent(){
 $conn = db_conn();
    $selectQuery = 'SELECT * FROM `events` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC); 
    return $rows;
}

function showEvent($id){
 $conn = db_conn();
 $selectQuery = "SELECT * FROM `events` where ID = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}


function updateEvent($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE events set client_name = ?, event_name = ?, price = ?, approval_status = ? where ID = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
         $data['client_name'], $data['event_name'], $data['price'],$data['approval_status'], $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function deleteEvent($id){
 $conn = db_conn();
    $selectQuery = "DELETE FROM `events` WHERE `ID` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}