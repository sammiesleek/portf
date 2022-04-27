<?php
    include_once '../includes/config.php';
     

        $pid= $_GET['id'];
    $sql = "DELETE FROM project WHERE project_id=?";
    $stmt=$conn->prepare($sql);
    $stmt->bind_param('s', $pid);
    if($stmt->execute()){
         header("Location:../manage-projects.php");
        
    }
?>