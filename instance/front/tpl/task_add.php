<div class="addAffiliates actionItem">
    <div class="panel panel-default">
        <div class="panel-heading">Add New Task</div>
        <div class="panel-body">
            <form method="post" action="" class="form-horizontal" role="form">
                <div class="form-group">
                    <label for="inputquestion" class="col-lg-2 control-label">Assign From</label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" name="fields[assign_from]" id="assign_from" value="<?php print $assign_from; ?>" placeholder="Assign From" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputquestion" class="col-lg-2 control-label">Assign To</label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" name="fields[assign_to]" id="assign_to" value="<?php print $assign_to; ?>" placeholder="Assign To" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputquestion" class="col-lg-2 control-label">Type of Task</label>
                    <div class="col-lg-1">
                        <div class="radio">
                            <label><input value="New" data-id=""  type="radio"  name="fields[task_type]"/>New</label>
                        </div>
                        <div class="radio">
                            <label><input value="Existing" data-id=""  type="radio"  name="fields[task_type]"/>Existing</label>
                        </div>
                    </div>
                    <!--                    <label for="inputquestion" class="col-lg-2 control-label">Type of Task</label>
                                        <div class="col-lg-1">
                                            New<input type="radio" class="form-control" name="fields[task_type]" id="task_type" value="<?php print $task_type; ?>"  required>
                                            <input type="radio" class="form-control" name="fields[task_type]" id="task_type" value="<?php print $task_type; ?>" required>Existing
                                        </div>-->
                </div>
                <div class="form-group">
                    <label for="inputquestion" class="col-lg-2 control-label">Task Name</label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" name="fields[task_name]" id="task_name" value="<?php print $task_name; ?>" placeholder="Add Task" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputquestion" class="col-lg-2 control-label">Task Description</label>
                    <div class="col-lg-5">
                        <textarea type="text" class="form-control" name="fields[task_desc]" id="task_desc" placeholder="Add Description" required></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputgroup" class="col-lg-2 control-label">Priority</label>
                    <div class="col-lg-5">
                        <select class="form-control" name="fields[priority]" id="priority" required>
                            <option value="">Select</option>
                            <option value="High">High</option>       
                            <option value="Everage">Everage</option>
                            <option value="Low">Low</option>

                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputgroup" class="col-lg-2 control-label">Begin at</label>
                    <div class="col-lg-3 input-group">
                        <input type="text" class="form-control input-sm" id="to_date" name="fields[to_date]"  placeholder="Pick Begin Date" value="" >
                        <span  id="span_to" name="span_to" onclick="$('#to_date').datepicker('show');"  class="input-group-addon pointer"><i class="glyphicon glyphicon-calendar"></i></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputgroup" class="col-lg-2 control-label">End at</label>
                    <div class="col-lg-3 input-group">
                        <input type="text" class="form-control input-sm"  id="from_date" name="fields[from_date]"  value="" placeholder="Pick End Date"/>
                        <span  id="span_from" name="span_from" onclick="$('#from_date').datepicker('show');"  class="input-group-addon pointer"><i class="glyphicon glyphicon-calendar"></i></span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                        <input type="hidden" name="fields[task_id]" id="task_id" value="<?php print $id_val; ?>">
                        <button type="submit" class="btn btn-primary" onclick="return FormSubmit();">Save</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

</div>