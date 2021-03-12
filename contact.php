<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | ICCIHandwara</title>
    <link href="./Css/bootstrap.css" rel="stylesheet" >
    <script src="./Js/bootstrap.js"></script>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card">
                    <div class="card-title">
                        <h2 class="text-center py-2">Contact Us</h2>
                        <hr/>
                        <?php
                            $msg = "";
                            if(isset($_GET['error'])){
                                $msg = "invalid input!";
                                echo '<div class="alert alert-danger">'.$msg.'</div>';
                            }
                            if(isset($_GET['success'])){
                                $msg = "thank you, for contacting us\nmessage has been sent sucessfully!";
                                echo '<div class="alert alert-danger">'.$msg.'</div>';
                            }
                        ?>
                    </div>
                    <div class="card-body">
                        <form action="submit.php" method="post">
                            <input type="text" name="username" placeholder="USERNAME" class="form-control mb-2">
                            <input type="email" name="email" placeholder="EMAIL" class="form-control mb-2">
                            <input type="text" name="subject" placeholder="SUBJECT" class="form-control mb-2">
                            <textarea type="text" name="message" placeholder="MESSAGE" class="form-control mb-2"></textarea>
                            <button class="btn btn-success" name="send-btn">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>