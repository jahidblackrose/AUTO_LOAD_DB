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


  .table {
    --#{$prefix}table-color: #{$table-color};
    --#{$prefix}table-bg: #{$table-bg};
    --#{$prefix}table-border-color: #{$table-border-color};
    --#{$prefix}table-accent-bg: #{$table-accent-bg};
    --#{$prefix}table-striped-color: #{$table-striped-color};
    --#{$prefix}table-striped-bg: #{$table-striped-bg};
    --#{$prefix}table-active-color: #{$table-active-color};
    --#{$prefix}table-active-bg: #{$table-active-bg};
    --#{$prefix}table-hover-color: #{$table-hover-color};
    --#{$prefix}table-hover-bg: #{$table-hover-bg};

    width: 100%;
    margin-bottom: $spacer;
    color: var(--#{$prefix}table-color);
    vertical-align: $table-cell-vertical-align;
    border-color: var(--#{$prefix}table-border-color);

    // Target th & td
    // We need the child combinator to prevent styles leaking to nested tables which doesn't have a `.table` class.
    // We use the universal selectors here to simplify the selector (else we would need 6 different selectors).
    // Another advantage is that this generates less code and makes the selector less specific making it easier to override.
    // stylelint-disable-next-line selector-max-universal
    > :not(caption) > * > * {
      padding: $table-cell-padding-y $table-cell-padding-x;
      background-color: var(--#{$prefix}table-bg);
      border-bottom-width: $table-border-width;
      box-shadow: inset 0 0 0 9999px var(--#{$prefix}table-accent-bg);
    }

    > tbody {
      vertical-align: inherit;
    }

    > thead {
      vertical-align: bottom;
    }
  }
</style>



<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/tb/Table_Responsive_v1/css/main.css">
-->

<header class="py-3 mb-4 border-bottom">
  <div class="container d-flex flex-wrap justify-content-center">

    <h3> NPSB Transaction Log</h3>
  </div>
</header>

<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <!-- <table border="1" class="bottomBorder" width="100%"> -->
        <table border="1" class="table table-striped table-sm">
          <tr>
            <td>Serial</td>
            <td>Name</td>
            <td>Email</td>
            <td>Age</td>
            <td>Country</td>
          </tr>
          <?php $i = 1; ?>
          <?php foreach($rows as $row) : 

            if ($row["sl"]%3==0) 
            {
              $color = "red";
            // code...
            }
            else {
            // code...
              $color = "white";
            }
            ?>
            <tr>
              <td style="background-color: <?php echo $color ; ?>;"><?php echo $i++; ?></td>
              <td><?php echo $row["sl"]; ?></td>
              <td><?php echo $row["division"]; ?></td>
              <td><?php echo $row["Thana"]; ?></td>
              <td><?php echo $row["suboffice"]; ?></td>
            </tr>
          <?php endforeach; ?>
        </table>

      </div>
      <div class="col-sm-6">
        <table border="1" class="bottomBorder" width="100%">
          <tr>
            <td>Serial</td>
            <td>Name</td>
            <td>Email</td>
            <td>Age</td>
            <td>Country</td>
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

    <div class="row">
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Header</th>
              <th scope="col">Header</th>
              <th scope="col">Header</th>
              <th scope="col">Header</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1,001</td>
              <td>random</td>
              <td>data</td>
              <td>placeholder</td>
              <td>text</td>
            </tr>
            <tr>
              <td>1,002</td>
              <td>placeholder</td>
              <td>irrelevant</td>
              <td>visual</td>
              <td>layout</td>
            </tr>
            <tr>
              <td>1,003</td>
              <td>data</td>
              <td>rich</td>
              <td>dashboard</td>
              <td>tabular</td>
            </tr>
            <tr>
              <td>1,003</td>
              <td>information</td>
              <td>placeholder</td>
              <td>illustrative</td>
              <td>data</td>
            </tr>
            <tr>
              <td>1,004</td>
              <td>text</td>
              <td>random</td>
              <td>layout</td>
              <td>dashboard</td>
            </tr>
            <tr>
              <td>1,005</td>
              <td>dashboard</td>
              <td>irrelevant</td>
              <td>text</td>
              <td>placeholder</td>
            </tr>
            <tr>
              <td>1,006</td>
              <td>dashboard</td>
              <td>illustrative</td>
              <td>rich</td>
              <td>data</td>
            </tr>
            <tr>
              <td>1,007</td>
              <td>placeholder</td>
              <td>tabular</td>
              <td>information</td>
              <td>irrelevant</td>
            </tr>
            <tr>
              <td>1,008</td>
              <td>random</td>
              <td>data</td>
              <td>placeholder</td>
              <td>text</td>
            </tr>
            <tr>
              <td>1,009</td>
              <td>placeholder</td>
              <td>irrelevant</td>
              <td>visual</td>
              <td>layout</td>
            </tr>
            <tr>
              <td>1,010</td>
              <td>data</td>
              <td>rich</td>
              <td>dashboard</td>
              <td>tabular</td>
            </tr>
            <tr>
              <td>1,011</td>
              <td>information</td>
              <td>placeholder</td>
              <td>illustrative</td>
              <td>data</td>
            </tr>
            <tr>
              <td>1,012</td>
              <td>text</td>
              <td>placeholder</td>
              <td>layout</td>
              <td>dashboard</td>
            </tr>
            <tr>
              <td>1,013</td>
              <td>dashboard</td>
              <td>irrelevant</td>
              <td>text</td>
              <td>visual</td>
            </tr>
            <tr>
              <td>1,014</td>
              <td>dashboard</td>
              <td>illustrative</td>
              <td>rich</td>
              <td>data</td>
            </tr>
            <tr>
              <td>1,015</td>
              <td>random</td>
              <td>tabular</td>
              <td>information</td>
              <td>text</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

  </div>











