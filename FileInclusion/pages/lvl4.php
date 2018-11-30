<html>  
   <head>
      <meta charset="utf-8">
      <link rel="shortcut icon" href="../../Resources/hmbct.png" />
      <title> Level 4 </title>
   </head>

   <body>
      
      <div style="background-color:#c9c9c9;padding:15px;">
      <button type="button" name="homeButton" onclick="location.href='../../homepage.html';">Home Page</button>
      <button type="button" name="mainButton" onclick="location.href='fileinc.html';">Main Page</button>      
      </div>
      
      <div align="center"><b><h3>This is Level 4</h3></b></div>
      <div align="center">
      <a href=lvl4.php?file=1.php><button>Button</button></a>
      <a href=lvl4.php?file=2.php><button>The Other Button!</button></a>
      </div>
      
      <?php     
        echo "</br></br>";

        if (isset( $_GET[ 'file' ])) 
        {
          $secure4 = $_GET[ 'file' ];
         
            if ($secure4!="1.php" && $secure4!="2.php") 
            {
              $secure4=substr($secure4, 0,-4);
            }
            
            if (isset($secure4)) 
            {        
              include($secure4);              
            }
        }              
      ?>
   </body>
</html>

