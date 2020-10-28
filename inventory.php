<?php include'includes/head.php';
include'includes/navbar.php';

include_once("dbCon.php");
$conn = connect();
if (isset($_POST['submit'])){

    $item_name = $_POST['item_name'];
    $category = $_POST['category'];
    $quantity = $_POST['quantity'];
    $date = $_POST['date'];

    $sql ="INSERT INTO inventory(item_name, category, quantity, date) VALUES('$item_name', '$category', '$quantity','$date')";
         //echo $sql;exit;
    if($conn->query($sql)){
    echo "<script>myAlert('Inventory Record Create Successfully','success','inventory');</script>";
    } else{
    echo "<script>myAlert(Inventory Record Not Create Successfully','error','inventory');</script>";
    }
}

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $sql= "DELETE FROM inventory WHERE i_id=$id";
    $resultt = $conn->query($sql);
    
    if($conn->query($sql)){
    echo "<script>myAlert('Record Delete Successfully','success','inventory');</script>";
    } else{
    echo "<script>myAlert(Record Delete Not Successfully','error','inventory');</script>";
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
                        <span>Inventory</span>
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
            <div class="">
                <h4>Inventory</h4>
                <hr>
                <div class="">
                    <!-- Essential button -->
                    <button id="myBtn" style="float: none;"><i class="fa fa-plus" aria-hidden="true"></i> Register New
                        Inventory</button>
                    <hr>

                    <!-- Result Table -->
                    <table id="example" class="display">
                        <thead>
                            <tr>
                                <th>Item Name:</th>
                                <th>Category:</th>
                                <th>Quantity</th>
                                <th>Date:</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include_once("dbCon.php");
                            $conn = connect();
                            $sql= "SELECT * FROM inventory";
                            $result = $conn->query($sql);
                                while ($row = $result-> fetch_assoc()): 
                            ?>

                            <tr>
                                <td><?php echo $row["item_name"]; ?></td>
                                <td><?php echo $row["category"]; ?></td>
                                <td><?php echo $row["quantity"]; ?></td>
                                <td><?php echo $row["date"]; ?></td>
                                <td>
                                    <div class="dropdown">
                                        <button class="dropbtn"><i class="fa fa-bars"></i></button>
                                        <div class="dropdown-content">
                                            <a href="inventory_edit.php?edit=<?php echo $row['i_id'];?>"
                                                style="color: green;"><i class="fa fa-edit" aria-hidden="true"></i>
                                                Edit</a>
                                            <a href="inventory.php?delete=<?php echo $row['i_id'];?>"
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


    <!-- Modal & Footer Section Begin -->
    <?php 
include "inventory_modal.php";
include'includes/footer.php';?>
    <!-- Modal & Footer Section End -->

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