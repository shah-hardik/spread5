<script type="text/javascript">
   
    $(document).ready(function() {

        searchParams = {
            date: ''
            
            
            
        };
        $("#search").keyup(function(e) {
            if (this.value.length > 2) {
                doLoadFilter();
            }
        }); 
       
        $("#checkindate").datepicker({
            changeMonth: true,
            changeYear: true,
            onSelect: function(e) {
                searchParams.date = e;

            }
        });
         $( "#checkintime" ).timepicker({ 
                  changeYear: true, 
                  changeMonth: true,
                  dateFormat: 'hh:mm:ss',
                  onSelect: function(e) {
                searchParams.date = e;
                  }
              });
       $("#checkoutdate").datepicker({
            changeMonth: true,
            changeYear: true,
            onSelect: function(e) {
                searchParams.date = e;

            }
        });
         $( "#checkouttime" ).timepicker({ 
                  changeYear: true, 
                  changeMonth: true,
                  dateFormat: 'hh:mm:ss',
                  onSelect: function(e) {
                searchParams.date = e;
                  }
              }); 
       
   
  });
   function doLoadFilter() {
       
        //showWait();
        $.ajax({
            url: _U + 'userCheckIn',
            data: {customFilter: 1, userName: $("#search").val()},
            success: function(r) {
                hideWait();
                $("#list").html(r);
            }
        });
    }
    
    
    
</script>
<?php include "jquery_ui.php"; ?>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

<script src="<?php print _MEDIA_URL ?>js/jquery-ui-timepicker-addon.js"></script>
