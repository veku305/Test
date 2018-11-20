<html>
<head>
<body onload="help()">

<script>



function help()
{
   // Open a new window at a specific location
   var myWindow = window.open("", "Help","width=500, height=600, scrollbars=yes,resizable=yes, left=870, top=50"); 
     	
   
   // Display the purpose of each button on the form in the newly opened window
   myWindow.document.write("<h2>Buttons Purpose:\n</h2>");
     
   myWindow.document.write("<p>\n- <b>FIND.</b> find the value in the front end <span style='color:red'>'FOUND'</span></p>");
   
   myWindow.document.write("<p>\n- <b>SAVE.</b> save the value in the front end  </p>");
   
   myWindow.document.write("<p>\n- <b>MODIFY.</b> modify data that the user inputs in the front end </p>");
   
   myWindow.document.write("<p>\n- <b>DELETE.</b> this is will delete the record from the table and the front end </p>");
   
   myWindow.document.write("<p>\n- <b>CLEAR.</b> This button will clear everything</p>");

   myWindow.document.write("<p>\n- <b>HELP.</b> This button will show you what each button do </p>");
  
   myWindow.document.write("<p>\n- <b>ABOUT.</b> This button will give us a brief story about us</p>");
 
   myWindow.document.write("<p>\n- <b>CONTACT.</b> This button will take you to the contacts page </p>");

   myWindow.document.write("<p>\n- <b>LEADS.</b> This button will take you to the lead page and display each contact information</p>");




}


</script>



</body>
</head>
</html>