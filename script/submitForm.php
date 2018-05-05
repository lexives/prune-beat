<?php
    // Initialize form variables
    $firstName = $lastName = $addr1 = $addr2 = $city = $state = "";
    $zip = $phone = $email = $msg = "";
    $errMsg = "";

    if (isset($_POST['submit']) && $_SERVER["REQUEST_METHOD"] == "POST") {
        
        // First Name
        if(empty($_POST["first-name"])) {
            $errMsg .= "First name is required. ";
        }
        else {
            $firstName = test_input($_POST["first-name"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z ]*$/", $firstName)) {
              $errMsg .= "Only letters and white space allowed in First Name field. "; 
            }
        }
        
        // Last Name
        $lastName = test_input($_POST["last-name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $lastName)) {
          $errMsg .= "Only letters and white space allowed in Last Name field. "; 
        }
        
        // Address 1
        $addr1 = test_input($_POST["address-1"]);
        // check if address only contains letters, numbers and whitespace
        if (!preg_match("/^[a-zA-Z0-9 ]*$/", $addr1)) {
          $errMsg .= "Only letters, numbers, and white space allowed in Address 1 field. "; 
        }
        
        // Address 2
        $addr1 = test_input($_POST["address-2"]);
        // check if address only contains letters, numbers and whitespace
        if (!preg_match("/^[a-zA-Z0-9 ]*$/", $addr2)) {
          $errMsg .= "Only letters, numbers, and white space allowed in Address 2 field. "; 
        }
        
        // City
        $city = test_input($_POST["city"]);
        // check if city only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $city)) {
          $errMsg .= "Only letters and white space allowed City field. "; 
        }
        
        // State
        $state = test_input($_POST["state"]);
        
        // Zip
        $zip = test_input($_POST["zip"]);
        if (!empty($zip)) {
            // check if zip only contains numbers
            if (!preg_match("/^[0-9]*$/", $zip)) {
              $errMsg .= "Only numbers allowed in Zip field. "; 
            }
            //check if zip is either 5 or 9 digits
            if (strlen($zip) != 5 && strlen($zip) != 9) {
              $errMsg .= "Zip code must either be 5 or 9 digits long. "; 
            }
        }
        
        // Phone
        $phone = test_input($_POST["phone"]);
        if (!empty($phone)) {
            // check if phone number is valid
            if(!preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $phone) && !preg_match("/^[0-9]{10}$/", $phone)) {
              $errMsg .= "Invalid number in Phone field. Please use either 123-456-7890 or 1234567890 format. "; 
            }
        }
        
        // Email
        if(empty($_POST["email"])) {
            $errMsg .= "Email is required. ";
        }
        else {
            $email = test_input($_POST["email"]);
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              $errMsg .= "Invalid email format. "; 
            }
        }
        
        // Message
        $msg = test_input($_POST["msg-box"]);
        if(empty($msg)) {
            $errMsg .= "Message is required. ";
        }
        
        // If all is good...
        if(empty($errMsg)) {
            
            // Compile data into an email 
            $to = "aei53f@mst.edu";  // change to prune_beat@yahoo.com when in production
            
            $subject = "Message from prune-beat.com\r\m";
            
            $headers = "From: $firstName";
            if(!empty($lastName)) {
                $headers .= $lastName;
            }
            $headers .= "\r\nReply To: $email\r\n";
            
            $body = $msg."\r\n";
            if(!empty($addr1)) $body .= $addr1."\r\n";
            if(!empty($addr2)) $body .= $addr2."\r\n";
            if(!empty($city)) $body .= $city.", ";
            if(!empty($state)) $body .= $state."\t";
            if(!empty($zip)) $body .= $zip."\r\n";
            if(!empty($phone)) $body .= $phone."\r\n";
            
            // Send email
            if(mail($to, $subject, $body, $headers)) {
                $errMsg = "Thank You! Your message has been sent.";
            }
            else {
                $errMsg = "Error sending email.";
            }
        } 
    }


    // Function to format textbox input
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>