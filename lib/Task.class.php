<?php

/**
 * Task Class
 * 
 * @author Shah Hardik 
 * @version 1.0
 * @package Spread5
 * 
 */
class Task {
    # constructor

    public static function add($fields) {
        // Escape array for sql hijacking prevention
        $data = _escapeArray($fields);

        $map = array();
        $map['assign_from'] = 'assign_from';

        $map['assign_to'] = 'assign_to';
        $map['task_name'] = 'task_name';
        $map['task_desc'] = 'task_desc';
        $map['begin_at'] = 'begin_at';
        $map['end_at'] = 'end_at';
        $map['priority'] = 'priority';
        $map['task_type'] = 'task_type';
        $ds = _bindArray($data, $map);
        return qi('task_detail', $ds);
    }

    public static function update($fields, $id) {
        // Escape array for sql hijacking prevention
        $data = _escapeArray($fields);
        $map = array();

        $map['assign_from'] = 'assign_from';

        $map['assign_to'] = 'assign_to';
        $map['task_name'] = 'task_name';
        $map['task_desc'] = 'task_desc';
        $map['begin_at'] = 'begin_at';
        $map['end_at'] = 'end_at';
        $map['priority'] = 'priority';
        $map['task_type'] = 'task_type';
        $ds = _bindArray($data, $map);

        $condition = "id = " . $id;
        return qu('task_detail', $ds, $condition);
    }

    public static function delete($id) {
        $condition = "id =" . $id;
        return qd('task_detail', $condition);
    }

    public static function gettaskDetail($id) {
        return qs("SELECT * FROM task_detail WHERE id = " . $id);
    }

    public static function gettaskList() {
        return q("SELECT * FROM task_detail");
    }

}

?>
