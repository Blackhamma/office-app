<!--update form modal-->
<div class="modal fade" id="updateForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Form</h4>
      </div>
      <div class="modal-body">
        <form action="#" method="post">
        	<div class="row">
        		<div class="col-md-6">
		        	<div class="form-group">
		        		<label for="num">NUMBER</label>
		        		<input type="text" name="num" id="num" class="form-control" placeholder="NUMBER" required="required">
		        	</div>
		        	<div class="form-group">
		        		<label for="date">DATE</label>
		        		<input type="date" name="created" id="created" class="form-control" required="required">
		        	</div>
		        	<div class="form-group">
		        		<label for="slr">SERIAL NUMBER</label>
		        		<input type="text" name="srl" id="srl" class="form-control" required="required">
		        	</div>
		        	<div class="form-group">
		        		<label for="authorized">AUTHORIZED BY</label>
		        		<input type="text" name="authorized" id="authorized" class="form-control" placeholder="Authorized by" required="required">
		        	</div>
		        	<div class="form-group">
		        		<label for="prob">PROBLEM</label>
		        		<textarea cols="4" rows="4" class="form-control" required="required" name="prob" id="prob"></textarea>
		        	</div>
		        </div>
		        <div class="col-md-6">
		        	<div class="form-group">
		        		<div class="row">
		        			<div class="col-md-6">
				        		<label for="div">DIVISION</label>
				        		<select class="form-control" name="div" id="div">
				        			<option value="PVLMD">PVLMD</option>
				        			<option value="LVD">LVD</option>
				        			<option value="SMD">SMD</option>
				        			<option value="LRD">LRD</option>
				        		</select>
				        	</div>
				        	<div class="col-md-6">
				        		<label for="office">OFFICE</label>
				        		<input type="text" name="office" id="office" class="form-control" placeholder="OFFICE" required="required">
				        	</div>
				        </div>
		        	</div>
		        	<div class="form-group">
		        		<label for="decrip">DESCRIPTION</label>
		        		<select class="form-control" name="descrip" id="descrip">
		        			<option value="System Unit">System Unit</option>
		        			<option value="Monitor">Monitor</option>
		        			<option value="Printer">Printer</option>
		        			<option value="Keyboard">Keyboard</option>
		        			<option value="UPS">UPS</option>
		        			<option value="Others">Others</option>
		        		</select>
		        	</div>
		        	<div class="form-group">
		        		<label for="uid">USER</label>
		        		<input type="text" name="useruid" id="useruid" class="form-control" placeholder="User's Name" required="required">
		        	</div>
		        	<div class="form-group">
		        		<label for="Officer">IT OFFICER</label>
		        		<input type="text" name="officer" id="officer" class="form-control" placeholder="JONA" required="required">
		        	</div>
		        	<div class="form-group">
		        		<label for="diag">DIAGONOSIS</label>
		        		<textarea cols="4" rows="4" class="form-control" id="diag" name="diag" required="required"></textarea>
		        	</div>
		    	</div>
		    </div>
        	<div class="modal-footer">
        		<button type="submit" name="printUpdateFormBtn" class="btn btn-primary">Print</button>
        		<input type="hidden" name="formId" id="formId">
        		<button type="submit" name="updateFormBtn" class="btn btn-success">Save</button>
      		</div>
      	</form>
      </div>
    </div>
  </div>
</div><!--End update form modal-->