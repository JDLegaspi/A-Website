<!doctype html>
<html class="no-js" lang="en">

<?php include_once 'header.php';?>
<!--align-items-center image-background cover parallax overlay overlay-5 alpha-8-->

<main>
    
    <header id="top-image" class="fullscreen parallax header hd-1 section parallax align-items-center image-background cover p100-bottom overlay overlay-5 alpha-9 color-1 d-flex">
        <div class="container color-1 text-center">
            <h1 class="display-5 display-md-4">Networx is a self-governing internetwork powered by the people</h1>
    
            <p class="lead">Using the Ethereum blockchain, we give you the power to create your very own decentralised projects on your very own Networx real estate</p>

        </div>
    </header>

    <section id="about" class="overview">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 text-center text-md-left">
                    <h2>About <span class="bold">Networx</span></h2>
                    <hr class="my-4">
                    <p class="lead">Networx is a platform that gives you the power to create your own decetralised network on the Networx infrastructure.</p>

                    <p>Users can purchase digital real estate on our platform and build applications using their space. They will be in complete control of their network, and their creation will have no presence monitoring or moderating them.</p>

                    <hr class="my-4"/>
                    <p class="mt-0 mb-1 small text-muted">Available on</p>
                    
                    <div class="d-flex align-items-center justify-content-center justify-content-md-start available-on">
                        <a  href="https://twitter.com/networx_project"><i class="fa-twitter"></i></a>
                        <a  href="https://medium.com/@networxproject"><i class="fa fa-newspaper-o" aria-hidden="true"></i></a>
                        <a  href="https://t.me/joinchat/GYGO2xJULL7c1ZBN_Ycy9g"><i class="fa fa-telegram" aria-hidden="true"></i></a>
                    </div>
                </div>

                <div class="col-md-5 ml-auto">
                    <img class="img-responsive" src="img/section-1-img.png" alt="..." data-aos="fade-left">
                </div>
            </div>
        </div>
    </section>

    <section id="token" class="section parallax align-items-center p100-bottom overlay overlay-5 alpha-10 d-flex" style="padding: 70px 0;">
        <div class="container">
            <div class="row align-items-center text-center text-lg-left">
                <div class="col-12 col-md-6 col-lg-5 order-lg-2 ml-md-auto text-center text-md-left">
                    <div class="text-center text-md-left">
                            <h2>Networx <span class="bold">Token</span></h2>
                            <hr class="my-4">
                            <p class="lead">In correspondence to the Networx platform, we introduce the Networx token (NWX).</p>
        
                            <p>Powered by blockchain technology, this ERC20 token can be used to buy land to create a network, send to other users, as well as participate in community-wide events hosted by the Networx team.</p>
                        </div>
                </div>

                <div class="col-12 col-md-6 col-lg-5 order-lg-1">
                    <img class="img-responsive" src="img/section-2-img.png" alt="..." data-aos="fade-right">
                </div>
            </div>
        </div>
    </section>

    <section id="platform" class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 alpha-5 text-center text-md-left">
                    <h2 class="mb-3">We Want You To Be <span class="bold">Seen</span></h2>
                    <hr class="my-4"/>

                    <p>Users will be able to rank, rate, search, and sort through a collection of created networks. You can use this platform to browse content created by developers on our decentralised Networx platform.</p>
                </div>

                <div class="col-md-5 ml-auto">
                    <img class="img-responsive" src="img/section-3-img.png" alt="..." data-aos="fade-left">
                </div>
            </div>
        </div>
    </section>

</main>

<?php include_once 'footer.php';?>

<script>
    /**
     * SCROLLING NAVIGATION
     * Enable smooth transition animation when scrolling
     **/
    $('a.scrollto').on('click', function (event) {
        event.preventDefault();

        var scrollAnimationTime = 1200;
        var target = this.hash;

        $('html, body').stop().animate({
            scrollTop: $(target).offset().top
        }, scrollAnimationTime, 'easeInOutExpo', function () {
            window.location.hash = target;
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('.section-link').each(function() {
            var link = $(this).attr('href');
            var newlink = link.replace('index.php', '');
            $(this).attr('href', newlink);
        });
    });
</script>

<!-- Uncomment the following to use the minified version of JS. If you do this, please remove the above references -->
<!-- <script src="js/lib.min.js"></script>
<script src="js/kairos.min.js"></script> -->

</body>
</html>
