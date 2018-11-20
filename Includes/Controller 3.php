 <!-- ***************************************************************************************
  Author     : Renan Hernandez 
  Course     :  WEB-3 
  URL        : ocelot.aul.fiu.edu/~rhern268
  Professor  : Michael Robinson 
  Program #  : 3 
               {this is the controller 3 page } 

  Due Date   : 03/09/2017
  Certification: 
  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ your signature }..........

**************************************************************************************** -->

<html>
 <head>  
      
    <title> Hernandez Renan CSS Menu Program 3</title>
<html>
        
   <body style="margin: 0px; height: 100px;">
      <table style="width: 100%; margin: auto;">
         <br>
         <tr>
            <td style="width: 15%;" align="left">
               <!-- img src=" " class=" " alt=" " / -->
            </td>
                			
            <td style="width: 70%; color: #000064; font-size: 24px;"  align="center">
               <font face="Trebuchet MS">The resturant Company</font>
            </td>
                  		
            <td style="width: 15%;" align="left">
               <!-- img src=" " class=" " alt=" " /-->
            </td>
         </tr>
      </table>
   </body>
</html>
        
            
<style type="text/css">
        nav ul ul 
        {
            display: none;
        }
        
        
        nav ul li:hover > ul 
        {
            display: block;
        }
        
          
        nav ul 
        {
            background: #efefef; 
            background: linear-gradient(top, #efefef 0%, #bbbbbb 100%);  
            background: -moz-linear-gradient(top, #efefef 0%, #bbbbbb 100%); 
            background: -webkit-linear-gradient(top, #efefef 0%,#bbbbbb 100%); 
            box-shadow: 0px 0px 9px rgba(0,0,0,0.15);
            padding: 0 20px;
            border-radius: 10px;  
            list-style: none;
            position: relative;
            display: inline-table;
        }
        
            
        nav ul:after 
        {
                content: ""; clear: both; display: block;
	}
                
                
        nav ul li 
        {
                float: left;
        }
        
        
	nav ul li:hover 
        {
                background: #4b545f; 
                background: linear-gradient(top, #4f5964 0%, #5f6975 40%);
                background: -moz-linear-gradient(top, #4f5964 0%, #5f6975 40%);
                background: -webkit-linear-gradient(top, #4f5964 0%,#5f6975 40%);
        }
                
                
        nav ul li:hover a 
        {
                color: black; /*=white#ff00ff; /*#fff; */ /*menu name color */
        }
                
                
        nav ul li a 
        {
                display: block; padding: 25px 40px;
                color: red; /* main menu name #757575;*/ text-decoration: none;
	}
                
                
        nav ul ul 
        {
                background: lightslategray; /*#5f6975;*/ border-radius: 0px; padding: 0; /*sub menues */
                position: absolute; top: 100%;
        }
        
        
	nav ul ul li 
        {
		float: none; 
		border-top: 1px solid white; /*#6b727c; */ /*border top */
		border-bottom: 1px solid #575f6a; /*border down */
		position: relative;
	}
	
	
        nav ul ul li a 
        {
                padding: 10px 40px;
                color: blue;
        }	
                
                
        nav ul ul li a:hover 
        {
                background: blue; /* #4b545f; */ /*submenu background color*/
        }
                
                
        nav ul ul ul 
        {
                position: absolute; left: 100%; top:0;
        }

    </style>
  
  </head>
    
    
  <body> <!-- most web commands go here -->
       
    <nav align="center">
       <ul>
<li> <a href="http://ocelot.aul.fiu.edu/~rhern268/Includes/Resturant.php"> program 1 </a>
             <ul>
 		<li><a href="http://ocelot.aul.fiu.edu/~rhern268/Includes/Centro.php">page 1</a></li>
                <li><a href="http://ocelot.aul.fiu.edu/~rhern268/Includes/Asia.php">page 2</a></li>
                <li><a href="http://ocelot.aul.fiu.edu/~rhern268/Includes/Latin.php">page 3</a></li>
                <li><a href="http://ocelot.aul.fiu.edu/~rhern268/Includes/fastfood.php">page 4</a></li>
		<li><a href="http://ocelot.aul.fiu.edu/~rhern268">Home</a></li>
             </ul>
         
          <li><a href="http://ocelot.aul.fiu.edu/~rhern268/Includes/Program 2.php">Program 2</a></li>
		  <li><a href="http://ocelot.aul.fiu.edu/~rhern268/Includes/Program 3.php">pgm 3</a></li>
          <li><a href="http://ocelot.aul.fiu.edu/~rhern268">Home</a></li>
       </ul>

    </nav>
</body>
</html>
<head>
 
   <nav align="center">
   <?php
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
  
  echo "<table align='center' width='50%'>";
  
  echo "<tr> <td>Telephone: </td> <td align='left'>".$Telephone."</td> </tr>";
       echo "<tr> <td>First Name: </td> <td alight='left'>".$FirstName."</td> </tr>";  
       echo "<tr> <td>Last Name: </td> <td align='left'>".$LastName."</td> </tr>";  
       echo "<tr> <td>Email: </td> <td align='left'>".$Email."</td> </tr>";  
       echo "<tr> <td>Category: </td> <td align='left'>".$Category."</td> </tr>";   
       echo "<tr> <td>Prefrences: </td> <td align='left'>".$Cuban."&nbsp;".$Japanese."&nbsp;".$Mcdonalds."</td> </tr>";   
       echo "<tr> <td>Miles: </td> <td> ".$Miles."</td> </tr>";  
       echo "<tr> <td>Resturant Name food/type: </td> <td align='left'>".$SpecialNeeds."</td> </tr>";

      

       
  echo "<table align='center' width='50%'> <tr> <td align='center'>";
  if ($_POST['Find'])
       {echo "<br><h1> Hello the Find button was pressed.</h1>";}
       else if ( $_POST['Save'])
       {echo "<br><h1> Hello the Save button was pressed.</h1>";}
       else if ( $_POST['Modify'])
       {echo "<br><h1> Hello the Modify button was pressed.</h1>";}
       else if ( $_POST['Delete'])
       {echo "<br><h1> Hello the Delete button was pressed.</h1>";}
       else if ( $_POST['Clear'])
       {echo "<br><h1> Hello the Clear button was pressed.</h1>";}
       else
       {echo "<br><h1> You pressed an UNKNOWN button</h1>"; }
echo "</td> </tr> </table>";
echo "</td> </tr> </table>";

    ?>
    </nav>   
   </body>
</html>


