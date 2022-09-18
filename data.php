<?php 
        $koneksi= new mysqli('localhost', 'root', '', 'db_sensor');
        $sql_ID = mysqli_query($koneksi, "SELECT MAX(id) FROM tb_sensor");
        $data_ID = mysqli_fetch_array($sql_ID);

        $ID_akhir = $data_ID['MAX(id)'];
        $ID_awal = $ID_akhir -4 ;
        $sql = "SELECT * FROM tb_sensor WHERE id>= '$ID_awal' and id<='$ID_akhir' ORDER BY id ASC";
        $kelembaban = $koneksi->query($sql);
        $tanggal = $koneksi->query($sql);

    ?>
 <div class="card shadow mb-4">
    <div class="card-header py-8">
        <h6 class="m-0 font-weight-bold text-primary "> Grafik Sensor</h6>
    </div>
    <div class="card-body">
        <div class="chart-area">
            <canvas  id="myChart"></canvas>
            <div id="chartContainer"  ></div>
        </div>
    </div>
</div>    
<script>
    const ctx = document.getElementById('myChart');
    ctx.height =0;
    ctx.width =0;
    const myChart = new Chart(ctx, {
        
        type: 'line',
        data: {
            labels: [<?php while($data_tanggal = mysqli_fetch_array($tanggal)) { echo '"' . $data_tanggal['tanggal'] . '",'; } ?>],
            datasets: [{
                label: "Nilai Kelembaban",
                data: [ <?php
                            while($data_kelembaban = mysqli_fetch_array($kelembaban)){
                                echo $data_kelembaban['kelembaban'].',' ;
                            }    
                        ?>],
                backgroundColor: 'rgba(54, 162, 235, 0.1)',
                borderColor: 'rgba(70, 124, 132, 1)',
                borderWidth: 3,
                fill : true,
                lineTension : 0.5,
                pointRadius :4,
            }],
        },
        options: {
            animation:false,
            scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true,
                    min: 0,
                    max: 600
                }
            }],
            xAxes:{
                ticks: {
                    type: 'time',
                    time: {
                        displayFormats: {
                        quarter: 'MMM YYYY'
                    }
                    },
                    beginAtZero: true,
                    min: 0,
                    max: 700
                }
            }
            }
        }
        
    });
</script>

