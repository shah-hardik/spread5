<div class="pageheadingContent" >
    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="" style="color:#86B414">User Management</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
            </ul>
            <div class="clearfix"></div>
        </div>
</div>        
<div class="col-md-3 col-lg-3">
    <div class="pageheadingContent">
        <div ><b> User Time Logs</b></div> 
    </div>

    <form class="form-horizontal">


        <div class="form-group">

            <div class="col-lg-6 input-group">
                <label for="inputgroup" class="col-lg-3 control-label">User Name</label>
                <input type="text" class="form-control input-sm" id="username" name="username" placeholder="User Name" >

            </div>
        </div>

        <div class="form-group">
            <label for="inputgroup" class="col-lg-3 control-label">Check In Date</label>
            <div class="col-lg-6 input-group">
                <input type="text" class="form-control input-sm" id="checkindate" name="checkindate"  placeholder="Check In Date" value="" >
                <span  id="span_to" name="span_to" onclick="$('#checkindate').datepicker('show');"  class="input-group-addon pointer"><i class="glyphicon glyphicon-calendar"></i></span>
            </div>
        </div>
        
        <div class="form-group">
            <label for="inputgroup" class="col-lg-3 control-label">Check In Time</label>
            <div class="col-lg-6 input-group">
                <input type="text" class="form-control input-sm" id="checkintime" name="checkintime"  placeholder="Check In Time" value="" >
                <span  id="span_to" name="span_to" onclick="$('#checkintime').datetimepicker('show');"  class="input-group-addon pointer"><i class="glyphicon glyphicon-calendar"></i></span>
            </div>
        </div>

        <div class="form-group">
            <div class="col-lg-9">
                <textarea type="text" class="form-control input-sm"  id="notes" name="notes" placeholder="Notes" >
                </textarea>
            </div>
        </div>
        
        <div class="form-group">
            <div class=" col-lg-9">
                <button type="button" onclick="doLoadFilter();"  class="btn btn-success input-sm">Save</button>
            </div>
        </div>
        
    </form>
</div>
</div>
<div class="col-md-9 col-lg-9 ">
    <div class="">
        <div class="pageheadingContent" >
            <div class="pull-left"><b>List of User Logs</b></div>&nbsp;&nbsp;



            <div class="pull-right">


            </div>
        </div>


        <table class="table table-condensed table-bordered tableYellowHeader">
            <thead>
                <tr>

                    <th>User Name</th>
                    <th>Check In Time</th>
                    <th>Check In Date</th>
                    <th>Notes</th>
                </tr>
            </thead>
            <tbody id="dotLogs">

                <tr>

                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                </tr>
            </tbody>
        </table>


    </div>
</div>