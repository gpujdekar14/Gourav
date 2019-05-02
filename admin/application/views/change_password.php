<div class="content-wrapper">
    <section class="content-header">
        <h1>
       Change Password
          
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo site_url('Dashboard');?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>            
            <li class="active"> Change Password</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content" style="min-height: 1000.8px;" ng-app="myApp" ng-controller="manageDepartmentCtrl" ng-init="init()">
     <div class="box" ng-show="showAddUpdate">
            <div class="box-header with-border">
                <h3 class="box-title" ng-show="!order_id">Change Password</h3>
              
                <p style="color: red" ng-show="order_id">
                </p>
          </div>
          <!-- ****************** input fields **************************** -->
        <div class="box-body">      
            <div class="col-md-12" ng-show="addUpdateDepartment">
                <div class="panel panel-default ">
                    <div class="panel-body">
                       
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group" id="departmentDiv">
                                <label>Old Password:  <span class="text-red">*</label>
                                <input type="text" class="form-control" ng-model="inputCategoryname" id="inputCategoryname" ng-pattern="/[aA-zZ\s]$/" required placeholder="" >
                            </div>
                        </div>  
                          
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group" id="UnitDiv">
                                <label>New Password:  <span class="text-red">*</label>
                                <input type="text" class="form-control" ng-model="inputUnit" id="inputUnit" ng-pattern="" required placeholder="" >
                            </div>
                        </div>  
                    </div>
               </div>
            </div>
        </div>       
        <div class="box-footer">
             <button type="button" class="btn btn-success btn-flat" ng-click="showSubmit()"> Change Password </button>
             <input type="button" class="btn btn-flat btn-danger pull-right" ng-click="init()" value="Cancel">
        </div>
    </div>
</section>
</div>  
<script>
  $(document).ready(function() {
    $('#assignServices').addClass('active');
});
</script>
<!-- app.js -->
<script src="<?php echo base_url('assets/angular/angularjs/app.js'); ?>"></script>
<!-- app.js -->
<script src="<?php echo base_url('assets/angular/angularjs/controller/change-password'); ?>"></script>
<style>
 
</style>
