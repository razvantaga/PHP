<?php

ini_set('display_errors',1);

    // setam buton de send
    if(isset($_POST['btn-send']))
    {
        // declaram variabilele campurilor
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        // afisam un mesaj de eroare pentru fiecare camp 
        if(empty($name) || empty($email) || empty($subject) || empty($message))
        {
            header('location:index.php?error');
        }
        else
        {
            //daca campurile au fost completate trimitem mail la o adresa 
            $to = "razvantaga97@gmail.com";
            $send = mail($to, $subject, $message, $email);
            //var_dump($send); -- aici afiseaza false
            // apelam functia mail si daca mesajul s-a trimis afisam succes, daca nu afisam eroare
            if($send)
            {

                header('location:index.php?success');
            }

            //var_dump($send); -- si aici tot false
        }
    }else{
        header('location:index.php');
    }

?>