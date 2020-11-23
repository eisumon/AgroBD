<!-- User Profile -->
<?php 
    include_once("dbCon.php");
    $conn = connect();
    $sql= "SELECT * FROM users";
    $result = $conn->query($sql);
        while ($row = $result-> fetch_assoc()): 
?>

<!-- The Modal box start -->
<div id="userModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <!-- Modal header -->
        <div class="modal-header">
            <h4>User Profile</h4>
            <span id="close2">&times;</span>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
            <div class="container">
                <form>
                    <div>
                        <label for="name">First Name:</label><br>
                        <input type="text" name="name" value="<?php echo $row["name"]; ?>"
                            placeholder="Your name" disabled>
                    </div>
                    <div>
                        <label for="email">Email Address:</label><br>
                        <input type="text" name="email" value="<?php echo $row["email"]; ?>"
                            placeholder="Your email" disabled>
                    </div>
                    <div>
                        <label for="phone">Phone Number:</label><br>
                        <input type="text" name="phone" value="<?php echo $row["phone"]; ?>"
                            placeholder="Your Number" disabled>
                    </div>
                    <br>
                    <a class="primary-btn" href="userProfile_edit.php?edit=<?php echo $row['uid'];?>"><i class="fa fa-edit" aria-hidden="true"></i> Edit</a>
                    <br><br>
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
<?php endwhile;?>
<script>
    // Get the modal
    var modal3 = document.getElementById("userModal");

    // Get the button that opens the modal
    var btn = document.getElementById("userBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementById("close2");

    // When the user clicks the button, open the modal 
    btn.onclick = function () {
        modal3.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal3.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal3) {
            modal3.style.display = "none";
        }
    }
</script>