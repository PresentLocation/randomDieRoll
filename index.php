<?php


// <--- THIS DOUBLE DASH, IN PHP, REPRESENTS A COMMENT TAG. THE ENTIRE LINE AFTER THIS DOUBLE DASH IS COMMENTED OUT AND IS NOT READ BY THE PHP PARSER

// EXAMPLE OF VARIABLE THAT PERFORMS MATH
$math = 4 + 1;

// EXAMPLE OF VARIABLE THAT REPRESENTS A NON-MATHEMATICAL STRING
$pizza = "Math? Rad.";

// EXAMPLE OF A VARIABLE THAT INVOKES A PHP FUNCTION, IN THIS CASE, THE rand() FUNCTION
$number = rand(0,5);

// EXAMPLE OF A SWITCH STATEMENT. THE STATEMENT IS BEING USED TO PROCESS THE RESULT OF $number. SPECIFICALLY, THIS STATEMENT MAPS THE RESULT OF $number TO A CORRESPONDING IMAGE, WHICH WILL BE USED AS DYNAMIC CONTENT IN THE PHP OUTPUT

switch ($number)
{
    case "0":
        $imageFile ="dado-1.png";
        break;
    case "1":
        $imageFile ="dado-2.png";
        break;
    case "2":
        $imageFile ="dado-3.png";
        break;
    case "3":
        $imageFile ="dado-4.png";
        break;
    case "4":
        $imageFile ="dado-5.png";
        break;
    case "5":
        $imageFile ="dado-6.png";
        break;
    default:
        $imageFile ="dado-3.png";
}

// BASED ON THE LOGIC PERFORMED IN THE SWITCH STATEMENT ABOVE, THE RESULTING $imageFile IS THE IMPLIED FINAL OUTPUT OF THIS PHP SCRIPT

?>


<html>
<head>

    </head>
    <body style="background-color: green; text-align: center; padding: 2em;">
	    <!-- HERE IS A DEMONSTRATION OF HOW TO PLACE FINAL PHP OUTPUT WITHIN HTML -->
       
       <p><img src=<?=$imageFile ?> >


	   <!-- HERE IS A DEMONSTRATION OF HOW TO USE A SIMPLE LINK TO REFRESH THE PAGE AND EXPERIENCE THE RANDOMIZED DYNAMIC OUTPUT ONCE AGAIN -->
	   <h1><a href=index.php>Roll Again</a></h1>
	   
	   <div style="width: 300px; margin: 0 auto; background-color: rgba(255,255,255,0.1); padding: 20px;">
		   <h4>Some dynamic information from the PHP scripting demonstration process that seems irrelevant now that the app is complete but we shall include it anyway</h4>
		   <p><?=$math ?> <?=$pizza ?> <?=$number ?>
		</div>
    </body>

</html>