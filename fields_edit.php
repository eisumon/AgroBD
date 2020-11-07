<?php include'includes/head.php';
include'includes/navbar.php';

include_once("dbCon.php");
$conn = connect();

if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $sql= "SELECT * FROM production_field WHERE field_id=$id";
    $result = $conn->query($sql);
    // $row = mysqli_fetch_assoc($result);
    $row = $result-> fetch_assoc();
    $field_name = $row['field_name'];
    $location = $row['location'];
    $usable_area = $row['usable_area'];
    $soil_type = $row['soil_type'];
    $ownership_type = $row['ownership_type'];
}

if (isset($_POST['update'])){
    $id = $_POST['field_id'];
    $field_name = $_POST['field_name'];
    $location = $_POST['location'];
    $usable_area = $_POST['usable_area'];
    $soil_type = $_POST['soil_type'];
    $ownership_type = $_POST['ownership_type'];
    
    $sql= "UPDATE production_field SET field_name= '$field_name', location= '$location', usable_area= '$usable_area', soil_type= '$soil_type', ownership_type= '$ownership_type'  WHERE field_id=$id";
    $result = $conn->query($sql);
    
    if($conn->query($sql)){

        echo "<script>myAlert('Record Update Successfully','success','fields');</script>";
        } else{
        echo "<script>myAlert(Record Update Not Successfully','error','fields_edit');</script>";
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
                        <a href="fields">Fields</a>
                        <span>Edit Fields</span>
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
            <h3 style="text-align: center; color:#3D9E0F;">Edit Field</h3><br>
                <div class="container">
                    <form onsubmit="return nullcheck();" action="" method="POST">
                        <input type="hidden" name="field_id" value="<?=$id; ?>">
                        <div>
                            <label for="field_name">Field Name:</label><br>
                            <input type="text" id="field_name" name="field_name" value="<?=$field_name; ?>"
                                placeholder=" Enter field name">
                        </div>
                        <div>
                            <label for="location">Location:</label><br>
                            <input type="text" id="location" name="location" value="<?=$location; ?>"
                                placeholder=" Enter field location">
                        </div>
                        <div>
                            <label for="usable_area">Usable Area:</label><br>
                            <input type="text" id="usable_area" value="<?=$usable_area; ?>" name="usable_area"
                                placeholder=" Enter usable area">
                        </div>
                        <div>
                            <label for="soil_type">Soil type:</label><br>
                            <select class="form-control" id="soil_type" name="soil_type">
                                <option value="">Select</option>
                                <option value="clay" <?php if ($row["soil_type"]=='clay'){echo "selected";}?>>Clay
                                </option>
                                <option value="clay loam" <?php if ($row["soil_type"]=='clay loam'){echo "selected";}?>>
                                    Clay loam</option>
                                <option value="loam" <?php if ($row["soil_type"]=='loam'){echo "selected";}?>>Loam
                                </option>
                                <option value="loamy sand"
                                    <?php if ($row["soil_type"]=='loamy sand'){echo "selected";}?>>Loamy sand</option>
                                <option value="sand" <?php if ($row["soil_type"]=='sand'){echo "selected";}?>>Sand
                                </option>
                                <option value="sandy clay"
                                    <?php if ($row["soil_type"]=='sandy clay'){echo "selected";}?>>Sandy clay</option>
                                <option value="sandy clay loam"
                                    <?php if ($row["soil_type"]=='sandy clay loam'){echo "selected";}?>>Sandy clay loam
                                </option>
                                <option value="sandy loam"
                                    <?php if ($row["soil_type"]=='sandy loam'){echo "selected";}?>>Sandy loam</option>
                                <option value="silt" <?php if ($row["soil_type"]=='silt'){echo "selected";}?>>Silt
                                </option>
                                <option value="silt loam" <?php if ($row["soil_type"]=='silt loam'){echo "selected";}?>>
                                    Silt loam</option>
                                <option value="silty clay"
                                    <?php if ($row["soil_type"]=='silty clay'){echo "selected";}?>>Silty clay</option>
                                <option value="silty clay loam"
                                    <?php if ($row["soil_type"]=='silty clay loam'){echo "selected";}?>>Silty clay loam
                                </option>
                            </select>
                        </div>
                        <div>
                            <label for="ownership_type">Ownership type:</label><br>
                            <select class="form-control" id="ownership_type" name="ownership_type">
                                <option value="">Select</option>
                                <option value="privately owned"
                                    <?php if ($row["ownership_type"]=='privately owned'){echo "selected";}?>>Privately
                                    owned</option>
                                <option value="lease" <?php if ($row["ownership_type"]=='lease'){echo "selected";}?>>
                                    Lease</option>
                                <option value="given for use"
                                    <?php if ($row["ownership_type"]=='given for use'){echo "selected";}?>>Given for use
                                </option>
                                <option value="property manager"
                                    <?php if ($row["ownership_type"]=='property manager'){echo "selected";}?>>Property
                                    manager</option>
                                <option value="other" <?php if ($row["ownership_type"]=='other'){echo "selected";}?>>
                                    Other</option>
                                <option value="mixed" <?php if ($row["ownership_type"]=='mixed'){echo "selected";}?>>
                                    Mixed</option>
                                <option value="owned by relatives"
                                    <?php if ($row["ownership_type"]=='owned by relatives'){echo "selected";}?>>Owned by
                                    relatives</option>
                            </select>
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

            if ($('#field_name').val() == '') {
                $('#field_name').after('<span class="error">* This field is required</span>');
                return false;
            }

            if ($('#location').val() == '') {
                $('#location').after('<span class="error">* This field is required</span>');
                return false;
            }

            if ($('#usable_area').val() == '') {
                $('#usable_area').after('<span class="error">* This field is required</span>');
                return false;
            }

            if ($('#soil_type').val() == '') {
                $('#soil_type').after('<span class="error">* This field is required</span>');
                return false;
            }

            if ($('#ownership_type').val() == '') {
                $('#ownership_type').after('<span class="error">* This field is required</span>');
                return false;
            }
        }
    </script>
</body>

</html>