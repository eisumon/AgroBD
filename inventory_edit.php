<?php include'includes/head.php';
include'includes/navbar.php';

include_once("dbCon.php");
$conn = connect();

if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $sql= "SELECT * FROM inventory WHERE i_id=$id";
    $result = $conn->query($sql);
    // $row = mysqli_fetch_assoc($result);
    $row = $result-> fetch_assoc();
    $item_name = $row['item_name'];
    $category = $row['category'];
    $quantity = $row['quantity'];
    $date = $row['date'];
}

if (isset($_POST['update'])){
    $id = $_POST['i_id'];
    $item_name = $_POST['item_name'];
    $category = $_POST['category'];
    $quantity = $_POST['quantity'];
    $date = $_POST['date'];
    
    $sql= "UPDATE inventory SET item_name= '$item_name', category= '$category', quantity= '$quantity', date= '$date' WHERE i_id=$id";
    $result = $conn->query($sql);
    
    if($conn->query($sql)){

        echo "<script>myAlert('Record Update Successfully','success','inventory');</script>";
        } else{
        echo "<script>myAlert(Record Update Not Successfully','error','inventory_edit');</script>";
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
                        <a href="inventory">Inventory</a>
                        <span>Edit Inventory Record</span>
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
                <h3 style="text-align: center; color:#3D9E0F;">Edit Inventory</h3><br>
                <div class="container">
                    <form onsubmit="return nullcheck();" method="POST">
                        <input type="hidden" name="i_id" value="<?=$id; ?>">
                        <div>
                            <label for="item_name">Item Name:</label><br>
                            <input type="text" id="item_name" name="item_name" placeholder="Enter item name"
                                value="<?=$item_name; ?>" oninput="ontype();">
                        </div>
                        <div>
                            <label for="category">Category:</label><br>
                            <select id="category" name="category">
                                <option value="">Select</option>
                                <option value="fertilizer"
                                    <?php if ($row["category"]=='fertilizer'){echo "selected";}?>>Fertilizer</option>
                                <option value="protection product"
                                    <?php if ($row["category"]=='protection product'){echo "selected";}?>>Protection
                                    product</option>
                                <option value="fuel" <?php if ($row["category"]=='fuel'){echo "selected";}?>>Fuel
                                </option>
                                <option value="crop" <?php if ($row["category"]=='crop'){echo "selected";}?>>Crop
                                </option>
                                <option value="seed" <?php if ($row["category"]=='seed'){echo "selected";}?>>Seed
                                </option>
                                <option value="others" <?php if ($row["category"]=='others'){echo "selected";}?>>Others
                                </option>
                            </select>
                        </div>
                        <div>
                            <div>
                                <label for="quantity">Quantity</label><br>
                                <input type="text" id="quantity" name="quantity" value="<?=$quantity; ?>"
                                    placeholder="Enter net amount">
                            </div>
                            <div>
                                <label for="date">Date:</label><br>
                                <input type="date" id="date" name="date" value="<?=$date; ?>">
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

    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });

        function nullcheck() {

            $(".error").remove();

            $('#submit').removeAttr('disabled', true);

            if ($('#item_name').val() == '') {
                $('#item_name').after('<span class="error">* This field is required</span>');
                return false;
            }

            if ($('#category').val() == '') {
                $('#category').after('<span class="error">* This field is required</span>');
                return false;
            }

            if ($('#quantity').val() == '') {
                $('#quantity').after('<span class="error">* This field is required</span>');
                return false;
            }

            if ($('#date').val() == '') {
                $('#date').after('<span class="error">* This field is required</span>');
                return false;
            }
        }

        function ontype() {
            $(".error").remove();

            if ($('#item_name').val() !== '') {
                if (!/^[a-z ]+$/i.test($("#item_name").val())) {
                    $('#item_name').after('<span class="error">*Task name can not be numeric!!</span>');
                    return false;
                }
            }
        }
    </script>
</body>

</html>