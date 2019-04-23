
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PAASHH | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="assets/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><img src="assets/dist/img/login/paash.png" style="height:50px;"><b>PAASHH</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="" method="post" id="login_form">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" id="username" name="username" placeholder="Email">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group" id="selectedClientDiv">
                    <label>Select User:</label>
                    <select class="form-control" ng-change="" ng-model="" id="">
                        <option>Home Decor</option>
                        <option>Fashion Desginer</option>
                        <option>Cafe</option>
                    </select>
                </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>            
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
        <a href="<?php echo site_url('Dashboard'); ?>"><button type="submit" class="btn btn-primary btn-block btn-flat" id="login_button" name="signin">Sign In</button></a>
        </div>
        <!-- /.col -->
      </div>
    </form>  
    <!-- /.social-auth-links --> 
   
  
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="assets/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });

</script>
 <script type="text/javascript">
            $(document).ready(function() {
              
             $("#login_button").click(function() {
                    CommonLoginFunction();
                });         
               
            function CommonLoginFunction()
              {            
                alert("h");
                  $.ajax({
                              success: function(response)
                              {
                              window.location = "<?php echo site_url('Dashboard'); ?>";
                              }                     
                      });
              }
          });
</script>
</body>
</html>
