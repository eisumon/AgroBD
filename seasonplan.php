<?php include'includes/head.php';
include'includes/navbar.php';
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
                        <span>Season plan</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section end -->


    <!-- seasonPlan Section Begin -->
    <section class="seasonPlan-section spad">
        <div class="container">
            <div class="seasonPlan-title" style="text-align: center;">
                <h2>Season plan</h2>
                <p>Select the boxes to filter out the result and choose your crop.</p>
            </div>
            <br>
            <hr><br>

            <div class="row">
                <div class="col-lg-3">
                    <div class="seasonPlan-title">
                        <h4>Choose plan</h4>
                        <p>Select the boxes to filter out the result and choose your crop.</p>
                    </div>
                    <div class="seasonPlan-widget">
                        <form action="" method="POST">
                            <div class="cw-item">
                                <div class="ci-text">
                                    <span>Season:</span>
                                    <select name="season" class="form-control" id="sel1">
                                        <option>Select</option>
                                        <option value="Kharif- 1">Kharif- 1 (Mid March to mid July)</option>
                                        <option value="Kharif- 2">Kharif- 2 (Mid July to mid November)</option>
                                        <option>Rabi (Mid November to mid March)</option>
                                        <option>All Season</option>
                                    </select>
                                </div>
                            </div>
                            <div class="cw-item">
                                <div class="ci-text">
                                    <span>Soil type:</span>
                                    <select name="soil_type" class="form-control" id="sel1">
                                        <option>Select</option>
                                        <option value="Clay">Clay</option>
                                        <option value="9">Clay loam</option>
                                        <option value="6">Loam</option>
                                        <option value="2">Loamy sand</option>
                                        <option value="1">Sand</option>
                                        <option value="10">Sandy clay</option>
                                        <option value="7">Sandy clay loam</option>
                                        <option value="3">Sandy loam</option>
                                        <option value="5">Silt</option>
                                        <option value="4">Silt loam</option>
                                        <option value="11">Silty clay</option>
                                        <option value="8">Silty clay loam</option>
                                    </select>
                                </div>
                            </div>
                            <div class="cw-item">
                                <div class="ci-text">
                                    <span>Crop Category:</span>
                                    <select name="crop_category" class="form-control" id="sel1">
                                        <option>Select</option>
                                        <option value="Grain">Grain</option>
                                        <option>Flowers</option>
                                        <option>Fruit</option>
                                        <option>Nursery</option>
                                        <option>Tree</option>
                                        <option>Vegetables</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <button type="submit" name="submit" class="site-btn login-btn">Submit</button>
                        </form>
                    </div>
                </div>

                <div class="col-lg-8 offset-lg-1">
                    <div class="">
                        <div class="seasonPlan-title">
                            <h4>Crop List</h4>
                            <p>Select your crop and start to create crop production.</p>
                        </div>
                    </div><br>
                    <div class="seasonPlan-widget">
                        <div class="tab">
                            <table>
                                <tr>
                                    <th>Crop Name</th>
                                    <th>Crop Category</th>
                                    <th>Soil type</th>
                                    <th>Season</th>
                                    <th>Duration</th>
                                    <th>Action</th>
                                </tr>
                                <tbody>
                                <?php
                                $conn = connect();
                                if(!isset($_POST['submit'])){
                                
                                }
                                else{
                                    $crop_category = $_POST['crop_category'];
                                    $soil_type = $_POST['soil_type'];
                                    $season = $_POST['season'];
                
                                    if($crop_category != "" || $soil_type != "" || $season != ""){
                                        $sql = "SELECT * FROM crop_lists WHERE crop_category = '$crop_category' OR soil_type = '$soil_type' OR season = '$season'";

                                        $data = mysqli_query($conn, $sql) or die('error');
                                        if(mysqli_num_rows($data) >0){
                                        while ($row = mysqli_fetch_assoc($data)) {
                                            $crop_name = $row['crop_name'];
                                            $crop_category = $row['crop_category'];
                                            $soil_type = $row['soil_type'];
                                            $season = $row['season'];
                                            $duration = $row['duration'];
                                ?>
                                    <tr>
                                        <td> <?php echo $crop_name; ?></td>
                                        <td> <?php echo $crop_category; ?></td>
                                        <td> <?php echo $soil_type; ?></td>
                                        <td> <?php echo $season; ?></td>
                                        <td> <?php echo $duration; ?></td>
                                        <td><a class="select" href="cropplant?cropname=<?=$crop_name?>">Select</a></td>
                                    </tr>
                                    <?php 
                                }
                                }
                                else{
                                    ?>
                                    <tr>
                                        <td>Records not found</td>
                                    </tr>
                                    <?php 
                                }
                                }
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- seasonPlan Section End -->



    <!-- Footer Section Begin -->
    <?php include'includes/footer.php';?>
    <!-- Footer Section End -->

</body>

</html>