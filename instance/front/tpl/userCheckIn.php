<div class="pageheadingContent" >
    <div class="clearfix"></div>
</div>

<div class="col-lg-3 col-md-3">
    <div class="panel panel-default">
        
        <div class="panel-heading"><strong>User Time Logs 
            </strong></div>
        <div class="panel-body">
            <form class="form-horizontal">


                <div class="form-group">
                    <label for="inputgroup" class="col-lg-3 col-md-2  control-label">User Name</label>
                    <div class="col-lg-6 input-group">

                        <input type="text" class="form-control input-sm" id="username" name="user" placeholder="User Name" value="" >

                    </div>
                </div>

                <div class="form-group">
                    <label for="inputgroup" class="col-lg-3 col-md-2  control-label">Check In Date</label>
                    <div class="col-md-6 input-group">
                        <input type="text" class="form-control input-sm" id="checkindate" name="checkindate"  placeholder="Check In Date" value="" >
                        <span  id="span_to" name="span_to" onclick="$('#checkindate').datepicker('show');"  class="input-group-addon pointer"><i class="glyphicon glyphicon-calendar"></i></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputgroup" class="col-lg-3 col-md-2  control-label">Check In Time</label>
                    <div class="col-md-6 input-group">
                        <input type="text" class="form-control input-sm" id="checkintime" name="checkintime"  placeholder="Check In Time" value="" >
                        <span  id="span_to" name="span_to" onclick="$('#checkintime').datetimepicker('show');"  class="input-group-addon pointer"><i class="glyphicon glyphicon-calendar"></i></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputgroup" class="col-lg-3 col-md-2  control-label">Check Out Date</label>
                    <div class="col-md-6 input-group">
                        <input type="text" class="form-control input-sm" id="checkoutdate" name="checkoutdate"  placeholder="Check Out Date" value="" >
                        <span  id="span_to" name="span_to" onclick="$('#checkoutdate').datepicker('show');"  class="input-group-addon pointer"><i class="glyphicon glyphicon-calendar"></i></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputgroup" class="col-lg-3 col-md-2  control-label">Check Out Time</label>
                    <div class="col-md-6 input-group">
                        <input type="text" class="form-control input-sm" id="checkouttime" name="checkouttime"  placeholder="Check Out Time" value="" >
                        <span  id="span_to" name="span_to" onclick="$('#checkouttime').datetimepicker('show');"  class="input-group-addon pointer"><i class="glyphicon glyphicon-calendar"></i></span>
                    </div>
                </div>


                <div class="form-group">
                    <label for="inputgroup" class="col-lg-3 col-md-2  control-label">Notes</label>
                    <div class="col-md-6">
                        <textarea type="text" class="form-control input-sm"  id="notes" name="notes" placeholder="Notes" >
                        </textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-offset-4 col-lg-10">

                        <button type="submit" name="sbt_btn" class="btn btn-success">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>   
</div>
<div class="col-lg-9 col-md-9" >
    <div class="panel panel-default">
        <div class="panel-heading"> 
            <strong>List of User Logs &nbsp;&nbsp;</strong>  
             <div style="float:right"> 
           <span style="float:left;font-size: 16px;">Search User</span>&nbsp;&nbsp;
            <span style="float:right;"><input onclick="doLoadFilter();" type="text" id="search" class="form-control"></span>
             </div>
            <div class="clearfix"></div>
        </div>
        <div class="panel-body">
            <?php
                $cr = 1;
                if (!empty($user)):
                    ?>
                    <table class="table table-condensed table-bordered tableYellowHeader">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>User Name</th>
                                <th>Check In Time</th>
                                <th>Check In Date</th>
                                <th>Check Out Time</th>
                                <th>Check Out Date</th>

                                <th>Notes</th>
                                <th>Total Hours</th>
                            </tr>
                        </thead>
                        <tbody id="list">
                            <?php foreach ($user as $user_data): ?>
                                <tr id="<?php print $user_data['id']; ?>">

                                    <td><?php print $cr; ?></td>
                                    <td><?php print $user_data['user']; ?></td>
                                    <td><?php print $user_data['check_in_time']; ?></td>
                                    <td><?php print $user_data['check_in_date']; ?></td>
                                    <td><?php print $user_data['check_out_time']; ?></td>
                                    <td><?php print $user_data['check_out_date']; ?></td>
                                    <td><?php print $user_data['notes']; ?></td>
                                    <td>
                                        <?php
                                        $time1 = new DateTime($user_data['check_in_time']);
                                        $time2 = new DateTime($user_data['check_out_time']);
                                        $Difference = $time1->diff($time2);

                                        print $Difference->format('%H Hour(s) %i Minute(s) %s Second(s)');
                                        ?>
                                    </td>
                                </tr>
                                <?php $cr++; ?>    
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php else: ?>
                    <div>No User available</div>
                <?php endif; ?>
            
        </div>
    </div>
</div>