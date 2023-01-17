<?php
include 'parts/header.php';
?>
<!--activities_section start  -->
<section class="activities_section py-3">
    <div class=" container ">
        <div class=" activities row  ">
            <h1 class="title text-center py-5">Our Group Activities</h1>
            <div class="col-md-4 col-sm-6">
                <a href="">
                    <img src="image/activiti/g27.jpg" alt="" height="180" width="200">
                    <p class="text"> Group Member </p>
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href=""><img src="image/activiti/w.jpg" alt="" height="180" width="200">
                    <p class="text"> Weekly Group Meetings </p>
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="activiti-img ">
                    <a href=""><img src="image/activiti/g.jpg" alt="" height="180" width="200">
                        <p class="text"> Group programs </p>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mt-3">
                <a href=""><img src="image/activiti/n1.jpg" alt="" height="180" width="200">
                    <p class="text">National Programs </p>
                </a>
            </div>
            <div class="col-md-4 col-sm-6 mt-3">
                <a href=""> <img src="image/activiti/s6.jpg" alt="" height="180" width="200">
                    <p class="text"> Social works </p>
            </div></a>
            <div class="col-md-4 col-sm-6 mt-3">
                <a href=""><img src="image/activiti/s14.jpg" alt="" height="180" width="200">
                    <p class="text"> Others . . .</p>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- activities_section end -->

<!-- carousel_section start -->


<section class="carousel_section bg-color">
    <div class="container">
        <div class="owl-carousel owl-theme pb-5">
            <div class="item pb-5"><img src="image/activiti/g3.jpg"></div>
            <div class="item" pb-5><img src="image/activiti/s14.jpg"></div>
            <div class="item" pb-5><img src="image/activiti/g2.jpg"></div>
            <div class="item" pb-5><img src="image/activiti/g21.jpg"></div>
            <div class="item" pb-5><img src="image/activiti/n13.jpg"></div>
            <div class="item" pb-5><img src="image/activiti/o21.jpg"></div>
            <div class="item" pb-5><img src="image/activiti/o9.jpg"></div>
        </div>
    </div>
</section>
<!-- carousel_section end -->

<!-- owl carousel js -->
<script src="js/jquery-3.6.1.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script type="text/javascript">
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        autoplay:true,
        autoplayTimeout:3000,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })
</script>

<?php
include 'parts/footer.php'
?>