<!-- ***************************************************************************************
  Author     : Renan Hernandez 
  Course     :  WEB-3 
  URL        : ocelot.aul.fiu.edu/~rhern268
  Professor  : Michael Robinson 
  Program #  : 5 
               {this is the controller 5 page } 

  Due Date   : 04/18/2017
  Certification: 
  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ your signature }..........

**************************************************************************************** -->

<html>
 <head>  
      
    <title> Controller 5</title>

  
  </head>
    
    
  <body> <!-- most web commands go here -->
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

      //extract the data inputed by the user creating global php fields 
      $Telephone    = $_POST['Telephone'];
      $FirstName    = $_POST['FirstName'];
      $LastName     = $_POST['LastName'];
      $Email        = $_POST['Email'];
      $Category     = $_POST['Category'];
      $Cuban        = $_POST['Cuban'];
      $Japanese     = $_POST['Japanese'];
      $Mcdonalds    = $_POST['Mcdonalds'];
      $Miles        = $_POST['Miles'];
      $SpecialNeeds = $_POST['SpecialNeeds'];

      $found = $_POST['found']; 
         
       if ( $_POST['Find'] )
       { 
          include('Find5.php');
       }
       else if ( $_POST['Submit'] )
       { 
          include('Submit.php');
       }
       else if ( $_POST['Modify'] )
       {  
          include('Modify5.php');
       }
       else if ( $_POST['Delete'] )
       { 
          include('Delete5.php');
       }
       else if ( $_POST['Clear'] )
       {
          include('Clear5.php');
       }
	    else if ( $_POST['Help'] )
       {
          include('Help.php');
       }
	    else if ( $_POST['About'] )
       {
          include('About.php');
       }
	    else if ( $_POST['Contact Us'] )
       {
          include('Contacts.php');
       }
	    else if ( $_POST['Leads'] )
       {
          include('Leads.php');
       }
       else
       { 
          echo "<br><h1> you pressed UNKOWN button</h1>";   
       }

       mysqli_close($connection);

	   include("Contacts.php");

    ?>