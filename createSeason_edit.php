<?php include'includes/head.php';
include'includes/navbar.php';

include_once("dbCon.php");
$conn = connect();

if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $sql= "SELECT * FROM create_seasons WHERE createSeason_id=$id";
    $result = $conn->query($sql);
    // $row = mysqli_fetch_assoc($result);
    $row = $result-> fetch_assoc();
    $seasonName = $row['seasonName'];
    $startDate = $row['startDate'];
    $endDate = $row['endDate'];
    $status = $row['status'];
    $expectedYield = $row['expectedYield'];
}

if (isset($_POST['update'])){
    $id = $_POST['createSeason_id'];
    $seasonName = $_POST['seasonName'];
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];
    $status = $_POST['status'];
    $expectedYield = $_POST['expectedYield'];
    
    $sql= "UPDATE create_seasons SET seasonName= '$seasonName', startDate= '$startDate', endDate= '$endDate', status= '$status', expectedYield= '$expectedYield' WHERE createSeason_id=$id";
    $result = $conn->query($sql);
    
    if($conn->query($sql)){

        echo "<script>myAlert('Record Update Successfully','success','createSeason');</script>";
        } else{
        echo "<script>myAlert(Record Update Not Successfully','error','createSeason_edit');</script>";
        }
}
?>
</head>

<body>


    <!-- Feature Section -->
    <section class="homenav">
        <!-- Inner Header start -->
        <div class="container production_box">
            <!-- Modal body -->
            <div class="modal-body">
                <h3 style="text-align: center; color:#3D9E0F;">Edit Season Record</h3><br>
                <div class="container">
                    <form onsubmit="return nullcheck();" method="POST">
                        <input type="hidden" name="createSeason_id" value="<?=$id; ?>">
                        <div>
                            <label for="seasonName">Season Name:</label><br>
                            <input type="text" id="seasonName" name="seasonName" placeholder="Season Name"
                                value="<?=$seasonName; ?>">
                        </div>
                        <div>
                            <label for="startDate">Start date:</label><br>
                            <input type="date" id="startDate" name="startDate" value="<?=$startDate; ?>">
                        </div>
                        <div>
                            <label for="endDate">End date:</label><br>
                            <input type="date" id="endDate" name="endDate" value="<?=$endDate; ?>">
                        </div>
                        <div>
                            <label for="status">Status:</label><br>
                            <select id="status" name="status">
                                <option value="">Select</option>
                                <option value="pending" <?php if ($row["status"]=='pending'){echo "selected";}?>>Pending
                                </option>
                                <option value="in progress"
                                    <?php if ($row["status"]=='in progress'){echo "selected";}?>>In progress</option>
                                <option value="finished" <?php if ($row["status"]=='finished'){echo "selected";}?>>
                                    Finished</option>
                            </select>
                        </div>
                        <div>
                            <label for="expectedYield">Expected Yield:</label><br>
                            <input type="text" id="expectedYield" name="expectedYield" placeholder="Expected Yield"
                                value="<?=$expectedYield; ?>">
                        </div>
                </div>
                <br>
                <hr>
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

            if ($('#seasonName').val() == '') {
                $('#seasonName').after('<span class="error">* This field is required</span>');
                return false;
            }

            if ($('#startDate').val() == '') {
                $('#startDate').after('<span class="error">* This field is required</span>');
                return false;
            }

            if ($('#endDate').val() == '') {
                $('#endDate').after('<span class="error">* This field is required</span>');
                return false;
            }

            if ($('#status').val() == '') {
                $('#status').after('<span class="error">* This field is required</span>');
                return false;
            }

            if ($('#expectedYield').val() == '') {
                $('#expectedYield').after('<span class="error">* This field is required</span>');
                return false;
            }
        }
    </script>
</body>

</html>