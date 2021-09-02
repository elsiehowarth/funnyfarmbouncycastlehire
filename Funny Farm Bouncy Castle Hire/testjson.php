<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Funny Farm Bouncy Castle Hire</title>
        <meta name="description" content="Funny Farm Bouncy Castle Hire">
        <meta name="keywords" content="Bouncy Castle">

        <?php include("includes/head.php"); ?>
    </head>
    <body id="main">
	    <?php include("includes/header.php"); ?>
        <?php include("includes/homepage-banner.php"); ?>

        <div class="container padding text-center">
            <h1>Welcome to Funny Farm Bouncy Castle Hire</h1>

            <p id="demo"></p>

           <?php
           // Get the contents of the JSON file
           $strJsonFileContents = file_get_contents("castles.json");

           ?>

            <script>
                var myObj, i, j, x = "";
                myObj = <?php echo $strJsonFileContents; ?>;
                for (i in myObj.childcastles) {
                    x += "<h2>" + myObj.childcastles[i].name + "</h2>";
                    x += myObj.childcastles[i].size + "<br>";
                    x += myObj.childcastles[i].price + "<br>";
                }
                document.getElementById("demo").innerHTML = x;
            </script>

        </div>
        <?php include("includes/footer.php"); ?>
    </body>
</html>
