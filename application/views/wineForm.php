<!DOCTYPE html>
<html lang="en">
 <head>
    <script src="jquery-3.2.1.min.js"></script>
    <script src="sorttable.js"></script>
    <link rel="stylesheet" type="text/css" href="test.css">
  <meta charset="utf-8">
  <title><?php foreach ($products as $key){ echo $key->prodName;}?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body> 
 <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header ">
        <div class="collapse navbar-collapse " id="myNavbar">
         
            <ul id="navigation" class="nav navbar-nav">
              <li class="active"><a href="<?php echo site_url('welcome/index') ?>">WineList</a></li>
               <li><a href="<?php echo site_url('welcome/supplierList')?>">Suppliers</a></li>
              <li><a href="<?php echo site_url('welcome/regionList')?>">Regions</a></li>
            </ul>
        </div>
      </div>
    </div>
  </nav> 
    <br><br>
<div class="container">
	<h2>New Wine</h2>
	<form method="post" action="<?php echo site_url('welcome/createWine')?>">
		<div class="form-group">
			<input type="text"  name="productNumber" placeholder="Product Number">
		</div>
		<div class="form-group">
			<input type="text"  name="productName" placeholder="Product Name">
		</div>
		<div class="form-group">
			<input type="date" name="dateBought" placeholder="Date Bought">
		</div>
		<select name="color" id="colorpicker">
		     <?php  
                foreach ($colors as $row)  
             	{ 
             ?>
			    <option value="<?php echo $row->colprodID;?>"><?php echo $row->colprodDesc;?></option>
		    <?php
		     	}  
            ?> 
        </select>
		<button type="submit" class="btn btn-default">Submit</button>
	</form>	
</div>

</body>
</html>
