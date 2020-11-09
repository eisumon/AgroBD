<?php include'includes/head.php';
include'includes/navbar.php';

include_once("dbCon.php");
$conn = connect();

if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $sql= "SELECT * FROM crop_productions WHERE cropProduction_id=$id";
    $result = $conn->query($sql);
    // $row = mysqli_fetch_assoc($result);
    $row = $result-> fetch_assoc();
    $cropProduction_name = $row['cropProduction_name'];
    $crop_name = $row['crop_name'];
    $location = $row['location'];
}

if (isset($_POST['update'])){
    $id = $_POST['cropProduction_id'];
    $cropProduction_name = $_POST['cropProduction_name'];
    $crop_name = $_POST['crop_name'];
    $location = $_POST['location'];
    
    $sql= "UPDATE crop_productions SET cropProduction_name= '$cropProduction_name', crop_name= '$crop_name', location= '$location'  WHERE cropProduction_id=$id";
    $result = $conn->query($sql);
    
    if($conn->query($sql)){

        echo "<script>myAlert('Record Update Successfully','success','cropProductionLists');</script>";
        } else{
        echo "<script>myAlert(Record Update Not Successfully','error','cropProductionLists_edit');</script>";
        }
}
?>
</head>

<body>

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="index"><i class="fa fa-home"></i> Home</a>
                        <a href="cropProductionLists">Production List</a>
                        <span>Edit Production List</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->


    <!-- Feature Section -->
    <section class="homenav">
        <!-- Inner Header start -->
        <div class="container production_box">
            <!-- Modal body -->
            <div class="modal-body">
            <h3 style="text-align: center; color:#3D9E0F;">Edit Production List</h3><br>
                <div class="container">
                    <form onsubmit="return nullcheck();" action="" method="POST">
                        <input type="hidden" name="cropProduction_id" value="<?=$id; ?>">
                        <div>
                            <label for="cropProduction_name">Production Name:</label><br>
                            <input type="text" id="cropProduction_name" name="cropProduction_name" value="<?=$cropProduction_name; ?>"
                                placeholder=" Enter Production name">
                        </div>
                        <div>
                            <label for="crop_name">Crop Name:</label><br>
                            <input type="text" id="crop_name" name="crop_name" value="<?=$crop_name; ?>"
                                placeholder=" Enter Crop Name">
                        </div>
                        <div>
                            <label for="location">Location:</label><br>
                            <input type="text" id="location" value="<?=$location; ?>" name="location"
                                placeholder=" Enter Location">
                        </div>
                        <br>
                        <div class="sub"><input type="submit" value="Update" name="update"></div>
                        <br>
                    </form>
                </div>
            </div>
            <!-- Modal body end -->
        </div>
        <!-- Inner Header end -->
    </section>

    <!-- Footer Section Begin -->
    <?php include'includes/footer.php';?>
    <!-- Footer Section End -->
    <!-- Footer Section End -->
    <script>
        function nullcheck() {

            $(".error").remove();

            $('#submit').removeAttr('disabled', true);

            if ($('#cropProduction_name').val() == '') {
                $('#cropProduction_name').after('<span class="error">* This field is required</span>');
                return false;
            }

            if ($('#crop_name').val() == '') {
                $('#crop_name').after('<span class="error">* This field is required</span>');
                return false;
            }

            if ($('#location').val() == '') {
                $('#location').after('<span class="error">* This field is required</span>');
                return false;
            }
        }
    </script>
</body>

</html>