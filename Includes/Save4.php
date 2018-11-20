<!-- ******************************************************************** 
      Program : save 4.php                                                   
      Author  : Renan Hernandez                                          
      Purpose : Saves record requested by user                          
      Updated : March 20, 2017                                              
********************************************************************* -->  
<!-- ***************************************************************************************
  Author     : Renan Hernandez 
  Course     :  WEB-3 
  URL        : ocelot.aul.fiu.edu/~rhern268
  Professor  : Michael Robinson 
  Program #  : 4 
               {this is the save 4 page } 

  Due Date   : 04/04/2017
  Certification: 
  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ your signature }..........

**************************************************************************************** -->
<html>
    
  <body>
     
    <!--br><h3>this is save.php</h3><br-->
       
    <?php                  
                
       $Telephone=trim($Telephone);
       if(strlen($Telephone)>0)           
       {   
          $sql="INSERT INTO customers (
                  Telephone,
                  FirstName,
                  LastName,
                  Email,
                  Category,
                  Cuban,
                  Japanese,
                  Mcdonalds,
                  Miles,
                  SpecialNeeds
               )
               VALUES
               (            
                  '$Telephone',
                  '$FirstName',
                  '$LastName',
                  '$Email',
                  '$Category',
                  '$Cuban',
                  '$Japanese',
                  '$Mcdonalds',
                  '$Miles',
                  '$SpecialNeeds'                    
               )";
                
                  
          if (mysqli_query($connection, $sql)) 
          {
             //echo "<br>New record created successfully";
             $message ="<span style=\"color: blue;\">RECORD $Telephone ADDED</span><br\>";
          } 
          else
          {
             //echo "<br>Error: " . $sql . "<br>" . mysqli_error($connection);
             $message ="<span style=\"color: red;\">RECORD $Telephone ALREADY EXISTS</span><br\>";
          }
           
       }//end if(strlen($Telephone)>0)                      
       else
       {
          $message ="<span style=\"color: red;\">RECORD NOT ADDED<BR>Telephone CAN NOT BE EMPTY</span><br\>";
       } 
             
    ?>
       
      
    <!--form method="post" action="Program 4.php" >
       <input type="submit" name="return" value="Press to  continue" />
    </form--> 
         
  </body>

</html>