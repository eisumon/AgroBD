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
                                <label for="task_name">Task Name:</label><br>
                                <input type="text" id="task_name" name="task_name" placeholder="Task Name"
                                    oninput="ontype();">
                            </div>
                            <div>
                                <label for="start_date">Start date:</label><br>
                                <input type="date" id="start_date" name="start_date">
                            </div>
                            <div>
                                <label for="end_date">End date:</label><br>
                                <input type="date" id="end_date" name="end_date">
                            </div>
                            <div>
                                <label for="status">Status:</label><br>
                                <select id="status" name="status">
                                    <option value="">Select</option>
                                    <option value="pending">Pending</option>
                                    <option value="in progress">In progress</option>
                                    <option value="finished">Finished</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-5 offset-md-1">
                            <div>
                                <label for="categories">Categories:</label><br>
                                <select id="categories" name="categories">
                                    <option value="">Select</option>
                                    <option value="planting">Planting</option>
                                    <option value="fertilizing">Fertilizing</option>
                                </select>
                            </div>
                            <div>
                                <label for="crp_name">Crop Production Name:</label><br>
                                <select id="crp_name" name="crp_name">
                                    <option value="">Select</option>
                                    <option value="something">Something</option>
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