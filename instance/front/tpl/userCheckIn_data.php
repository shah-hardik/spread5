
<?php $cr = 1; ?>
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