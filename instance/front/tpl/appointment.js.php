<script type="text/javascript">
   
    $(document).ready(function() {

        searchParams = {
            date: ''
            
        };
      
        $("#date").datepicker({
            changeMonth: true,
            changeYear: true,
            onSelect: function(e) {
                searchParams.date = e;

            }
        });
         $( "#time" ).timepicker({ 
                  changeYear: true, 
                  changeMonth: true,
                  dateFormat: 'hh:mm:ss',
                  onSelect: function(e) {
                searchParams.date = e;
                  }
              });
       
   
  });
 
    
    
</script>
<?php include "jquery_ui.php"; ?>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

<script src="<?php print _MEDIA_URL ?>js/jquery-ui-timepicker-addon.js"></script>
