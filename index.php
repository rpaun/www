<?php
    include($_SERVER['DOCUMENT_ROOT'] . '/res/php/header.php');
?>
<div class="container-fluid" id="header">
    <div class="container" id="header-content">
        <div class="breaker lg"></div>    
        <div class="breaker lg"></div>    
        <div class="breaker lg"></div>    
        <div class="breaker lg"></div>    
        <div class="row">
            <div class="col-md-6 col-sm-8 col-xs-12">
                <h1>Explore the Distant Corners of the World</h1>
                <span class="btn btn-outline-light btnn" id="">Learn more</span>
            </div>
        </div>
    </div>
</div>
<div class="breaker lg"></div>
<div class="container" id="content-pricing">
    <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="pricing-info">
                <img src="/res/images/pricing1.jpg" class="img-fluid"/>

                <div class="pricing-inner">
                    <span class="pricing-name">
                        A4-Days Tour of Amsterdam and Zaanse Schansmsterda
                    </span>

                    <ul class="font-secondary">
                        <li><img src="/res/images/icon-marker.png"/> Amsterdam / The Netherlands</li>
                        <li><img src="/res/images/icon-time.png"/> 4 days - 3 nights</li>
                    </ul>

                    <span class="btn btn-primary">
                        $1400.00
                    </span>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="pricing-info">
                <img src="/res/images/pricing2.jpg" class="img-fluid"/>

                <div class="pricing-inner">
                    <span class="pricing-name">
                        2-Day Yosemite National Park Tour from San Francisco
                    </span>

                    <ul class="font-secondary">
                        <li><img src="/res/images/icon-marker.png"/> San Francisco / USA</li>
                        <li><img src="/res/images/icon-time.png"/> 2 days - 1 nights</li>
                    </ul>

                    <span class="btn btn-primary">
                        $1400.00
                    </span>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="pricing-info">
                <img src="/res/images/pricing3.jpg" class="img-fluid"/>

                <div class="pricing-inner">
                    <span class="pricing-name">
                        3-Day Normandy, St Malo, Mont Saint-Michel Tour from Paris
                    </span>

                    <ul class="font-secondary">
                        <li><img src="/res/images/icon-marker.png"/> France / Paris</li>
                        <li><img src="/res/images/icon-time.png"/> 3 days - 2 nights</li>
                    </ul>

                    <span class="btn btn-primary">
                        $1400.00
                    </span>
                </div>
            </div>
        </div>
    </div>
    
</div>
<div class="breaker lg"></div>
<div class="container text-center" id="content-findus">
    <h1>Where you can find us</h1>
</div>
<div class="container-fluid" id="map-wrapper"></div>

<script async defer src="https://maps.googleapis.com/maps/api/js?callback=initMap"></script>
<?php
    include($_SERVER['DOCUMENT_ROOT'] . '/res/php/footer.php');
?>