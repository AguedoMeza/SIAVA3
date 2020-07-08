<?php
//echo $_SESSION['login']['presolicitud']

?>

<div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="lnr-pie-chart icon-gradient bg-mean-fruit">
                    </i>
                </div>
                <div>Dashboard Comercial Diario
                    <div class="page-title-subheading">
                    </div>
                </div>
            </div>
        </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Colocación VS Presupuesto Diario</h5>
                <div class="pull-right">
                    <div class="btn-group">
                        <p><span id="date" class="label label-info"></span></p>
                    </div>
                </div>
            </div>
            <div class="ibox-content">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="flot-chart">
                            <div id="ct-chart4" class="flot-chart-content" id="flot-dashboard-chart"></div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div  id="gauge" >

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">

            <div class="ibox-content">
                <div class="row">
                    <div class="col-lg-6">
                        <h5>Productos Colocados</h5>
                        <div class="text-center">
                            <span id="sparkline9"></span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <canvas id="doughnutChart3"></canvas>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



<script src="<?php echo base_url('public') ?>/vendor/inspinia2.7/js/jquery-3.1.1.min.js"></script>


<script>



    $( document ).ready(function() {

        $('#date').text("18-05-2020");

        new Chartist.Bar('#ct-chart4', {
            labels: ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'],
            series: [
                [5, 4, 3, 7, 5, 10],
                [3, 2, 9, 5, 4, 6]
            ]
        }, {
            seriesBarDistance: 10,
            reverseData: true,
            horizontalBars: true,
            axisY: {
                offset: 70
            }
        });


        c3.generate({
            bindto: '#gauge',
            data:{
                columns: [
                    ['data', 91.4]
                ],

                type: 'gauge'
            },
            color:{
                pattern: ['#1ab394', '#BABABA']

            }
        });


        var doughnutData = {
            labels: ["App","Software","Laptop" ],
            datasets: [{
                data: [300,50,100],
                backgroundColor: ["#a3e1d4","#dedede","#b5b8cf"]
            }]
        } ;

        $("#sparkline9").sparkline([52, 12, 44], {
            type: 'pie',
            height: '200px',
            sliceColors: ['#1ab394', '#b3b3b3', '#e4f0fb']});

        var doughnutOptions = {
            responsive: true
        };


        var ctx4 = document.getElementById("doughnutChart3").getContext("2d");
        new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});


    });



</script>