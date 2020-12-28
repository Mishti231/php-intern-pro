<?php 
    session_start();
  if(isset($_POST['submit']))
  {
        $name=$_POST['sname'];
        $email=$_POST['email'];
        $mob=$_POST['mob'];
        $date=$_POST['date'];
        $course=$_POST['course'];
        $gender=$_POST['gender'];
        $address=$_POST['address'];
        $additional_details=$_POST['additional_details'];

        if($name!="" and $email!="" and $mob!=""  and  $date!=""  and  $course!="" and   $gender!=""  and   $address!=""  and   $additional_details!=""  )
        {
            $to = "pbhaumik200@gmail.com";//admin email
            $toUser = "$email";//user email

            $subject="New query submitted";//admin subject
            $userSubject="Thank you for sending email";//user subject
            
            //admin message
            $message = "Please find the details below:
                        Name: ".$name;
            $userMessage="Thank you for submitted your query"; //user message           
            
            //admin mail
            $isAdminMailSent = mail($to,$subject,$message);
            //user mail
            $isUserMailSent= mail($touser, $usersubject, $usermessage);
          
            if(isAdminMailSent){
                $_SESSION['msg'] = "Query Submitted successfully";
            }
            else{
                $_SESSION['msg'] = "Error while submitting query";
            }
            header('Location:contact.php');
        }
      else
      {
        $_SESSION['msg'] = "Error while submitting query";
        header('Location:contact.php');
      }


  }
?>