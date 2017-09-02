<!DOCTYPE html>
<html lang="en">
 <head>
    <script src="jquery-3.2.1.min.js"></script>
    <script src="sorttable.js"></script>
    <link rel="stylesheet" type="text/css" href="test.css">
  <meta charset="utf-8">
  <title>Wine List </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
            <div class="row">
             <div class="col-md-12 text-center"><h1>Wine List</h1></div>
    <br>
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                    <button onclick="location.href='<?php echo site_url('welcome/newWineForm');?>'"">New Wine</button>
                    </div>
                </div>
            </div>
                <br>

            <!-- display each row of DB in table -->
            <table id="sortedtable" class="table table-bordered sortable">
                <thead>
                        <tr>
                            <th>Product Number</th>
                            <th>Product Name</th>
                            <th>Product Bought Date</th>
                            <th></th>  
                        </tr>
                </thead>
                <tbody>
                <?php  
                  foreach ($products as $row)  
                  {  
                     ?><tr>  
                     <td><?php echo $row->prodNum;?></td>  
                     <td><?php echo $row->prodName;?></td>
                     <td><?php echo $row->prodDateBuy;?></td>
                     <?php echo "<td>".anchor("welcome/wineData/".$row->prodID, 'Details...', array('class' => 'detail'))."</td>";?>   
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