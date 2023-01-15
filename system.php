<?php
$conn = mysqli_connect("localhost", "root", "", "bnbbd_client");
$rows = mysqli_query($conn, "SELECT * FROM `all_districts` order by sl DESC LIMIT 0,  30");  //  ORDER BY RAND() LIMIT 20
$rowt = mysqli_query($conn, "SELECT * FROM `all_districts` order by sl DESC LIMIT 30 , 30");  //  ORDER BY RAND() LIMIT 20



?>


<style type="text/css">
  table.bottomBorder { border-collapse:collapse; }
  table.bottomBorder td, table.bottomBorder th { border-bottom:1px dotted black;padding:1px;
    font-size:12px;
    font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
  }
  table.bottomBorder tr, table.bottomBorder tr { border:1px dotted black;padding:1px; }
  
  .navbar-brand {
    padding-top: 0.75rem;
    padding-bottom: 0.75rem;
    background-color: rgb(0 0 0 / 21%);
    box-shadow: inset -1px 0 0 rgb(0 0 0 / 25%);
  }
</style>



<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
<!-- <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/tb/Table_Responsive_v1/css/main.css">
-->


<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow py-3 mb-4 border-bottom">

  <!-- <header class="py-3 mb-4 border-bottom"> -->
   <div class="container d-flex flex-wrap justify-content-center">

    <h3 style="color: white;"> NPSB Transaction Log</h3>
  </div>
</header>

<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <table border="1" class="bottomBorder" width="100%">
        <tr style="background-color: black; color: white; font-weight: bold;">
          <td>Sl</td>
          <td>Source</td>
          <td>Bank</td>            
          <td>Time</td>
          <td>Status</td>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($rows as $row) : 

          if ($row["suboffice"]=='0' && $row["bn_district"]==NULL) 
          {
            $status = "Request";
            $color = "gray";
            $color1 = "";
            $fontcolor = "black";
            // code...
          }
          elseif ($row["suboffice"]=='Q' && $row["bn_district"]==NULL) 
          {
            $status = "On the Way";
            $color = "yellow";
            $color1 = "#62636252";
            $fontcolor = "black";
            // code...
          }
          elseif ($row["suboffice"]=='1' && $row["bn_district"]==NULL) 
          {
            $status = "Error";
            $color = "red";
            $color1 = "red";
            $fontcolor = "white";
            // code...
          }
          elseif ($row["suboffice"]=='2' && $row["bn_district"]==NULL) 
          {
            $status = "Error";
            $color = "red";
            $color1 = "red";
            $fontcolor = "white";
            // code...
          }
          elseif ($row["suboffice"]=='2' && $row["bn_district"]=='0') 
          {
            $status = "Success";
            $color = "green";
            $color1 = "#78ed93";
            $fontcolor = "black";
            // code...
          }
          elseif ($row["suboffice"]=='2' && $row["bn_district"]=='85') 
          {
            $status = "Not Decline";
            $color = "Orange";
            $color1 = "#e56060a6";
            $fontcolor = "black";
            // code...
          }
          elseif ($row["suboffice"]=='2' && ($row["bn_district"]!='0' || $row["bn_district"]!='85')) 
          {
            $status = "Reverse(".$row["bn_district"].")";
            $color = "Blue";
            $color1 = "";
            $fontcolor = "black";
            // code...
          }
          else {
            // code...
            $color = "white";
          }
          ?>
          <tr style="background-color: <?php echo $color1 ; ?>; color: <?php echo $fontcolor ; ?>">
            <td><?php echo $i++; ?></td>
            <td><?php echo $row["sl"]; ?></td>
            <td><?php echo $row["division"]; ?></td>
            <td><?php echo $row["Thana"]; ?></td>
            <td><?php echo $status; ?></td>
          </tr>
        <?php endforeach; ?>
      </table>

    </div>
    <div class="col-sm-6">
      <table border="1" class="bottomBorder" width="100%">
        <tr>
          <td>Sl</td>
          <td>Source</td>
          <td>Bank</td>
          <td>Time</td>
          <td>Status</td>
        </tr>
        <?php // $i = 1; ?>
        <?php foreach($rowt as $row) : ?>
          <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $row["sl"]; ?></td>
            <td><?php echo $row["division"]; ?></td>
            <td><?php echo $row["Thana"]; ?></td>
            <td><?php echo $row["suboffice"]; ?></td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>

  </div>
</div>











