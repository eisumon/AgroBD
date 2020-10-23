<!-- modal form start -->
<div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <!-- Modal header -->
        <div class="modal-header">
            <h4>Add Machinary</h4>
            <span class="close">&times;</span>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
            <div class="container">
                <form onsubmit="return nullcheck();" action="" method="POST">
                    <div>
                        <label for="machinary_name">Machinary Name:</label><br>
                        <input type="text" id="machinary_name" name="machinary_name" placeholder=" Machinary name"
                            oninput="ontype();">
                    </div>
                    <div>
                        <label for="category">Category:</label><br>
                        <select id="category" name="category">
                            <option value="">Select</option>
                            <option value="Attachment">Attachment</option>
                            <option value="Baler">Baler</option>
                            <option value="Combine">Combine</option>
                            <option value="Cultivator">Cultivator</option>
                            <option value="Feed wagon">Feed wagon</option>
                            <option value="Fertilizer">Fertilizer spreader</option>
                            <option value="Grader">Grader</option>
                            <option value="Harrow">Harrow</option>
                            <option value="Loader">Loader</option>
                            <option value="Manure spreader">Manure spreader</option>
                            <option value="Mower">Mower</option>
                            <option value="Other">Other</option>
                            <option value="Planter">Planter</option>
                            <option value="Plow">Plow</option>
                            <option value="Roller">Roller</option>
                            <option value="Seed drill">Seed drill</option>
                            <option value="Sprayer">Sprayer</option>
                            <option value="Tools">Tools</option>
                            <option value="Tractor">Tractor</option>
                            <option value="Trailer">Trailer</option>
                            <option value="Truck">Truck</option>
                            <option value="Windrower">Windrower</option>
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