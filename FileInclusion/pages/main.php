<html>
   
   <head>
      <meta charset="utf-8">
      <title> File Inclusion </title>
   </head>

   <body>
     <div align="center"><b><h1><i>Welcome to File Inclusion Page</i></h1></br></div>
     
           
      <div align="center"><b><h3>Select Difficulty</h3></b></div>
      
      <div align="center">
      <a href=main.php?page=lvl1.php><button>Level 1</button></a>
      <a href=main.php?page=lvl2.php><button>Level 2</button></a>
      <a href=main.php?page=lvl3.php><button>Level 3</button></a>
      </div>
     
      
      <?php
         
        echo "</br></br>";


         if (isset($_GET['page']) )
          { 
            $secure = $_GET['page'];
            include($secure); 
            exit();
          }                                 
      ?>
   </body>
</html>

