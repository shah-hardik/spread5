<?php
$urlArgs = _cg("url_vars");

$begindate = date('Y-m-d', strtotime($_REQUEST['fields']['to_date']));
$enddate = date('Y-m-d', strtotime($_REQUEST['fields']['from_date']));

if (isset($_REQUEST['fields']) && $_REQUEST['fields']['task_id'] == '') {
    
    $_REQUEST['fields']['begin_at'] = $begindate;
    $_REQUEST['fields']['end_at'] = $enddate;
  
    $new_task_id = Task::add($_REQUEST[fields]);
    if ($new_task_id > 0) {
        $greetings = "New Task inserted successfully";
    } else {
        $error = "Unable to add new Task";
    }
}
if (isset($_REQUEST['fields']) && $_REQUEST['fields']['task_id'] > 0) {
    $_REQUEST['fields']['begin_at'] = $begindate;
    $_REQUEST['fields']['end_at'] = $enddate;
    $new_task_id = Task::update($_REQUEST['fields'], $_REQUEST['fields']['task_id']);
    if ($new_task_id > 0) {
        $greetings = "Task updated successfully";
        unset($_REQUEST['fields']);
    }
}

$addIcon = "plus";
$addLabel = "Add Task";
$action_type = "add";
$type = '';
$question = '';
$options = '';
$group_name = '';
$answer_type = '';
$id_val = '';
$vehicleIds = '';
$help = '';


switch ($urlArgs[0]) {
    case "edit":
        $subTpl = "task_add.php";
        $addIcon = "edit";
        $addLabel = "Edit Task";
        $action_type = "edit";
        $activeMenuAdd = "active";
        if ($urlArgs[1] > 0) {

            $view_data = Task::gettaskDetail($urlArgs[1]);
            $question = $view_data['question'];
            $answer_type = $view_data['answer_type'];
            $options = $view_data['options'];
            $group_name = $view_data['group_name'];
            $type = $view_data['type'];
            $vehicleIds = $view_data['vehicleIds'];
            $help = $view_data['help'];
            $id_val = $urlArgs[1];
        }

        break;
    case "add":
        $subTpl = "task_add.php";
        $activeMenuAdd = "active";
        break;
    case "delete":
        $delete_data = Task::delete($urlArgs[1]);
        if ($delete_data) {
            $greetings = "Task deleted successfully";
            $_SESSION['greetings_msg'] = $greetings;
        } else {
            $error = "Unable to delete Task";
            $_SESSION['error_msg'] = $error;
        }
        _R(lr('task/list'));
        break;
    default:
        $task = Task::gettaskList();

        $subTpl = "task_list.php";
        $activeMenuList = "active";
}


$jsInclude = "task.js.php";
_cg("page_title", "Task");
?>
