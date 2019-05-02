<div class="content-wrapper">
    <section class="content-header">
        <h1>
       Settings
            <small>Shop Details</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo site_url('Dashboard');?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>            
            <li class="active"> Setting</li>
            <li class="active"> Shop Details</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content" style="min-height: 1000.8px;" ng-app="myApp" ng-controller="shopDetailsCtrl" ng-init="init()">

        <div class="box" ng-show="showAddUpdate">
            <div class="box-header with-border">
                <h3 class="box-title" ng-show="!order_id">Shop Details</h3>
                <h3 class="box-title" ng-show="order_id">Update Details</h3>
                <p style="color: red" ng-show="order_id">
                </p>
          </div>

          <!-- ****************** input fields **************************** -->
          <div class="box-body">      
            <div class="col-md-12" ng-show="addUpdateShop">
                <div class="panel panel-default ">
                    <div class="panel-body">                       
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group" id="companyNameDiv">
                                <label>Company Name:  <span class="text-red">*</label>
                                <input type="text" class="form-control" ng-model="inputCompanyName" id="inputCompanyName" ng-pattern="/[aA-zZ\s]$/" required placeholder="" >
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group" id="companyEmailDiv">
                                <label>Email: <span class="text-red">*</span></label>
                                <input type="text" class="form-control" ng-model="inputEmail"  ng-pattern="/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/" id="inputEmail" placeholder="" >
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group" id="companyPhoneDiv">
                                <label>Phone: <span class="text-red">*</span></label>
                                <input type="text" class="form-control"  ng-model="inputPhone" id="inputPhone"   required ng-minlength="10" ng-maxlength="10" placeholder="" >
                            </div>
                        </div>
      
                          <div class="col-md-3 col-sm-12">
                            <div class="form-group" id="companyGSTINDiv">
                                <label>GSTIN: <span class="text-red">*</span></label><br>

                                <input type="text" class="form-control"  ng-model="inputGSTINNo" id="inputGSTINNo"  required placeholder="" >
                 
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group" id="selectCountryDiv">
                                <label>Country: <span class="text-red">*</span></label>
                                <select class="form-control" ng-model="selectedCountry" required>
                                    <option value="">-- Select Country --</span></option>
                                    <option ng-repeat="sector in sectorList" value="{{sector.sector_id}}|{{sector.sector_name}}">{{sector.sector_name}}</option>
                                </select>
                            </div>
                        </div>                          
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group" id="selectStateDiv">
                                <label>State: <span class="text-red">*</span></label>
                                <select class="form-control" ng-model="selectedState" required>
                                    <option value="">-- Select State --</span></option>
                                    <option ng-repeat="sector in sectorList" value="{{sector.sector_id}}|{{sector.sector_name}}">{{sector.sector_name}}</option>
                                </select>
                            </div>
                        </div>    
                        <div class="col-md-3 col-md-12">
                             <div class="form-group" id="streetDiv">
                                <label for="inputStreet">Street<span class="text-red">*</label>
                                <textarea placeholder="Address" rows="3" ng-model="inputLogo" class="form-control" name="comments" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group" id="selectedLogoDiv">
                                <label>Choose Logo: </label>
                                <input type="file" class="form-control"  ng-model="inputLogo" id="inputLogo" style="height:auto;" id="inputLogo"  required placeholder="" >                    
                            </div>
                        </div>    
                        <!-- ****************** add update delete for services ******************* -->

                        <div class="col-md-2 col-sm-12">
                            <label>&nbsp;</label><br>                      
                            <button type="button" class="btn btn-primary">Close</button>        
                        </div>
                    </div>
                </div>
            </div>
       </div>
       
        <div class="box-footer">        
            <button type="button" class="btn btn-success btn-flat" ng-click="showSubmit()"> Submit </button>
            <input type="button" class="btn btn-flat btn-danger pull-right" ng-click="init()" value="Cancel">         
        </div>
    </div>

    <!-- ************************ table of orders **************************** -->

    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Shop Details List</h3>
        </div>
        <div class="box-body">

            <div class="row">
            <div class="col-md-12">

                    <div class="col-md-2">
                    <button type="button" class="btn btn-success btn-flat" ng-click="showAdd()"><i class="fa fa-plus"></i> Add New Details</button>
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
                <th>Company Name</th>            
                <th>Email</th>
                <th>Phone</th>
                <th>Country</th>
                <th>State</th>
                <th>City</th>
                <th>Street</th>
                      
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
<script src="<?php echo base_url('assets/angular/angularjs/controller/shop-details.js'); ?>"></script>
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
