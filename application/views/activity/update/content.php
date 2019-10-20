<div class="container">
    <h3>Update  Activity</h3><br>
    
    <div class="row">
        <div class="col-md-12">
        <form action="<?php echo base_url('activity/save');?>" method="POST">
            <input type="hidden" name="activity_id" value="<?php echo $activity_data->activity_id; ?>">
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="exampleInputEmail1">Activity Name</label>
                    <input type="text" class="form-control" id="activity_name" name="activity_name" value="<?php echo $activity_data->activity_name; ?>" >
                </div>
                <div class="col-md-3 form-group">
                    <label for="exampleInputEmail1">Starting date</label>
                    <input type="text" class="form-control" id="start_date" name="start_date" value="<?php echo $activity_data->start_date; ?>">
                </div>
                <div class="col-md-3 form-group">
                    <label for="exampleInputEmail1">End date</label>
                    <input type="text" class="form-control" id="end_date" name="end_date" value="<?php echo $activity_data->end_date; ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-secondary">Cancle</button>
                </div>

            </div>


        </form>

        </div>
    </div>