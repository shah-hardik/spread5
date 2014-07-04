<div class="pageheadingContent" >
    <div class="clearfix"></div>
</div>

    <div class="panel panel-default">
        
        <div class="panel-heading"><strong>Appointment
            </strong></div>
        <div class="panel-body">
            <form class="form-horizontal">


                <div class="form-group">
                    <label for="inputgroup" class="col-lg-3 col-md-2  control-label">User </label>
                    <div class="col-lg-5 input-group">

                        <input type="text" class="form-control input-sm" id="username" name="user" placeholder="User" value="" >

                    </div>
                </div>

                <div class="form-group">
                    <label for="inputgroup" class="col-lg-3 col-md-2  control-label">Date</label>
                    <div class="col-md-5 input-group">
                        <input type="text" class="form-control input-sm" id="date" name="date"  placeholder="Date" value="" >
                        <span  id="span_to" name="span_to" onclick="$('#date').datepicker('show');"  class="input-group-addon pointer"><i class="glyphicon glyphicon-calendar"></i></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputgroup" class="col-lg-3 col-md-2  control-label">Time</label>
                    <div class="col-md-5 input-group">
                        <input type="text" class="form-control input-sm" id="time" name="time"  placeholder="Time" value="" >
                        <span  id="span_to" name="span_to" onclick="$('#time').datetimepicker('show');"  class="input-group-addon pointer"><i class="glyphicon glyphicon-calendar"></i></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputgroup" class="col-lg-3 col-md-2  control-label">Notes</label>
                    <div class="col-md-5">
                        <textarea type="text" class="form-control input-sm"  id="notes" name="notes" placeholder="Notes" >
                        </textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-offset-8 col-lg-10">

                        <button type="submit" name="sbt_btn" class="btn btn-success">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>   

