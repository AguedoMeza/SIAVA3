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
                <div>Dashboard Comercial
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
                <h5>Colocación VS Presupuesto Semanal</h5>
                <div class="pull-right">
                    <div class="btn-group">
                        <p><span id="date" class="label label-info"></span></p>
                    </div>
                </div>
            </div>
            <div class="ibox-content">
                <div class="row">
                    <div class="col-lg-9">
                        <canvas id="barChart" height="100"></canvas>
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
            var barData = {
                labels: ["Semana 14", "Semana 15", "Semana 16", "Semana 17", "Semana 18", "Semana 19", "Semana 20"],
                datasets: [
                    {
                        label: "Presupuesto",
                        backgroundColor: 'rgba(220, 220, 220, 0.5)',
                        pointBorderColor: "#fff",
                        data: [65, 59, 80, 81, 56, 55, 40]
                    },
                    {
                        label: "Colocación Semanal",
                        backgroundColor: 'rgba(26,179,148,0.5)',
                        borderColor: "rgba(26,179,148,0.7)",
                        pointBackgroundColor: "rgba(26,179,148,1)",
                        pointBorderColor: "#fff",
                        data: [28, 48, 40, 19, 86, 27, 90]
                    }
                ]
            };

            var barOptions = {
                height: 50,
            };


            var ctx2 = document.getElementById("barChart").getContext("2d");
            new Chart(ctx2, {type: 'bar', data: barData, options:barOptions});


            $('#date').text("Semana 20");



            c3.generate({
                bindto: '#gauge',
                data:{
                    columns: [
                        ['% Colocacion', 91.4]
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