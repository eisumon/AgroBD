<!-- The Modal box start -->
<div id="linkModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <!-- Modal header -->
        <div class="modal-header">
            <h4>Link Field</h4>
            <span class="close1">&times;</span>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
            <div class="container">
                <form action="">
                    <div>
                        <?php
include_once("dbCon.php");
$conn = connect();
$uid = $_SESSION['uid'];
$sql= "SELECT * FROM fields WHERE uid=$uid";

$result = $conn->query($sql);
$row = $result-> fetch_assoc();
?>
                        <label for="">Choose Existing Field:</label><br>
                        <select id="" name="">
                            <option value="<?=$row['id']?>">Select Field</option>
                            <?php 
                            
                            foreach($row as $field){
                                <option value="<?=$row['id']?>">Select Field</option>

                            };
                            ?>
{}                        </select>
                    </div>
                    <br>
                    <div class="sub"><input type="submit" value="Save"></div>

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

<!-- modal form start -->
<div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <!-- Modal header -->
        <div class="modal-header">
            <h4>Add Field</h4>
            <span class="close">&times;</span>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
            <div class="container">
                <form onsubmit="return nullcheck();" action="" method="POST">
                    <div>
                        <label for="field_name">Field Name:</label><br>
                        <input type="text" id="field_name" name="field_name" placeholder=" Enter field name">
                    </div>
                    <div>
                        <label for="location">Location:</label><br>
                        <input type="text" id="location" name="location" placeholder=" Enter field location">
                    </div>
                    <div>
                        <label for="usable_area">Usable Area:</label><br>
                        <input type="text" id="usable_area" name="usable_area" placeholder=" Enter usable area">
                    </div>
                    <div>
                        <label for="soil_type">Soil type:</label><br>
                        <select class="form-control" id="soil_type" name="soil_type">
                            <option value="">Select</option>
                            <option value="clay">Clay</option>
                            <option value="clay loam">Clay loam</option>
                            <option value="loam">Loam</option>
                            <option value="loamy sand">Loamy sand</option>
                            <option value="sand">Sand</option>
                            <option value="sandy clay">Sandy clay</option>
                            <option value="sandy clay loam">Sandy clay loam</option>
                            <option value="sandy loam">Sandy loam</option>
                            <option value="silt">Silt</option>
                            <option value="silt loam">Silt loam</option>
                            <option value="silty clay">Silty clay</option>
                            <option value="silty clay loam">Silty clay loam</option>
                        </select>
                    </div>
                    <div>
                        <label for="ownership_type">Ownership type:</label><br>
                        <select class="form-control" id="ownership_type" name="ownership_type">
                            <option value="">Select</option>
                            <option value="privately owned">Privately owned</option>
                            <option value="lease">Lease</option>
                            <option value="given for use">Given for use</option>
                            <option value="property manager">Property manager</option>
                            <option value="other">Other</option>
                            <option value="mixed">Mixed</option>
                            <option value="owned by relatives">Owned by relatives</option>
                        </select>
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