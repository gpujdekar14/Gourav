<head>
<link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/morris.js/morris.css">
</head>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
       purchase order
            <small>Manage Purchase Orders</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>            
            <li class="active">Inventory Master</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content" ng-app="myApp" ng-controller="assignedServicesCtrl" ng-init="init()">

        <div class="box" ng-show="showAddUpdate">
            <div class="box-header with-border">
            
          </div>
          <!-- ****************** input fields **************************** -->
          <div class="box-body">
            <div class="col-md-12">
                <div class="form-group" id="selectedClientDiv">
                <img src="../assets/dist/img/login/paash.png" class="logo" style="height: 100px;" src=""/>
                <label for="Logo">
             
                 </label>
               
            </div>   <br>
            <div class="col-md-12" style="text-align:center;">
            <b style="font-size:20px;"> PURCHASE ORDER</b><hr style="border-top: 1px solid #171313;">
              </div>
            
     <div class="col-md-12" style="margin-top:30px;">
        <div class="col-md-6" style="">
        <div class="panel panel-default bg-gray">
            <div class="panel-body "> <br>
             <form class="form-inline">
                <div class="">
                    <label style="margin-left:80px;" >Bill To:</label>                             
                  
                </div><br>  
                 <div>               
                    <label style="margin-left:80px;">Pacific Integrated Services</label>
                   
                    </div><br>
                  <div>
                   <label style="margin-left:80px;">Plot No. E1/E2, Hiremath Park</label>
                  
                    </div><br>
                  <div>
                  <label style="margin-left:80px;">Lunkad Sky Loungue Lane, Kalayani Nagar</label>
                   
                    </div> <br>
                   <div>
                    <label style="margin-left:80px;">Pune – 411006</label>
                  
                    </div><br>
                    <div>
                    <label style="margin-left:80px;">Contact: 020 – 64002039</label>
                  
                    </div> <br><br><br>
            </form>
        </div>        
         </div>    
       </div>
         <div class="col-md-6" style="">
            <div class="panel panel-default ">
             <div class="panel-body "> <br>
             <form class="form-inline">
             <div>
             <label style="margin-left:80px;" >Date:</label>
             <div class="input-group text" style="margin-left:80px;" >             
              <input type="date" id="company_name" ng-model="company_name"  placeholder="" class="form-control" />  
              <div class="input-group-addon">
               <i class="fa fa-calendar"></i>
             </div>
		      	</div>   
        </div><br>
                <div>               
                    <label style="margin-left:80px;" >Purchase Order:</label>
                    <div class="input-group text" style="margin-left:15px;" >    
                    <input type="text" id="company_name" ng-model="company_name" size="25" placeholder="" class="form-control" />  
                      </div>                       
                </div><br>
                 <div>
                  <label style="margin-left:80px;" >Quatation:</label>
                  <div class="input-group text" style="margin-left:50px;" >    
                    <input type="text" id="company_name" ng-model="company_name" size="25" placeholder="" class="form-control" />  
                    </div>                       
                </div><br>
                 <div>
                  <label style="margin-left:80px;" >Quatation Date:</label>
                    <div class="input-group text" style="margin-left:17px;" >             
                      <input type="date" id="company_name" ng-model="company_name"  placeholder="" class="form-control" />  
                      <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    </div>   
                </div><br>
                 <div>
                  <label style="margin-left:80px;" >Delivery Date By:</label>
                  <div class="input-group text" style="margin-left:10px;" >             
                      <input type="date" id="company_name" ng-model="company_name"  placeholder="" class="form-control" />  
                      <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    </div>   
                </div><br>
                    <div>
                  <label style="margin-left:80px;" >PAASHH/18-19/30:</label>
                  <div class="input-group text" style="margin-left:2px;" >             
                      <input type="date" id="company_name" ng-model="company_name"  placeholder="" class="form-control" />  
                      <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    </div>   
                </div> 
            </div>        
         </div>   
        </form>
    </div>
    <div class="col-md-12" style="margin-top:10px;">
      <div class="col-md-6" style=""> 
        <div class="panel panel-default " style="margin-left: -13px;"><h4 style="height: 30px;padding-left:30px;">To</h4>  <hr style="border-top: 1px solid #171313;">
        <div class="panel-body"> 
          <form class="form-inline" style="margin-left:0px;">
          <div class="col-md-12">
           <div class="col-md-6">
            <div class="input-group text" style="-moz-margin-left:30px;" >
              <div class="input-group-addon">
               <i class="fa fa-user"></i>
             </div>
				    	<input type="text" id="company_name" ng-model="company_name"  placeholder="Customer Name" class="form-control" />  
		      	</div>   
            </div>  
       <div class="col-md-6">
           <div class="input-group text" style="-moz-margin-left:80px;">
            <div class="input-group-addon">
              <i class="fa fa-envelope"></i>
            </div>
              <input name="company_name" id="company_name"  ng-model="company_name"  class="form-control" placeholder="Email" class="form-control" />  
           </div>
        </div>
    </div><br>

    <div class="col-md-12" style="margin-top:30px">
           <div class="col-md-6">
            <div class="input-group text" style="-moz-margin-left:30px;" >
              <div class="input-group-addon">
               <i class="fa fa-globe"></i>
             </div>
				    	<input type="text" id="company_name" ng-model="company_name"  placeholder="Country" class="form-control" />  
		      	</div>   
            </div>  
       <div class="col-md-6">
           <div class="input-group text" style="-moz-margin-left:80px;">
            <div class="input-group-addon">
              <i class="fa fa-hashtag"></i>
            </div>
              <input name="company_name" id="company_name"  ng-model="company_name"  class="form-control" placeholder="State" class="form-control" />  
           </div>
        </div>
    </div>
          
    <div class="col-md-12" style="margin-top:30px">
           <div class="col-md-6">
            <div class="input-group text" style="-moz-margin-left:30px;" >
              <div class="input-group-addon">
               <i class="fa fa-hashtag"></i>
             </div>
				    	<input type="text" id="company_name" ng-model="company_name"  placeholder="City" class="form-control" />  
		      	</div>   
            </div>  
       <div class="col-md-6">
           <div class="input-group text" style="-moz-margin-left:80px;">
            <div class="input-group-addon">
              <i class="fa fa-hashtag"></i>
            </div>
              <input name="company_name" id="company_name"  ng-model="company_name"  class="form-control" placeholder="Address" class="form-control" />  
           </div>
        </div>
    </div>
          
    <div class="col-md-12" style="margin-top:30px">
           <div class="col-md-6">
            <div class="input-group text" style="-moz-margin-left:30px;" >
              <div class="input-group-addon">
               <i class="fa fa-phone"></i>
             </div>
				    	<input type="text" id="company_name" ng-model="company_name"  placeholder="Phone" class="form-control" />  
		      	</div>   
            </div>  
       <div class="col-md-6">
           <div class="input-group text" style="-moz-margin-left:80px;">
            <div class="input-group-addon">
              <i class="fa fa-mobile"></i>
            </div>
              <input name="company_name" id="company_name"  ng-model="company_name"  class="form-control" placeholder="Mobile" class="form-control" />  
           </div>
        </div>
    </div>      
    <div class="col-md-12" style="margin-top:16px">
       <div class="col-md-6">
         <div>
       </div>
  </div>
       <div class="col-md-6">
        <div>
</div>
      </div>
    </div>
          


            </form>      
            </div>        
         </div>    
    </div>
   
        <div class="col-md-6" style="">
     
        <div class="panel panel-default bg-gray" style="margin-right:-13px;">
     
            <div class="panel-body "> <br>
             <form class="form-inline">
                <div class="">
                    <label style="margin-left:80px;" >Bill To:</label>                             
                  
                </div><br>  
                 <div>               
                    <label style="margin-left:80px;">Pacific Integrated Services</label>
                   
                    </div><br>
                  <div>
                   <label style="margin-left:80px;">Plot No. E1/E2, Hiremath Park</label>
                  
                    </div><br>
                  <div>
                  <label style="margin-left:80px;">Lunkad Sky Loungue Lane, Kalayani Nagar</label>
                   
                    </div> <br>
                   <div>
                    <label style="margin-left:80px;">Pune – 411006</label>
                  
                    </div><br>
                    <div>
                    <label style="margin-left:80px;">Contact: 020 – 64002039</label>
                  
                    </div> <br><br>
            </form>
        </div>        
         </div>    
       </div>
       <div class="col-md-12">
        <div class="col-md-10">
        </div>
        <div class="col-md-2">
       <button type="button" class="btn btn-success btn-flat" ng-click="showAdd()"><i class="fa fa-plus"></i>Generate PO</button>
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
<script src="<?php echo base_url('assets/angular/angularjs/controller/purchase-order.js'); ?>"></script>
<style>

</style>