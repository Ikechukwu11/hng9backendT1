<?php
    //CORS SETTINGS
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: *");
    header("Access-Control-Allow-Methods: *");
    
    if($_SERVER['REQUEST_METHOD']==="GET"){

        $slackUsername="kekesmovic";
        $backend=true; 
        $age = 29;
        $bio = "I am a fullstack developer and a gamer. I am here to make new techie friends, expand my horizon and gain experience on this internship program.";

        $details = array(
            "slackUsername"=> $slackUsername, 
            "backend"=>$backend,
            "age"=>$age,
            "bio"=>$bio
        );

        // Use json_encode() function 
        $json = json_encode($details); 
          
        // Display the output 
        echo($json); 
    } 
?>