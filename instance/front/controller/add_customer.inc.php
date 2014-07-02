<?php

$urlArgs = _cg("url_vars");
// Add new User
$date = date('Y-m-d H:i:s', strtotime($_REQUEST['checkindate']));
if (isset($_REQUEST['sbt_btn'])) {
    
  
   
            qi('add_customer', array(
                'customer_name' => _escape($_REQUEST['customer_name']),
                'customer_company' => _escape($_REQUEST['customer_company']),
                'possible_budget' => _escape($_REQUEST['possible_budget']),
                'account_name' => _escape($_REQUEST['account_name']),
                'joined_date' => _escape($date),
                
                    ), 'REPLACE');

           _R(lr('add_customer'));


}
_cg("page_title", "Add Customer");
$jsInclude = "customer.js.php";

?> 