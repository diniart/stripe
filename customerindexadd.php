<form action="createcustomer.php" method="post" class="form-horizontal">
	
	<div class="form-group">
		<label class="control-label col-md-3">E-mail        </label>
		<input type="text" size="29" name="email" />
	</div>
    <div class="form-group">
		<label class="control-label col-md-3">Description   </label>
		<input type="text" size="77" name="description" />
	</div>
	<button type="submit" name="btnsubmit2" class="btn btn-primary">Save</button>
    
    <input type="button" value="Delete" onclick="window.location.href='http://localhost/stripegateway/customerindexdel.php'" />
    <input type="button" value="Edit" onclick="window.location.href='http://localhost/stripegateway/customerindexedit.php'" />
</form>