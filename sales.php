<?php include'includes/head.php';
include'includes/navbar.php';
?>

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
                <div id="myModal" class="modal">
                    <!-- Modal content -->
                    <div class="modal-content">
                        <!-- Modal header -->
                        <div class="modal-header">
                            <h4>Register New Sales</h4>
                            <span class="close">&times;</span>
                        </div>
                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="container">
                                <form action="action_page.php">
                                    <div>
                                        <label for="country">Category:</label><br>
                                        <select id="country" name="country">
                                            <option value="australia">-</option>
                                            <option value="canada">Male</option>
                                            <option value="usa">Female</option>
                                            <option value="usa">Others</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="fname">Item Name:</label><br>
                                        <input type="text" id="fname" name="firstname" placeholder="">
                                    </div>
                                    <div>
                                        <label for="country">Quantity:</label><br>
                                        <input type="text" id="fname" name="firstname" placeholder=""
                                            style="width:800px; float: left;">

                                        <select id="country" name="country"
                                            style="width:auto;background-color: silver;">
                                            <option value="australia">piece</option>
                                            <option value="canada">kg</option>
                                            <option value="usa">-</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="fname">Net amount:</label><br>
                                        <input type="text" id="fname" name="firstname" placeholder="">
                                    </div>
                                    <div>
                                        <label for="fname">Invoice No:</label><br>
                                        <input type="text" id="fname" name="firstname" placeholder="">
                                    </div>
                                    <div>
                                        <label for="linkdate">Date:</label><br>
                                        <input type="date" id="linkdate" name="linkdate">
                                    </div>
                                    <div>
                                        <label for="fname">Customer Name:</label><br>
                                        <input type="text" id="fname" name="firstname" placeholder="">
                                    </div>
                                    <div>
                                        <label for="fname">Customer No:</label><br>
                                        <input type="text" id="fname" name="firstname" placeholder="">
                                    </div>
                                    <br>
                                    <div class="sub"><input type="submit" value="Submit"></div>
                                    <div class="res"><input type="reset" value="Reset"></div>

                                </form>
                            </div>
                        </div>
                        <!-- Modal body end -->
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <!-- <h3>Modal Footer</h3> -->
                        </div>
                        <!-- Modal footer end -->
                    </div>
                    <!-- Modal content end -->
                </div>
                <!-- The Modal box end -->
                <hr>

                <!-- Filter Table -->
                <div class="tab_filter">
                    <h5>Filter Search result </h5>
                    <table class="filter">
                        <tr>
                            <th>Category:</th>
                            <th>Item Name:</th>
                            <th>Invoice No:</th>
                            <th>Date:</th>
                            <th></th>
                        </tr>
                        <tr>
                            <td><i class="fa fa-tag fil_search"></i><select id="country" name="country">
                                    <option value="">-</option>
                                    <option value="canada">Canada</option>
                                    <option value="usa">USA</option>
                                </select></td>
                            <td><i class="fa fa-tag fil_search"></i><input type="text" id="fname" name="firstname"
                                    placeholder="" style="width: auto;"></td>
                            <td><i class="fa fa-tag fil_search"></i><input type="text" id="fname" name="firstname"
                                    placeholder="" style="width: auto;"></td>
                            <td>
                                <i class="fa fa-calendar fil_search"></i><input type="date" id="linkdate"
                                    name="linkdate" style="width: 160px;">
                            </td>
                            <td>
                                <button class="filter_btn" title="Filter"><i class="fa fa-filter"></i></button>
                                <button class="res_btn" title="Reset"><i class="fa fa-refresh"></i></button>
                            </td>
                        </tr>
                    </table>
                </div>
                <hr><br>
                <!-- Filter Table end -->

                <!-- Result Table -->
                <div class="tab">
                    <table>
                        <tr>
                            <th>Category:</th>
                            <th>Item Name:</th>
                            <th>Quantity:</th>
                            <th>Net amount:</th>
                            <th>Invoice No:</th>
                            <th>Date:</th>
                            <th>Customer Name:</th>
                            <th>Customer No:</th>
                            <th></th>
                        </tr>
                        <tr>
                            <td>Search result</td>
                            <td>Search result</td>
                            <td>Search result</td>
                            <td>Search result</td>
                            <td>Search result</td>
                            <td>Search result</td>
                            <td>Search result</td>
                            <td>Search result</td>
                            <td>
                                <div class="dropdown">
                                    <button class="dropbtn"><i class="fa fa-bars"></i></button>
                                    <div class="dropdown-content">
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> View
                                            Details</a>
                                        <a href="#" style="color: green;"><i class="fa fa-edit" aria-hidden="true"></i>
                                            Edit</a>
                                        <a href="#" style="color: red;"><i class="fa fa-trash" aria-hidden="true"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
                <!-- Result Table End -->
            </div>
        </div>
    </div>
    <!-- Inner Header end -->
</section>


<!-- Footer Section Begin -->
<?php include'includes/footer.php';?>
<!-- Footer Section End -->