<!DOCTYPE html>
<html class="no-js">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title></title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->

<link rel="stylesheet" href="css/main.css">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<link href="css/idangerous.swiper.css" rel="stylesheet" type="text/css" />
<link href="css/idangerous.swiper.scrollbar.css" rel="stylesheet" type="text/css" />
<script src="js/idangerous.swiper.js" type="text/javascript"></script>
</head>
<body>

<div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide orange">
            <div class="logo"><img src="images/logo.png" alt=""></div>
            <h4 class="breadcrumb">About the awards</h4>
            <h1>Got an idea with business potential?</h1>
            <div class="splash"><img src="images/splash-1.png" alt=""></div>
            <h2>We want to help you kickstart it! The Student Entrepreneur Awards are looking for ideas to blow our minds!</h2>
            <h2><b>First prize is &euro;10,000</b></h2>
        </div>

        <div class="swiper-slide blue">
            <h4 class="breadcrumb">Why enter?</h4>
            <div class="digit">5</div>
            <h1 class="yellow">Reasons to enter</h1>
        </div>
        <div class="swiper-slide blue">
            <h4 class="breadcrumb">Why enter?</h4>
            <div class="digit">1</div>
            <h1>Win &euro;10,000</h1>
            <h2>Cash to kickstart your business is reason enough, but if you need more convincing then keep reading.</h2>
        </div>
        <div class="swiper-slide blue">
            <h4 class="breadcrumb">Why enter?</h4>
            <div class="digit">2</div>
            <h1>Helps you stand out</h1>
            <h2>In today's competitive employment market, showing initiative and drive can go a long way.</h2>
        </div>
        <div class="swiper-slide blue">
            <h4 class="breadcrumb">Why enter?</h4>
            <div class="digit">3</div>
            <h1>Enhances your CV</h1>
            <h2>As a winner of this prestigious award, you'll have demonstrated the skills, commitment and innovation employers seek.</h2>
        </div>
        <div class="swiper-slide blue">
            <h4 class="breadcrumb">Why enter?</h4>
            <div class="digit">4</div>
            <h1>Opportunity to become an entrepreneur</h1>
            <h2>Be your own boss with unique support from the Student Entrepreneur Awards.</h2>
        </div>
        <div class="swiper-slide blue">
            <h4 class="breadcrumb">Why enter?</h4>
            <div class="digit">5</div>
            <h1>A potential career</h1>
            <h2>Previous winners are now working with world-leading organisations.</h2>
        </div>

        <div class="swiper-slide red">
            <div class="swiper-container swiper-nested-1">
                <div class="pagination pagination-nested-1"></div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <h4 class="breadcrumb">Previous winners</h4>
                        <h1 class="winner">
                            <img src="http://www.zinc.ie/ei/wp-content/uploads/2013/10/MATech-2013.1-325x225.jpg" alt="">
                            <span>2013 - ITC</span>
                        </h1>
                    </div>
                    <div class="swiper-slide">
                        <h1 class="winner">
                            <img src="http://www.zinc.ie/ei/wp-content/uploads/2013/10/DRS-2012.3-325x225.jpg" alt="">
                            <span>2012 - NUIG</span>
                        </h1>
                    </div>
                    <div class="swiper-slide">
                        <h1 class="winner">
                            <img src="http://www.zinc.ie/ei/wp-content/uploads/2013/10/Prometheus-2011.1-325x225.jpg" alt="">
                            <span>2011 - DCU</span>
                        </h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-slide green">
            <h4 class="breadcrumb">Tip</h4>
            <h1 class="quote"><span class="quotemark">&ldquo;</span><br>Don't try to be original, just try to be good.<span class="quotemark">&rdquo;</span></h1>
            <div class="author">- Paul Rand</div>
            <h2><b>TIP: DON'T WAFFLE</b><br>Video entries should be clear, concise and focused on getting your idea across. Remember, it's all about the idea! Gimmicks and distractions don't help.</h2>
        </div>
        <div class="swiper-slide green">
            <h4 class="breadcrumb">Get started!</h4>
            <h1>Stay updated!</h1>
            <div class="splash"><img src="images/submit.png" alt=""></div>
            <div class="form">
                <input type="email" name="email">
                <input type="submit" name="appsubmit" value="Find out more!">
            </div>
        </div>
    </div>
    <div class="pagination-parent"></div>
</div>

<script>
var mySwiper = new Swiper('.swiper-container',{
    pagination: '.pagination-parent',
    paginationClickable: true,
    DOMAnimation: false,
    resistance: false,
    preventLinks: false,
    grabCursor: true,
    keyboardControl: true
})
var swiperNested1 = new Swiper('.swiper-nested-1',{
    mode: 'vertical',
    pagination: '.pagination-nested-1',
    paginationClickable: false,
    slidesPerView: 2,
    keyboardControl: true
})
</script>
</body>
</html>
