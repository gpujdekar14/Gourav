<div class="content-wrapper" style="min-height: 1000.8px;">
    <section class="content-header">
        <h1>
       Sales Report
            <small>Report</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo site_url('Dashboard');?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>            
            <li class="active">  Sales Report</li>
        </ol>
    </section>

    <!-- Main content -->
<section class="content" style="min-height: 1000.8px;" ng-app="myApp" ng-controller="purchaseOrderCtrl" ng-init="init()">
<div class="box" ng-show="">
            <div class="box-header with-border">
              
          </div>

          <!-- ****************** input fields **************************** -->
         <div class="box-body">      
            <div class="col-md-12" ng-show="">
                <div class="panel panel-default ">
                    <div class="panel-body">
                    <div class="col-md-2">
                           <label for="exampleInputEmail1">Product</label>
                            <div class="col-md-12 input-group">                                                        
                            <select class="form-control select2" name="item" id="item">
                                    <option value="">All</option>
                                                <option value="1" >Milk</option>
                                                <option value="2" >Paper</option>
                                                    
                                </select>
                            </div>                    
                        </div>            
                        <div class="col-md-2">
                            <label for="sel1">Customer</label>
                            <div class="col-md-12 input-group">
                                <select class="form-control select2" name="customer" id="customer">
                                    <option value="">All</option>
                                                <option value="1" >Petter John</option>
                                                <option value="2" >Mickel hasi</option>
                                                <option value="2" >inna moran</option>
                                                    
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <label for="sel1">Type</label>
                            <div class="col-md-12 input-group">
                                <select class="form-control select2" name="customer" id="customer">
                                    <option value="">All</option>
                                                <option value="1" >Daily</option>
                                                <option value="2" >Monthly</option>
                                                <option value="2" >Yearly</option>
                                                    
                                </select>
                            </div>
                        </div>
                        


                        <div class="col-md-2">
                           <label for="exampleInputEmail1">&nbsp;</label>
                            <div class="col-md-12 input-group">                                                        
                            <input type="button" class="btn btn-flat btn-info" ng-show="!order_id" value="Filter" ng-click="add()">   
        
                           </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Sales Report</h3>
        </div>
        <div class="box-body">

            <div class="row">
                <div class="col-md-12">

                <div class="col-md-4">
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
                <th>Date</th>
                <th>No.Of Orders</th>              
                <th>Sales Volume</th>
                <th>Sales Value</th>
                <th>Tax</th>
                <th>Profit</th>
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


