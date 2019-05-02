<div class="content-wrapper" style="min-height: 1000.8px;">
    <section class="content-header">
        <h1>
        User Management
            <small>Manage Supplier</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo site_url('Dashboard');?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>            
            <li class="active"> User Management</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content" ng-app="myApp" style="min-height: 1000.8px;" ng-controller="manageSupplierCtrl" ng-init="init()">

        <div class="box" ng-show="showAddUpdate">
            <div class="box-header with-border">
                <h3 class="box-title" ng-show="!order_id">Add Supplier</h3>
                <h3 class="box-title" ng-show="order_id">Update Supplier</h3>
                <p style="color: red" ng-show="order_id">
                </p>
          </div>

          <!-- ****************** input fields **************************** -->
     <div class="box-body">      
        <div class="col-md-12" ng-show="addUpdateUsers">
           <div class="panel panel-default ">
            <div class="panel-body">
            <div class="row">
            
            <div class="col-md-12">
                          <div class="col-md-6">
                            <h4 class="text-info text-center">Supplier Information</h4>
                            <div class="form-group">                       
                              <label class="col-sm-4 control-label require" for="inputEmail3">Name<span class="text-red">*</span></label>
                               <div class="col-sm-8">
                                <input type="text" class="form-control" name="name" value="">
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-4 control-label require" for="inputEmail3">Email<span class="text-red">*</span></label>

                              <div class="col-sm-8">
                                <input type="email" value="" class="form-control" name="email">
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-4 control-label" for="inputEmail3">Phone<span class="text-red">*</span></label>

                              <div class="col-sm-8">
                                <input type="text" value="" class="form-control" name="phone">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-4 control-label" for="inputEmail3">GSTIN<span class="text-red">*</span></label>

                              <div class="col-sm-8">
                                <input type="text" value="" class="form-control" name="gstin">
                              </div>
                            </div>
                              <div class="form-group">
                                  <label class="col-sm-4 control-label require" for="inputEmail3">Country<span class="text-red">*</span></label>

                                  <div class="col-sm-8">
                                    <select class="form-control select2" name="bill_country_id" id="bill_country_id">
                                    <option value="">Select One</option>
                                                                          <option value="US">United States</option>
                                                                        
                                                                        </select>
                                  </div>
                                </div>
                                <div class="form-group" id="text_div">
                                  <label class="col-sm-4 control-label" for="inputEmail3">State<span class="text-red">*</span></label>

                                  <div class="col-sm-8">
                                    <input type="text" class="form-control" name="bill_state" value="" id="bill_state">
                                  </div>
                                </div>
                                 
                                
                                <div class="form-group">
                                  <label class="col-sm-4 control-label require" for="inputEmail3">City<span class="text-red">*</span></label>

                                  <div class="col-sm-8">
                                    <input type="text" class="form-control" name="bill_city" value="" id="bill_city">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-4 control-label require" for="inputEmail3">Street<span class="text-red">*</span></label>

                                  <div class="col-sm-8">
                                    <input type="text" class="form-control" name="bill_street" value="" id="bill_street">
                                  </div>
                               </div>
         

                                <div class="form-group">
                                  <label class="col-sm-4 control-label" for="inputEmail3">Zip code<span class="text-red">*</span></label>

                                  <div class="col-sm-8">
                                    <input type="text" class="form-control" name="bill_zipCode" value="" id="bill_zipCode">
                                  </div>
                                </div>

                               
                          </div>
                          
                         
                        </div>                         
                    </div>
                        <!-- ****************** add update delete for services ******************* -->

                       
                    </div>
                </div>
            </div>
          




           



        </div>

                      
            




           



      

        <!-- ********************** add update delete for orders ********************* -->

        <div class="box-footer">        
           
        <button type="button" class="btn btn-success btn-flat" ng-click="showAdd()"> Submit </button>
            <input type="button" class="btn btn-flat btn-danger pull-right" ng-click="init()" value="Cancel">
            
        </div>
        
       

    </div>

    <!-- ************************ table of orders **************************** -->

    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Supplier List</h3>
        </div>
        <div class="box-body">

            <div class="row">
            <div class="col-md-12">

                  <div class="col-md-2">
                    <button type="button" class="btn btn-success btn-flat" ng-click="showAdd()"><i class="fa fa-plus"></i> Add New Supplier</button>
                </div>
                <div class="col-md-4">
              
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search..." ng-model="inputSearch">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>

            </div>

           
        </div>

        <table class="table table-bordered table-striped">                                      
            <tr class="bg-gray">
                <th>Id</th>
                <th>Supplier Name</th>          
                <th>Phone</th>   
                <th>Address</th>   
                <th>Email</th>                
                <th>Status</th>       
                <th colspan="2">Actions</th>
            </tr>            
            <tr ng-repeat="assigned in filterData = (assignedList | orderBy: '+' |filter : inputSearch) | limitTo:itemsPerPage: itemsPerPage*(page-1)">
                <td>{{assigned.order_id}}</td>
                <td>{{assigned.client_name}}</td>              
                <td>{{assigned.order_note}}</td>              
                <td>{{assigned.order_cost}}</td>
                <td><a href="" title="details" ng-click="details(assigned)"><i class="fa fa-eye"></i></a></td>
                <td><a href="" ng-click="edit(assigned)"><i class="fa fa-edit text-yellow" title="Edit"></i></a> </td>
                <td><a href="" ng-click="delete(assigned.order_id)"><i class="fa fa-trash text-red" title="Delete"></i></a></td>
            </tr>            
        </table>
    </div>

    <div class="box-footer">
        <uib-pagination class="pagination-sm pagination" total-items="filterData.length" ng-model="page" ng-change="pageChanged()" previous-text="&lsaquo;" next-text="&rsaquo;" items-per-page=itemsPerPage>               
        </uib-pagination>
    </div>

</div>


<!-- ********************** modal to show service details ******************** -->





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
<script src="<?php echo base_url('assets/angular/angularjs/controller/add-supplier.js'); ?>"></script>
<style>
  

    .control-label {
    padding-top: 7px;
    margin-bottom: 0;
    text-align: right;
}
    .col-md-6 {
    margin-left: 200px;
    }
    .col-sm-8 {
    margin-top: 10px;
}
</style>
