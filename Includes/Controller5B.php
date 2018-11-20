<html>
  <head>
    <title>Leads First Next Previous Last</title>
  </head>
  
  <body>
  
    <?php
     //connecting to mysql 
      //echo "<h3>I am going to connect to mySql";

      //                                server               user        password  database     
      $connection = mysqli_connect("ocelot.aul.fiu.edu","spr17_rhern268","3011185","spr17_rhern268");
	if (mysqli_connect_errno())
      {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
      else
      {  
        //echo "<br>I have connected to mySql<br>";            
           
        // Change database to another name if needed
            
        $dbName="spr17_rhern268"; 
        $db_selected = mysqli_select_db( $connection, $dbName );
                     
        if (!$db_selected)
        {
          die( $dbName . ' does not exist, can\'t use it ' . mysqli_error());
        }
        else
        {
          //echo "I selected database : " . $db_selected . " " . $dbName . "<br></h3>" ;
                   
          //access to a table                    
          $tableName = "contacts";
                      
          $query = mysqli_query( $connection, "SELECT * FROM $tableName" );
                     
          //if table does not exist, create it 
          if(!$query)
          {
            echo "The ".$tableName." does not exists<br>";
                      
            echo "<br>Creating table : ".$tableName."<br>";
                       
            $sql = "CREATE TABLE ".$tableName."(
                    Telephone VARCHAR(20) NOT NULL,
                    PRIMARY KEY(Telephone),
                    FirstName VARCHAR(30),
                    LastName VARCHAR(30),
                   
                    SpecialNeeds VARCHAR(200)
                    )";
                                
             $result = mysqli_query( $connection, $sql );
                         
            //confirm table creation
            if ($result)
            {
               echo "table ". $tableName." created<br>";
            }
            else
            {
               die ("Can\'t create ". $tableName." ". mysqli_error() );
            }
                     
          }//if(!$query) if table does not exist, create it 
                        
        }//end if (!$db_selected) connecting to db
                
      }//end if (mysqli_connect_errno()) connecting to mysql
	  
      //extact variable to track array's location
      $location=$_POST['location'];
      $location=(int)$location;
      
      //connect to Host
     $connection = mysqli_connect("ocelot.aul.fiu.edu","spr17_rhern268","3011185","spr17_rhern268");
    
      //Extract button pressed, If no button is pressed execute First button code.
      if($_POST['Last'])
      {
        //here Telephone is the primary key, 
        $sql="SELECT * FROM contacts order by Telephone ASC";
          
        if ($results=mysqli_query($connection,$sql))
        {
          //find the total number of rows and sets the location to last row.
          $rowcount=mysqli_num_rows($results);
          $location=$rowcount-1;
         
          //data_seek command moves the memory pointer in SQL table objects.
          //location must be INT or LONG.
          mysqli_data_seek($results, $location);
            
          $row=mysqli_fetch_assoc($results);
            
          $Telephone = $row['Telephone'];
          $Name      = $row['Name'];
          $Email     = $row['Email'];
          $message   = $row['message'];    
            
        }//end if ($results=mysqli_query($connection,$sql)) 
      }//end if($_POST['Last'])
      
      
      else if($_POST['Previous'])
      {
        $sql="SELECT * FROM contacts order by Telephone ASC";
          
        if ($results=mysqli_query($connection,$sql))
        {
          //Decrement location only if it is above the lowest possible value.
          if ($location >0)    
          {
            $location--;
          }                           
          mysqli_data_seek($results, $location);
          $row=mysqli_fetch_assoc($results);
            
          $Telephone = $row['Telephone'];
          $Name      = $row['Name'];
          $Email     = $row['Email'];
          $message   = $row['message'];
        }//end if ($results=mysqli_query($connection,$sql))
      }//end else if($_POST['Previous'])
      
      
      else if($_POST['Next'])
      {
        $sql="SELECT * FROM contacts order by Telephone ASC";
          
        if ($results=mysqli_query($connection,$sql))
        {
          //total number of rows for the upper limit of the search function.
          $rowcount=mysqli_num_rows($results);
              
          //Increment location only if it is below the highest possible value.
          if ($location <$rowcount-1)    
          {
            $location++;
          }                           
                        
          mysqli_data_seek($results, $location);
          $row=mysqli_fetch_assoc($results);
            
          $Telephone = $row['Telephone'];
          $Name      = $row['Name'];
          $Email     = $row['Email'];
          $message   = $row['message'];    
            
        }//end if ($results=mysqli_query($connection,$sql))
      }//end else if($_POST['Next'])
    
    
      else //get First record
      {
        //Resets location to position 0, and grab the first record in the table.
        $location=0;    
        $sql="SELECT * FROM contacts order by Telephone ASC limit 1";
             
        if ($result=mysqli_query($connection,$sql))
        {
          $row = mysqli_fetch_array( $result );
                
          $Telephone  = $row['Telephone'];
          $Name       = $row['Name'];
          $Email      = $row['Email'];
          $message   = $row['message'];     
        }//end if ($result=mysqli_query($connection,$sql))
      
      }//end else
    
      mysqli_close($connection); //close sql connection
        include ("Leads.php");
    ?>

  </body>  
  
</html>  