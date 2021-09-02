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

            <p>Funny Farm Bouncy Castle Hire, based in Freckleton, is an established business that has been running for many years. We specialise in Bouncy Castles and Giant Games for all ages and cover a large area including Freckleton, Kirkham, Warton, Lytham St. Annes and Preston. Our aim is to provide a great service to all our customers, and we take great pride in providing this.</p>
            <p>We have very competitive prices and often have special offers available! Our equipment suits a wide range of occasions e.g. birthdays, barbeques, christenings, weddings, and fun days etc.</p>
            <p>Funny Farm Bouncy Castle Hire provide a 7 day a week, all year-round service, with our castles being suitable for both indoors and outdoors. We have a selection of themed castles to make your children’s parties extra special. Our equipment is affordable with castles starting from just £50 and £10 for add-ons.</p>
            <p>Funny Farm Bouncy Castle Hire are committed to ensuring that all the equipment we provide is safe and clean. Your safety is very important to us and therefore our equipment is insured, and PAC tested.</p>
            <p>Feel free to contact us on 07900411555 if you have any questions. Remember to keep checking our website to see new stock, offers and events that we are attending.</p>

            <p><strong>Check out our facebook to see some reviews about the service we have provided.</strong></p>
        </div>
        <div class="most-popular">
            <h2 class="text-center">Check out some of our most popular <strong>Bouncy Castles</strong></h2>

            <div class="container padding">
                    <div class="item-grid" id="popular"></div>

                    <?php
                    // Get the contents of the JSON file
                    $strJsonFileContents = file_get_contents("castles.json");

                    ?>

                    <script>
                        var myObj, i, j, x = "";
                        myObj = <?php echo $strJsonFileContents; ?>;
                        for (i in myObj.popular) {
                            x += "<div class='item'>";
                            x += "<img src='/assets/images/" + myObj.popular[i].image + "'>";
                            x += "<div class='item-content'>";
                            x += "<h3>" + myObj.popular[i].name + "</h3>";
                            x += "<p>" + myObj.popular[i].size + "</p>";
                            x += "<p class='price'>" +myObj.popular[i].price + "</p>";
                            x += "</div>";
                            x += "</div>";
                        }
                        document.getElementById("popular").innerHTML = x;
                    </script>

            </div>
        </div>
        <?php include("includes/footer.php"); ?>
    </body>
</html>
