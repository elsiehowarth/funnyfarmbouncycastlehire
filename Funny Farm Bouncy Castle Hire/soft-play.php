<!DOCTYPE html>
<html lang="en">

<head>
    <title>Soft Play | Funny Farm Bouncy Castle Hire</title>
    <meta name="description" content="Soft Play">
    <meta name="keywords" content="Soft Play">

    <?php include("includes/head.php"); ?>

</head>
<body id="main">
<?php include("includes/header.php"); ?>

<div class="container inner-padding text-center">
    <h1>Soft Play</h1>

    <div class="item-grid" id="contentarea"></div>

    <?php
    // Get the contents of the JSON file
    $strJsonFileContents = file_get_contents("castles.json");

    ?>

    <script>
        var myObj, i, j, x = "";
        myObj = <?php echo $strJsonFileContents; ?>;
        for (i in myObj.softplay) {
            x += "<div class='item'>";
            x += "<img src='/assets/images/" + myObj.softplay[i].image + "'>";
            x += "<div class='item-content'>";
            x += "<h3>" + myObj.softplay[i].name + "</h3>";
            x += "<p class='price'>" +myObj.softplay[i].price + "</p>";
            x += "</div>";
            x += "</div>";
        }
        document.getElementById("contentarea").innerHTML = x;
    </script>


</div>

<?php include("includes/footer.php"); ?>
</body>
</html>
