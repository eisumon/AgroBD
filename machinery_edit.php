<?php include'includes/head.php';
include'includes/navbar.php';

include_once("dbCon.php");
$conn = connect();

if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $sql= "SELECT * FROM machinery WHERE m_id=$id";
    $result = $conn->query($sql);
    // $row = mysqli_fetch_assoc($result);
    $row = $result-> fetch_assoc();
    $machinery_name = $row['machinery_name'];
    $category = $row['category'];
    $manufacturer = $row['manufacturer'];
    $model = $row['model'];
    $reg_number = $row['reg_number'];
}

if (isset($_POST['update'])){
    $id = $_POST['m_id'];
    $machinery_name = $_POST['machinery_name'];
    $category = $_POST['category'];
    $manufacturer = $_POST['manufacturer'];
    $model = $_POST['model'];
    $reg_number = $_POST['reg_number'];
    
    $sql= "UPDATE machinery SET machinery_name= '$machinery_name', category= '$category', manufacturer= '$manufacturer', model= '$model', reg_number= '$reg_number'  WHERE m_id=$id";
    $result = $conn->query($sql);
    
    if($conn->query($sql)){

        echo "<script>myAlert('Record Update Successfully','success','machinery');</script>";
        } else{
        echo "<script>myAlert(Record Update Not Successfully','error','machinery_edit');</script>";
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
                        <a href="machinery">Machinery</a>
                        <span>Edit machinery</span>
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
            <h4>Machinery</h4>
            <!-- Modal body -->
            <div class="modal-body">
                <div class="container">
                    <form onsubmit="return nullcheck();" action="" method="POST">
                        <input type="hidden" name="m_id" value="<?=$id; ?>">
                        <div>
                            <label for="machinery_name">Machinery Name:</label><br>
                            <input type="text" id="machinery_name" name="machinery_name" value="<?=$machinery_name;?>"
                                placeholder=" Machinery name" oninput="ontype();">
                        </div>
                        <div>
                            <label for="category">Category:</label><br>
                            <input type="text" id="category" name="category" value="<?=$category;?>"
                                placeholder=" Category" oninput="ontype();">
                        </div>
                        <div>
                            <label for="manufacturer">Manufacturer:</label><br>
                            <input type="text" id="manufacturer" name="manufacturer" value="<?=$manufacturer;?>"
                                placeholder="Manufacturer name" oninput="ontype();">
                        </div>

                        <div>
                            <label for="model">Model:</label><br>
                            <input type="text" id="model" name="model" value="<?=$model;?>"
                                placeholder="Model name or number">
                        </div>
                        <div>
                            <label for="reg_number">Registration number:</label><br>
                            <input type="text" id="reg_number" name="reg_number" value="<?=$reg_number;?>"
                                placeholder="Registration number">
                        </div>
                        <br>
                        <div class="sub"><input type="submit" value="Update" name="update"></div>

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

    <script>
        function nullcheck() {

            $(".error").remove();

            $('#submit').removeAttr('disabled', true);

            if ($('#machinery_name').val() == '') {
                $('#machinery_name').after('<span class="error">* This field is required</span>');
                return false;
            }

            if ($('#category').val() == '') {
                $('#category').after('<span class="error">* This field is required</span>');
                return false;
            }

            if ($('#manufacturer').val() == '') {
                $('#manufacturer').after('<span class="error">* This field is required</span>');
                return false;
            }

            if ($('#model').val() == '') {
                $('#model').after('<span class="error">* This field is required</span>');
                return false;
            }

            if ($('#reg_number').val() == '') {
                $('#reg_number').after('<span class="error">* This field is required</span>');
                return false;
            }
        }

        function ontype() {
            $(".error").remove();

            if ($('#machinery_name').val() !== '') {
                if (!/^[a-z ]+$/i.test($("#machinery_name").val())) {
                    $('#machinery_name').after('<span class="error">*Machinery name can not be numeric!!</span>');
                    return false;
                }
            }
            if ($('#category').val() !== '') {
                if (!/^[a-z ]+$/i.test($("#category").val())) {
                    $('#category').after('<span class="error">*Category can not be numeric!!</span>');
                    return false;
                }
            }
            if ($('#manufacturer').val() !== '') {
                if (!/^[a-z ]+$/i.test($("#manufacturer").val())) {
                    $('#manufacturer').after('<span class="error">*Manufacturer name can not be numeric!!</span>');
                    return false;
                }
            }
        }
    </script>
</body>

</html>