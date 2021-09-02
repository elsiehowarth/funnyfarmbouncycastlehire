<!DOCTYPE html>
<html lang="en">

<head>
    <title>Adults and Children Bouncy Castles | Funny Farm Bouncy Castle Hire</title>
    <meta name="description" content="Adults and Children Bouncy Castles">
    <meta name="keywords" content="Adults and Children Bouncy Castles">

    <?php include("includes/head.php"); ?>

</head>
<body id="main">
<?php include("includes/header.php"); ?>

<div class="container inner-padding text-center">
    <h1>Suitable for Adults and Children</h1>
    <p>Wide selection of Bouncy Castles suitable for both children and adults, perfect for mixed friends and family gatherings and parties. All castles (EXCEPT DISCO DOME) available overnight (weather permitting) for an additional cost of £20.00. Disco dome £30.00 additional charge overnight.</p>

    <div class="item-grid" id="contentarea"></div>

    <?php
    // Get the contents of the JSON file
    $strJsonFileContents = file_get_contents("castles.json");

    ?>

    <script>
        var myObj, i, j, x = "";
        myObj = <?php echo $strJsonFileContents; ?>;
        for (i in myObj.adultchildcastles) {
            x += "<div class='item'>";
            x += "<img src='/assets/images/" + myObj.adultchildcastles[i].image + "'>";
            x += "<div class='item-content'>";
            x += "<h3>" + myObj.adultchildcastles[i].name + "</h3>";
            x += "<p>" + myObj.adultchildcastles[i].size + "</p>";
            x += "<p class='price'>" +myObj.adultchildcastles[i].price + "</p>";
            x += "</div>";
            x += "</div>";
        }
        document.getElementById("contentarea").innerHTML = x;
    </script>


</div>

<?php include("includes/footer.php"); ?>
</body>
</html>
