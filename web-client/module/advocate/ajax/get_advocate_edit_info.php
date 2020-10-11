<?php
include_once('../../../../db/db_config.php');
$ob=new DBConnection();
$editid=$_POST['editid'];
$sql_info="SELECT * FROM `wakeel_info` WHERE `wi_id`=$editid";
$result_info=mysqli_query($ob->makeconn(),$sql_info);
$row_info=mysqli_fetch_assoc($result_info);
?>
<div class="form-group">
	<div class="row">
		<div class="col-md-3">
			<input type="hidden" name="editid" id="editid" value="<?php echo $editid; ?>">
			<p>UserName: </p>
		</div>
		<div class="col-md-9">
			<input type="text" name="username" id="username" class="form-control" placeholder="User Name" required="required" value="<?php echo $row_info['wi_username']; ?>">
		</div>
	</div>
</div><!-- form-group -->
<div class="form-group">
	<div class="row">
		<div class="col-md-3">
			<p>Password: </p>
		</div>
		<div class="col-md-9">
			<input type="password" name="password" id="password" class="form-control" placeholder="Password" required="required" value="<?php echo $row_info['wi_password']; ?>">
			<span>Show Password: </span>
			<input type="checkbox" name="show_pass" id="show_pass">
		</div>
	</div>
</div><!-- form-group -->
<div class="form-group">
	<div class="row">
		<div class="col-md-3">
			<p>Mobile 1: </p>
		</div>
		<div class="col-md-9">
			<input type="text" name="mob1" id="mob1" class="form-control" placeholder="Mobile 1" required="required" value="<?php echo $row_info['wi_mob1']; ?>">
		</div>
	</div>
</div><!-- form-group -->
<div class="form-group">
	<div class="row">
		<div class="col-md-3">
			<p>Mobile 2: </p>
		</div>
		<div class="col-md-9">
			<input type="text" name="mob2" id="mob2" class="form-control" placeholder="Mobile 2" required="required" value="<?php echo $row_info['wi_mob2']; ?>">
		</div>
	</div>
</div><!-- form-group -->
<div class="form-group">
	<div class="row">
		<div class="col-md-3">
			<p>Nationality: </p>
		</div>
		<div class="col-md-9">
			<select name="nationality_id" id="nationality_id" class="form-control select2" required="required">
			<?php
               $sql_countries="SELECT * FROM `apps_countries` ORDER BY `country_name` ASC";
               $result_countries=mysqli_query($ob->makeconn(),$sql_countries);
               while($row_coutries=mysqli_fetch_assoc($result_countries))
               {
                ?>
                <option value="<?php echo $row_coutries['id']; ?>" <?php
                if($row_info['wi_nationality_id']==$row_coutries['id'])
                echo "selected='selected'";  
                ?> ><?php echo $row_coutries['country_name']; ?></option>
                <?php
               }
            ?>
			</select>
		</div>
	</div>
</div><!-- form-group -->
<div class="form-group">
	<div class="row">
		<div class="col-md-3">
			<p>Amount: </p>
		</div>
		<div class="col-md-9">
			<input type="text" name="amount" id="amount" class="form-control" placeholder="Amount" required="required" value="<?php echo $row_info['wi_amount']; ?>" min="1">
		</div>
	</div>
</div><!-- form-group -->
<div class="form-group">
	<div class="row">
		<div class="col-md-3">
			<p>Installments: </p>
		</div>
		<div class="col-md-9">
			<input type="number" name="installments" id="installments" class="form-control" placeholder="Installments" required="required" value="<?php echo $row_info['wi_installment']; ?>" min="1">
		</div>
	</div>
</div><!-- form-group -->
<div class="form-group">
	<div class="row">
		<div class="col-md-3">
			<p>Remaining Amount: </p>
		</div>
		<div class="col-md-9">
			<input type="text" name="remaining_amount" id="remaining_amount" class="form-control" placeholder="Installments" required="required" value="<?php echo $row_info['wi_remaining_amount']; ?>" min="1">
		</div>
	</div>
</div><!-- form-group -->
<div class="form-group">
	<div class="row">
		<div class="col-md-3">
			<p>Starting Date: </p>
		</div>
		<div class="col-md-9">
			<input type="date" name="starting_date" id="starting_date" class="form-control" placeholder="Starting Date" required="required" value="<?php echo $row_info['wi_starting_date']; ?>">
		</div>
	</div>
</div><!-- form-group -->
<div class="form-group">
	<div class="row">
		<div class="col-md-3">
			<p>Expire Date: </p>
		</div>
		<div class="col-md-9">
			<input type="date" name="expire_date" id="expire_date" class="form-control" placeholder="Expire Date" required="required" value="<?php echo $row_info['wi_expire_date']; ?>">
		</div>
	</div>
</div><!-- form-group -->
<script type="text/javascript">
	function setInputFilter(textbox, inputFilter) {
  ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
    textbox.addEventListener(event, function() {
      if (inputFilter(this.value)) {
        this.oldValue = this.value;
        this.oldSelectionStart = this.selectionStart;
        this.oldSelectionEnd = this.selectionEnd;
      } else if (this.hasOwnProperty("oldValue")) {
        this.value = this.oldValue;
        this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
      }
    });
  });
}
//
setInputFilter(document.getElementById("amount"), function(value) {
  return /^-?\d*[.,]?\d*$/.test(value); });
setInputFilter(document.getElementById("remaining_amount"), function(value) {
  return /^-?\d*[.,]?\d*$/.test(value); });
//
 $(document).ready(function(){
    $('#show_pass').click(function(){
    //alert($(this).is(':checked'));
    $(this).is(':checked') ? $('#password').attr('type', 'text') : $('#password').attr('type', 'password');
            });
});
</script>
<script type="text/javascript">
 $('#mob1').mask('9999-9999999');
 $('#mob2').mask('9999-9999999');	
</script>