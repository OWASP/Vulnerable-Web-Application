<html>
   
   <head>
      <meta charset="utf-8">
      <title> Level 3 </title>
   </head>

   <body>
       <div align="center"><b><h3>This is Level 3</h3></b></div>
		
	   <div align="center">
      <a href=lvl3.php?file=1.php><button>Show 1</button></a>
      <a href=lvl3.php?file=2.php><button>Show 2</button></a>
	  </div>
      <?php
         
        echo "</br></br>";

        if (isset( $_GET[ 'file' ])) 
        {
          $secure3 = $_GET[ 'file' ];

          $secure3 = strtolower($secure3); #There is no uppercase in the FileInclusion folder.
          
		  $secure3 = str_replace( array(  "..",  "\\" , "..\\" , ":", "/", "%" ), "", $secure3 );
          $secure3 = str_replace( array( "http://" , "https://" ),"", $secure3 );  
            
            if (isset($secure3)) 
            {        
              include($secure3);
              
            }
        }
                
      ?>
   </body>
</html>

