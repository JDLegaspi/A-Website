<!-- FOOTER -->
<footer class="site-footer section b-t color-1 bg-7">
    <div class="container pb-3">
        <div class="row text-center text-md-left">
            <div class="col-md-5 mr-auto">
                <h4 class="color-1">About <span class="bold">Networx</span></h4>

                <p>Networx is a platform that gives you the power to create your own decentralised network on the Networx infrastructure. Purchase space with our token, and be seen through our collaborative platform.</p>
            </div>

            <div class="col-md-3">
                <h4 class="color-1"><span class="bold">Follow</span> Us</h4>

                <nav class="nav flex-column mt-3">
                    <a  class="nav-link pl-0" href="https://twitter.com/networx_project"><i class="fa-twitter"></i> Twitter</a>
                    <a  class="nav-link pl-0" href="https://medium.com/@networxproject"><i class="fa fa-newspaper-o" aria-hidden="true"></i> Medium</a>
                    <a  class="nav-link pl-0" href="https://t.me/joinchat/GYGO2xJULL7c1ZBN_Ycy9g"><i class="fa fa-telegram" aria-hidden="true"></i> Telegram</a>
                </nav>
            </div>

            <div class="col-md-3">
                <h4 class="color-1">Stay<span class="bold"> in touch</span></h4>
    
                <p>Talk to us on Slack!</p>
    
                <a class="btn btn-rounded btn-outline-2" href="https://join.slack.com/t/networxproject/shared_invite/enQtMjcwMzYyMDEyOTEzLWJkNjQzZjVhMWQ3NzVjNzE2YTQyM2YyYTEzMjMyODBiOGMyNmY1NTNkNDY4ODY3NzIxNTg1YmZkOGNhMTdlNzc">
                    Join Us Now!
                </a>
            </div>
        </div>

        <hr class="mt-5 bg-6">
        <div class="row footer-bottom small align-items-center">
            <div class="col-md-4">
                <p class="mt-2 mb-0">© 2017 <a href="http://www.fuzeweb.com.au">Fuze Web Design.</a> All Rights Reserved</p>
            </div>

            <div class="col-md-4">
                <img src="img/logo.png" class="d-flex icon mx-auto" alt="">
            </div>
        </div>
    </div>
</footer>

<!-- Individuals JS libraries. Remove these lines if you use the minified version -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/swiper.jquery.min.js"></script>
<script src="js/aos.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/pace.min.js"></script>
<script src="js/modernizr-2.8.3.min.js"></script>
<script src="js/forms.min.js"></script>
<script src="js/main.js"></script>

<script>
$(document).ready(function() {
    var movementStrength = 25;
    var height = movementStrength / $(window).height();
    var width = movementStrength / $(window).width();
    $("#top-image").mousemove(function(e){
        var pageX = e.pageX - ($(window).width() / 2);
        var pageY = e.pageY - ($(window).height() / 2);
        var newvalueX = width * pageX * -1 - 25;
        var newvalueY = height * pageY * -1 - 50;
        $('#top-image').css("background-position", newvalueX+"px     "+newvalueY+"px");
    });
});
</script>