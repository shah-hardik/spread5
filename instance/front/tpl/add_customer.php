<div class="addAffiliates actionItem">
    <div class="panel panel-default">
        <div class="panel-heading">Add Customer</div>
        <div class="panel-body">
            <form method="post" action="" class="form-horizontal" role="form">
                <div class="form-group">
                    <label for="inputcustomer" class="col-lg-2 control-label">Customer Name</label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" name="customer_name" id="customer_name" value="<?php print $customer_name; ?>" placeholder="Customer Name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputcompany" class="col-lg-2 control-label">Customer Company</label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" name="customer_company" id="customer_company" value="<?php print $customer_company; ?>" placeholder="Customer Company" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputbudget" class="col-lg-2 control-label">Possible Budget</label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" name="possible_budget" id="possible_budget" value="<?php print $possible_budget; ?>" placeholder="Possible Budget" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputaccount" class="col-lg-2 control-label">Account Name</label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" name="account_name" id="account_name" value="<?php print $account_name; ?>" placeholder="Account Name" required>
                    </div>
                </div>
                
                
                
                
                <div class="form-group">
                    <label for="inputdate" class="col-lg-2 control-label">Joined Date</label>
                    <div class="col-lg-3 input-group">
                        <input type="text" class="form-control input-sm" id="date" name="date"  placeholder="Joined Date" value="" >
                         <span  id="span_to" name="span_to" onclick="$('#date').datepicker('show');"  class="input-group-addon pointer"> <i class="glyphicon glyphicon-calendar"></i> </span> 
                    
                    </div>
                   
                </div>
                

                <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                        
                        <button type="submit" name="sbt_btn" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

</div>