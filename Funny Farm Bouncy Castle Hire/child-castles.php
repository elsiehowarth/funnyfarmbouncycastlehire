<!DOCTYPE html>
<html lang="en">

<head>
    <title>Childrens Castles | Funny Farm Bouncy Castle Hire</title>
    <meta name="description" content="Childrens Castles Bouncy Castles">
    <meta name="keywords" content="Childrens Castles Bouncy Castles">

    <?php include("includes/head.php"); ?>

</head>
<body id="main">
<?php include("includes/header.php"); ?>

<div class="container inner-padding text-center">
    <h1>Childrens Castles</h1>
    <p>Range of Bouncy Castles suitable for CHILDREN ONLY therefore perfect for children's parties and gatherings. In order to meet further demand there are also a selection of low high castle for different indoor events.</p>

    <div class="item-grid" id="contentarea"></div>

    <?php
    // Get the contents of the JSON file
    $strJsonFileContents = file_get_contents("castles.json");

    ?>

    <script>
        var myObj, i, j, x = "";
        myObj = <?php echo $strJsonFileContents; ?>;
        for (i in myObj.childcastles) {
            x += "<div class='item'>";
            x += "<img src='/assets/images/" + myObj.childcastles[i].image + "'>";
            x += "<div class='item-content'>";
            x += "<h3>" + myObj.childcastles[i].name + "</h3>";
            x += "<p>" + myObj.childcastles[i].size + "</p>";
            x += "<p class='price'>" +myObj.childcastles[i].price + "</p>";
            x += "</div>";
            x += "</div>";
        }
        document.getElementById("contentarea").innerHTML = x;
    </script>


</div>

<?php include("includes/footer.php"); ?>
</body>
</html>
