<?php session_start();?>
<?php include'includes/head.php';?>


<?php include_once("dbCon.php");
    
$conn = connect();

if (isset($_POST['submit'])){

    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $role = $_POST['role'];
    
    $sql = "SELECT phone FROM people WHERE phone='$phone'";
    $result = $conn->query($sql);

    if($result->num_rows>0){
        echo"<script>mailAlert();</script>";
    }else{
        $sql ="INSERT INTO people(fname, lname, gender, city, address, phone, role) VALUES('$fname', '$lname', '$gender', '$city', '$address', '$phone', '$role')";
    
        //echo $sql;exit;
        if($conn->query($sql)){

            echo "<script src=people>myAlert();</script>";
            } else{
            echo "<script>erAlert();</script>";
            }
    }
}


      if (isset($_GET['delete'])){
          $id = $_GET['delete'];
          $sql= "DELETE FROM people WHERE p_id=$id";
          $resultt = $conn->query($sql);
          
      if($conn->query($sql)){

          echo "<script>del_Alert();</script>";
      } else{
          echo "<script>del_er_Alert();</script>";
      }
      }


   $id = 0;
   $update = false;
   $fname = '';
   $lname = '';
   $gender = '';
   $city = '';
   $address = '';
   $phone = '';
   $role = '';

   if (isset($_GET['edit'])){
       $id = $_GET['edit'];
       $update = true;
       $sql= "SELECT * FROM people WHERE p_id=$id";
       $result = $conn->query($sql);
       if (count($result)==1){
           $row = $result->fetch_array();
           $fname = $row['fname'];
           $lname = $row['lname'];
           $gender = $row['gender'];
           $city = $row['city'];
           $address = $row['address'];
           $phone = $row['phone'];
           $role = $row['role'];
       }
   }

   if (isset($_POST['update'])){
       $id = $_POST['id'];
       $fname = $_POST['firstname'];
       $lname = $_POST['lastname'];
       $gender = $_POST['gender'];
       $city = $_POST['city'];
       $address = $_POST['address'];
       $phone = $_POST['phone'];
       $role = $_POST['role'];
       
       $sql= "UPDATE person SET firstname= '$fname', lastname= '$lname', gender= '$gender',firstname= '$fname', city= '$city', address= '$address', phone= '$phone', role= '$role'  WHERE p_id=$id";
       $result = $conn->query($sql);
       
   }




?>                                     