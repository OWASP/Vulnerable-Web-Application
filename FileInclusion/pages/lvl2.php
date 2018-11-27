<html>
   
   <head>
      <meta charset="utf-8">
      <title> Level 2 </title>
   </head>

   <body>
      <div align="center"><b><h3>This is Level 2</h3></b></div>
		
	  <div align="center">
      <a href=lvl2.php?file=1.php><button>Show 1</button></a>
      <a href=lvl2.php?file=2.php><button>Show 2</button></a>
	  </div>
      <?php
         
        echo "</br></br>";

        if (isset( $_GET[ 'file' ])) 
        {
          $secure2 = $_GET[ 'file' ];
         
          $secure2 = str_replace( array( "..\\" , ".\\"),"", $secure2 );
          
          $secure2 = str_replace( array( "http://" , "https://" ),"", $secure2 );
            
            if (isset($secure2)) 
            {        
              include($secure2);
              
            }
        }
                
      ?>
   </body>
</html>

