<div class="listAffiliates actionItem">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div style="float:left;padding-top:8px"><b>List of Task</b></div> 
            <div style="float:right">
            </div> 
            <div class="clearfix"></div>
        </div>
        <div class="panel-body">
	    <?php
	    $cr = 1;
	    if (!empty($task)):
		?>
    	    <table class="table table-hover" id="table" >
    		<thead>
    		    <tr>
    			<th></th>
    			<th>#</th>
    			<th>Assign From</th>
    			<th>Assign to</th>
			<th>Task name</th>
    			<th>Task description</th>
    			<th>Type of task</th>
    			<th>Priority</th>
    			<th>Begin at</th>
    			<th>End at</th>
    			<th>Action</th>

    		    </tr>
    		</thead>
    		<tbody>
			<?php foreach ($task as $each_task): ?>
			    <tr id="<?php print $each_task['id']; ?>">
				<td></td>
				<td><?php print $cr; ?></td>
				
				<td><?php print $each_task['assign_from']; ?> </td>
				<td><?php print $each_task['assign_to']; ?> </td>
				<td><?php print $each_task['task_name']; ?> </td>
				<td><?php print $each_task['task_desc']; ?> </td>
                                <td><?php print $each_task['task_type']; ?> </td>
				<td><?php print $each_task['priority']; ?> </td>
				

				<td>
				   <?php print date("m/d",  strtotime($each_task['begin_at'])) ; ?> 
				</td>
				<td><?php print date("m/d",  strtotime($each_task['end_at'])) ; ?>
				   
				</td>
                                <td>
<!--				    <a href="<?php print _U ?>task/edit/<?php print $each_task['id']; ?>"><i class="glyphicon glyphicon-edit" title="Edit"></i></a>-->
				    <a href="javascript:void(0);" onclick="return Deletetask('task/delete/<?php print $each_task['id']; ?>')"><i class="glyphicon glyphicon-trash" title="Delete"></i></a>
				    
				</td>
<!--				<td><span title="<?php print ($each_task['task_desc']); ?>" data-toggle="tooltip" >
					<?php print truncate($each_task['task_desc'], 50); ?>
				    </span>
                                </td>-->
				
				
			    </tr>
			    <?php $cr++; ?>    
			<?php endforeach; ?>
    		</tbody>
    	    </table>
	    <?php else: ?>
    	    <div>No Task available</div>
	    <?php endif; ?>
        </div>
    </div>
</div>