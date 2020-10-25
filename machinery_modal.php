<!-- modal form start -->
<div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <!-- Modal header -->
        <div class="modal-header">
            <h4>Add Machinery</h4>
            <span class="close">&times;</span>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
            <div class="container">
                <form onsubmit="return nullcheck();" action="" method="POST">
                    <div>
                        <label for="machinery_name">Machinery Name:</label><br>
                        <input type="text" id="machinery_name" name="machinery_name" placeholder=" Enter machinery name"
                            oninput="ontype();">
                    </div>
                    <div>
                        <label for="category">Category:</label><br>
                        <select id="category" name="category">
                            <option value="">Select</option>
                            <option value="attachment">Attachment</option>
                            <option value="baler">Baler</option>
                            <option value="combine">Combine</option>
                            <option value="cultivator">Cultivator</option>
                            <option value="feed wagon">Feed wagon</option>
                            <option value="fertilizer">Fertilizer spreader</option>
                            <option value="grader">Grader</option>
                            <option value="harrow">Harrow</option>
                            <option value="loader">Loader</option>
                            <option value="manure spreader">Manure spreader</option>
                            <option value="mower">Mower</option>
                            <option value="planter">Planter</option>
                            <option value="plow">Plow</option>
                            <option value="roller">Roller</option>
                            <option value="seed drill">Seed drill</option>
                            <option value="sprayer">Sprayer</option>
                            <option value="tools">Tools</option>
                            <option value="tractor">Tractor</option>
                            <option value="trailer">Trailer</option>
                            <option value="truck">Truck</option>
                            <option value="windrower">Windrower</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div>
                        <label for="manufacturer">Manufacturer:</label><br>
                        <input type="text" id="manufacturer" name="manufacturer" placeholder="Manufacturer name"
                            oninput="ontype();">
                    </div>

                    <div>
                        <label for="model">Model:</label><br>
                        <input type="text" id="model" name="model" placeholder="Model name or number">
                    </div>
                    <div>
                        <label for="reg_number">Registration number:</label><br>
                        <input type="text" id="reg_number" name="reg_number" placeholder="Registration number">
                    </div>
                    <br>
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