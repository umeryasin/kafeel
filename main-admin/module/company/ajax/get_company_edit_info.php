<?php
include_once('../../../../db/db_config.php');
$ob=new DBConnection();
$editid=$_POST['editid'];
$sql_info="SELECT * FROM `companies` WHERE `company_id`=$editid";
$result_info=mysqli_query($ob->makeconn(),$sql_info);
$row_info=mysqli_fetch_assoc($result_info);
?>
<div class="form-group">
	<div class="row">
		<div class="col-md-3">
			<input type="hidden" name="editid" id="editid" value="<?php echo $editid; ?>">
			<p>Company Name: </p>
		</div>
		<div class="col-md-9">
			<input type="text" name="company_name" id="company_name" class="form-control" placeholder="Company Name" required="required" value="<?php echo $row_info['company_name']; ?>">
		</div>
	</div>
</div><!-- form-group -->