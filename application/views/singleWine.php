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
             <div class="col-md-12 text-center"><h1><?php foreach ($products as $key){ echo $key->prodName;}?></h1></div>
    <br>

            <!-- display each row of DB in table -->
            <table id="sortedtable" class="table table-bordered sortable">
                <thead>
                        <tr>
                            <th> ID</th>
                            <th> Number</th>
                            <th> Name</th>
                            <th> Color ID</th>
                            <th> Pack</th>
                            <th> Region</th>
                            <th> Number Request</th>
                            <th> Supplier ID</th> 
                            <th> Bought Date</th>
                            <th> QTY Bought</th>
                            <th> Format</th>
                            <th> Cost</th>
                            <th> Label Charge</th>
                            <th> Price</th>
                            <th>Price Per Person</th>
                            <th> Sell Price</th>
                            <th> Sold Out</th>
                            <th> Available</th>
                            <th> Comment</th>
                        </tr>
                </thead>
                <tbody>
                <?php  
                  foreach ($products as $row)  
                  {  
                     ?><tr>  
                     <td><?php echo $row->prodID;?></td>  
                     <td><?php echo $row->prodNum;?></td>
                     <td><?php echo $row->prodName;?></td>
                     <td><?php echo $row->colprodDesc;?></td>  
                     <td><?php echo $row->prodPack;?></td>
                     <td><?php echo $row->regionName;?></td>
                     <td><?php echo $row->prodNoRequest;?></td>  
                     <td><?php echo $row->prodIDSupplier;?></td>
                     <td><?php echo $row->prodDateBuy;?></td>
                     <td><?php echo $row->prodQtyBuy;?></td>  
                     <td><?php echo $row->prodFormat;?></td>
                     <td><?php echo $row->prodPriceBuy;?></td>
                     <td><?php echo $row->prodLabelCharge;?></td>  
                     <td><?php echo $row->prodBottleCharge;?></td>
                     <td><?php echo $row->prodBottleChargePerson;?></td>
                     <td><?php echo $row->prodSellPrice;?></td>  
                     <td><?php echo $row->prodSoldOut;?></td>
                     <td><?php echo $row->prodAvailable;?></td>
                     <td><?php echo $row->prodComment;?></td>                     
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