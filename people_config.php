<?php session_start();?>


<?php 
include_once("dbCon.php");
$conn = connect();

if (isset($_POST['filter'])){

    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $role = $_POST['role'];
    

    if($fname != "" || $lname != "" || $gender != "" || $city != "" || $role != ""){
        $sql= "SELECT * FROM people WHERE fname= '$fname', lname= '$lname', gender= '$gender', city= '$city', role= '$role'";
       
        $result = $conn->query($sql);
        if($result->num_rows>0){
            while($row = $result-> fetch_assoc()){
                $id = $row['p_id'];
                $fname = $row['fname'];
                $lname = $row['lname'];
                $gender = $row['gender'];
                $city = $row['city'];
                $role = $row['role'];
                }
            }
          }
        else{
            echo "Records not found";
        }
}       
?>