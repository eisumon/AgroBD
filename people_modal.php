<!-- modal form start -->
<div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <!-- Modal header -->
        <div class="modal-header">
            <h4>Add people</h4>
            <span class="close">&times;</span>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
            <div class="container">
                <form onsubmit="return nullcheck();" action="" method="POST">
                    <div class="row">
                        <div class="col-md-5">
                            <div>
                                <label for="fname">First Name:</label><br>
                                <input type="text" id="fname" name="firstname" placeholder="Your first name"
                                    oninput="ontype();">
                            </div>
                            <div>
                                <label for="lname">Last Name:</label><br>
                                <input type="text" id="lname" name="lastname" placeholder="Your last name"
                                    oninput="ontype();">
                            </div>
                            <div>
                                <label for="gender">Gender:</label><br>
                                <select id="gender" name="gender">
                                    <option value="">Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="others">Others</option>
                                </select>
                            </div>
                            <div>
                                <label for="city">City:</label><br>
                                <select id="city" name="city">
                                    <option value="">Select</option>
                                    <option value="barishal">Barishal</option>
                                    <option value="chitagong">Chitagong</option>
                                    <option value="dhaka">Dhaka</option>
                                    <option value="barishal">Mymensingh </option>
                                    <option value="khulna">Khulna</option>
                                    1<option value="rajshahi">Rajshahi</option>
                                    <option value="comillaSylhet">Rangpur</option>
                                    <option value="sylhet">Sylhet</option>
                                </select>
                            </div>

                        </div>
                        <div class="col-md-5 offset-md-1">
                            <div>
                                <label for="address">Address:</label><br>
                                <input type="text" id="address" name="address" placeholder="Your address">
                            </div>
                            <div>
                                <label for="phone">Phone:</label><br>
                                <input type="text" id="phone" name="phone" placeholder="Your phone" oninput="ontype();">
                            </div>
                            <div>
                                <label for="role">Role:</label><br>
                                <select id="role" name="role">
                                    <option value="">Select</option>
                                    <option value="worker">Worker</option>
                                    <option value="manager">Manager</option>
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