<?php include'includes/head.php';
include'includes/navbar.php';

include_once("dbCon.php");
$conn = connect();
$uid = $_SESSION['uid'];

if (isset($_POST['submit'])){
    $item_name = $_POST['item_name'];
    $category = $_POST['category'];
    $net_amount = $_POST['net_amount'];
    $invoice_no = $_POST['invoice_no'];
    $date = $_POST['date'];
    $crp_name = $_POST['crp_name'];

    $sql ="INSERT INTO expences(item_name, category, net_amount, invoice_no, date, cropProduction_id, uid) VALUES('$item_name', '$category', '$net_amount', '$invoice_no', '$date', '$crp_name', '$uid')";
    //echo $sql;exit;
    if($conn->query($sql)){
    echo "<script>myAlert('Expences Record Create Successfully','success','expences');</script>";
    } else{
    echo "<script>myAlert(Expences Record Not Create Successfully','error','expences');</script>";
    }
}

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $sql= "DELETE FROM expences WHERE e_id=$id";
    $resultt = $conn->query($sql);
    
    if($conn->query($sql)){
    echo "<script>myAlert('Record Delete Successfully','success','expences');</script>";
    } else{
    echo "<script>myAlert(Record Delete Not Successfully','error','expences');</script>";
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
                        <span>Expences</span>
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
            <h4>Expences</h4>
            <hr>
            <div class="">
                <!-- Essential button -->
                <button id="myBtn" style="float: none;"><i class="fa fa-plus" aria-hidden="true"></i> Register New
                    Expences</button>
                <hr>

                <!-- Result Table -->
                <table id="example" class="display">
                    <thead>
                        <tr>
                            <th>Item Name:</th>
                            <th>Category:</th>
                            <th>Net amount (tk):</th>
                            <th>Invoice No:</th>
                            <th>Date:</th>
                            <th>Production Name:</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql= "SELECT * FROM expences as e, crop_productions as c WHERE e.cropProduction_id = c.cropProduction_id";
                            $result = $conn->query($sql);
                                while ($row = $result-> fetch_assoc()): 
                            ?>

                        <tr>
                            <td><?php echo $row["item_name"]; ?></td>
                            <td><?php echo $row["category"]; ?></td>
                            <td><?php echo $row["net_amount"]; ?></td>
                            <td><?php echo $row["invoice_no"]; ?></td>
                            <td><?php echo $row["date"]; ?></td>
                            <td><?php echo $row["cropProduction_name"]; ?></td>
                            <td>
                                <div class="dropdown">
                                    <button class="dropbtn"><i class="fa fa-bars"></i></button>
                                    <div class="dropdown-content">
                                        <a href="expences_edit.php?edit=<?php echo $row['e_id'];?>"
                                            style="color: green;"><i class="fa fa-edit" aria-hidden="true"></i>
                                            Edit</a>
                                        <a href="expences.php?delete=<?php echo $row['e_id'];?>" style="color: red;"><i
                                                class="fa fa-trash" aria-hidden="true"></i>
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
include "expences_modal.php";
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

            if ($('#crp_name').val() == '') {
                $('#crp_name').after('<span class="error">* This field is required</span>');
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