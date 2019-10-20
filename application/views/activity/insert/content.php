<div class="container">
    <h3>Add  Activity</h3><br>
    
    <div class="row">
        <div class="col-md-12">
        <?php echo validation_errors(); ?>
        <?php echo form_open('activity/save', 'method="POST"'); ?>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="exampleInputEmail1">Activity Name</label>
                    <input type="text" class="form-control" id="activity_name" name="activity_name" value="<?php echo set_value('activity_name'); ?>" aria-describedby="emailHelp" placeholder="Activity Name" required>
                </div>
                <div class="col-md-3 form-group">
                    <label for="exampleInputEmail1">Starting date</label>
                    <input type="text" class="form-control" id="start_date" name="start_date" value="<?php echo set_value('start_date'); ?>" aria-describedby="emailHelp" placeholder="starting date" required>
                </div>
                <div class="col-md-3 form-group">
                    <label for="exampleInputEmail1">End date</label>
                    <input type="text" class="form-control"  id="end_date" name="end_date" value="<?php echo set_value('end_date'); ?>" aria-describedby="emailHelp" placeholder="End date" required>
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