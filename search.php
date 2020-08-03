<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> 
 <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
     <form action="details.php" method="post" class="form-inline  p-3">
         <input type="text" name="search" id ="search" class="form-control form-control-lg rounded-0 border-info" placeholder="search.." style="width: 80%">
         <input type="submit" value="Seacrh" name="submit" class="btn btn-info btn-lg rounded-0" style="width:20%">
     </form>      

     <div class="col-md-6" style="position: relative;margin-top: -45px;margin-left: 210px">
         <div class="list-group" id="show-list">
         </div>
     </div> 
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2 bg-light p-4 mt-3 rounded">
            <h4 class="text-center">AutoComplete</h4>
            <form action="details.php" method="post" class="form-inline  p-3">
                <input type="text" name="search" autocomplete="off" id ="search" class="form-control form-control-lg rounded-0 border-info" placeholder="search.." style="width: 80%">
                <input type="submit" value="Seacrh" name="submit" class="btn btn-info btn-lg rounded-0" style="width:20%">
            </form>
        </div>
        <div class="col-md-6" style="position: relative;margin-top: -45px;margin-left: 210px">
            <div class="list-group" id="show-list">
               
            </div>
        </div>
    </div>
    <script type="text/javascript">
    $(document).ready(function(){        
        $("#search").keyup(function(){
            var searchText = $(this).val();
            if(searchText!=''){
                $.ajax({
                    url: "action.php",
                    method:'post',
                    data:{query:searchText},
                    success:function(response){
                        $("#show-list").html(response);
                    }
                });
            }
            else{
                $("#show-list").html('');
            }
            $(document).on('click','a',function(){
               $("#search").val($(this).text()); 
               $("#show-list").html('');
            }); 
        });
    });
    
</script>
</div>
