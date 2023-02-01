<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div id="container" class="container">
        <!-- Left Menu / Logo-->
        <div class="menu" id="menu">
            <div class="logo">
                <!-- Logo image-->
                <img src="assets/logo.jpg" width="100" height="100" alt="" />
                <!-- Logo name-->
                <!-- <span>Andrew Smith</span> -->
            </div>
            <!-- Mobile Navigation-->
            <a href="#menu1" class="menu-link"></a>
            <!-- Left Navigation-->
            <nav id="menu1" role="navigation"> <a href="#chapterintroduction"><span id="link_introduction"
                        class="active">Home</span></a> <a href="#chapterabout"><span id="link_about">About</span></a> <a
                    href="#chapterskills"><span id="link_skills">Skills</span></a> <a href="#chapterexperience"><span
                        id="link_experience">Experience</span></a> <a href="#chaptereducation"><span
                        id="link_education">Education</span></a> <a href="#chapterportfolio"><span
                        id="link_portfolio">Portfolio</span></a><a href="#chaptercontact"><span
                        id="link_contact">Contact</span></a><a href="blog.html"><span id="link_blog">Blog</span></a>
            </nav>
            <div class="social"> <a href="https://www.facebook.com" target="_blank" class="facebook"><i
                        class="fa fa-facebook"></i></a> <a href="https://twitter.com" target="_blank" class="twitter"><i
                        class="fa fa-twitter"></i></a> <a href="https://plus.google.com" target="_blank"
                    class="google-plus"><i class="fa fa-google-plus"></i></a> </div>
            <div class="copyright"> © Aruttcorp.<br>
                All Rights Reserved. </div>
        </div>
        <div class="page">
            <div class="box">Page 1 </div>
        </div>
        <div class="page">
            <div class="box">Page 2</div>
        </div>
        <div class="page">
            <div class="box">Page 3</div>
        </div>
        <div class="page">
            <div class="box">Page 4</div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
        $(document).on('mousewheel DOMMouseScroll', function(event) {
            var delta = 0;
            if (event.type === 'mousewheel') {
                delta = event.originalEvent.wheelDelta / 120;
            } else if (event.type === 'DOMMouseScroll') {
                delta = -event.originalEvent.detail / 3;
            }
            if (delta > 0) {
                var currentPage = Math.floor($(window).scrollLeft() / window.innerWidth);
                var newPage = Math.max(0, currentPage - 1);
                var newScroll = newPage * window.innerWidth;
                $(window).scrollLeft(newScroll);
            } else if (delta < 0) {
                var currentPage = Math.ceil($(window).scrollLeft() / window.innerWidth);
                var newPage = Math.min($('.page').length - 1, currentPage + 1);
                var newScroll = newPage * window.innerWidth;
                $(window).scrollLeft(newScroll);
            }
            event.preventDefault();
        });
        </script>
</body>

</html>