<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 
<?php include('password_protect.php'); ?>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	 .highlight{
  background-color:#a6b4cd !important;
  }
	.eHidden{
    display:none;
  }
	</style>


</head>
<body>

<div id="container">
	<h1>Sellers</h1>

	<div class="center">
		<center>
			<?php if(!empty($error)) { ?>
				<span class="alert alert-danger"><?php echo $error; ?></span>	
			<?php } ?>
			<?php if(!empty($success)) { ?>
				<span class="alert alert-success"><?php echo $success; ?></span>	
			<?php } ?>
		<form action="" method="post" class="form-inline">
			<h4 class="modal-title" id="myModalLabel">Add Seller</h4>

                <div class="form-group">
                  <label for="exampleInputEmail1">Seller UserName</label>
                  <input type="text" class="form-control" name="name" required>
                </div>
               
                <div class="form-group">
                  <label for="exampleInputPassword1">Status</label>
                  <select name="status">
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                  </select>
                </div>

                  <div class="form-group">
                  	       <button class="btn btn-primary" type="submit">Add</button>

                  </div>
        </form>
        </center>

	</div>

	<div id="body">
		<table id="example" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Seller</th>
                  <th>Status</th>
                </tr>
                </thead>
              
              </table>
	</div>


</div>


</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

 <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

 <script type="text/javascript">
 	
 	$(document).ready(function(){

 		setInterval(function(){ $('.alert').hide(); }, 2000);


 		//alert('');
 		 $('#example').DataTable({       
		  stateSave: true,
		  "ajax": '<?php echo base_url();?>seller/get_list/'  
		  });
		$("#example tbody").on('click','tr',function(event) {
		    /* find "selected" class and remove class */                                       
		    $('#example tr.highlight').removeClass('highlight');
		    /* "this" is current row*/
		    $(this).addClass('highlight');
		  // $(".eHidden").show();
		  // $('#eOptions').val('0');
		});

	$("#example_filter.dataTables_filter").html('<label class="eHidden">Options:&nbsp;<select id="eOptions"></select></label>&nbsp;&nbsp;&nbsp;' + $("#example_filter.dataTables_filter").html());
	  //Fill Options Box
	  $('#eOptions').append($('<option>', {value:0, text:''}));
	  $('#eOptions').append($('<option>', {value:1, text:'Edit Seller'}));
 	});



 	 $('#eOptions').change(function () {
    var id = $('tr.highlight').children('td:first').text();
    switch($(this).val())
    {
      case "1": // Edit Customer  
            //Ajax Call for this Customer
              $.get( "<?php echo base_url();?>admin/ajax_get_seller/" + id, function(data) {
                  data = jQuery.parseJSON(data);
                  if (data.success)
                  {
                    $('#edit_name').val(data.sellerName);
                    $('#edit_status').val(data.staus);
                 
                  }
                  else
                  {
                    alert('Seller Not Found');
                    location.reload();
                  }
              })
            $('#myModal2').modal('show'); 
            break;
     
      
    }
      $('#eOptions').val('0')

  });
 </script>
</html>