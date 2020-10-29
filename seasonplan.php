<?php include'includes/head.php';
include'includes/navbar.php';
?>

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
            <p>Select the boxes to filter out the result and click to submit button to choose your plan.</p>
        </div>
        <br>
        <hr><br>

        <div class="row">
            <div class="col-lg-3">
                <div class="seasonPlan-title">
                    <h4>Choose plan</h4>
                    <p>Select the boxes to filter out the result and choose your plan.</p>
                </div>
                <div class="seasonPlan-widget">
                    <div class="cw-item">
                        <div class="ci-text">
                            <span>Season:</span>
                            <select class="form-control" id="sel1">
                                <option>Select</option>
                                <option>Kharif- 1 (Mid March to mid July)</option>
                                <option>Kharif- 2 (Mid July to mid November)</option>
                                <option>Rabi (Mid November to mid March)</option>
                            </select>
                        </div>
                    </div>
                    <div class="cw-item">
                        <div class="ci-text">
                            <span>Soil type:</span>
                            <select class="form-control" id="sel1">
                                <option>Select</option>
                                <option value="12">Clay</option>
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
                            <select class="form-control" id="sel1">
                                <option>Select</option>
                                <option>Flowers</option>
                                <option>Fruit</option>
                                <option>Nursery</option>
                                <option>Tree</option>
                                <option>Vegetables</option>
                            </select>
                        </div>
                    </div>
                    <div class="cw-item">
                        <div class="ci-text">
                            <span>Duration:</span>
                            <select class="form-control" id="sel1">
                                <option>Select</option>
                                <option>Seasonal</option>
                                <option>Half year</option>
                                <option>Yearly</option>
                            </select>
                        </div>
                    </div><br>
                    <button type="submit" class="site-btn login-btn">Submit</button>
                </div>
            </div>
            <div class="col-lg-8 offset-lg-1">
                <div class="">
                    <div class="seasonPlan-title">
                        <h4>Crop List</h4>
                        <p>Select your crop</p>
                    </div>
                </div><br>
                <div class="seasonPlan-widget">
                    <div class="tab" style="overflow-x:auto;">
                        <table>
                            <tr>
                                <th>Crop Name</th>
                                <th>Crop Category</th>
                                <th>Soil type</th>
                                <th>Season</th>
                                <th>Duration</th>
                            </tr>
                            <tr>
                                <td>Search result</td>
                                <td>Search result</td>
                                <td>Search result</td>
                                <td>Search result</td>
                                <td>Search result</td>
                            </tr>
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