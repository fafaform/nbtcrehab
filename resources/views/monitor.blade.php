@extends('layouts.app')

@section('navbar')
  @parent

  <nav class="nav has-shadow">
    <div class="container">
      <div class="nav-left">
        <a class="nav-item is-tab" href="/patients">Patient</a>
        <a class="nav-item is-tab" href="/devices/{{ encrypt($Patient_ID) }}">Device</a>
        <a class="nav-item is-tab is-active">Monitor</a>
      </div>

      <div class="nav-right">
        <p class="nav-item is-tab">{{ auth()->user()->name }}</p>
        <a class="nav-item is-tab" href="/logout">
          <span class="icon is-medium">
            <i class="fa fa-sign-out" aria-hidden="true"></i>
          </span>
        </a>
      </div>
    </div>
  </nav>
@endsection

@section('content')
  <section class="section">
    <div class="container">
      <br>
      <h1 class="title has-text-centered">Monitor</h1>
      <hr>

      <!-- {{ $Patient_ID . ' ' . $Device_ID }} -->

      <div class="columns">
        <div class="column is-three-quarters">
          <!-- <canvas class="notification" id="myChart"></canvas> -->
  @if ($Device_ID == 1 || $Device_ID == 2 || $Device_ID == 3 || $Device_ID == 4)
          <!-- ระบบวัดองศาข้อไหล่ -->
          <canvas class="notification" id="devicea"></canvas>
  @endif

  @if ($Device_ID == 5 || $Device_ID == 6)
          <!-- ระบบอุปกรณ์ Triflo -->
          <canvas class="notification" id="deviceb1"></canvas>
          <canvas class="notification" id="deviceb2"></canvas>
  @endif

  @if ($Device_ID == 7 || $Device_ID == 8 || $Device_ID == 9 || $Device_ID == 10 || $Device_ID == 11 || $Device_ID == 12)
          <!-- อุปกรณ์ฝึกหายใจ BreatheMAX -->
          <canvas class="notification" id="devicec1"></canvas>
          <canvas class="notification" id="devicec2"></canvas>
          <canvas class="notification" id="devicec3"></canvas>
  @endif

  @if ($Device_ID == 13 || $Device_ID == 14 || $Device_ID == 15)
          <!-- อุปกรณ์บริหารข้อเข่าแบบไอโซโทนิกด้วยถุงทราย -->
          <canvas class="notification" id="deviced"></canvas>
  @endif

  @if ($Device_ID == 16 || $Device_ID == 17)
          <!-- อุปกรณ์บริหารข้อเข่าแบบไอโซคิเนติก -->
          <canvas class="notification" id="devicee"></canvas>
  @endif

          <!-- ECG -->
        </div>
        <div class="column">

        <form action="/monitor/testmail" method="POST">
<nav class="panel">
  <p class="panel-heading has-text-centered">
    Action
  </p>
<!--   <p class="panel-tabs" id="tabs">
    <a class="is-active" href="#feedback">Feedback</a>
    <a href="#threshold">Threshold</a>
  </p> -->
  <div class="panel-block">
    <div class="field">
      <p class="control is-expanded">
        <textarea class="textarea is-large" id="Feedback" name="Feedback" placeholder="Feedback"></textarea>
      </p>
    </div>
  </div>
  <div class="panel-block">
    <input type="checkbox" checked>
    Email&nbsp;
    <input type="checkbox">
    SMS&nbsp;
    <button class="button is-primary" type="submit">Send</button>
  </div>
  <div class="panel-block">
    <a class="button is-large is-info is-fullwidth" href="/threshold/{{ encrypt($Patient_ID) }}/{{ encrypt($Device_ID) }}">Threshold</a>
  </div>
  <div class="panel-block">
    <a class="button is-large is-success is-fullwidth" href="/monitor/summary/{{ encrypt($Patient_ID) }}/{{ encrypt($Device_ID) }}">Summary</a>
  </div>
</nav>
</form>

        </div>
      </div>
    </div>
  </section>
@endsection

@push('scripts')
  <script src="{{ asset('lib/chart.js/dist/Chart.js') }}"></script>
<!--   <script>
    var ctx = document.getElementById("myChart");
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
  </script> -->
  <!-- ระบบวัดองศาข้อไหล่ -->
  <script>
    var devicea = document.getElementById("devicea");
    var devicea_chart = new Chart(devicea, {
      type: 'bar',
      data: {
        labels: [["1", "Angle = 125", "Good"], ["2", "Angle = 136", "Good"], ["3", "Angle = 147", "Good"]],
        datasets: [{
          label: 'Degree',
          data: [125, 136, 147],
          backgroundColor: [
          'rgba(54, 162, 235, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(54, 162, 235, 0.2)'
          ],
          borderWidth: 1
        },
        {
          type: 'line',
          label: 'Min Degree Threshold',
          data: [80, 80, 80],
          borderColor: 'rgba(255, 0, 0, 1)',
          backgroundColor: 'rgba(255, 0, 0, 1)',
          fill: false
        },
        {
          type: 'line',
          label: 'Target Degree Threshold',
          data: [100, 100, 100],
          borderColor: 'rgba(0, 255, 0, 1)',
          backgroundColor: 'rgba(0, 255, 0, 1)',
          fill: false
        }]
      },
      options: {
        scales: {
          xAxes: [{
            ticks: {
              beginAtZero:true
            },
            scaleLabel: {
              display: true,
              labelString: 'Time'
            }
          }],
          yAxes: [{
            ticks: {
              stepSize:100,
              beginAtZero:true
            },
            scaleLabel: {
              display: true,
              labelString: 'Degree'
            }   
          }]
        }
      }
    });
  </script>
  <!-- ระบบอุปกรณ์ Triflo -->
  <script>
    var deviceb1 = document.getElementById("deviceb1");
    var deviceb1_chart = new Chart(deviceb1, {
      type: 'bar',
      data: {
        labels: ["1", "2", ["3", "Time"], "4", "5"],
        datasets: [{
          label: 'Volume',
          data: [2380, 2359, 2524, 2797, 1936],
          backgroundColor: [
          'rgba(54, 162, 235, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(54, 162, 235, 0.2)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          xAxes: [{
            ticks: {
              beginAtZero:true
            },
            scaleLabel: {
              display: true,
              labelString: 'Average volume = 2000 cc'
            }
          }],
          yAxes: [{
            ticks: {
              stepSize:500,
              beginAtZero:true
            },
            scaleLabel: {
              display: true,
              labelString: 'Volume'
            }   
          }]
        }
      }
    });

    var deviceb2 = document.getElementById("deviceb2");
    var deviceb2_chart = new Chart(deviceb2, {
      type: 'bar',
      data: {
        labels: [["1", "Pass"], ["2", "Pass"], ["3", "Pass"], ["4", "Fail"], ["5", "Pass"]],
        datasets: [{
          label: 'Second',
          data: [4, 3, 3, 2, 4],
          backgroundColor: [
          'rgba(54, 162, 235, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(54, 162, 235, 0.2)'
          ],
          borderWidth: 1
        },
        {
          type: 'line',
          label: 'Time Threshold',
          data: [3, 3, 3, 3, 3],
          borderColor: 'rgba(0, 255, 0, 1)',
          backgroundColor: 'rgba(0, 255, 0, 1)',
          fill: false
        }]
      },
      options: {
        scales: {
          xAxes: [{
            ticks: {
              beginAtZero:true
            },
            scaleLabel: {
              display: true,
              labelString: 'Time'
            }
          }],
          yAxes: [{
            ticks: {
              stepSize:1,
              beginAtZero:true
            },
            scaleLabel: {
              display: true,
              labelString: 'Second'
            }   
          }]
        }
      }
    });
  </script>
  <!-- อุปกรณ์ฝึกหายใจ BreatheMAX -->
  <script>
    var devicec1 = document.getElementById("devicec1");
    var devicec1_chart = new Chart(devicec1, {
      type: 'bar',
      data: {
        labels: ["1", "2", "3", "4", "5"],
        datasets: [{
          label: 'Average Hold Duration in Set',
          data: [2380, 2359, 2524, 2797, 1936],
          backgroundColor: [
          'rgba(54, 162, 235, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(54, 162, 235, 0.2)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          xAxes: [{
            ticks: {
              beginAtZero:true
            },
            scaleLabel: {
              display: true,
              labelString: 'Set'
            }
          }],
          yAxes: [{
            ticks: {
              stepSize:500,
              beginAtZero:true
            },
            scaleLabel: {
              display: true,
              labelString: 'Average Hold Duration in Set'
            }   
          }]
        }
      }
    });

    var devicec2 = document.getElementById("devicec2");
    var devicec2_chart = new Chart(devicec2, {
      type: 'bar',
      data: {
        labels: ["1", "2", "3", "4", "5"],
        datasets: [{
          label: 'Average Pressure in Set',
          data: [2380, 2359, 2524, 2797, 1936],
          backgroundColor: [
          'rgba(54, 162, 235, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(54, 162, 235, 0.2)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          xAxes: [{
            ticks: {
              beginAtZero:true
            },
            scaleLabel: {
              display: true,
              labelString: 'Set'
            }
          }],
          yAxes: [{
            ticks: {
              stepSize:500,
              beginAtZero:true
            },
            scaleLabel: {
              display: true,
              labelString: 'Average Pressure in Set'
            }   
          }]
        }
      }
    });

    var devicec3 = document.getElementById("devicec3");
    var devicec3_chart = new Chart(devicec3, {
      type: 'bar',
      data: {
        labels: ["1", "2", "3", "4", "5"],
        datasets: [{
          label: 'Number of Pass in Set',
          data: [1, 2, 3, 4, 3],
          backgroundColor: [
          'rgba(54, 162, 235, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(54, 162, 235, 0.2)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          xAxes: [{
            ticks: {
              beginAtZero:true
            },
            scaleLabel: {
              display: true,
              labelString: 'Set'
            }
          }],
          yAxes: [{
            ticks: {
              stepSize:1,
              beginAtZero:true
            },
            scaleLabel: {
              display: true,
              labelString: 'Number of Pass in Set'
            }   
          }]
        }
      }
    });
  </script>
  <!-- อุปกรณ์บริหารข้อเข่าแบบไอโซโทนิกด้วยถุงทราย -->
  <script>
    var deviced = document.getElementById("deviced");
    var deviced_chart = new Chart(deviced, {
     type: 'line',
     data: {
      labels: ['3', ['4', 'ROM:', 'RMS:'], ['5', '70', '80'], ['6', 'MAV:', 'Fair'], ['', '80'], ['', 'ROM:', 'RMS:'], ['', '90', '120'], ['', 'MAV:', 'Good'], ['', '100'], ''],
      datasets: [{
        label: 'Degree',
        data: [0, 0, 30, 30, 0, 0, 30, 30, 0, 0],
        backgroundColor: "rgba(54, 162, 235, 0.2)",
        borderColor: 'rgba(54, 162, 235, 0.2)',
        fill: false,
        lineTension: 0
      },
        {
          type: 'line',
          data: [25, 25, 25, 25, 25, 25, 25, 25, 25, 25],
          borderColor: 'rgba(0, 255, 0, 1)',
          backgroundColor: 'rgba(0, 255, 0, 1)',
          fill: false
        }]
    },
    options: {
      scales: {
        xAxes: [{
          scaleLabel: {
            display: true,
            labelString: 'Time'
          }
        }],
        yAxes: [{
          ticks: {
            stepSize:100,
            max: 200,
            beginAtZero:true
          },
          scaleLabel: {
            display: true,
            labelString: 'Degree'
          }   
        }]
      }
    }
  });
  </script>
  <!-- อุปกรณ์บริหารข้อเข่าแบบไอโซคิเนติก -->
  <script>
    var devicee = document.getElementById("devicee");
    var devicee_chart = new Chart(devicee, {
     type: 'line',
     data: {
      labels: ["","","","","","","","","","","","","",""],
      datasets: [{
        label: 'Torque',
        data: [0,7,12,14,12,7,0,-7,-12,-14,-12,-7,0],
        backgroundColor: "rgba(54, 162, 235, 0.2)",
        borderColor: 'rgba(54, 162, 235, 0.2)',
        fill: false
      }]
    },
    options: {
      scales: {
        xAxes: [{
          scaleLabel: {
            display: true,
            labelString: 'Time'
          }
        }],
        yAxes: [{
          ticks: {
            stepSize:10,
            beginAtZero:true
          },
          scaleLabel: {
            display: true,
            labelString: 'Torque'
          }   
        }]
      }
    }
  });
  </script>
  <!-- ECG -->
@endpush
