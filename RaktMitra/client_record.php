<?php
    include "conn.php";
    $sql = mysqli_query($conn, "SELECT * FROM `data`");
    $output = "";
    if(mysqli_num_rows($sql) > 0){
        while($fecth = mysqli_fetch_assoc($sql)){
            $output .= '<tr>
            <td>'.$fecth['crud_id'].'</td>
            <td>'.$fecth['name'].'</td>
            <td>'.$fecth['percentage'].'</td>
            <td>'.$fecth['number'].'</td>
            <td>'.$fecth['address'].'</td>
            <td>'.$fecth['semister'].'</td>
            <td>'.$fecth['gender'].'</td>
            <td>'.$fecth['time_created'].'</td>
            <td>
                <a href="edit.php?client='.$fecth['crud_id'].'" class="btn btn-primary btn-sm">Edit</a>
                <a href="php/delete.php?client='.$fecth['crud_id'].'" class="btn btn-danger btn-sm">Delete</a>
            </td>
        </tr>';
        }
    }else{
        $output .= 'No Client Are Available';
    }

    echo $output;

?>