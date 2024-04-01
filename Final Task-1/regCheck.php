<?php
    require_once('shop.php');

    $name = $_REQUEST['name'];
    $contact = $_REQUEST['contact'];
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    

    function namecheck($name)
    {
        $words = explode(" ", $name);

        function validChar($words) 
        {
            foreach ($words as $word) {
                for ($i = 0; $i < strlen($word); $i++)
                {
                    $char = $word[$i];
                    if (!ctype_alpha($char) && $char !== '.' && $char !== '-')
                    {
                        return false;
                    }
                }
            }
            return true;
        }
        function hasAtLeastTwoWords($words) {
            return (count($words) >= 2);
        }
        function startLetter($words) {
            foreach ($words as $word) {
                if (!ctype_alpha($word[0])) {
                    return false;
                }
            }
            return true;
        }

        if ($name == "") 
        {
            echo "Name cannot be empty";
        } 
        else if (!hasAtLeastTwoWords($words)) {
            echo "Must contain at least two words";
        }
        else if (!validChar($words)) 
        {
            echo "Can only contain letters (a-z, A-Z), periods (.), and dashes (-).";
        }
        elseif (!startLetter($words))
        {
            echo "All words must start with a letter.";
        }  
        else 
        {
        return true;
        }
    }
    
    

    if(namecheck($name))
    {
        $user = ['name' => $name, 'contact'=>$contact, 'username'=> $username, 'password'=>$password];
        $status = createUser($user);
        if($status){
            header('location: reg.php');
        }else{
            echo "Error!";
        }
    }
?>
