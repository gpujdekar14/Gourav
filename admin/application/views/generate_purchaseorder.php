

<div class="content-wrapper">
    <section class="content-header">
        <h1>
        Master Settings
            <small>Manage Department</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo site_url('Dashboard');?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>            
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
          <div class="col-md-12">
        
</a> </div>
          <!-- ****************** input fields **************************** -->
          <div class="box-body">      
            <div class="col-md-12" ng-show="addUpdateUsers">
                <div class="panel panel-default ">  <a href="<?php echo site_url('PurchaseOrders');?>">  <button type="button" class="btn btn-success btn-flat" ng-click="showAdd()"><i class="fa fa-plus"></i> Add New Invoice</button>
                    <div class="panel-body">
                    <div class="btn-group">
                     <div class="btn-paid">Paid</div>
                                                     
                  </div>
                    <div class="btn-group pull-right">
                      <button title="Email" type="button" class="btn btn-default btn-flat" data-toggle="modal" data-target="#emailInvoice">Email</button>
                      <a target="_blank" href="http://gst.techvill.net/invoice/print/48/49" title="Print" class="btn btn-default btn-flat">Print</a>
                      <a target="_blank" href="http://gst.techvill.net/invoice/pdf/48/49" title="PDF" class="btn btn-default btn-flat">PDF</a>
                      
                     
                      <a href="http://gst.techvill.net/sales/edit/49" title="Edit" class="btn btn-default btn-flat">Edit</a>
                     
                     
                      <a href="http://gst.techvill.net/invoice/delete-invoice/49" class="btn btn-default btn-flat delete-btn delete_data" type="button">
                            Delete
                      </a>
                      <button title="Pay Now" type="button" class="btn btn-default btn-flat success-btn" data-toggle="modal" data-target="#payModal">Pay Now</button>
                                            
                    </div>
                      <br>
             <div class="box-body">
              <div class="row">
                
                  <div class="col-md-4">
                    <strong>gsg</strong>
                    <h5><strong>GSTIN :</strong>&nbsp;-</h5>
                    <h5 class="">RT-90, KL, Malayisa</h5>
                    <h5 class="">KL, </h5>
                    <h5 class="">India, 54333</h5>
                  </div>

                  <div class="col-md-4">
                  <strong>Bill To</strong>
                  <h5><strong>GSTIN :</strong>&nbsp;gstin01245</h5>
                  <h5>Aditya Roy</h5>
                  <h5>Agartala </h5>
                  <h5>Assam, Tripura</h5>
                  <h5>IN , Guwahati</h5>
                  </div>

                <div class="col-md-4">
                  <strong>Invoice No # INV-0012</strong>
                  <h5>Location : Primary Location</h5>
                  <h5>Invoice Date : 25-04-2019</h5>
                  <h5>Due Date : 25-04-2019</h5>
                </div>

              </div>
             
              <div class="row">
                <div class="col-md-12">
                  <div class="box-body no-padding">
                    <div class="table-responsive">
                    <table class="table table-bordered" id="salesInvoice">
                      <tbody>
                      <tr class="tbl_header_color dynamicRows">
                        <th width="30%" class="text-center">Description</th>
                        <th width="10%" class="text-center">HSN/SAC</th>
                        <th width="10%" class="text-center">Quantity</th>
                        <th width="10%" class="text-center">Rate(₹)</th>
                                                  <th width="10%" class="text-center">IGST(%)</th>
                                                  <th class="text-center" width="10%">Discount(%)</th>
                        <th width="10%" class="text-center">Amount(₹)</th>
                      </tr>
                                                                                                                                                 <tr>
                              <td class="text-center">CCTV camera</td>
                              <td class="text-center">SS</td>
                              <td class="text-center">1</td>
                              <td class="text-center">200.00</td>
                                                            <td class="text-center">6.00</td>
                                                            <td class="text-center">0.00</td>
                                                            <td align="right">200.00</td>
                            </tr>
                                                                            <tr class="tableInfos"><td colspan="6" align="right">Total Quantity</td><td align="right" colspan="2">1</td></tr>
                      <tr class="tableInfos"><td colspan="6" align="right">Sub Total</td><td align="right" colspan="2">₹200.00</td></tr>


                      <tr><td colspan="6" align="right">Tax</td><td colspan="2" class="text-right">₹12.00</td></tr>


                      <tr class="tableInfos"><td colspan="6" align="right"><strong>Grand Total</strong></td><td colspan="2" class="text-right"><strong>₹212.00</strong></td></tr>
                      <tr class="tableInfos"><td colspan="6" align="right">Paid</td><td colspan="2" class="text-right"> ₹212.00</td></tr>
                      <tr class="tableInfos"><td colspan="6" align="right"><strong>Due</strong></td><td colspan="2" class="text-right"><strong>
                                                ₹0.00
                                              </strong></td></tr>
                                            </tbody>
                    </table>
                    </div>
                    <br><br>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>             


      <div class="modal fade" id="payModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">New Payment</h4>
        </div>
        <div class="modal-body">
        <form class="form-horizontal" id="payForm" action="http://gst.techvill.net/payment/save" method="POST">
          <input type="hidden" value="bwRGSz6YEKt1Zlx4Uc35Kw1koald8t1QDm14Y34X" name="_token" id="token">
          <input type="hidden" name="invoice_reference" value="INV-0011">
          <input type="hidden" name="order_reference" value="SO-0020">
          <input type="hidden" name="customer_id" value="1">

          <input type="hidden" name="order_no" value="37">
          <input type="hidden" name="invoice_no" value="47">
          
          
          <div class="form-group">
            <label class="col-sm-3 control-label require" for="inputEmail3">Account</label>
            <div class="col-sm-6">
               <select style="width:100%" class="form-control select2" name="account_no" id="account_no">
                <option value="">Select One</option>
                                  <option value="1" >Shafique</option>
                                  <option value="2" >Shafique3</option>
                                  <option value="3" >Shafique2</option>
                                </select>
            </div>
          </div>

          <div class="form-group">
            <label for="payment_type_id" class="col-sm-3 control-label require">Payment Type </label>
            <div class="col-sm-6">
              <select style="width:100%" class="form-control select2" name="payment_type_id" id="payment_type_id">
                                <option value="1"  >Paypal</option>
                                <option value="2" selected="selected"  >Bank</option>
                              </select>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label require" for="inputEmail3">Category</label>
            <div class="col-sm-6">
               <select style="width:100%" class="form-control select2" name="category_id" id="category_id">
                <option value="">Select One</option>
                                  <option value="1" >Sales</option>
                                  <option value="2" >Sallery</option>
                                </select>
            </div>
          </div>


          <div class="form-group">
            <label for="amount" class="col-sm-3 control-label require">Amount  </label>
            <div class="col-sm-6">
              <input type="number" name="amount" value="114.01" class="form-control" id="amount" placeholder="Amount">
            </div>
          </div>
          <div class="form-group">
            <label for="payment_date" class="col-sm-3 control-label require">Date  </label>
            <div class="col-sm-6">
              <input type="text" name="payment_date" class="form-control" id="payment_date" placeholder="message.invoice.paid_on">
            </div>
          </div>

          <div class="form-group">
            <label for="reference" class="col-sm-3 control-label require">Description </label>
            <div class="col-sm-6">
              <input type="text" name="description" class="form-control" id="description" placeholder="Description" value="Payment for INV-0011" readonly>
            </div>
          </div>

         

          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
              <button type="submit" class="btn btn-primary btn-flat">Pay Now</button>
            </div>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>



      
                        <!-- ****************** add update delete for services ******************* -->

                
        <!-- ********************** add update delete for orders ********************* -->

        <div class="box-footer">        
           
          
        </div> 

    </div>

    <!-- ************************ table of orders **************************** -->

   

</section>



</div>  


<!-- app.js -->
<script src="<?php echo base_url('assets/angular/angularjs/app.js'); ?>"></script>
<!-- app.js -->

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

















