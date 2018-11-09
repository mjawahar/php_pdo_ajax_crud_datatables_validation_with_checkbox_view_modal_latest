<html>
	<head>
		<title>Webslesson Demo - PHP PDO Ajax CRUD with Data Tables and Bootstrap Modals</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>		
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<style>
			body
			{
				margin:0;
				padding:0;
				background-color:#f1f1f1;
			}
			.box
			{
				width:1270px;
				padding:20px;
				background-color:#fff;
				border:1px solid #ccc;
				border-radius:5px;
				margin-top:25px;
			}
		</style>
	</head>
	<body>
		<div class="container box">
			<h1 align="center">PHP PDO Ajax CRUD with Data Tables and Bootstrap Modals</h1>
			<br />
			<div class="table-responsive">
				<br />
				<div align="right">
					<button type="button" id="add_button" data-toggle="modal" data-target="#userModal" class="btn btn-info btn-lg">Add</button>
				</div>
				<br /><br />
				<table id="user_data" class="table table-bordered table-striped">
					<thead>
						<tr>
							
							<th width="10%">First Name</th>
							<th width="10%">DOB</th>
							<th width="10%">Age</th>
							<th width="10%">Address</th>
							<th width="10%">Email</th>
							<th width="10%">Gender</th>
							<th width="10%">Subjects</th>
							<th width="10%">Vehicle</th>
							<th width="10%">Total Marks</th>
							<th width="10%">Edit</th>
							<th width="10%">Delete</th>
							<th width="10%">View</th>
						</tr>
					</thead>
				</table>
				
			</div>
		</div>
	</body>
</html>

<div id="userModal" class="modal fade">
	<div class="modal-dialog">
		<form method="post" id="user_form" enctype="multipart/form-data">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Add User</h4>
				</div>
				<div class="modal-body">
					<label>Enter Name</label>
					<input type="text" name="Name" id="Name1" class="form-control" onblur="validate('Name',this.value)" />
					<span class="help-block" id="Name"></span>
					<br />
					<label>Enter DOB</label>
					<input type="date" name="DOB" id="DOB" class="form-control" />
					<br />	
					<label>Age</label>
					<input type="text" name="Age" id="Age" class="form-control" readonly />
					<br />
					<label>Enter Address</label>
					<textarea name="Address" rows="5" id="Address" class="form-control" ></textarea>
					<br />
					<label>Enter Email</label>
					<input type="email" name="Email" id="Email" class="form-control" />
					<br />
					<label>Enter Gender</label>
					<br />
<label class="radio-inline"><input type="radio" value="male" name="Gender" class="Gender">male</label>
<label class="radio-inline"><input type="radio"  value="female" name="Gender" class="Gender">female</label>
					<br />
					<label>Enter Subjects</label>
					<select class="form-control" name="Subjects[]" id="Subjects" size="4" multiple>
  <option value="tamil">tamil</option>
  <option value="english">english</option>
  <option value="maths">maths</option>
  <option value="science">science</option>
</select>

					<br />
					<label>enter ur vehicle</label>
					<br />
<label class="checkbox-inline"><input class="vehicle" type="checkbox" id="vehicle" name="vehicle[]" value="cycle">bi-cycle</label>
<label class="checkbox-inline"><input class="vehicle" type="checkbox" id="vehicle" name="vehicle[]" value="bike">bike</label>
<label class="checkbox-inline"><input class="vehicle" type="checkbox" id="vehicle" name="vehicle[]" value="car">car</label>
					<br />
					<label>Enter Total Marks</label>
					<input type="text" name="Marks" id="Marks" class="form-control" />
					<br />
					
				</div>
				<div class="modal-footer">
					<input type="hidden" name="user_id" id="user_id" />
					<input type="hidden" name="operation" id="operation" />
					<input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</form>
	</div>
</div>

<div id="userviewModal" class="modal fade">
	<div class="modal-dialog">
		<form method="post"  class="form-horizontal" enctype="multipart/form-data">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">View User</h4>
				</div>
				<div class="modal-body">
				<div class="form-group">
    <label class="control-label col-sm-3">Name:</label>
    <div class="col-sm-9">
      <p class="form-control-static" id="Namev"></p>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3">DOB:</label>
    <div class="col-sm-9">
      <p class="form-control-static" id="DOBv"></p>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3">Age:</label>
    <div class="col-sm-9">
      <p class="form-control-static" id="Agev"></p>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3">Address:</label>
    <div class="col-sm-9">
      <p class="form-control-static" id="Addressv"></p>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3">Email:</label>
    <div class="col-sm-9">
      <p class="form-control-static" id="Emailv"></p>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3">Gender:</label>
    <div class="col-sm-9">
      <p class="form-control-static" id="Genderv"></p>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3">Subjects:</label>
    <div class="col-sm-9">
      <p class="form-control-static" id="Subjectsv"></p>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3">vehicle:</label>
    <div class="col-sm-9">
      <p class="form-control-static" id="vehiclev"></p>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3">Total Marks:</label>
    <div class="col-sm-9">
      <p class="form-control-static" id="Marksv"></p>
    </div>
  </div>
					
					
					
					
					
					
					
					
					
				</div>
				<div class="modal-footer">
					<input type="hidden" name="user_id" id="user_idv" />
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</form>
	</div>
</div>

<script type="text/javascript" language="javascript" >
// AJAX code to check input field values when onblur event triggerd.
function validate(field, query) {
var xmlhttp;
if (window.XMLHttpRequest) { // for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp = new XMLHttpRequest();
} else { // for IE6, IE5
xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange = function() {
if (xmlhttp.readyState != 4 && xmlhttp.status == 200) {
document.getElementById(field).innerHTML = "Validating..";
} else if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
document.getElementById(field).innerHTML = xmlhttp.responseText;
} else {
document.getElementById(field).innerHTML = "Error Occurred. <a href='index.php'>Reload Or Try Again</a> the page.";
}
}
xmlhttp.open("GET", "validation.php?field=" + field + "&query=" + query, false);
xmlhttp.send();
}
$(document).ready(function(){
	$('#add_button').click(function(){
		$('#user_form')[0].reset();
		$('.modal-title').text("Add User");
		$('#action').val("Add");
		$('#operation').val("Add");
	});
	
	var dataTable = $('#user_data').DataTable({
		"processing":true,
		"serverSide":true,
		"order":[],
		"ajax":{
			url:"fetch.php",
			type:"POST"
		},
		"columnDefs":[
			{
				"targets":[0, 8, 9],
				"orderable":false,
			},
		],
		"lengthMenu": [[5, 25, 50, -1], [5, 25, 50, "All"]],

	});

	$(document).on('submit', '#user_form', function(event){
		event.preventDefault();
		var Name1 = $('#Name1').val();
		var DOB = $('#DOB').val();
		var Age = $('#Age').val();
		var Address = $('#Address').text();
		var Email = $('#Email').val();
		var Gender = $('.Gender').val();
		var Subjects = $('#Subjects').val();
		alert(Subjects);
		var myCheckboxes = new Array();
        $(".vehicle:checked").each(function() {
           myCheckboxes.push($(this).val());
        });
		alert(myCheckboxes);
		var Marks = $('#Marks').val();
		
		if(Name1 == '' || DOB == '')
		{
			alert("Both Fields are Required");
			
		}
		else
		{
			var Name1 = $('#Name').text();
			if(Name1=="Must be 3+ letters"){
				alert("Fill Valid Information");
			}
			else{
				$.ajax({
				url:"insert.php",
				method:'POST',
				data:new FormData(this),
				contentType:false,
				processData:false,
				success:function(data)
				{
					alert(data);
					$('#user_form')[0].reset();
					$('#userModal').modal('hide');
					dataTable.ajax.reload();
				}
			});
			}
		}
	});
	
	$(document).on('click', '.update', function(){
		var user_id = $(this).attr("id");
		$.ajax({
			url:"fetch_single.php",
			method:"POST",
			data:{user_id:user_id},
			dataType:"json",
			success:function(data)
			{
				$('#userModal').modal('show');
				$('#Name1').val(data.Name);
				$('#DOB').val(data.DOB);
				$('#Age').val(data.Age);
				$('#Address').text(data.Address);
				$('#Email').val(data.Email);
				if(data.Gender !=''){
					$('.Gender[value="'+data.Gender+'"]').prop("checked",true);
				}
				
				
				var values=data.Subjects;
				$.each(values.split(","), function(i,e){
				$('#Subjects option[value="'+e+'"]').prop("selected",true);
				});
				alert(data.Subjects);
				var vehicle=data.vehicle;
				$.each(vehicle.split(","), function(i,e){
				$('.vehicle[value="'+e+'"]').prop("checked",true);
				});
				$('#Marks').val(data.Marks);
				$('#user_id').val(user_id);
				$('#action').val("Edit");
				$('#operation').val("Edit");
			}
		})
	});
	
	$(document).on('click', '.view', function(){
		var user_id = $(this).attr("id");
		$.ajax({
			url:"fetch_single.php",
			method:"POST",
			data:{user_id:user_id},
			dataType:"json",
			success:function(data)
			{
				$('#userviewModal').modal('show');
				$('#Namev').text(data.Name);
				$('#DOBv').text(data.DOB);
				$('#Agev').text(data.Age);
				$('#Addressv').text(data.Address);
				$('#Emailv').text(data.Email);
				$('#Genderv').text(data.Gender);
				
				$('#Subjectsv').text(data.Subjects);
				$('#vehiclev').text(data.vehicle);
				
				$('#Marksv').text(data.Marks);
				$('#user_idv').val(user_id);
			}
		})
	});
	
	$(document).on('click', '.delete', function(){
		var user_id = $(this).attr("id");
		if(confirm("Are you sure you want to delete this?"))
		{
			$.ajax({
				url:"delete.php",
				method:"POST",
				data:{user_id:user_id},
				success:function(data)
				{
					alert(data);
					dataTable.ajax.reload();
				}
			});
		}
		else
		{
			return false;	
		}
	});
	
	
});
</script>
<script>
$(document).ready(function(){
$("#DOB").change(function(){
	var birth=$("#DOB").val();
	if(birth != ''){
	var birthdate=new Date(birth);	
    var today = new Date();
    var dayDiff = Math.ceil(today - birthdate) / (1000 * 60 * 60 * 24 * 365);
    var age = parseInt(dayDiff);
    $('#Age').val(age);
}
});
});

</script>