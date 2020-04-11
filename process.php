<?php 

if(isset($_POST["submit"]))

{
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $textme = $_POST["textme"];

    {
        $userData = [
            'firstname' => $firstname,
            'lastname' => $lastname,
            'email' => $email,
            'textme' => $textme,
    
        ];
    
        file_put_contents("data/ ". $firstname . ".json", json_encode($userData));
        
        echo  "<font color='blue'>File Added Successful</font>" ;

    }
     

}
else{
    echo "There there was an Error in saving this file";

}

?>
