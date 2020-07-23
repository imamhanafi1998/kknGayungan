@extends('layout.template0')

@section('page_title', "Portal Data - Kelurahan Gayungan Surabaya")
@section('child_title', "Portal Data")

@section('nav')
<li class="nav-item">
    <a class="nav-link" href="{{url('/')}}">Profil</a>
</li>
<li class="nav-item active">
    <a class="nav-link" href="#">Portal Data</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ url('/poster') }}">Poster</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{url('/blog')}}">Blog</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{url('/tentang')}}">Tentang</a>
</li>
@endsection

@section('content')
<main role="main" class="container">

    <div class="jumbotron p-4 p-md-5 text-black rounded bg-white border-bottom">
        <div class="row">
            <div class="col-12 px-0">
                <h1 class="display-4 font-italic">Portal Data Persebaran COVID-19 Kelurahan Gayungan</h1>
                <div class="row">
                    <div class="col-12">
                        <p class="lead my-3">
                            Berikut merupakan beberapa data mengenai persebaran COVID-19 di Kelurahan Gayungan, Kecamatan Gayungan, Kota Surabaya yang bersumber dari situs <a target="_blank" href="https://lawancovid-19.surabaya.go.id/">Surabaya Lawan COVID-19</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header text-center">
            Terakhir diperbarui pada 12:54, 17 Juli 2020
        </div>
        <div class="card-body">
            <div class="row border-bottom">
                <div class="col-12 col-lg-4">
                    <div class="card text-white bg-primary mb-4 text-center">
                        <div class="card-header font-weight-normal">ODP</div>
                        <div class="card-body">
                            <p class="h3">30</p>
                            <!-- <h5 class="card-title">30</h5> -->
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card text-white bg-warning mb-4 text-center">
                        <div class="card-header font-weight-normal">PDP</div>
                        <div class="card-body">
                            <p class="h3">25</p>
                            <!-- <h5 class="card-title">24</h5> -->
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card text-white bg-danger mb-4 text-center">
                        <div class="card-header font-weight-normal">Terkonfirmasi Positif</div>
                        <div class="card-body">
                            <p class="h3">31</p>
                            <!-- <h5 class="card-title">29</h5> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col"></div>
                <div class="mt-4 col-12 col-lg-6">
                    <canvas id="chart-areaODPX"></canvas>
                </div>
                <div class="col"></div>
            </div>
            <div class="row">
                <div class="mt-5 col-12 col-lg-6">
                    <canvas id="chart-areaPDPX"></canvas>
                </div>
                <div class="mt-5 col-12 col-lg-6">
                    <canvas id="chart-areaTPositifX"></canvas>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-body">
            <div class="row">
                <div class="col"></div>
                <div class="col-12 col-lg-6">
                    <canvas id="canvasODP"></canvas>
                </div>
                <div class="col"></div>
                <div class="mt-5 col-12 col-lg-6">
                    <canvas id="canvasPDP"></canvas>
                </div>
                <div class="mt-5 col-12 col-lg-6">
                    <canvas id="canvasTPositif"></canvas>
                </div>
            </div>
        </div>
    </div>

</main>

<script>
    var MONTHS = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
    let date = []
    for (var i = 1; i <= 16; i++) {
        date.push(i.toString());
    }
    const dataODP = [30, 30, 30, 30, 30, 30, 30, 30, 30, 30, 30, 30, 30, 30, 30, 30]
    const dataPDP = [22, 22, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 24, 25, 25, 25]
    const dataTPositif = [25, 26, 27, 27, 28, 28, 28, 28, 29, 29, 29, 29, 29, 30, 30, 31]

    const dataODPX = [7, 23]
    const dataPDPX = [19, 0, 6]
    const dataTPositifX = [23, 0, 8]

    console.log(date)
    var configODP = {
        type: 'line',
        data: {
            labels: date,
            datasets: [{
                label: 'ODP',
                backgroundColor: window.chartColors.blue,
                borderColor: window.chartColors.blue,
                data: dataODP,
                fill: false,
            }]
        },
        options: {
            responsive: true,
            title: {
                display: true,
                text: 'Jumlah ODP per Juli 2020'
            },
            tooltips: {
                mode: 'index',
                intersect: false,
            },
            hover: {
                mode: 'nearest',
                intersect: true
            },
            scales: {
                xAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Tanggal (Juli 2020)'
                    }
                }],
                yAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Jumlah'
                    },
                    ticks: {
                        precision: 0
                    }
                }]
            }
        }
    };

    var configPDP = {
        type: 'line',
        data: {
            labels: date,
            datasets: [{
                label: 'PDP',
                backgroundColor: window.chartColors.yellow,
                borderColor: window.chartColors.yellow,
                data: dataPDP,
                fill: false,
            }]
        },
        options: {
            responsive: true,
            title: {
                display: true,
                text: 'Jumlah PDP per Juli 2020'
            },
            tooltips: {
                mode: 'index',
                intersect: false,
            },
            hover: {
                mode: 'nearest',
                intersect: true
            },
            scales: {
                xAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Tanggal (Juli 2020)'
                    }
                }],
                yAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Jumlah'
                    },
                    ticks: {
                        precision: 0
                    }
                }]
            }
        }
    };

    var configTPositif = {
        type: 'line',
        data: {
            labels: date,
            datasets: [{
                label: 'Terkonfirmasi Positif',
                backgroundColor: window.chartColors.red,
                borderColor: window.chartColors.red,
                data: dataTPositif,
                fill: false,
            }]
        },
        options: {
            responsive: true,
            title: {
                display: true,
                text: 'Jumlah Terkonfirmasi Positif per Juli 2020'
            },
            tooltips: {
                mode: 'index',
                intersect: false,
            },
            hover: {
                mode: 'nearest',
                intersect: true
            },
            scales: {
                xAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Tanggal (Juli 2020)'
                    }
                }],
                yAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Jumlah'
                    },
                    ticks: {
                        precision: 0
                    }
                }]
            }
        }
    };

    var configODPX = {
        type: 'doughnut',
        data: {
            datasets: [{
                data: dataODPX,
                backgroundColor: [
                    window.chartColors.blue,
                    window.chartColors.red
                ],
                label: 'Dataset 1'
            }],
            labels: [
                'Dipantau',
                'Selesai Dipantau'
            ]
        },
        options: {
            responsive: true,
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: 'ODP'
            },
            animation: {
                animateScale: true,
                animateRotate: true
            }
        }
    };

    var configPDPX = {
        type: 'doughnut',
        data: {
            datasets: [{
                data: dataPDPX,
                backgroundColor: [
                    window.chartColors.blue,
                    window.chartColors.red,
                    window.chartColors.yellow
                ],
                label: 'Dataset 1'
            }],
            labels: [
                'Sembuh',
                'Meningggal',
                'Dalam Pengawasan'
            ]
        },
        options: {
            responsive: true,
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: 'PDP'
            },
            animation: {
                animateScale: true,
                animateRotate: true
            }
        }
    };

    var configTPositifX = {
        type: 'doughnut',
        data: {
            datasets: [{
                data: dataTPositifX,
                backgroundColor: [
                    window.chartColors.blue,
                    window.chartColors.red,
                    window.chartColors.yellow
                ],
                label: 'Dataset 1'
            }],
            labels: [
                'Sembuh',
                'Meningggal',
                'Dalam Perawatan'
            ]
        },
        options: {
            responsive: true,
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: 'Terkonfirmasi Positif'
            },
            animation: {
                animateScale: true,
                animateRotate: true
            }
        }
    };

    window.onload = function() {
        var ctxODP = document.getElementById('canvasODP').getContext('2d');
        window.myLine = new Chart(ctxODP, configODP);
        var ctxPDP = document.getElementById('canvasPDP').getContext('2d');
        window.myLine = new Chart(ctxPDP, configPDP);
        var ctxTPositif = document.getElementById('canvasTPositif').getContext('2d');
        window.myLine = new Chart(ctxTPositif, configTPositif);

        var ctxODPX = document.getElementById('chart-areaODPX').getContext('2d');
        window.myDoughnut = new Chart(ctxODPX, configODPX);
        var ctxPDPX = document.getElementById('chart-areaPDPX').getContext('2d');
        window.myDoughnut = new Chart(ctxPDPX, configPDPX);
        var ctxTPositifX = document.getElementById('chart-areaTPositifX').getContext('2d');
        window.myDoughnut = new Chart(ctxTPositifX, configTPositifX);
    };

    var colorNames = Object.keys(window.chartColors);
</script>
@endsection