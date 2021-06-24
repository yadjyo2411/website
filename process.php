P Code for Form Processing (form-process.php):
<?php

$errorMSG = "";

// NAME
if (empty($_POST["Name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST["Name"];
}

// EMAIL
if (empty($_POST["Email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email = $_POST["Email"];
}

// MSG SUBJECT
if (empty($_POST["Phone"])) {
    $errorMSG .= "Subject is required ";
} else {
    $msg_subject = $_POST["Phone"];
}


// MESSAGE
if (empty($_POST["Message"])) {
    $errorMSG .= "Message is required ";
} else {
    $message = $_POST["Message"];
}

//Add your email here
$EmailTo = "demo2show1@gmail.com";
$Subject = "New Message Received";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Subject: ";
$Body .= $msg_subject;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}

?>