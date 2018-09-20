<?php require('quotes.php'); ?>
<!DOCTYPE html>
<html lang='en'>
    
<head>
    <meta charset="utf-8" lang="en">
    <title>About Mihika</title>
    <meta name="Mihika's Wall" content="A Collection of Work and Thought Inspiration">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="responsive.css">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i|Raleway:400,700" rel="stylesheet">

</head>
    
<body>
        
    <header>

        <nav>
            <img src="Images27-1/Icon-01.png" alt="Mihika Shilpi">
        <ul>            
            <li>/mihika.</li>
        </ul>
        </nav>
        
    </header>        
        
    <div id="content">
            
        <div id="panel">
             <blockquote>
                <?php echo $quotepick[$randQuote]; ?>
             </blockquote>
        </div>

        <main>
                
            <div class="col1" id="mihika_pic">
                    <!--Image Div-->
            </div>
                
            <div class="col2" id="Mihika">    
                <h1>designer, mathematician, traveller, ponderer</h1>
                <p>Bonjour, Namaste! I’m a classic academic nerd who was going to be a material scientist, diplomat or professional chef, but instead fled down the design corridor and am now an Art Director at a branding agency in Paris. I moved here a year ago, and fall in love with Europe more every week - for the coffee, for the wine, for the cheese and for the travel.</p>
                 <p>I’m also a bit (a lot) of a theoretical math geek and am an undergraduate student at Harvard University’s Extension School, concentrating in Mathematics and minoring in DGMD and CSCI. </p>
                <p>Aside from all of this, I like to invent things around the kitchen when there’s cheese, Avocados, asian sauces or chocolate involved; I collect beautifully designed books, plan to someday teach Math, and I love taking the car out for a long night drive.</p>
                <p>If you know anything I should know (about design, math, coffee or otherwise) I’d love to hear!</p>
            </div>
                
        </main>

    </div>
        
    <footer>
        Copyright 2017 Mihika Shilpi
        All Rights Reserved
    </footer>
        
</body>
    
</html>
