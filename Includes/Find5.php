<!-- ******************************************************************** 
      Program : find 5.php                                                           
      Author  : Renan Hernandez                                              
      Purpose : Finds and displays record requested by user                  
      Updated : April 14, 2017                                             
********************************************************************* -->
<!-- ***************************************************************************************
  Author     : Renan Hernandez 
  Course     :  WEB-3 
  URL        : ocelot.aul.fiu.edu/~rhern268
  Professor  : Michael Robinson 
  Program #  : 5 
               {this is the find 5 page } 

  Due Date   : 04/18/2017
  Certification: 
  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ your signature }..........

**************************************************************************************** -->
                          
<html>
                     
  <body>
                       
    <!--h3>this is find.phd</h3-->
                                                 
    <?php

       //$sql="SELECT * FROM customers ORDER BY Telephone";    
       $sql="SELECT * FROM customers where Telephone = '$Telephone'";
             
       if ($result=mysqli_query($connection,$sql))
       {
          
          // Return the number of rows in result set
          $rowcount=mysqli_num_rows($result);
                        
          while( $row = mysqli_fetch_array( $result ) )
          {
             $Telephone    = $row['Telephone'];     //primary key
             $FirstName    = $row['FirstName'];     //type="text"
             $LastName     = $row['LastName'];      //type="text"
             $Email        = $row['Email'];         //type="text"
             $Category     = $row['Category'];      //type="radio" 
             $Cuban        = $row['Cuban'];         //type="checkbox"
             $Japanese     = $row['Japanese'];      //type="checkbox"
             $Mcdonalds    = $row['Mcdonalds'];     //type="checkbox" 
             $Miles        = $row['Miles'];         //type="Dropdown"
             $SpecialNeeds = $row['SpecialNeeds'];  //type="textarea"          
          }

          $Telephone=trim($Telephone); //take all front and back spaces out

                
          //if (mysqli_query($connection, $sql)) 
          if ( $rowcount )
          {
             $found = $Telephone;
             $message ="<span style=\"color: blue;\">RECORD $found FOUND</span><br\>";
          } 
          else if( strlen($Telephone) ==0 )           
          {
             $message ="<span style=\"color: red;\">Telephone CAN NOT BE EMPTY</span><br>";
             //echo "<br>Error: " . $sql . " " . mysqli_error($connection);
                   
          }
          else 
          {
             $message ="<span style=\"color: red;\">RECORD $Telephone NOT FOUND</span><br>";
             //echo "<br>Error: " . $sql . " " . mysqli_error($connection);
                  
          }
             
      }

    ?>


    <!--form method="post" action="Program 4.php" >
       <input type="submit" name="return" value="Press to  continue" />
    </form--> 


  </body>

</html>