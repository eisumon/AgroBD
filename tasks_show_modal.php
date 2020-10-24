<!-- The Modal box start -->
<div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <!-- Modal header -->
        <div class="modal-header">
            <h4>Create Task</h4>
            <span class="close">&times;</span>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
            <div class="container">
                <form onsubmit="return nullcheck();" action="" method="POST">

                    <div class="row">
                        <div class="col-md-5">
                            <div>
                                <label for="t_name">Task Name:</label><br>
                                <input type="text" id="t_name" name="t_name" placeholder="Task Name" oninput="ontype();">
                            </div>
                            <div>
                                <label for="s_date">Start date:</label><br>
                                <input type="date" id="s_date" name="s_date">
                            </div>
                            <div>
                                <label for="e_date">End date:</label><br>
                                <input type="date" id="e_date" name="e_date">
                            </div>
                            <div>
                                <label for="status">Status:</label><br>
                                <select id="status" name="status">
                                    <option value="">Select</option>
                                    <option value="Pending">Pending</option>
                                    <option value="In progress">In progress</option>
                                    <option value="Finished">Finished</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-5 offset-md-1">
                            <div>
                                <label for="categories">Categories:</label><br>
                                <select id="categories" name="categories">
                                    <option value="">Select</option>
                                    <option value="Planting">Planting</option>
                                    <option value="Fertilizing">Fertilizing</option>
                                </select>
                            </div>
                            <div>
                                <label for="crp_name">Crop Production Name:</label><br>
                                <select id="crp_name" name="crp_name">
                                    <option value="australia">-</option>
                                    <option value="Something">Something</option>
                                    <option value="Something">Something</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <hr>
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