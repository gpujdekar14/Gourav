<div class="content-wrapper">
    <section class="content-header">
        <h1>
        Master Settings
            <small>Manage Department</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>            
            <li class="active"> Master Settings</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content" ng-app="myApp" ng-controller="manageDepartmentCtrl" ng-init="init()">

        <div class="box" ng-show="showAddUpdate">
            <div class="box-header with-border">
                <h3 class="box-title" ng-show="!order_id">Add Department</h3>
                <h3 class="box-title" ng-show="order_id">Update Department</h3>
                <p style="color: red" ng-show="order_id">
                </p>
          </div>

          <!-- ****************** input fields **************************** -->
          <div class="box-body">      
            <div class="col-md-12" ng-show="addUpdateUsers">
                <div class="panel panel-default ">
                    <div class="panel-body">
                       
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group" id="userNameDiv">
                                <label>Department Name:  <span class="text-red">*</label>
                                <input type="text" class="form-control" ng-model="inputUsername" id="inputUsername" ng-pattern="/[aA-zZ\s]$/" required placeholder="" >
                            </div>
                        </div>        
                                     

                        <!-- ****************** add update delete for services ******************* -->

                        <div class="col-md-2 col-sm-12">
                            <label>&nbsp;</label><br>
                            <input type="button" class="btn btn-success btn-sm btn-flat" ng-show="!serviceObjectId" value="Add" ng-click="add()">
                            <input type="button" class="btn btn-success btn-sm btn-flat" ng-show="serviceObjectId" value="Update" ng-click="updateService()">
                            <input type="button" ng-show="showAddClose" class="btn btn-danger btn-sm btn-flat" value="Close" ng-click="closeServices()"></button>
                          
                        </div>
                    </div>
                </div>
            </div>
          

                   



            <!-- ******************** table of services *************************** -->

            <div class="row" ng-show="servicesAssignedArray.length > 0">
                <div class="col-md-12 col-sm-12">
                    <div class="table-responsive">
                        <table class="table table-stripped">
                        
                              
                            </tr>
                        </table>    
                    </div>
                </div>
            </div>

           



        </div>

        <!-- ********************** add update delete for orders ********************* -->

        <div class="box-footer">        
           
            <input type="button" class="btn btn-flat btn-danger pull-right" ng-click="init()" value="Cancel">
        </div> 

    </div>

    <!-- ************************ table of orders **************************** -->

    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Department List</h3>
        </div>
        <div class="box-body">

            <div class="row">
            <div class="col-md-6">

                  <div class="col-md-7">
                    <button type="button" class="btn btn-success btn-flat" ng-click="showAdd()"><i class="fa fa-plus"></i> Add New Department</button>
                </div>
                <div class="col-md-5">
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
                <th>Dep Id</th>
                <th>Department Name</th>   
                           
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

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" id="model" role="document">
      <div class="modal-content">

       <div style="overflow: visible; background-color: #fff;border: 1px solid black">

        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">×</button>          
            <div class=" ">
              <h4>Service List</h4>        
          </div>
      </div>

      <div class="modal-body privewModal">
      <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr  class="bg-gray" >
                            <th>Sr. No.</th>
                            <th>Service</th>
                            <th>Sector</th>
                            <th>Order Date</th>
                            <th>Order Details</th>
                            <th>Expiry Date</th>
                            <th>Renewal Cost</th>
                            <th>Rewnewal years</th>
                            <th>Rewnewal Status</th>
                        </tr>
                        <tr ng-repeat="serv in servicesArray">
                            <td>{{$index+1}}</td>
                            <td>{{serv.service_name.split('|')[1]}} </td>
                            <td>{{serv.sector_name.split('|')[1]}} </td>
                            <td>{{serv.order_detail_order_date}}</td>
                            <td>{{serv.order_detail_order_details}}</td>
                            <td>{{serv.order_detail_expiry_date}}</td>
                            <td>{{serv.order_detail_renewal_cost}}</td>
                            <td ng-if="serv.order_details_no_of_years == 0"> - </td>
                            <td ng-if="serv.order_details_no_of_years != 0">{{serv.order_details_no_of_years}}</td>


                            <td ng-if="serv.order_detail_is_renewed == 0"> - </td>
                            <td ng-if="serv.order_detail_is_renewed == 1"><small class="label pull-right bg-green">Renewed</small></td>
                        </tr>

                    </table>
                </div>            
            </div>
        </div>
       
        </div>
    </div>  

</div>

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
<script src="<?php echo base_url('assets/angular/angularjs/controller/manage-department.js'); ?>"></script>
<style>
    .tooltip {
        position: relative;
        display: inline-block;
        border-bottom: 1px dotted black;
    }

    .tooltip .tooltiptext {
        visibility: hidden;
        width: 120px;
        background-color: black;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 5px 0;

        /* Position the tooltip */
        position: absolute;
        z-index: 1;
    }

    .tooltip:hover .tooltiptext {
        visibility: visible;
    }
    #model{
        width: 700px;
    }
</style>
