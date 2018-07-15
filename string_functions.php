<html>
    <head>
    <title>String Functions</title>
    </head>
    <body>
        <?php
        
        
        $myString1="First String";
        $myString2="Second String";
        $myString3=$myString1;
        $myString3.=myString3;
        
        echo $myString3;
        ?>
        
        <br/>
        Lowercase:<?php echo strtolower($myString3);?><br/>
        Uppercase:<?php echo strtolower($myString3);?><br/>
        Uppercase first:<?php echo ucfirst($myString3);?><br/>
        Uppercase words:<?php echo ucwords($myString3);?><br/>
    </body>
</html>