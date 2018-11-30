<html>
   <head>
      <meta charset="utf-8">
      <link rel="shortcut icon" href="../../Resources/hmbct.png" />
      <title> Level 3 </title>
   </head>

   <body>
      
      <div style="background-color:#c9c9c9;padding:15px;">
      <button type="button" name="homeButton" onclick="location.href='../../homepage.html';">Home Page</button>
      <button type="button" name="mainButton" onclick="location.href='fileinc.html';">Main Page</button>        
      </div>
       
      <div align="center"><b><h3>This is Level 3</h3></b></div> 
      <div align="center">
      <a href=lvl3.php?file=1><button>Button</button></a>
      <a href=lvl3.php?file=2><button>The Other Button!</button></a>
      </div>
      
      <?php
        echo "</br></br>";
        
        if (isset( $_GET[ 'file' ]))        
        {
          $secure3=$_GET[ 'file' ];
          $secure3=strtolower($secure3);
          
          $secure3=str_replace( array("http://", "https://") ,"" , $secure3);
          $secure3=str_replace (array ( ":" , "/" , "..\\", "../" ), "" ,  $secure3);

          if (isset($secure3)) 
            {        
              include($secure3.".php");
            }
        }
      ?>
   </body>
</html>




