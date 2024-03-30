<?php
    $fname = $_REQUEST['fname'];
    $lname = $_REQUEST['lname'];
    $dd = $_REQUEST['dd'];
    $mm = $_REQUEST['mm'];
    $yyyy = $_REQUEST['yyyy'];
    $gender = $_REQUEST['gender'];
    $phone = $_REQUEST['phone'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    



    function fnamecheck($fname)
    {
        $words = explode(" ", $fname);

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

        if ($fname == "") 
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

    function lnamecheck($lname)
    {
        $words = explode(" ", $lname);

        function validChar2($words) 
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
        
        function startLetter2($words) {
            foreach ($words as $word) {
                if (!ctype_alpha($word[0])) {
                    return false;
                }
            }
            return true;
        }

        if ($lname == "") 
        {
            echo "Name cannot be empty";
        } 
        else if (!validChar2($words)) 
        {
            echo "Can only contain letters (a-z, A-Z), periods (.), and dashes (-).";
        }
        elseif (!startLetter2($words))
        {
            echo "All words must start with a letter.";
        }  
        else 
        {
            return true;
        }

        
    }
    
    function emailcheck($email){
        
        $atPos = strpos($email, "@");
        
        if ($email == "") {
            echo "Email Address Cannot be Empty";
        } 
        else if ($atPos === false || $atPos === 0 || $atPos === strlen($email) - 1) 
        {
            $isValid = false;
            echo "Email must contain '@' symbol not at the beginning or end.";
        }
        else 
        {
            return true;
        }
    }

    function gendercheck($gender) 
    {
        if ($gender == "Male" || $gender == "Female" || $gender == "Others" ) 
        {
            return true;
        } 
        else 
        {
            echo "Please select a gender.";
            return false; 
        }
    }


    
    function DOBCheck($dd,$mm,$yyyy)
    {
        if (empty($dd) || empty($mm) || empty($yyyy)) 
        {
            echo "Date .";
        } 
        else 
        {
            $dd = intval($dd);
            $mm = intval($mm);
            $yyyy = intval($yyyy);

            if (!is_numeric($dd) || !is_numeric($mm) || !is_numeric($yyyy)) {
            echo "Date Cannot be Empty.";
            } 
            else if ($dd < 0 || $dd > 31 || $mm < 1 || $mm > 12 || $yyyy < 1900 || $yyyy > 2016) 
            {
            echo "Invalid date is .";
            } 
            else 
            {
                return true;
            }
        }
    }

    if(fnamecheck($fname) && lnamecheck($lname) && emailcheck($email) && gendercheck($gender) && DOBCheck($dd,$mm,$yyyy))
    {
        header('location: details.html');
    }
?>
