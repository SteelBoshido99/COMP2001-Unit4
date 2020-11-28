<?php include_once 'header.php';?>
    <body class = "bg-info">
        <div class= "container-fluid col-md-10 offset-md-1">
            <div class = "row">
                <div class = "card mt-3 px2 py-2">

                    <h1>Stationery Application</h1>
                    <p>Welcome to this functional stationary application page created for COMP2001 example.
                        To continue please accept our terms and conditions</p>

                    <form action="agreement.php" method="GET">
                        <div class="form-check">
                            <input type="radio" id="Agree" name="option" value="I Agree">
                            <label for="Agree">I Agree</label><br>
                        </div>
                        <div class = "form-check">
                            <input type="radio" id="Disagree" name="option" value="I Disagree">
                            <label for="Disagree">I Disagree</label><br>
                        </div>
                        <div class = "form-group">
                            <input type="submit" value="Submit" class="btn btn-primary mb-2"/>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </body>
<?php include_once 'footer.php';?>



