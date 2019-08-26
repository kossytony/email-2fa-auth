
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" constent="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>2fa</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/jquery/jquery.min.js" type="script">
   
    <script src="vendor/jquery/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $("#modalLogin").modal({backdrop: "static", keyboard: "false"});
    });
</script>
 
   

    
    
</head>

<body>

<script type="text/javascript" src="2fascript.js"></script>

<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
    <!--Content-->
    <div class="modal-content">

      <!--Header-->
      <div class="modal-header">
              <!--Body-->
      <div class="modal-body text-center mb-1">

        <h5 class="mt-1 mb-2">Input One time Password</h5>

        <div class="md-form ml-0 mr-0">
        <div  id="timer">
       <form method="post" action="2fa2.php" >
       <fieldset>
       <div class= "form-group" >
          <input type="password" name="otp" class="form-control form-control-sm validate ml-0">
          </div>
          
          <button type="submit"  class="btn btn-lg btn-success btn-block">Submit</button>
          </fieldset> 
          </form>
<span id="mins"> </span>
<span id="secs"> </span>

              
        

</div>
		</div>
        <div class="text-center mt-4">
          <a href="index.php" class="text-primary" > Go back </a>
        </div>
      </div>

    </div>

    <!--/.Content-->
  </div>
</div>



 
<!--Modal: Login with Avatar Form-->

 



    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
