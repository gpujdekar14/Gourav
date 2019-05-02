
<div class="modal fade" id="myModalGST" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document" style="width: 897px;">
		<div class="modal-content">
			<!-- <div class="modal-header">           -->
            <!-- 
            <div class="row">
            	  <div class="col-md-12">
            	  	  <div class=" " style="text-align: center;">
			              <img src="<?php echo base_url('assets/img/logo.jpg');?>">            
			           </div>
            	  </div>
            	</div> -->
            	<!-- </div> -->

            	<div class="modal-body" id="modalsaveGst">
            		<style type="text/css">
            			.table_name {border-collapse: collapse;}
            			.tablegst{border-bottom: 1px solid #000000; font-size: 13px; border-left:1px solid #000000; padding-left: 5px;}
            			#company div{font-size: 13px;}
            			.padding{padding: 5px;}
            			#buyer div{font-size: 13px;}
            			.width{width: 50%;height: 45px;}
            			#eoe{width: 6%;}
            			#addrs{margin-left: 20px;font-weight: bold;}
            		</style>
            		<div class="row">
            			<div class="col-md-12">
            				<div class=" " style="text-align: center;">
            					<img src="<?php echo base_url('assets/img/logo.jpg');?>" style="width: 100%;">            
            				</div>
            			</div>
            		</div>

            		<div class="row">
            			<div class="col-md-12">
            				<h4 class="text-center" ng-if="radioInvType!='final'" id="taxinvoicegst" style="text-align: center;">Tax Invoice</h4>
            				<!-- <h4 class="text-center" ng-if="radioInvType=='final'">Invoice for IP Service</h4> -->
            			</div>
            			<!-- <hr class="hr-primary" /> -->
            		</div>
            		<div style="border:1px solid #000000;margin-top: 1em;">
            			<div  class="row" id="myrow"> 
            				<div class="col-md-12">

            					<table style="margin-bottom: -1px;width: 100%; border-collapse: collapse;">

            						<tr>
            							<td id="company" style="padding:2px 3px 1em;margin-left: 0;">
            								<div style="margin-top: 13px;margin-bottom: 5px;"> <b>{{company_name}}</b> </div>

            								<table style="font-size: 13px;">
            									<tr>
            										<td><b>GSTIN/UIN</b></td> <td><b>:</td> <td>{{companyGSTIN}}</td>
            									</tr>
            									<tr>
            										<td><b>GST No.</b></td> <td><b>:</b></td> <td>{{companyGSTNumber}}</td>
            									</tr>
            									<tr>
            										<td><b>State Name</b></td> <td><b>:</b></td> <td>{{companyStateName}}</td>
            									</tr>
            									<tr>
            										<td><b>Code</b></td> <td><b>:</b></td> <td>{{companyCode}}</td>
            									</tr>
            								</table>
            							</td>
            							<td style="padding:0px !important; vertical-align: top;">

            								<table class="table_name" style="width: 100%;margin-bottom: -1px;margin-top: -1px;">
            									<tr>
            										<td class="tablegst width" style="padding-left: 5px;">Invoice No: <br><b style="font-size:12px;">{{invoice_next_number}}</b> </td>

            										<td class="tablegst width" style="padding-left: 5px;">Dated: <br><b style="font-size:12px;">{{current_date}} </b></td>
            									</tr>

            									<tr>
            										<td class="tablegst width" style="padding-left: 5px;">Delivery Note: <br> {{companyDeliveryNote}}</td>
            										<td class="tablegst width" style="padding-left: 5px;">Mode/Terms of Payment: {{companyPaymentMode}} </td>
            									</tr>

            									<tr>
            										<td class="tablegst width" style="padding-left: 5px;">Supplier's Reference:<br> {{supplierReference}} </td>
            										<td class="tablegst width" style="padding-left: 5px;">Other Reference(s):<br> {{otherReferences}}</td>
            									</tr>


            								</table>
            							</td>
            						</tr>

            						<tr> 
            							<td id="buyer" style="border-top:1px solid #000000;border-bottom:1px solid #000000; padding:0px 3px 3em;"> 
            								<div style="margin-top: 13px;margin-bottom: 5px;"><b>BUYER </b></div>

            								<table style="font-size: 13px;">
            									<tr>
            										<td><b>Name</b></td> <td><b>:</td> <td>{{selectedApplicantName}}</td>
            									</tr>
            									<tr>
            										<td><b>Address</b></td> <td><b>:</b></td> <td>{{inputApplicantAddress}}</td>
            									</tr>
            									<tr>
            										<td><b>Email-Id</b></td> <td><b>:</b></td> <td>{{inputApplicantEmail}}</td>
            									</tr>
            									<tr>
            										<td><b>GST No.</b></td> <td><b>:</b></td> <td>{{inputApplicantGSTIN}}</td>
            									</tr>
            								</table>
            							</td>
            							<td style="padding:0px !important; vertical-align: top;">
            								<table class="table_name" style="width: 100%;">
            									<tr>
            										<td class="tablegst width">Buyer's Order No: <br>{{buyersOrderNo}}</td>
            										<td class="tablegst width">Dated: <br>{{buyersDated}} </td>
            									</tr>
            									<tr>
            										<td class="tablegst width">Dispatch Document No.: {{buyersDispatchDoc}}</td>
            										<td class="tablegst width">Delivery Note: <br> {{buyersDeliveryNote}}</td>
            									</tr>
            									<tr>
            										<td class="tablegst width">Dispatched Through: <br>{{buyersDispatchedThrough}} </td>
            										<td class="tablegst width">Destination: <br>{{buyersDestination}}</td>
            									</tr>

            									<tr style="margin-bottom: -1px;">
            										<td class="tablegst width" colspan="2">Terms of Delivery: <br>{{termsOfDelivery}} </td>

            									</tr>
            								</table>


            							</td>
            						</tr>


            					</table>