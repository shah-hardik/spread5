<script type="text/javascript" >
  
   function DeleteUser(url){
        delUrl = url;
        $("#myModal").modal("show");
    } 
    
    
    $(document).ready(function() {
        searchParams = {
            filter: '<?php print $urlArgs[1] ?>',
            date: ''
        };
    $("#search").keyup(function(e) {
            if (this.value.length > 2) {
                doLoadFilter();
            }
        }); 
    });
    
    
     function doLoadFilter() {
       
        //showWait();
        $.ajax({
            url: _U + 'list_user',
            data: {customFilter: 1, userName: $("#search").val()},
            success: function(r) {
                hideWait();
                $("#List").html(r);
            }
        });
    }
    
</script>