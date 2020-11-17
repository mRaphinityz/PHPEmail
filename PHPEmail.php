<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Validator</title>
</head>
<body>
    <h2 style = "color: purple; text-align: center;">Email Validator</h2>

    <?php 
        $EmailAddresses = array("john.smith@php.test", "mary.smith.mail.php.examples", "john.jones@php.invalid", "alan.smithee@test", "alan.smithee@test", "jsmith456@test", "mjones@example", "mjones@example.net", "jane.a.doe@example.org");

        function validateAddress($Address) {
            // analyze the $Address string and check to see if it contains a '@' character and a '.' character
            if(strpos($Address, '@') !== FALSE && strpos($Address, '.') !== FALSE){
                return TRUE;
            }
            else {
                return FALSE;
            }
        }

        // global that loops through array and passes each individual emnail into validateAddress() and checks the return boolean. If the return is FALSE we will write that address onto the page.
        foreach($EmailAddresses as $Address) {
            if(validateAddress($Address) == FALSE) {
                echo "<p>The e-mail address<em>{$Address}</em> does not appear to be valid.</p>";
            }
        }
    ?>
    
</body>
</html>