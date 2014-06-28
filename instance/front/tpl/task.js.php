

<script type="text/javascript">
    var delUrl = '';
    function Deletetask(url){
        delUrl = url;
        $("#myModal").modal("show");
    }
    
    $(document).ready(function() {

        searchParams = {
            date: ''
        };
       
        $("#from_date").datepicker({
            changeMonth: true,
            changeYear: true,
            onSelect: function(e) {
                searchParams.date = e;
            }
        });
         $("#to_date").datepicker({
            changeMonth: true,
            changeYear: true,
            onSelect: function(e) {
                searchParams.date = e;

            }
        });
    });
    
    
    
</script>
<?php include "jquery_ui.php"; ?>
