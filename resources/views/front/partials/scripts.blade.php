<script type='text/javascript' src='{{asset('js')}}/jquery-2.2.3.min.js'></script>
<!-- start-smoth-scrolling -->
<script src="{{asset('js')}}/jarallax.js"></script>
<script type="text/javascript">
    /* init Jarallax */
    $('.jarallax').jarallax({
        speed: 0.5,
        imgWidth: 1366,
        imgHeight: 768
    })
</script>
<!-- flexSlider -->
<script defer src="{{asset('js')}}/jquery.flexslider.js"></script>
<script type="text/javascript">
    $(window).load(function(){
        $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider){
                $('body').removeClass('loading');
            }
        });
    });
</script>
<!-- //flexSlider -->

<!-- Owl-Carousel-JavaScript -->
<script src="{{asset('js')}}/owl.carousel.js"></script>
<script>
    $(document).ready(function () {
        $("#owl-demo").owlCarousel({
            items: 2,
            lazyLoad: true,
            autoPlay: false,
            pagination: true,
        });
    });
</script>
<!-- //Owl-Carousel-JavaScript -->
<script type="text/javascript" src="{{asset('js')}}/move-top.js"></script>
<script type="text/javascript" src="{{asset('js')}}/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
</script>
<!-- start-smoth-scrolling -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function () {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<!-- //here ends scrolling icon -->

<!-- stats -->
<script src="{{asset('js')}}/jquery.waypoints.min.js"></script>
<script src="{{asset('js')}}/jquery.countup.js"></script>
<script>
    $('.counter').countUp();
</script>
<!-- //stats -->

<!--js for bootstrap working-->
<script src="{{asset('js')}}/bootstrap.js"></script>
<script src="{{asset('js')}}/parsley.js"></script>
<!-- //for bootstrap working -->


<script>
    if(localStorage.getItem('cart')== undefined){
        localStorage.setItem('cart',JSON.stringify([]))
    }
    var cart = JSON.parse(localStorage.getItem('cart'))
    var btnCart = document.getElementById("btnCart");
    var item = {}
    btnCart.innerHTML = cart.length;

    function addToCart(product)
    {

        cart.push(product);
        localStorage.setItem('cart',JSON.stringify(cart))
        btnCart.innerHTML = cart.length;

    }

    function loadCart()
    {
        if(cart.length < 0){
            var cartDive = document.getElementById('cartDiv');

            var html = ""
            cart.forEach((product,index) => {
                html += `
                    <tr> <td>${index+1}</td><td> ${product.name}</td><td></td><td></td></tr>
                `
            });
        }
    }


</script>
