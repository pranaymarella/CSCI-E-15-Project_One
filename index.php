<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width"/>
        <title>Pranay Marella</title>
    </head>

    <body>
        <div id="particles-js" class="test">
        </div>

        <div class="panel" data-aos="fade-left" data-aos-anchor="#particles-js" style="display:block;">
            <h1>Hi, I'm <span style="color: white;">Pranay</span> Marella.</h1>
            <h3>Entrepreneur. <span style="color: white;">Software Engineer.</span></h3>
        </div>

        <div class="grid">
            <div id="about-me" class="about">
                <div class="title"><p>About me</p></div>
                <div class="title"><img src="images/pranay.jpg" alt="Picture of me"/></div>
                <div class="content">
                    <p>My name is Pranay Marella. I am a student at the University of Illinois at Urbana Champaign. Studying Economics and Statistics. I expect to do my masters in Software Engineering from Harvard Extension School starting in Fall 2018.</p>
                </div>
                <div class="content"><b>
                    <?php
                    $phrases = [
                        "The best preparation for tomorrow is doing your best today. - H. Jackson Brown, Jr.",
                        "Stay foolish. Stay hungry. - Steve Jobs",
                        "If opportunity doesn't knock, build a door. - Milton Berie",
                    ];

                    echo $phrases[rand(0, 3)];
                    ?></b>
                </div>
            </div>
        </div>

        <script>
        AOS.init();
        </script>
        <script type="text/javascript" src="js/small.js"></script>
        <script type="text/javascript" src="js/particles.min.js"></script>
        <script type="text/javascript" src="js/particles.js"></script>
    </body>
</html>
