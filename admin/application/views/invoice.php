<div class="content-wrapper">
    <section class="content-header">
        <h1>
      Invoice
            <small>Manage Users</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo site_url('Dashboard');?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>            
            <li class="active"> Invoice</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content" style="min-height: 1000.8px;" ng-app="myApp" ng-controller="invoiceCtrl" ng-init="init()">

    <div class="box" ng-show="filters">
             <div class="box-header with-border">
                <h3 class="box-title" ng-show="!order_id">Apply Filters</h3>              
             </div> 
         <div class="box-body">  
           <div class="col-md-12" ng-show="showFilter">
                <div class="panel panel-default ">              
                    <div class="panel-body">    
                    <div class="col-md-2">
                        <label for="exampleInputEmail1">From</label>
                            <div class="input-group">                                                        
                            <input class="form-control" id="datepicker" type="text" name="from" value="" required>
                            </div>                    
                        </div>                 
                        <div class="col-md-2">
                           <label for="exampleInputEmail1">To</label>
                            <div class="input-group">                                                        
                            <input class="form-control" id="datepickerTo" type="text" name="to" value="" required>
                            </div>                    
                        </div>
                        <div class="col-md-2">
                            <label for="sel1">Customer</label>
                            <div class="col-md-12 input-group">
                                <select class="form-control select2" name="customer" id="customer">
                                    <option value="">All</option>
                                                <option value="1" >Aditya Roy</option>
                                                <option value="2" >John Smith</option>
                                                    
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <input type="button" class="btn btn-flat btn-success" ng-show="showAdd" value="Add" ng-click="add()">           
                <input type="button" class="btn btn-flat btn-default pull-right" ng-show="showCancel" ng-click="init()" value="Cancel"> 
            </div>
        </div>
    </div>


    <div class="box" ng-show="showUploadFile">
            <div class="box-header with-border">
                <h3 class="box-title" ng-show="!order_id">Upload File</h3>              
          </div>  
          <div class="box-body">  
           <div class="col-md-12" ng-show="showFile">
                <div class="panel panel-default ">              
                    <div class="panel-body">      <p style="color: black" >
               Your xlsx data should be in the format below. The first line of your xlsx file should be the column headers as in the table example.
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
                <h3 class="box-title" ng-show="!order_id">New Invoice</h3>
                <h3 class="box-title" ng-show="order_id">Update Invoice</h3>
                <p style="color: red" ng-show="order_id">
                </p>
          </div>

          <!-- ****************** input fields **************************** -->
    <div class="box-body">     
    
 
        <div class="col-md-12" ng-show="addUpdateUsers">
            <div class="col-md-12">
                <div class="panel panel-default ">
                    <div class="panel-body">
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group" id="selectedRoleDiv">
                                <label>Customer: <span class="text-red">*</label>
                                <select class="form-control" ng-model="selectedSector">
                                    <option value="">-- Select Customer --</span></option>
                                    <option>John Peter</option>
                                    <option>Hashi Mickel</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group" id="userNameDiv">
                                <label>Date:  <span class="text-red">*</label>
                                <input type="text" class="form-control" ng-model="inputUsername" id="inputDate" ng-pattern="/[aA-zZ\s]$/" required placeholder="" >
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group" id="userPasswordDiv">
                                <label>Reference: <span class="text-red">*</span></label>
                                <input type="text" class="form-control" ng-model="inputPassword" id="inputPassword" placeholder="" >
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group" id="userEmailDiv">
                                <label>Payment Method: <span class="text-red">*</span></label>
                                <select class="form-control">
                                    <option value="">-- Select Method --</span></option>
                                    <option  value="">Cash</option>
                                    <option value="">Credit</option>
                                    <option value="">Debit</option>
                                    <option  value="">NetBanking</option>
                                   
                                </select>
                            </div>
                        </div>    
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group" id="userEmailDiv">
                                <label>Address: <span class="text-red">*</span></label>
                                <input type="text" class="form-control"  ng-model="inputEmail" id="inputEmail"  ng-pattern="/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/" required placeholder="" >
                            </div>
                        </div>     
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group" id="userEmailDiv">
                                <label>Add Item: <span class="text-red">*</span></label>
                                <input type="text" class="form-control"  ng-model="inputEmail" id="inputEmail"  ng-pattern="/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/" required placeholder="" >
                            </div>
                        </div>                                                         
                    </div>
                </div>
            </div>
        
                    
                    
      
         <div>
         <button type="button" class="btn btn-success btn-flat" ng-click="showAddItem()">Add Custom Item</button>
         </div>   <br>
                              <!-- ****************** add update delete for services ******************* -->
        <table class="table table-bordered table-striped ">                                      
            <tr class="bg-gray">
            <th>Sr.No</th>       
                <th>Product Description</th>                           
                <th>HSN/ Code</th>
                <th>UOM</th>
                <th>Qty</th>
                <th>Rate</th>
                <th>Discount</th>
                <th>Tax(%)</th>
                <th>Tax</th>
                <th>Amount</th>
                <th colspan="2">Actions</th>
            </tr>      
            <tr><td>1</td>
           <td> <input type="text" class="form-control" ng-show="addItem" id="inputPassword" placeholder="" ></td>
           <td> <input type="text" class="form-control" ng-show="addItem" id="inputPassword" placeholder="" ></td>
           <td> <input type="text" class="form-control" ng-show="addItem" id="inputPassword" placeholder="" ></td>
           <td> <input type="text" class="form-control" ng-show="addItem" id="inputPassword" placeholder="" ></td>
           <td> <input type="text" class="form-control" ng-show="addItem" id="inputPassword" placeholder="" ></td>
           <td> <input type="text" class="form-control" ng-show="addItem" id="inputPassword" placeholder="" ></td>
           <td> <input type="text" class="form-control" ng-show="addItem" id="inputPassword" placeholder="" ></td>
           <td> Tax</td>
           <td> <input type="text" class="form-control" ng-show="addItem" id="inputPassword" placeholder="" ></td>
           </tr>
            <tr class="tableInfo"><td colspan="9" align="right"><strong>Sub Total</strong></td><td align="left" colspan="2"><input type="text" class="form-control" ng-show="addItem" id="inputPassword" placeholder="" ></td></tr>
                  <tr class="tableInfo"><td colspan="9" align="right"><strong>Total Tax</strong></td><td align="left" colspan="2"><input type="text" class="form-control" ng-show="addItem" id="inputPassword" placeholder="" ></td></tr>
                  <tr class="tableInfo"><td colspan="9" align="right"><strong>Grand Total</strong></td><td align="left" colspan="2"><input type='text' name="total" class="form-control" id = "grandTotal" readonly></td></tr>
     
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
        <div class="col-md-12">
              <div class="form-group">
                    <label for="exampleInputEmail1">Note</label>
                    <textarea placeholder="Description ..." rows="3" class="form-control" name="comments"></textarea>
                </div>
            
              </div>

            </div>
            <!-- ******************** table of services *************************** -->
     
         </div>

        <!-- ********************** add update delete for orders ********************* -->
        <div class="box-footer">
            <div class="col-md-8">
            </div>
            <div class="col-md-2">                          
            </div>
            <div class="col-md-2">
                <input type="button" class="btn btn-flat btn-danger pull-right" ng-click="init()" value="Cancel">
                <a href="<?php echo site_url('GenerateInvoice');?>"><input type="button" class="btn btn-flat btn-success" ng-show="!order_id"  value="Submit" ng-click="add()">
                </a>
          </div>
    </div>
    </div>

    <!-- ************************ table of orders **************************** -->
     
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Invoice List</h3>
        </div>
        <div class="box-body">

        <div class="row">
                <div class="col-md-12">

                  <div class="col-md-2">
                    <button type="button" class="btn btn-success btn-flat" ng-click="showAdd()"><i class="fa fa-plus"></i> Add New Item</button>
                </div>
                <div class="col-md-4">
                <button type="button" class="btn btn-primary btn-flat" ng-click="uploadFile()"><i class="fa fa-plus"></i> Import New Item</button>
                 </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search..." ng-model="inputSearch">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                <button type="button" class="btn btn-info btn-flat" ng-click="showFilters()"> Filter</button>
                 </div>
            </div>
        </div>

        <table class="table table-bordered table-striped">                                      
            <tr class="bg-gray">
                <th>Invoice#</th>
                <th>Customer Name</th>              
                     
                <th>Total Price</th>
                <th>Paid Amount</th>
                <th>Status</th>
                <th>Invoice Date</th>
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
    $( "#inputDate" ).datepicker();   
      
});
</script>
<!-- app.js -->
<script src="<?php echo base_url('assets/angular/angularjs/app.js'); ?>"></script>
<!-- app.js -->
<script src="<?php echo base_url('assets/angular/angularjs/controller/invoice.js'); ?>"></script>
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
