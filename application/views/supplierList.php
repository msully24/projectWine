<!DOCTYPE html>
<html lang="en">
 <head>
    <script src="jquery-3.2.1.min.js"></script>
    <script src="sorttable.js"></script>
    <link rel="stylesheet" type="text/css" href="test.css">
  <meta charset="utf-8">
  <title>Supplier List </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 </head>
 <body> 
 <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header ">
        <div class="collapse navbar-collapse " id="myNavbar">
         
            <ul id="navigation" class="nav navbar-nav">
              <li><a href="<?php echo site_url('welcome/index') ?>">WineList</a></li>
              <li class="active"><a href="<?php echo site_url('welcome/supplierList')?>">Suppliers</a></li>
              <li><a href="<?php echo site_url('welcome/regionList')?>">Regions</a></li>
            </ul>
        </div>
      </div>
    </div>
  </nav> 
    <br><br>
        <div class="container">
            <div class="row">
             <div class="col-md-12 text-center"><h1>Supplier List</h1></div>
    <br>
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                    <form action="groupBySite.php">
                        <button class="btn btn-info">Organize by Site</button>
                    </form>
                    <form action="groupByDate.php">
                        <button class="btn btn-info">Organize by Date</button>
                        </form>
                    </div>
                </div>
            </div>
                <br>

            <!-- display each row of DB in table -->
            <table id="sortedtable" class="table table-bordered sortable">
                <thead>
                        <tr>
                            <th>Name</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Postal Code</th>
                            <th>Country</th>
                            <th>Contact</th>
                            <th>Telephone</th>
                            <th>Email</th>
                            <th>URL</th>
                            <th>Active</th>  
                        </tr>
                </thead>
                <tbody>
                <?php  
                  foreach ($suppliers as $row)  
                  {  
                     ?><tr>  
                     <td><?php echo $row->suppName;?></td>  
                     <td><?php echo $row->suppAddr1;?></td>
                     <td><?php echo $row->suppCity;?></td>
                     <td><?php echo $row->suppPostalCode;?></td>  
                     <td><?php echo $row->CountryName;?></td>
                     <td><?php echo $row->suppContact;?></td>
                     <td><?php echo $row->suppTel;?></td>  
                     <td><?php echo $row->suppEmail;?></td>
                     <td><?php echo $row->suppURL;?></td>
                     <td><?php echo $row->suppActive;?></td>  
                     </tr>  
                  <?php }  
                  ?> 
                </tbody>
            </table>
        </div>
        
 </body>
</html>

<script type="text/javascript">
   $("tr").onclick(function(){
      window.location = 'welcome/wineData/'.$(this).data('prodID');
   });

</script>