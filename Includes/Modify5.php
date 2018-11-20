<!-- ******************************************************************** 
      Program : modify 5.php                                               
      Author  : Renan Hernandez                                         
      Purpose : Modifies record requested by user             
      Updated : April 15, 2017                                            
********************************************************************* -->
<!-- ***************************************************************************************
  Author     : Renan Hernandez 
  Course     :  WEB-3 
  URL        : ocelot.aul.fiu.edu/~rhern268
  Professor  : Michael Robinson 
  Program #  : 5 
               {this is the modify 4 page } 

  Due Date   : 04/18/2017
  Certification: 
  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ your signature }..........

**************************************************************************************** -->
<html>

  <body>
    
    <!--h3>this is modify.php</h3-->
        
    <?php
        
       $found = $_POST['found'];            
           
       if (  ( strlen(trim($found)) > 0 ) && ($found == $Telephone) )
       {               
                  
          $query = "UPDATE customers 
                    SET FirstName     =  '$FirstName',   
                        LastName      =  '$LastName',
                        Email         =  '$Email',
                        Category      =  '$Category',
                        Cuban         =  '$Cuban',
                        Japanese      =  '$Japanese',
                        Mcdonalds     =  '$Mcdonalds',
                        Miles         =  '$Miles',
                        SpecialNeeds  =  '$SpecialNeeds' 
                                 
                   WHERE Telephone = '$Telephone'";
                       
          $sql = mysqli_query( $connection,$query );
                                              
          if ($sql)
          {
             $message ="<span style=\"color: blue;\">RECORD $Telephone MODIFIED</span><br\>";
          }   
          else
          {
             //echo "Problem updating record. MySQL Error: " . mysqli_error($connection);
             $message ="<span style=\"color: red;\">PROBLEM UPDATING RECORD</span><br\>";
          }
             
       }   
       else
       {
          $message ="<span style=\"color: red;\">RECORD $Telephone CAN NOT BE MODIFIED, FIND IT FIRST</span><br\>";
       }
                    
           
    ?>
            
             
    <!--form method="post" action="Program 4.php" >
       <input type="submit" name="return" value="Press to  continue" />
    </form--> 
     
  </body>
                
</html>