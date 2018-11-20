<!-- ********************************************************************
      Program : delete 5.php
      Author  : Renan Hernandez 
      Purpose : Deletes record selected by user
      Updated : April 15, 2017
********************************************************************* -->
<!-- ***************************************************************************************
  Author     : Renan Hernandez 
  Course     :  WEB-3 
  URL        : ocelot.aul.fiu.edu/~rhern268
  Professor  : Michael Robinson 
  Program #  : 5 
               {this is the delete 5 page } 

  Due Date   : 04/18/2017
  Certification: 
  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ your signature }..........

**************************************************************************************** -->
<html>

  <body>
    
    <!--h3>this is delete 5.php</h3-->
             
                  
    <?php
                   
       $record = "RECORD ". $Telephone." DELETED";
         
       $found = $_POST['found']; 
       //echo "delete  found = [" . $found . "]<br>";
        
       // sql to delete a record
       $sql="DELETE FROM customers WHERE Telephone='$Telephone'";
         
       $Telephone=trim($Telephone);
          
       //     if(strlen($Telephone)>0)           
       if (  ( strlen(trim($found)) > 0 ) && ($found == $Telephone) )
       { 
                      
          if (mysqli_query($connection, $sql)) 
          {
             //echo "Record deleted successfully found = {".$found."}";
             $message ="<span style=\"color: blue;\">RECORD $found DELETE</span><br\>";
             $found=""; //this clear the flag for record found to be able to modify 
          }         
          else 
          {
             $message = "Error deleting record: " . mysqli_error($connection); 
          }
          
       }   
       else
       {
          $message ="<span style=\"color: red;\">RECORD NOT DELETED<BR>Telephone CAN NOT BE EMPTY</span><br\>";
       }
                 
       
    ?>
                           
                          
    <!--form method="post" action="Program 5.php" >
       <input type="submit" name="return" value="Press to  continue" --/>
    </form--> 
                      
  </body>
                    
</html>