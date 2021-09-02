<!DOCTYPE html>
<html lang="en">

<head>
    <title>Castles with Slides | Funny Farm Bouncy Castle Hire</title>
    <meta name="description" content="Bouncy Castles with Slides">
    <meta name="keywords" content="Bouncy Castles with Slide">

    <?php include("includes/head.php"); ?>

</head>
<body id="main">
<?php include("includes/header.php"); ?>

<div class="container inner-padding text-center">
    <h1>Castles with Slide</h1>
    <p>Range of side slide castles for CHILDREN ONLY, all fitted with rain covers. As you may have noticed the side slide castle pictures contain the same castle, that is because it has changeable velcros to meet your different party requirements.</p>

    <div class="item-grid" id="contentarea"></div>

    <?php
    // Get the contents of the JSON file
    $strJsonFileContents = file_get_contents("castles.json");

    ?>

    <script>
        var myObj, i, j, x = "";
        myObj = <?php echo $strJsonFileContents; ?>;
        for (i in myObj.castleslide) {
            x += "<div class='item'>";
            x += "<img src='/assets/images/" + myObj.castleslide[i].image + "'>";
            x += "<div class='item-content'>";
            x += "<h3>" + myObj.castleslide[i].name + "</h3>";
            x += "<p>" + myObj.castleslide[i].size + "</p>";
            x += "<p class='price'>" +myObj.castleslide[i].price + "</p>";
            x += "</div>";
            x += "</div>";
        }
        document.getElementById("contentarea").innerHTML = x;
    </script>


</div>

<?php include("includes/footer.php"); ?>
</body>
</html>
