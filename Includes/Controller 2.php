 <!-- ***************************************************************************************
  Author     : Renan Hernandez 
  Course     :  WEB-3 
  URL        : ocelot.aul.fiu.edu/~rhern268
  Professor  : Michael Robinson 
  Program #  : 2 
               {this is the controller page } 

  Due Date   : 02/09/2017
  Certification: 
  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ your signature }..........

**************************************************************************************** -->

<html>
<body>
<?php 
echo " <br><h1> My name is controller you are in <br>";


if ( $_POST['Find'] )
       { 
          echo('find.');
       }
       else if ( $_POST['Save'] )
       { 
          echo('save');
       }
       else if ( $_POST['Modify'] )
       {  
          echo('modify');
       }
       else if ( $_POST['Delete'] )
       { 
          echo('delete');
       }
             else
       { 
          echo "<br><h1> you pressed UNKOWN button</h1>";   
       }

?>
</body>
</html>