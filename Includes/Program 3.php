  <!-- ***********************************************************************************
  Author       : Renan Hernandez
  Your URL     : ocelot-aul.fiu/~rhern268
  Course       : WEB 3
  Program Name : Program 3
                 {will display data  } 

  Due Date     : 03/09/2017
  Certification: 
  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ your signature }..........

  ************************************************************************************** -->
  <html>

  <head>  
      
    <title> Hernandez RenanCSS Menu Program 3</title>
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
		  <li><a href="http://ocelot.aul.fiu.edu/~rhern268/Includes/Program 3.php">Program 3</a></li>
          <li><a href="http://ocelot.aul.fiu.edu/~rhern268">Home</a></li>
       </ul>

    </nav>
	<head>
	<table width="100%" border="0">
     <script>
   
            
        
      function currentTime() 
      {  
         var today   = new Date();
         var hour    = today.getHours();
         var minutes = today.getMinutes();
         var sec     = today.getSeconds();
      
         minutes = checkTime(minutes);
         sec     = checkTime(sec);
         
         document.getElementById('txt').innerHTML = "Current Time : "+hour+":"+minutes+":"+sec;
      
         var t = setTimeout(function(){currentTime()},500);
	 
              
      }
      


      function checkTime(i) 
      {
         if (i<10) {i = "0" + i};  // add zero in front of numbers < 10
         return i;
      }

   
   </script>
  
   

</head>

<body onload="currentTime()">
<tr>
<td width="25%">
</td>
<td width="30%">
   <script>
  
      loggedInTime();
             
      var temp1;
      
      function loggedInTime( temp )
      {
         var tiempo = new Date();  
         var temp2 =  "Login at &nbsp;: " + tiempo;
         temp1 = temp2;
         document.write( temp2 );
      }


      //document.write( " " + "I am next " + temp1 ); 
      
      currentTime();
      
      
   </script>
   
  </td>
<td width="15%""text-align: left">
</td>
<td>           
   <div id="txt"></div>
<br>
</td>

</body>
</table> 

</html>





   <br>
   <div>
      <form method="post" action="Controller 3.php">
         <div align="center" style="font-size: 18px;"><b></b></div>
         <br>					
         <table style="width: 50%; margin: 0px auto; padding-right: 10%;">
            <tr>
               <td style="width: 5%; text-align: left;">Telephone &nbsp; </td>
               <td style="width: 20%;">
                  <input type="text" name="Telephone" value="<?php echo $Telephone ?>" style="width: 100%;">
               </td>
            </tr>
            
            <tr>
               <td style="width: 5%; text-align: left;">First Name &nbsp; </td>
               <td style="width: 20%;">
                  <input type="text" name="FirstName" value="<?php echo $FirstName ?>" style="width: 100%;">
               </td>
            </tr>  
            
            <tr>
               <td style="width: 5%; text-align: left;">Last Name &nbsp; </td>
               <td style="width: 20%;">
                  <input type="text" name="LastName" value="<?php echo $LastName ?>" style="width: 100%;">
               </td>
            </tr>
            
            <tr>
               <td style="width: 5%; text-align: left;">Email &nbsp; </td>
               <td style="width: 20%;">
                  <input id="birth" type="text" name="Email" value="<?php echo $Email ?>" style="width: 100%;">
               </td>
            </tr>						
			<tr><td> &nbsp; </td> </tr> 
       
            <tr>
               <td style="width: 5%; text-align: left;">Category &nbsp; </td>
               <td style="width: 20%; text-align: left;">
                  <table style="margin: 0px auto;">
                     <tr>
                        <td text-align: left>  <input type="radio"<?php if ($Category == "Latin") echo "checked"; ?> name="Category" value="Latin"checked>latin         &nbsp;  &nbsp;             &nbsp; &nbsp; &nbsp;   &nbsp;&nbsp;    &nbsp;&nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;</td>
                        <td text-align: left>  <input type="radio"<?php if ($Category == "Asia") echo "checked"; ?> name="Category" value="Asia"checked>Asia        &nbsp;  &nbsp;   &nbsp;    &nbsp;  &nbsp;  &nbsp;  &nbsp;   &nbsp;&nbsp;    &nbsp;&nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; </td>
			<td text-align: left>  <input type="radio"<?php if ($Category == "Fastfood") echo "checked"; ?> name="Category" value="Fastfood"checked>Fastfood     &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; </td>

                     </tr>
                  </table>
               </td>
            </tr>
                             
            <tr><td> &nbsp; </td> </tr>                                         
                             
            <tr>
               <td style="width: 5%; text-align: left;">Preferences &nbsp; </td>
               <td style="width: 20%;">
                  <table>
                     <tr>
                        <td "text-align: left"> <input type="checkbox" name="Cuban"  <?php if ($Cuban == "Cuban") echo checked;?>        value="Cuban">Cuban                &nbsp;  &nbsp;      &nbsp;  &nbsp;    &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; </td>
                        <td> <input type="checkbox" name="Japanese"   <?php if ($Japanese == "Japanese") echo checked;?>       value="Japanese">Japanese               &nbsp;  &nbsp;   &nbsp;  &nbsp;   &nbsp;  &nbsp;        &nbsp;  &nbsp;   &nbsp; &nbsp; &nbsp; &nbsp;</td>
						<td> <input type="checkbox" name="Mcdonalds"  <?php if ($Mcdonalds == "Mcdonalds") echo checked;?>       value="Mcdonalds">Mcdonalds                      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
                        
                        
                     </tr> 
                  </table>
               </td>
            </tr>
            <tr><td> &nbsp; </td> </tr>
           
            <tr>
               <td style="width: 5%; text-align: left;">Miles &nbsp; </td>
               <td style="width: 20%; text-align: left;">
                   <select name="Miles" style="width: 100%;">
                      <option value="Under 20"<?php if ($Miles == "Under_20") echo selected ?> >Under 20   </option>
                      <option value="20-30" <?php if ($Miles == "20-30")    echo selected ?> >20-30      </option>
                      <option value="31-40" <?php if ($Miles == "31-40")    echo selected ?> >31-40      </option>
                   </select>
               </td>
            </tr>
            
            <tr><td> &nbsp; </td> </tr>     


            
            <tr><td> &nbsp; </td> </tr>                          
              
            <tr>
               <td style="width: 5%; text-align: right;">Resturant Name food/type &nbsp; </td>
               <td style="width: 20%;">
                    <div> 
                      <textarea name="SpecialNeeds" rows="5" cols="42">
                   <?php echo $SpecialNeeds;?>
                 </textarea><br><br>
                  </div>

               </td>
            </tr>
               
            <tr><td> &nbsp; </td> </tr>
            <tr><td> &nbsp; </td> </tr>                                                             
               
            <tr>
               <td style="width: 15%;"> </td>            
               <td style="width: 20%;" align=center> 
               
                  <?php echo $message ?>
  	<tr><td> &nbsp; </td> </tr>  
    
               </td>
            </tr>
               
            <tr><td> &nbsp; </td> </tr>                                         

            <tr>
               <td style="width: 15%;"> </td>            
               <td style="width: 20%;" align=center> 
                  <input type="submit" name="Find"   value="Find">
                  <input type="submit" name="Save"   value="Save">
                  <input type="submit" name="Modify" value="Modify">
                  <input type="submit" name="Delete" value="Delete">
                  <input type="submit" name="Clear"  value="Clear">
				  <input type="hidden" name="found"  value="<?php echo $found ?>">
               </td>
            </tr>
            
         </table>
      </form>
   </div>			

   

<!-- **********************************************************************
                   mainMenu                                               
     Author:    Renan Hernandez                                                                                         
     Purpose:   CSS dropdown menu                                          
                                                                            
     
*********************************************************************** -->


<html>

  <head>  
      
    <title>CSS Dropdown Menu </title>
        
            
    <style type="text/css">
        nav ul ul 
        {
            display: none;
            /*if changed to yes it will display all ul ul menues */
        }
        
        
        nav ul li:hover > ul 
        {
            display: block;
        }
        
          
        nav ul 
        {
            /* this section does not seem to have any effect */
            background: purple; /* #efefef; */ 
            background: linear-gradient(top, #efefef 0%, #bbbbbb 100%);  
            background: -moz-linear-gradient(top, #efefef 0%, #bbbbbb 100%); 
            background: -webkit-linear-gradient(top, #efefef 0%,#bbbbbb 100%); 
            box-shadow: 0px 0px 9px rgba(0,0,0,0.15);
            padding: 0 5px;
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
            /*left will display the menu in current order
              right will display menu from the right (backwards) */
            float: left;
        }
        
        
	nav ul li:hover 
        {
            background: #E0E0E0; /* #E0E0E0; #4b545f; = Very dark grayish blue./* 
            background: linear-gradient(top, #4f5964 0%, #5f6975 40%);
            background: -moz-linear-gradient(top, #4f5964 0%, #5f6975 40%);
            background: -webkit-linear-gradient(top, #4f5964 0%,#5f6975 40%);
        }
                
                
        nav ul li:hover a 
        {
            /* this section does not seem to have any effect */        
            color: cyan; /* #ffffff; =white#ff00ff; /*#fff; */ /*menu name color */
        }
                
                
        nav ul li a 
        {
            display: block; padding: 10px 20px; /* menu height by witdh */
            color: red; /* main menu name #757575;*/ text-decoration: unset;
                
                /*
                text-decoration: none;
                text-decoration: underline red;
                text-decoration: underline wavy red;

                text-decoration: inherit;
                text-decoration: initial;
                text-decoration: unset;
                */
	}
                
                
        nav ul ul 
        {
                /* sub menues colors #bfc1c6;= light gray #5f6975;=darker lightslategray */
                background: #f2f2f2;  border-radius: 0px; padding: 0; 
                position: absolute; top: 100%;
        }
        
        
	nav ul ul li 
        {
                /*lines color top and bottom on submenues selections */
		float: none; /*yes will display menues sideways, not top down */ 
		border-top: 1px solid black; /*#6b727c; */ /*border top */
		border-bottom: 1px solid black; /*border down */
		position: relative;
	}
	
	
        nav ul ul li a 
        {
                /* selection name color at ul ul li */
                padding: 10px 40px;
                color: blue; /* #fff; */
        }	
                
                
        nav ul ul li a:hover 
        {
                /* hovering submenu background color selections #4b545f; submenu */
                background: yellow; 
        }
                
                
        nav ul ul ul 
        {
                position: absolute; left: 100%; top:0;
        }


    </style>
  
  </head>
    
    
  <body> <!-- most web commands go here -->

  <tr><td> &nbsp; </td> </tr>     
       
 <nav align="center">

       <ul>
<li> <a href="http://ocelot.aul.fiu.edu/~rhern268/Includes/Resturant.php"> program 1 </a>
             <ul>
 		<li><a href="http://ocelot.aul.fiu.edu/~rhern268/Includes/Centro.php">page 1</a></li>
                <li><a href="http://ocelot.aul.fiu.edu/~rhern268/Includes/Asia.php">page 2</a></li>
                <li><a href="http://ocelot.aul.fiu.edu/~rhern268/Includes/Latin.php">page 3</a></li>
                <li><a href="http://ocelot.aul.fiu.edu/~rhern268/Includes/fastfood.php">page 4</a></li>
             </ul>
         
          <li><a href="http://ocelot.aul.fiu.edu/~rhern268/Includes/Program 2.php">Program 2</a></li>
	  <li><a href="http://ocelot.aul.fiu.edu/~rhern268/Includes/Program 3.php">Program 3</a></li>                      
          <li><a href="http://ocelot.aul.fiu.edu/~rhern268">Home</a></li>
       </ul>

    </nav>
     
  </body> 

</html>


   </body>
   
</html>