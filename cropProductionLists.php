<?php include'includes/head.php';
include'includes/navbar.php';

include_once("dbCon.php");
$conn = connect();
    
if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $sql= "DELETE FROM crop_productions WHERE cropProduction_id=$id";
    $resultt = $conn->query($sql);
    
    if($conn->query($sql)){
        echo "<script>myAlert('Crop Production Delete Successfully','success','cropProductionLists');</script>";
        } else{
        echo "<script>myAlert(Crop Production Delete Not Successfully','error','cropProductionLists');</script>";
        }
}  
?>
</head>

<body>
    <!-- Breadcrumb Section start -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="index"><i class="fa fa-home"></i> Home</a>
                        <span>Crop Productions</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section end -->


    <!-- Feature Section -->
    <section class="homenav">

        <!-- Inner Header start -->
        <div class="container production_box">
            <div class="">
                <h4>Crop Productions</h4>
                <hr>
                <div class="">
                    <!-- Essential button -->
                    <div style="margin: 25px 0;">
                        <a href="cropplant.php" class="crp_btn"><i class="fa fa-plus" aria-hidden="true"></i> Create
                            crop
                            production</a>
                    </div>
                    <hr>

                    <!-- Result Table -->
                    <table id="example" class="display">
                        <thead>
                            <tr>
                                <th>Production Name</th>
                                <th>Crop Name</th>
                                <th>Location</th>
                                <th>Action</th>
                            </tr>
                            <thead>
                            <tbody>
                                <?php include_once("dbCon.php");
                            $conn = connect();
                            $sql= "SELECT * FROM crop_productions";
                            $result = $conn->query($sql);
                                while ($row = $result-> fetch_assoc()): 
                            ?>
                                <tr>
                                    <td><?php echo $row["cropProduction_name"]; ?></td>
                                    <td><?php echo $row["crop_name"]; ?></td>
                                    <td><?php echo $row["location"]; ?></td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="dropbtn"><i class="fa fa-bars"></i></button>
                                            <div class="dropdown-content">
                                                <a href="sessionData.php?view=<?php echo $row['cropProduction_id'];?>"><i
                                                        class="fa fa-eye" aria-hidden="true"></i>
                                                    View</a>
                                                <a href="cropProductionLists_edit.php?edit=<?php echo $row['cropProduction_id'];?>"
                                                    style="color: green;"><i class="fa fa-edit" aria-hidden="true"></i>
                                                    Edit</a>
                                                <a href="cropProductionLists.php?delete=<?php echo $row['cropProduction_id'];?>"
                                                    style="color: red;"><i class="fa fa-trash" aria-hidden="true"></i>
                                                    Delete</a>
                                            </div>
                                        </div>
                                    </td>
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