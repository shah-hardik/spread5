 
<?php $cr = 1; ?>
<?php foreach ($user as $user_data): ?>

    <tr id="<?php print $user_data['id']; ?>">
        <td></td>
        <td><?php print $cr; ?></td>
        <td><?php print $user_data['username']; ?></td>
        <td><?php print $user_data['fname']; ?></td>
        <td><?php print $user_data['lname']; ?></td>
        <td><?php print $user_data['address']; ?></td>
        <td><?php print $user_data['city']; ?></td>
        <td><?php print $user_data['phone']; ?></td>
        <td><?php print $user_data['email']; ?></td>
        <td>
            <a href="<?php print _U ?>edit_user/<?php print $user_data['id']; ?>"><i class="glyphicon glyphicon-edit" title="Edit"></i></a>

            <a href="javascript:void(0);" onclick="return DeleteUser('list_user/<?php print $user_data['id']; ?>')"><i class="glyphicon glyphicon-trash" title="Delete"></i></a>

        </td>
    </tr>
    <?php $cr++; ?>    
<?php endforeach; ?>