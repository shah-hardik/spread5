<div class="col-lg-9 col-md-9" >
    <div class="panel panel-default">
        <div class="panel-heading"> 
            <strong>List of Appointments &nbsp;&nbsp;</strong>  
            <div class="clearfix"></div>
        </div>
        <div class="panel-body">
            <?php $userlist = q("select * from appointment"); ?>
            <?php
            $cr = 1;
            if (!empty($userlist)):
                ?>
                <table class="table table-condensed table-bordered tableYellowHeader">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>User </th>
                            <th>Date</th>
                            <th>Time</th>

                            <th>Notes</th>

                        </tr>
                    </thead>
                    <tbody id="list">
                        <?php foreach ($userlist as $user_data): ?>
                            <tr id="<?php print $user_data['id']; ?>">

                                <td><?php print $cr; ?></td>
                                <td><?php print $user_data['user']; ?></td>
                                <td><?php print $user_data['date']; ?></td>
                                <td><?php print $user_data['time']; ?></td>
                                <td><?php print $user_data['notes']; ?></td>

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