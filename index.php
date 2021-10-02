<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <script type="text/javascript" src="jquery/jquery.min.js">
   </script>
   <title>Digital Scale Realtime</title> 
   <script type="text/javascript">
      $(document).ready(function(){
         setInterval(function(){
            $("#display").load('display.php');
         }, 2000);
      });
   </script>      
</head>
<body>
   <div class="container" style="text-align: center padding-top: 10%; width: 900px;"><br></br><br></br></br>
      <h1 style='font-size:70px;'>Weight</h1><br></br><br></br>
      <div class="panel panel-default">
         <div class="panel-body">
            <h1 style='font-size:170px;'><span id="display"></span></h1>            
         </div>  
      </div>
      <form action="instable.php" method="GET">
         <input type="hidden" name="weight">
         <input type="submit" value="Save" style="width:150px; height:89px; font-size:25px;" />
      </form>  
   </div>       
</body>
</html>