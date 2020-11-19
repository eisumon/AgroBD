<!-- The Modal box start -->
<div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <!-- Modal header -->
        <div class="modal-header">
            <h4>Create Season</h4>
            <span id="close">&times;</span>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
            <div class="container">
                <form onsubmit="return nullcheck();" method="POST">
                    <div>
                        <label for="seasonName">Season Name:</label><br>
                        <input type="text" id="seasonName" name="seasonName" placeholder="Season Name">
                    </div>
                    <div>
                        <label for="startDate">Start date:</label><br>
                        <input type="date" id="startDate" name="startDate">
                    </div>
                    <div>
                        <label for="endDate">End date:</label><br>
                        <input type="date" id="endDate" name="endDate">
                    </div>
                    <div>
                        <label for="status">Status:</label><br>
                        <select id="status" name="status">
                            <option value="">-</option>
                            <option value="pending">Pending</option>
                            <option value="in progress">In progress</option>
                            <option value="finished">Finished</option>
                        </select>
                    </div>
                    <div>
                        <label for="expectedYield">Expected Yield:</label><br>
                        <input type="text" id="expectedYield" name="expectedYield" placeholder="Expected Yield">
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