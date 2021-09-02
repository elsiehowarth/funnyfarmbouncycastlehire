<!DOCTYPE html>
<html lang="en">

<head>
    <title>Giant Games | Funny Farm Bouncy Castle Hire</title>
    <meta name="description" content="Giant Games Bouncy Castles">
    <meta name="keywords" content="Giant Games Bouncy Castles">

    <?php include("includes/head.php"); ?>

</head>
<body id="main">
<?php include("includes/header.php"); ?>

<div class="container inner-padding text-center">
    <h1>Giant Games</h1>
    <p>Variety of giant games available for hire with any bouncy castle booking. Perfect addition for both children and big kids at gatherings and parties.</p>

    <div class="item-grid" id="contentarea"></div>

    <?php
    // Get the contents of the JSON file
    $strJsonFileContents = file_get_contents("castles.json");

    ?>

    <script>
        var myObj, i, j, x = "";
        myObj = <?php echo $strJsonFileContents; ?>;
        for (i in myObj.giantgames) {
            x += "<div class='item'>";
            x += "<img src='/assets/images/" + myObj.giantgames[i].image + "'>";
            x += "<div class='item-content'>";
            x += "<h3>" + myObj.giantgames[i].name + "</h3>";
            x += "<p>" + myObj.giantgames[i].size + "</p>";
            x += "</div>";
            x += "</div>";
        }
        document.getElementById("contentarea").innerHTML = x;
    </script>


</div>

<?php include("includes/footer.php"); ?>
</body>
</html>
