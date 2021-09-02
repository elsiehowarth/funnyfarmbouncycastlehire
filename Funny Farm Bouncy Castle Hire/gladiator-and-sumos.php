<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gladiator and Sumos | Funny Farm Bouncy Castle Hire</title>
    <meta name="description" content="Gladiator and Sumos Bouncy Castles">
    <meta name="keywords" content="Gladiator and Sumos Bouncy Castles">

    <?php include("includes/head.php"); ?>

</head>
<body id="main">
<?php include("includes/header.php"); ?>

<div class="container inner-padding text-center">
    <h1>Gladiator and Sumos</h1>

    <p>Add extra fun to your parties with the gladiator duel or sumo suits available in both adults and child sizes. Great fun for all ages.</p>

    <div class="item-grid" id="contentarea"></div>

    <?php
    // Get the contents of the JSON file
    $strJsonFileContents = file_get_contents("castles.json");

    ?>

    <script>
        var myObj, i, j, x = "";
        myObj = <?php echo $strJsonFileContents; ?>;
        for (i in myObj.gladiatorandsumos) {
            x += "<div class='item'>";
            x += "<img src='/assets/images/" + myObj.gladiatorandsumos[i].image + "'>";
            x += "<div class='item-content'>";
            x += "<h3>" + myObj.gladiatorandsumos[i].name + "</h3>";
            x += "<p>" + myObj.gladiatorandsumos[i].size + "</p>";
            x += "<p class='price'>" +myObj.gladiatorandsumos[i].price + "</p>";
            x += "</div>";
            x += "</div>";
        }
        document.getElementById("contentarea").innerHTML = x;
    </script>


</div>

<?php include("includes/footer.php"); ?>
</body>
</html>
