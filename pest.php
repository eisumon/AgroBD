<?php include'includes/head.php';
include'includes/navbar.php';

include_once("dbCon.php");
$conn = connect();
$production_id = $_SESSION['production_id'];

if(isset($_SESSION['production_id'])){ 
    $id = $_SESSION['production_id'];
    $sql = "SELECT * FROM crop_productions WHERE cropProduction_id = $id ";
    $result = $conn->query($sql);
    $row = $result-> fetch_assoc();
}
?>

<!-- Feature Section -->
<section class="homenav">

    <!-- Inner Header start -->
    <div class="container">
        <div class="">
            <h4 style="padding-bottom: 20px;"><?php  echo $row['cropProduction_name'];?></h4>
            <hr><br>
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <!-- Nav bar start -->
                    <div class="nav-item2">
                        <div class="container">
                            <!-- navigation bar start -->
                            <nav class="nav-menu mobile-menu">
                                <ul>
                                    <li><a href="fields.php">Fields</a></li>
                                    <li><a href="createSeason.php">Create Seasons</a></li>
                                    <li><a href="tasks.php">Tasks</a></li>
                                    <li class="active"><a href="">Pest</a></li>
                                </ul>
                            </nav>
                            <!-- navigation bar end -->
                        </div>
                    </div>
                    <!-- Nav bar end -->
                </div>
                <div class="col-lg-9 col-md-9 production_box">

                    <!-- Result Table -->
                    <table id="example" class="display">
                        <thead>
                            <tr>
                                <th>Pests name:</th>
                                <th>Type:</th>
                                <th>Desciption:</th>
                            </tr>
                            <thead>
                            <tbody>
                                <?php
                            $sql= "SELECT * FROM pests";
                            $result = $conn->query($sql);
                                while ($row = $result-> fetch_assoc()): 
                            ?>
                                <tr>
                                    <td><?php echo $row["pests_name"]; ?></td>
                                    <td><?php echo $row["pests_type"]; ?></td>
                                    <td><?php echo $row["description"]; ?></td>
                                    
                                </tr>
                                <?php endwhile;?>
                            </tbody>
                    </table>
                    <!-- Result Table End -->
                </div>
            </div>
            <!-- Inner Header end -->
</section>


<!-- Footer Section Begin -->
<?php include'includes/footer.php';?>
<!-- Footer Section End -->

<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>

</body>

</html>