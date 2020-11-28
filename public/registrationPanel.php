<?php include_once 'header.php';?>
<body class = "bg-info">
<div class= "container-fluid col-md-10 offset-md-1">
    <div class = "row">
        <div class = "card mt-3 px2 py-2">

            <form action="landing.php" method="POST">
                <div class="form-check">
                    <input type="text" id="txtName" name="CustomerName">
                    <label for="txtName">Customer Name*</label><br>
                </div>
                <div class = "form-check">
                    <input type="text" id="txtPostcode" name="Postcode">
                    <label for="txtPostcode">Postcode*</label><br>
                </div>
                <div class = "form-check">
                    <input type="text" id="txtEmail" name="Email">
                    <label for="txtEmail">Email(Optional)</label><br>
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
