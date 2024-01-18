<?php
include 'connection.php';
  if(isset($_POST['login'])){

    $course= $_POST['course'];
    $matricNumber = $_POST['matricNumber'];
    $score = $_POST['score'];

    if($course == "csc315"){

      $query = "SELECT * FROM tblcsc315 WHERE matricNumber = '$matricNumber' ";
      $rs = $connect->query($query);
      $num = $rs->num_rows;
      $rows = $rs->fetch_row();

      if($rows){
        echo "<div style='font-size:20px;font-weight:bold;background-color:#0284c7;color:white;text-align:center; padding:15px;'>CSC 315 RESULT</div>";
        echo "<br>";
        echo "<label style='font-weight:bold;color:black;padding:7px'>Matric Number: </label>".$rows[1];
        echo "<br>";
        echo "<label style='font-weight:bold;color:black;padding:7px'>Score:  </label>".$rows[2];
        echo "<br>";
        echo "<br>";
        echo "<div style='background-color:#0284c7;text-align:center; padding:3px'></div>";
      }

      else{

        echo "<div style='background-color:red;color:white;text-align:center; padding: 7px'> Matric Number not found for CSC 315</div>";

      }
    }
    else if($course == "csc317"){

        $query = "SELECT * FROM tblcsc317 WHERE matricNumber = '$matricNumber' ";
        $rs = $connect->query($query);
        $num = $rs->num_rows;
        $rows = $rs->fetch_row();
  
        if($rows){
            echo "<div style='font-size:20px;font-weight:bold;background-color:#737373;color:white;text-align:center; padding:15px;'>CSC 317 RESULT</div>";
            echo "<br>";
            echo "<label style='font-weight:bold;color:black;padding:7px'>Matric Number: </label>".$rows[1];
            echo "<br>";
            echo "<label style='font-weight:bold;color:black;padding:7px'>Score:  </label>".$rows[2];
            echo "<br>";
            echo "<br>";
            echo "<div style='background-color:#737373;text-align:center; padding:3px'></div>";
          }
    
  
        else{
  
            echo "<div style='background-color:red;color:white;text-align:center; padding: 7px'> Matric Number not found for CSC 317</div>";
  
        }
    }
}
?>