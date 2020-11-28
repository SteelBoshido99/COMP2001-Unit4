<?php include_once 'header.php';?>

    <body class = "bg-info">
        <div class= "container-fluid col-md-10 offset-md-1">
            <div class = "row">
                <div class = "card mt-3 px2 py-2">

                <?php
                session_start();
                $decision = $_GET ["option"];
                echo "Welcome you have selected ". $decision  ." for the agreement";?>

                </div>
            </div>
        </div>
    </body>

<?php include_once 'footer.php';?>