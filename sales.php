<?php include'includes/head.php';
include'includes/navbar.php';

include_once("dbCon.php");
$conn = connect();
if (isset($_POST['submit'])){

    $iname = $_POST['iname'];
    $category = $_POST['category'];
    $quantity = $_POST['quantity'];
    $net_amount = $_POST['net_amount'];
    $invoice_no = $_POST['invoice_no'];
    $date = $_POST['date'];
    $c_name = $_POST['c_name'];
    $c_number = $_POST['c_number'];

    $sql ="INSERT INTO sales(iname, category, quantity, net_amount, invoice_no, date, c_name, c_number) VALUES('$iname', '$category', '$quantity', '$net_amount', '$invoice_no', '$date', '$c_name', '$c_number')";
         //echo $sql;exit;
    if($conn->query($sql)){
    echo "<script>myAlert('Sales Record Create Successfull','success','sales');</script>";
    } else{
    echo "<script>myAlert(Sales Record Create Not Successfull','error','sales');</script>";
    }
}

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $sql= "DELETE FROM sales WHERE s_id=$id";
    $resultt = $conn->query($sql);
    
    if($conn->query($sql)){
    echo "<script>myAlert('Record Delete Successfully','success','sales');</script>";
    } else{
    echo "<script>myAlert(Record Delete Not Successfully','error','sales');</script>";
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
                        <a href="">Sales</a>
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
                <h4>Sales</h4>
                <hr>
                <div class="">
                    <!-- Essential button -->
                    <button id="myBtn" style="float: none;"><i class="fa fa-plus" aria-hidden="true"></i> Register New
                        Sales</button>
                    <hr>

                    <!-- Result Table -->
                        <table id="example" class="display">
                            <thead>
                                <tr>
                                    <th>Item Name:</th>
                                    <th>Category:</th>
                                    <th>Quantity:</th>
                                    <th>Net amount:</th>
                                    <th>Invoice No:</th>
                                    <th>Date:</th>
                                    <th>Customer Name:</th>
                                    <th>Customer No:</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php include_once("dbCon.php");
                            $conn = connect();
                            $sql= "SELECT * FROM sales";
                            $result = $conn->query($sql);
                                while ($row = $result-> fetch_assoc()): 
                            ?>

                                <tr>
                                    <td><?php echo $row["iname"]; ?></td>
                                    <td><?php echo $row["category"]; ?></td>
                                    <td><?php echo $row["quantity"]; ?></td>
                                    <td><?php echo $row["net_amount"]; ?></td>
                                    <td><?php echo $row["invoice_no"]; ?></td>
                                    <td><?php echo $row["date"]; ?></td>
                                    <td><?php echo $row["c_name"]; ?></td>
                                    <td><?php echo $row["c_number"]; ?></td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="dropbtn"><i class="fa fa-bars"></i></button>
                                            <div class="dropdown-content">
                                                <a href="sales_edit.php?edit=<?php echo $row['s_id'];?>"
                                                    style="color: green;"><i class="fa fa-edit" aria-hidden="true"></i>
                                                    Edit</a>
                                                <a href="sales.php?delete=<?php echo $row['s_id'];?>"
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
include "sales_modal.php";
include'includes/footer.php';?>
    <!-- Modal & Footer Section End -->

    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });

        function nullcheck() {

            $(".error").remove();

            $('#submit').removeAttr('disabled', true);

            if ($('#iname').val() == '') {
                $('#iname').after('<span class="error">* This field is required</span>');
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

            if ($('#net_amount').val() == '') {
                $('#net_amount').after('<span class="error">* This field is required</span>');
                return false;
            }

            if ($('#invoice_no').val() == '') {
                $('#invoice_no').after('<span class="error">* This field is required</span>');
                return false;
            }

            if ($('#date').val() == '') {
                $('#date').after('<span class="error">* This field is required</span>');
                return false;
            }
            if ($('#c_name').val() == '') {
                $('#c_name').after('<span class="error">* This field is required</span>');
                return false;
            }
            if ($('#c_number').val() == '') {
                $('#c_number').after('<span class="error">* This field is required</span>');
                return false;
            }
        }

        function ontype() {
            $(".error").remove();

            if ($('#iname').val() !== '') {
                if (!/^[a-z ]+$/i.test($("#iname").val())) {
                    $('#iname').after('<span class="error">*Task name can not be numeric!!</span>');
                    return false;
                }
            }
        }
    </script>
</body>

</html>