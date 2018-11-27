<html>
   
   <head>
      <meta charset="utf-8">
      <title> Level 1 </title>
   </head>

   <body>
      <div align="center"><b><h3>This is Level 1</h3></b></div>

      <div align="center">
      <a href=lvl1.php?file=1.php><button>Show 1</button></a>
      <a href=lvl1.php?file=2.php><button>Show 2</button></a>
      </div>
      <?php
         
        echo "</br></br>";
        
        if (isset( $_GET[ 'file' ]))        
         
         include($_GET['file']);       
      ?>
   
   </body>
</html>

