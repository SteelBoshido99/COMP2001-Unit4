<?php include_once 'header.php';?>

<?php
$name = $_POST["CustomerName"];
$email = $_POST["Email"];
$postcode = $_POST["Postcode"];
?>

    <body class = "bg-info">
    <div class= "container-fluid col-md-10 offset-md-1">
        <div class = "row">
            <div class = "card mt-3 px2 py-2">
                

                <p> Welcome <?php echo $name?>  <br>
                    Your email is <?php echo $email?><br>
                    I see you live at: <?php echo $postcode ?>
                </p>

            </div>
        </div>
    </div>
    </body>

<?php include_once 'footer.php';?>