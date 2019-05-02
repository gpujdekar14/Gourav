<div class="content-wrapper">
    <section class="content-header">
        <h1>
        Inventory Master
            <small>Manage Purchase Orders</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo site_url('Dashboard');?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>            
            <li class="active">Inventory Master</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content" style="min-height: 1000.8px;" ng-app="myApp" ng-controller="addInventoryCtrl" ng-init="init()">
    <div class="box" ng-show="showUploadFile">
            <div class="box-header with-border">
                <h3 class="box-title" ng-show="!order_id">Upload File</h3>
              
          </div>  
          <div class="box-body">  
           <div class="col-md-12" ng-show="showFile">
                <div class="panel panel-default ">
              
                    <div class="panel-body">      <p style="color: black" >
               Your xlsx data should be in the format below. The first line of your CSV file should be the column headers as in the table example.
              </p>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group" id="">
                                <label>upload file: <span class="text-red">*</label>
                                <input type="file" style="height:auto;" class="form-control" placeholder="" >
                            </div>
                        </div>
                     </div>
                 </div>
             </div>
             <div class="box-footer">
            <input type="button" class="btn btn-flat btn-success" ng-show="!order_id" value="Add" ng-click="add()">
            <input type="button" class="btn btn-flat btn-default pull-right" ng-click="init()" value="Cancel">
            
        </div>
            </div>
            </div>
        <div class="box" ng-show="showAddUpdate">
            <div class="box-header with-border">
                <h3 class="box-title" ng-show="!order_id">Add Inventory</h3>
                <h3 class="box-title" ng-show="order_id">Update Inventory</h3>
                <p style="color: red" ng-show="order_id">
                
              </p>
          </div>
         
          <!-- ****************** input fields **************************** -->
          <div class="box-body">       
            <div class="col-md-12" ng-show="addUpdateService">
                <div class="panel panel-default ">
                    <div class="panel-body">
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group" id="inputBarcodeDiv">
                                <label>Barcode: <span class="text-red">*</label>
                                <input type="text" class="form-control" placeholder="" >
                            </div>
                        </div>
                                    
                   
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group" id="selectedProductDiv">
                                <label>Product Catagory:  <span class="text-red">*</label>
                                <select class="form-control" ng-model="selectedProduct">
                                    <option value="">-- Select Sector --</span></option>
                                    <option ng-repeat="sector in sectorList" value="{{sector.sector_id}}|{{sector.sector_name}}">{{sector.sector_name}}</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group" id="inputBrandDiv">
                                <label>Brand: <span class="text-red">*</span></label>
                                <input type="text" class="form-control" placeholder="" id="inputBrand">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group" id="inputStyleDiv">
                                <label>STYLE NO/DESIGN NO/ARTICLE: <span class="text-red">*</span></label>
                                <input type="text" class="form-control " id="inputStyle" placeholder="" >
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-12">
                            <div class="form-group" id="orderDetailsDiv">
                                <label>COLOUR/pattern: <span class="text-red">*</span></label>
                                <input type="text" class="form-control" id="inputColour" placeholder="" >
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group" id="orderDetailsDiv">
                                <label>SIZE: <span class="text-red">*</span></label>
                                <input type="text" class="form-control" id="inputSize" placeholder="" >
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group" id="orderDetailsDiv">
                                <label>seductive soap dish: <span class="text-red">*</span></label>
                                <input type="text" class="form-control"id="inputSeductive"  placeholder="" >
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group" id="orderDetailsDiv">
                                <label>RETAIL PRICE(MRP) : <span class="text-red">*</span></label>
                                <input type="text" class="form-control" id="inputRetailPrice" placeholder="" >
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group" id="orderDetailsDiv">
                                <label>Dealer Price before tax: <span class="text-red">*</span></label>
                                <input type="text" class="form-control" id="inputDealerPrice" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group" id="orderDetailsDiv">
                                <label>Dealer Price before tax: <span class="text-red">*</span></label>
                                <input type="text" class="form-control" id="inputDealerPrice" placeholder="" >
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group" id="orderDetailsDiv">
                                <label>Dealer Price before tax: <span class="text-red">*</span></label>
                                <input type="text" class="form-control" id="inputDealerPrice" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group" id="orderDetailsDiv">
                                <label>Latest GST %: <span class="text-red">*</span></label>
                                <input type="text" class="form-control" id="inputGST" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group" id="orderDetailsDiv">
                                <label>Old Barcode: <span class="text-red">*</span></label>
                                <input type="text" class="form-control" id="inputOldBarcode" placeholder="" >
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-12">
                            <div class="form-group" id="orderDetailsDiv">
                                <label>MATERIALS: <span class="text-red">*</span></label>
                                <input type="text" class="form-control" id="inputMaterials" placeholder="" >
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-12">
                            <div class="form-group" id="orderDetailsDiv">
                                <label>HSN CODE: <span class="text-red">*</span></label>
                                <input type="text" class="form-control" id="inputHSNCode" placeholder="">
                            </div>
                        </div>
                      
                        <!-- ****************** add update delete for services ******************* -->
                        <div class="col-md-2 col-sm-12">
                            <label>&nbsp;</label><br>                      
                            <button type="button" class="btn btn-primary">Clear</button>
                        
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <!-- ********************** add update delete for orders ********************* -->

        <div class="box-footer">
        <button type="button" class="btn btn-success btn-flat" ng-click="showSubmit()"> Submit </button>
            <input type="button" class="btn btn-flat btn-danger pull-right" ng-click="init()" value="Cancel">
        </div>
       
       

    </div>
   

    <!-- ************************ table of orders **************************** -->

    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Assigned Services List</h3>
        </div>
        <div class="box-body">

            <div class="row">
                <div class="col-md-12">

                  <div class="col-md-2">
                    <button type="button" class="btn btn-success btn-flat" ng-click="showAdd()"><i class="fa fa-plus"></i> Add New Item</button>
                </div>
                <div class="col-md-4">
                <button type="button" class="btn btn-primary btn-flat" ng-click="uploadFile()"><i class="fa fa-plus"></i> Import New Item</button>
                
                </div><div class="col-md-6">
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
                <th>Product Name</th>               
                <th>Catagory</th>                
                <th>In Stock</th>
                <th>Purchase Amount</th>
                <th>Retail Amount</th>
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
<script src="<?php echo base_url('assets/angular/angularjs/controller/addinventory.js'); ?>"></script>
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
