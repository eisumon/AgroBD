<!-- Small boxes (Stat box) -->
<?php include'includes/head.php';
include'includes/navbar.php';

include_once("dbCon.php");
$conn = connect();

$sql= "SELECT count(w_id) AS total FROM workers";
$result = $conn->query($sql);
$row = $result-> fetch_assoc();
$num_rows=$row['total'];
?>
</head>

<body>

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="index.php"><i class="fa fa-home"></i> Home</a>
                        <span>Dashboard</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section end -->

    <!-- Card -->
    <section class="homenav">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 column">
                    <div class="dCard card1">
                        <h3><?php echo $num_rows; ?></h3><br>
                        <p>Total Workers</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 column">
                    <div class="dCard card2">
                        <h3>53</h3><br>
                        <p>Total Machinery</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 column">
                    <div class="dCard card3">
                        <h3>35</h3><br>
                        <p>Total Inventory</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 column">
                    <div class="dCard card4">
                        <h3>40</h3><br>
                        <p>Total Fields</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Feature Section -->
    <section class="homenav">
        <!-- Inner Header start -->
        <div class="container production_box">
            <h4>Expences Data</h4>
            <hr>
            <!-- Result Table -->
            <table id="example" class="display">
                <thead>
                    <tr>
                        <th>Production Name:</th>
                        <th>Total amount (tk):</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql= "SELECT * FROM expences as e, crop_productions as c WHERE e.cropProduction_id = c.cropProduction_id";
                    $result = $conn->query($sql);
                        while ($row = $result-> fetch_assoc()): 
                    ?>

                    <tr>
                        <td><?php echo $row["cropProduction_name"]; ?></td>
                        <td><?php echo $row["net_amount"]; ?></td>
                    </tr>
                    <?php endwhile;?>
                </tbody>
            </table>
            <!-- Result Table End -->
        </div>
        <!-- Inner Header end -->
    </section>

    <?php
include'includes/footer.php';?>

    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
</body>

</html>