<div class="container">
    <h3>Activity record</h3><br>
    <!-- <?php 
        echo change_date_format('1992-01-19');
    ?> -->
    <div class="row">
        <div class="col-md-12">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Activity Name" aria-label="Recipient's username" aria-describedby="button-addon2">
            <div class="input-group-append" id="button-addon4">
                    <button class="btn btn-outline-primary" type="button" id="button-addon2">Search</button>
                    <a href="<?php echo base_url('activity/insert');  ?>" ><button class="btn btn-info" type="button">Add</button></a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Activity Name</th>
                    <th scope="col">Date</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($activity_data as $index =>$obj) { ?>
                <tr>
                <th scope="row"><?php echo $index+1; ?></th>
                    <td><?php echo $obj->activity_name; ?></td>
                    <td><?php echo change_date_format($obj->start_date).' - '.change_date_format($obj->end_date); ?></td>
                    <td>
                        <a href="<?php echo base_url('activity/update/'.$obj->activity_id);  ?>" ><button type="button" class="btn btn-warning">Edit</button></a>
                        <a href="<?php echo base_url('activity/delete/'.$obj->activity_id);  ?>" ><button type="button" class="btn btn-danger" 
                        onclick="return confirm('Are you sure? want to delete this item');">Delete</button></a>
                    </td>
                </tr>
            <?php  } ?>
            </tbody>
            </table>
        </div>

    </div>