<?php include'includes/head.php';
include'includes/navbar.php';

include_once("dbCon.php");
$conn = connect();

if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $sql= "SELECT * FROM sales WHERE s_id=$id";
    $result = $conn->query($sql);
    // $row = mysqli_fetch_assoc($result);
    $row = $result-> fetch_assoc();
    $iname = $row['iname'];
    $category = $row['category'];
    $quantity = $row['quantity'];
    $net_amount = $row['net_amount'];
    $invoice_no = $row['invoice_no'];
    $date = $row['date'];
    $c_name = $row['c_name'];
    $c_number = $row['c_number'];
}

if (isset($_POST['update'])){
    $id = $_POST['s_id'];
    $iname = $_POST['iname'];
    $category = $_POST['category'];
    $quantity = $_POST['quantity'];
    $net_amount = $_POST['net_amount'];
    $invoice_no = $_POST['invoice_no'];
    $date = $_POST['date'];
    $c_name = $_POST['c_name'];
    $c_number = $_POST['c_number'];
    
    $sql= "UPDATE sales SET iname= '$iname', category= '$category', quantity= '$quantity', net_amount= '$net_amount', invoice_no= '$invoice_no', date= '$date' , c_name= '$c_name' , c_number= '$c_number' WHERE s_id=$id";
    $result = $conn->query($sql);
    
    if($conn->query($sql)){

        echo "<script>myAlert('Record Update Successfully','success','sales');</script>";
        } else{
        echo "<script>myAlert(Record Update Not Successfully','error','sales_edit');</script>";
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
                        <a href="sales">Task</a>
                        <a href="sales_edit"> Edit Task</a>
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
            <h4>People</h4>
            <!-- Modal body -->
            <div class="modal-body">
                <div class="container">
                    <form onsubmit="return nullcheck();" method="POST">
                            <input type="hidden" name="s_id" value="<?=$id; ?>">
                                <div>
                                    <label for="iname">Item Name:</label><br>
                                    <input type="text" id="iname" name="iname" placeholder="Enter item name" value="<?=$iname; ?>" oninput="ontype();">
                                </div>
                                <div>
                                    <label for="category">Category:</label><br>
                                    <select id="category" name="category">
                                        <option value="">Select</option>
                                        <option value="fertilizer" <?php if ($row["category"]=='fertilizer'){echo "selected";}?>>Fertilizer</option>
                                        <option value="protection product" <?php if ($row["category"]=='protection product'){echo "selected";}?>>protection product</option>
                                        <option value="fuel" <?php if ($row["category"]=='fuel'){echo "selected";}?>>Fuel</option>
                                        <option value="crop" <?php if ($row["category"]=='crop'){echo "selected";}?>>Crop</option>
                                        <option value="seed" <?php if ($row["category"]=='seed'){echo "selected";}?>>Seed</option>
                                        <option value="field" <?php if ($row["category"]=='field'){echo "selected";}?>>Field</option>
                                        <option value="machinery" <?php if ($row["category"]=='machinery'){echo "selected";}?>>Machinery</option>
                                        <option value="others" <?php if ($row["category"]=='others'){echo "selected";}?>>Others</option>
                                        <option value="service" <?php if ($row["category"]=='service'){echo "selected";}?>>Service</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="quantity">Quantity:</label><br>
                                    <input type="text" id="quantity" name="quantity" value="<?=$quantity; ?>"
                                        placeholder="Enter total quantity (ex. 1kg or 1piece)">
                                </div>
                                <div>
                                    <label for="net_amount">Net amount (tk):</label><br>
                                    <input type="text" id="net_amount" name="net_amount" value="<?=$net_amount; ?>" placeholder="Enter net amount">
                                </div>
                                <div>
                                    <label for="invoice_no">Invoice No:</label><br>
                                    <input type="text" id="invoice_no" name="invoice_no" value="<?=$invoice_no; ?>"
                                        placeholder="Enter invoice number">
                                </div>
                                <div>
                                    <label for="date">Date:</label><br>
                                    <input type="date" id="date" name="date" value="<?=$date; ?>">
                                </div>
                                <div>
                                    <label for="c_name">Customer Name:</label><br>
                                    <input type="text" id="c_name" name="c_name" value="<?=$c_name; ?>" placeholder="Enter customer name">
                                </div>
                                <div>
                                    <label for="c_number">Customer No:</label><br>
                                    <input type="text" id="c_number" name="c_number" value="<?=$c_number; ?>"
                                        placeholder="Enter customer phone number">
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