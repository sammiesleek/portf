<?php
session_start();
include('../includes/config.php');

$root =
$output = "";
$sql = "SELECT * FROM project";
$stmt =$conn->prepare($sql);
if($stmt->execute()){
	$result = $stmt->get_result();
	$count = $result->num_rows;
	if($count > 0){
        while($row =$result->fetch_assoc()){

            $output .= '
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="bo-x" ">
                          <img src="pimg/'.$row['p_image'].'">
                            <div class="">
                                <div class="">
                                    '.$row['tittle'].'</div>
                            </div>
                        </div>
                        <a href="edit_project.php?project_id='.$row['project_id'].'" class="block-anchor panel-footer">Edit
                            <i class="fa fa-arrow-right"></i></a>
                        <a href="controller/delete.php?id='.$row['project_id'].'"    id="delete_button" class=" block-anchor panel-footer">
                            <i class="dell fa fa-close"></i>Delete</a>
                    </div>
                </div>
            ';
        
        }
        echo $output;
	}else{
		echo 'no project';
	}
}else{
    echo 'error';
}