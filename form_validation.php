<?php   include"header.php" ?>
</header>

 <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/jquery.dd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
<style type="text/css">
	
	label
	{
		padding: 10px;
	}
</style>

<script type="text/javascript">
	$(document).ready(function()
	{
		$("#submit").click(function()
		{
			var name = $("#name").val();
			var email = $("#email").val();
			var gender = $("input[name=gender]:checked").val();
			var phone = $("#phone").val();
			var select = $("#select").val();
			var agreement = $("#agreement").val();
			// alert(gender);

			var datastring ='uname='+name+'&email='+'&gender='+gender+'&contact='+phone+'&select='+select+'&agreement='+agreement;
			if (name==''||email=='')
			{
				alert('required');
			}
		});
	});
</script>

<div class="container subclass">
	<label>Name</label>
	<input type="text" name="name" id="name"><br>
	<label>Email</label>
	<input type="email" name="email" id="email"><br>
	<label>gender</label>
	<input type="radio" name="gender" value="male" id="male">Male
	<input type="radio" name="gender" value="female" id="female">Female<br>

	<label>Phone</label>
	<input type="text" name="phone" id="phone"><br>
	<label>Comment</label>
	<textarea></textarea><br>
	<label>Select</label>
	<select id="select">
		<option>balod</option>
		<option>kgh</option>
		<option>durg</option>
	</select><br>
	<label>Agreement</label>
	<input type="checkbox" name="Agreement" id="agreement"><br>
	<input type="submit" name="sub-btn" id="submit" class="btn btn-success">
</div>
<?php   include"footer.php" ?>
