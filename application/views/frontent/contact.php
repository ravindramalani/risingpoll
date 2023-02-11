<style>
h1{
    font-size:2rem;
    color: #1F5AB2;
    text-align: center;
    margin:20px 0;
}
@media (min-width:767px) {
    .w-75{
        width: 60%!important;
    }
}

@media (max-width:767px) {
    .w-75{
        width: 95%!important;
    }
}
</style>



<section class="mt-4 mb-3">
    <div class="border w-75 m-auto p-3 "> 
        <h1>Contact us</h1>   
        <form class="row g-3" method="POST">
            <div class="col-12 my-2">
                <!-- <label for="name" class="form-label">Name</label> -->
                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
            </div>
            <div class="col-12 my-2">
                <!-- <label for="email" class="form-label">E-mail</label> -->
                <input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
            </div>
            <div class="col-12 my-2">
                <!-- <label for="subject" class="form-label">Subject</label> -->
                <input type="text" class="form-control" id="subject" name="subject" placeholder="write your subject">
            </div>
            <div class="col-12 my-2">
                <!-- <label for="complaint" class="form-label">Complaint</label> -->
                <textarea class="form-control" id="Textarea1" name="message" rows="3" placeholder="write your complaint"></textarea>
            </div>
            <div class="col-1  mx-auto">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>

        <?php
            // $name=$_REQUEST['name'];
            // $email=$_REQUEST['email'];
            // $subject=$_REQUEST['subject'];
            // $message=$_REQUEST['message'];

            // if(empty($name) || empty($email) || empty($message)){
            //     echo "please fill all the fields";
            // }
            // else{
            //     mail("seouser39@gmail.com", $subject, $message, "from: $name <$email>");
            //     echo " <script type= 'text/javascript'> alert(' your message sent successfully ');
            //         window.history.log(-1);
            //     </script>";
            // }


            // if(isset($_POST['submit'])){
            //     $to = "seouser39@gmail.com";
            
            
            
            //     $name = $_POST['name'];
            //     $email= $_POST['email'];
            //     $subject= $_POST['subject'];
            //     $message= $_POST['message'];
            //     $headers = 'From: '.$email . "\r\n";
            
            
            //     $body = "name : ".$name. "\r\n" .
            //             "Message : " . $message;
            //     if(mail($to, $subject, $message , $headers)){
            //         echo "Mail Sent!";
            //     }else{
            //          echo "Failed To Send Mail";
            //     }
            // }

        ?>
    
    </div>
</section>
<!-- <script src="http://php.net/smtp-port"></script> -->