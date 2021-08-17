@extends('layouts.web.publicMaster')

@section('content')
<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Management Proyek</h1>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
<section id="content">
    <div class="content-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <p class="lead">Progress Percepatan Ekonomi Nasional Unit Pengelola Sampah Terpadu Dinas Lingkungan Hidup Provinsi DKI Jakarta</p>
                </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div id="chart"></div>
                    <div><h4 class="text-center">Manajemen Proyek</h4></div>
                </div>
                <div class="col-md-4">
                    <div id="chart2"></div>
                    <div><h4 class="text-center">Manajemen Konstruksi</h4></div>
                </div>
                <div class="col-md-4">
                    <div id="chart3"></div>
                    <div><h4 class="text-center">Penyusunan Amdal</h4></div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
@push('script')
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    var options = {
          series: [76],
          chart: {
          type: 'radialBar',
          offsetY: -20,
          sparkline: {
            enabled: true
          }
        },
        plotOptions: {
          radialBar: {
            startAngle: -90,
            endAngle: 90,
            track: {
              background: "#e7e7e7",
              strokeWidth: '97%',
              margin: 5, // margin is in pixels
              dropShadow: {
                enabled: true,
                top: 2,
                left: 0,
                color: '#999',
                opacity: 1,
                blur: 2
              }
            },
            dataLabels: {
              name: {
                show: false
              },
              value: {
                offsetY: -2,
                fontSize: '22px'
              }
            }
          }
        },
        grid: {
          padding: {
            top: -10
          }
        },
        fill: {
          type: 'gradient',
          gradient: {
            shade: 'light',
            shadeIntensity: 0.4,
            inverseColors: false,
            opacityFrom: 1,
            opacityTo: 1,
            stops: [0, 50, 53, 91]
          },
        },
        labels: ['Average Results'],
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
</script>
<script>
    var options = {
          series: [25],
          chart: {
          type: 'radialBar',
          offsetY: -20,
          sparkline: {
            enabled: true
          }
        },
        plotOptions: {
          radialBar: {
            startAngle: -90,
            endAngle: 90,
            track: {
              background: "#e7e7e7",
              strokeWidth: '97%',
              margin: 5, // margin is in pixels
              dropShadow: {
                enabled: true,
                top: 2,
                left: 0,
                color: '#999',
                opacity: 1,
                blur: 2
              }
            },
            dataLabels: {
              name: {
                color: '#888',
                show: false
              },
              value: {
                offsetY: -2,
                fontSize: '22px'
              }
            }
          }
        },
        grid: {
          padding: {
            top: -10
          }
        },
        fill: {
          type: 'gradient',

          gradient: {
            shade: 'light',
            shadeIntensity: 0.4,
            inverseColors: false,
            opacityFrom: 1,
            opacityTo: 1,
            stops: [0, 50, 53, 91],

          },
        },
        labels: ['Average Results'],
        };

        var chart = new ApexCharts(document.querySelector("#chart2"), options);
        chart.render();
</script>
<script>
    var options = {
          series: [48],
          chart: {
          type: 'radialBar',
          offsetY: -20,
          sparkline: {
            enabled: true
          }
        },
        plotOptions: {
          radialBar: {
            startAngle: -90,
            endAngle: 90,
            track: {
              background: "#e7e7e7",
              strokeWidth: '97%',
              margin: 5, // margin is in pixels
              dropShadow: {
                enabled: true,
                top: 2,
                left: 0,
                color: '#999',
                opacity: 1,
                blur: 2
              }
            },
            dataLabels: {
              name: {
                show: false
              },
              value: {
                offsetY: -2,
                fontSize: '22px'
              }
            }
          }
        },
        grid: {
          padding: {
            top: -10
          }
        },
        fill: {
          type: 'gradient',
          gradient: {
            shade: 'light',
            shadeIntensity: 0.4,
            inverseColors: false,
            opacityFrom: 1,
            opacityTo: 1,
            stops: [0, 50, 53, 91]
          },
        },
        labels: ['Average Results'],
        };

        var chart = new ApexCharts(document.querySelector("#chart3"), options);
        chart.render();
</script>
@endpush
