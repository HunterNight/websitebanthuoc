<?php
require(PATH_APPLICATION."/views/header.php");
?>
<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Contact Us</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <!DOCTYPE html>
    <html>
    <head>
        <script
            src="http://maps.googleapis.com/maps/api/js">
        </script>
<div style="" >

    <center>    <script>
            var myCenter=new google.maps.LatLng(20.974904297477746,105.8144760131836);

            function initialize()
            {
                var mapProp = {
                    center:myCenter,
                    zoom:5,
                    mapTypeId:google.maps.MapTypeId.ROADMAP
                };

                var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

                var marker=new google.maps.Marker({
                    position:myCenter,
                });

                marker.setMap(map);

                var infowindow = new google.maps.InfoWindow({
                    content:"Shop Tan Duoc!"
                });

                google.maps.event.addListener(marker, 'click', function() {
                    infowindow.open(map,marker);
                });
            }

            google.maps.event.addDomListener(window, 'load', initialize);
        </script></center>
</div>
    </head>


    <body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div id="googleMap" style="width:380px;height:380px;"></div>
            </div>
            <div class="col-md-8">
                <div class="alert alert-success">
                    Thông tin liên lạc
                </div>
                <h4>Lê Hoài Nam</h4>
                <h5>
                    <b>SDT: 0943767467</b>
                </h5>
                <h4>Trần Mạnh Quỳnh</h4>
                <h5>
                    <b>SDT: 01699005565</b>
                </h5>
            </div>
        </div>
    </div>

    </body>
    </html>

</div>

<?php
require(PATH_APPLICATION."/views/footer.php");
?>
