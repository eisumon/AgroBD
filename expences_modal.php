<!-- modal start -->
<div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <!-- Modal header -->
        <div class="modal-header">
            <h4>Register New Expences</h4>
            <span class="close">&times;</span>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
            <div class="container">
                <form onsubmit="return nullcheck();" method="POST">
                    <div class="row">
                        <div class="col-md-5">
                            <div>
                                <label for="item_name">Item Name:</label><br>
                                <input type="text" id="item_name" name="item_name" placeholder="Enter item name"
                                    oninput="ontype();">
                            </div>
                            <div>
                                <label for="category">Category:</label><br>
                                <select id="category" name="category">
                                    <option value="">Select</option>
                                    <option value="fertilizer">Fertilizer</option>
                                    <option value="protection product">Protection product</option>
                                    <option value="fuel">Fuel</option>
                                    <option value="crop">Crop</option>
                                    <option value="seed">Seed</option>
                                    <option value="field">Field</option>
                                    <option value="machinery">Machinery</option>
                                    <option value="others">Others</option>
                                    <option value="service">Service</option>
                                </select>
                            </div>
                            <div>
                                <label for="net_amount">Net amount (tk):</label><br>
                                <input type="text" id="net_amount" name="net_amount" placeholder="Enter net amount">
                            </div>
                        </div>
                        <div class="col-md-5 offset-md-1">
                            <div>
                                <label for="invoice_no">Invoice No:</label><br>
                                <input type="text" id="invoice_no" name="invoice_no" placeholder="Enter invoice number">
                            </div>
                            <div>
                                <label for="date">Date:</label><br>
                                <input type="date" id="date" name="date">
                            </div>
                            <div>
                                <label for="cropProduction_id">Crop Production Name:</label><br>
                                <select id="cropProduction_id" name="cropProduction_id">
                                    <option value="">Select</option>
                                    <option value=""><?php echo $row['production_name'];?></option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <hr>
                    <div class="sub"><input type="submit" value="Submit" name="submit"></div>
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