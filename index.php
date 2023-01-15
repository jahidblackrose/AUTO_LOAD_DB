<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script type="text/javascript">
    function table(){
      const xhttp = new XMLHttpRequest();
      xhttp.onload = function(){
        document.getElementById("table").innerHTML = this.responseText;
      }
      xhttp.open("GET", "system.php");
      xhttp.send();
    }

    setInterval(function(){
      table();
    }, 1);
  </script>
</head>
<body onload = "table();">
  <div id="table">

  </div>
</body>
</html>
