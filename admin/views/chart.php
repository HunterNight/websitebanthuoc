<?php
//Header
require(PATH_APPLICATION . "/views/header.php");
//Left
require(PATH_APPLICATION . "/views/left.php");
//Main
require(PATH_APPLICATION . "/controllers/product_controller.php");
$product = new product_controller();
?>
<script src="https://cdnjs.com/libraries/chart.js"></script>
<div id="page_content">
    <div id="page_content_inner">
        <script type="text/javascript">

            window.onload = function () {
                init();
            };

            function init() {
                var ctx = $("#myChart").get(0).getContext("2d");

                var data = {
                    labels: ["January", "February", "March", "April", "May", "June", "July"],
                    datasets: [
                        {
                            fillColor: "rgba(220,220,220,0.5)",
                            strokeColor: "rgba(220,220,220,1)",
                            pointColor: "rgba(220,220,220,1)",
                            pointStrokeColor: "#fff",
                            data: [65, 59, 90, 81, 56, 55, 40]
                        },
                        {
                            fillColor: "rgba(151,187,205,0.5)",
                            strokeColor: "rgba(151,187,205,1)",
                            pointColor: "rgba(151,187,205,1)",
                            pointStrokeColor: "#fff",
                            data: [28, 48, 40, 19, 96, 27, 100]
                        }
                    ]
                }

                var myNewChart = new Chart(ctx).Line(data);
            }

        </script>
        <div>
            <section>
                <article>
                    <canvas id="myChart" width="400" height="400">
                    </canvas>
                </article>
            </section>
        </div>
    </div>
</div>

