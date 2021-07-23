  @include('index')

  @extends('layouts.app')


  <body class="g-sidenav-show  bg-gray-100">

      @include('layouts.side')
      @include('layouts.navbar')

      <div class="container-fluid py-4 ">
          <div class="col-md-4">
              <button type="button" class="btn btn-block bg-gradient-success btn-sm mb-3" data-bs-toggle="modal"
                  data-bs-target="#modal-form">Tambah</button>
              <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form"
                  aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                      <div class="modal-content">
                          <div class="modal-body p-0">
                              <div class="card card-plain">
                                  <div class="card-header pb-0 text-left">
                                      <h3 class="font-weight-bolder text-success text-gradient">Kriteria</h3>
                                      <p class="mb-0">Masukan Kriteria dan Bobot</p>
                                  </div>
                                  <div class="card-body">
                                      <form role="form text-left">
                                          <label>Nama Kriteria</label>
                                          <div class="input-group mb-3">
                                              <input type="nama_kriteria" class="form-control"
                                                  placeholder="Nama Kriteria" aria-label="Nama_kriteria">
                                          </div>
                                          <label>Bobot MOORA</label>
                                          <div class="input-group mb-3">
                                              <input type="bobot_moora" class="form-control" placeholder="Bobot_Moora"
                                                  aria-label="Bobot MOORA">
                                          </div>
                                          <label>Bobot MPE</label>
                                          <div class="input-group mb-3">
                                              <input type="bobot_mpe" class="form-control" placeholder="Bobot MPE"
                                                  aria-label="Bobot_Mpe">
                                          </div>

                                          <div class="text-center">
                                              <button type="button"
                                                  class="btn btn-round bg-gradient-success btn-lg w-100 mt-4 mb-0">Simpan
                                              </button>
                                          </div>
                                      </form>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-7 position-relative z-index-2">
              <div class="row ">
                  <div class="col-12">
                      <div class="card mb-4">
                          <div class="card-header pb-0">

                          </div>
                          <div class="card-body px-0 pt-0 pb-2">
                              <div class="table-responsive p-0">
                                  <table class="table align-items-center mb-0">
                                      <thead>
                                          <tr>
                                              <th
                                                  class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                  Author</th>
                                              <th
                                                  class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                  Function</th>
                                              <th
                                                  class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                  Status</th>
                                              <th
                                                  class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                  Employed</th>
                                              <th class="text-secondary opacity-7"></th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td>
                                                  <div class="d-flex px-2 py-1">
                                                      <div>
                                                          <img src="../assets/img/team-2.jpg"
                                                              class="avatar avatar-sm me-3" alt="user1">
                                                      </div>
                                                      <div class="d-flex flex-column justify-content-center">
                                                          <h6 class="mb-0 text-sm">John Michael</h6>
                                                          <p class="text-xs text-secondary mb-0">john@creative-tim.com
                                                          </p>
                                                      </div>
                                                  </div>
                                              </td>
                                              <td>
                                                  <p class="text-xs font-weight-bold mb-0">Manager</p>
                                                  <p class="text-xs text-secondary mb-0">Organization</p>
                                              </td>
                                              <td class="align-middle text-center text-sm">
                                                  <span class="badge badge-sm bg-gradient-success">Online</span>
                                              </td>
                                              <td class="align-middle text-center">
                                                  <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                                              </td>
                                              <td class="align-middle">
                                                  <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                                      data-toggle="tooltip" data-original-title="Edit user">
                                                      Edit
                                                  </a>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td>
                                                  <div class="d-flex px-2 py-1">
                                                      <div>
                                                          <img src="../assets/img/team-3.jpg"
                                                              class="avatar avatar-sm me-3" alt="user2">
                                                      </div>
                                                      <div class="d-flex flex-column justify-content-center">
                                                          <h6 class="mb-0 text-sm">Alexa Liras</h6>
                                                          <p class="text-xs text-secondary mb-0">alexa@creative-tim.com
                                                          </p>
                                                      </div>
                                                  </div>
                                              </td>
                                              <td>
                                                  <p class="text-xs font-weight-bold mb-0">Programator</p>
                                                  <p class="text-xs text-secondary mb-0">Developer</p>
                                              </td>
                                              <td class="align-middle text-center text-sm">
                                                  <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                                              </td>
                                              <td class="align-middle text-center">
                                                  <span class="text-secondary text-xs font-weight-bold">11/01/19</span>
                                              </td>
                                              <td class="align-middle">
                                                  <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                                      data-toggle="tooltip" data-original-title="Edit user">
                                                      Edit
                                                  </a>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td>
                                                  <div class="d-flex px-2 py-1">
                                                      <div>
                                                          <img src="../assets/img/team-4.jpg"
                                                              class="avatar avatar-sm me-3" alt="user3">
                                                      </div>
                                                      <div class="d-flex flex-column justify-content-center">
                                                          <h6 class="mb-0 text-sm">Laurent Perrier</h6>
                                                          <p class="text-xs text-secondary mb-0">
                                                              laurent@creative-tim.com
                                                          </p>
                                                      </div>
                                                  </div>
                                              </td>
                                              <td>
                                                  <p class="text-xs font-weight-bold mb-0">Executive</p>
                                                  <p class="text-xs text-secondary mb-0">Projects</p>
                                              </td>
                                              <td class="align-middle text-center text-sm">
                                                  <span class="badge badge-sm bg-gradient-success">Online</span>
                                              </td>
                                              <td class="align-middle text-center">
                                                  <span class="text-secondary text-xs font-weight-bold">19/09/17</span>
                                              </td>
                                              <td class="align-middle">
                                                  <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                                      data-toggle="tooltip" data-original-title="Edit user">
                                                      Edit
                                                  </a>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td>
                                                  <div class="d-flex px-2 py-1">
                                                      <div>
                                                          <img src="../assets/img/team-3.jpg"
                                                              class="avatar avatar-sm me-3" alt="user4">
                                                      </div>
                                                      <div class="d-flex flex-column justify-content-center">
                                                          <h6 class="mb-0 text-sm">Michael Levi</h6>
                                                          <p class="text-xs text-secondary mb-0">
                                                              michael@creative-tim.com
                                                          </p>
                                                      </div>
                                                  </div>
                                              </td>
                                              <td>
                                                  <p class="text-xs font-weight-bold mb-0">Programator</p>
                                                  <p class="text-xs text-secondary mb-0">Developer</p>
                                              </td>
                                              <td class="align-middle text-center text-sm">
                                                  <span class="badge badge-sm bg-gradient-success">Online</span>
                                              </td>
                                              <td class="align-middle text-center">
                                                  <span class="text-secondary text-xs font-weight-bold">24/12/08</span>
                                              </td>
                                              <td class="align-middle">
                                                  <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                                      data-toggle="tooltip" data-original-title="Edit user">
                                                      Edit
                                                  </a>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td>
                                                  <div class="d-flex px-2 py-1">
                                                      <div>
                                                          <img src="../assets/img/team-2.jpg"
                                                              class="avatar avatar-sm me-3" alt="user5">
                                                      </div>
                                                      <div class="d-flex flex-column justify-content-center">
                                                          <h6 class="mb-0 text-sm">Richard Gran</h6>
                                                          <p class="text-xs text-secondary mb-0">
                                                              richard@creative-tim.com
                                                          </p>
                                                      </div>
                                                  </div>
                                              </td>
                                              <td>
                                                  <p class="text-xs font-weight-bold mb-0">Manager</p>
                                                  <p class="text-xs text-secondary mb-0">Executive</p>
                                              </td>
                                              <td class="align-middle text-center text-sm">
                                                  <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                                              </td>
                                              <td class="align-middle text-center">
                                                  <span class="text-secondary text-xs font-weight-bold">04/10/21</span>
                                              </td>
                                              <td class="align-middle">
                                                  <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                                      data-toggle="tooltip" data-original-title="Edit user">
                                                      Edit
                                                  </a>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td>
                                                  <div class="d-flex px-2 py-1">
                                                      <div>
                                                          <img src="../assets/img/team-4.jpg"
                                                              class="avatar avatar-sm me-3" alt="user6">
                                                      </div>
                                                      <div class="d-flex flex-column justify-content-center">
                                                          <h6 class="mb-0 text-sm">Miriam Eric</h6>
                                                          <p class="text-xs text-secondary mb-0">miriam@creative-tim.com
                                                          </p>
                                                      </div>
                                                  </div>
                                              </td>
                                              <td>
                                                  <p class="text-xs font-weight-bold mb-0">Programtor</p>
                                                  <p class="text-xs text-secondary mb-0">Developer</p>
                                              </td>
                                              <td class="align-middle text-center text-sm">
                                                  <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                                              </td>
                                              <td class="align-middle text-center">
                                                  <span class="text-secondary text-xs font-weight-bold">14/09/20</span>
                                              </td>
                                              <td class="align-middle">
                                                  <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                                      data-toggle="tooltip" data-original-title="Edit user">
                                                      Edit
                                                  </a>
                                              </td>
                                          </tr>
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <footer class="footer pt-5 mt-5  ">
              <div class="container-fluid">
                  <div class="row align-items-center justify-content-lg-between">
                      <div class="col-lg-6 mb-lg-0 mb-4">
                          <div class="copyright text-center text-sm text-muted text-lg-start">
                              <script>
                                  document.write(new Date().getFullYear())
                              </script>,
                              made with by <a href="#">FJR-Team</a>
                              for a better apps.
                          </div>
                      </div>

                  </div>
              </div>
          </footer>
      </div>
      </main>
      <script src="../assets/js/core/popper.min.js"></script>
      <script src="../assets/js/core/bootstrap.min.js"></script>
      <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
      <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
      <script src="../assets/js/plugins/chartjs.min.js"></script>
      <script>
          var ctx = document.getElementById("chart-bars").getContext("2d");

          new Chart(ctx, {
              type: "bar",
              data: {
                  labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                  datasets: [{
                      label: "Sales",
                      tension: 0.4,
                      borderWidth: 0,
                      borderRadius: 4,
                      borderSkipped: false,
                      backgroundColor: "#fff",
                      data: [450, 200, 100, 220, 500, 100, 400, 230, 500],
                      maxBarThickness: 6
                  }, ],
              },
              options: {
                  responsive: true,
                  maintainAspectRatio: false,
                  plugins: {
                      legend: {
                          display: false,
                      }
                  },
                  interaction: {
                      intersect: false,
                      mode: 'index',
                  },
                  scales: {
                      y: {
                          grid: {
                              drawBorder: false,
                              display: false,
                              drawOnChartArea: false,
                              drawTicks: false,
                          },
                          ticks: {
                              suggestedMin: 0,
                              suggestedMax: 500,
                              beginAtZero: true,
                              padding: 15,
                              font: {
                                  size: 14,
                                  family: "Open Sans",
                                  style: 'normal',
                                  lineHeight: 2
                              },
                              color: "#fff"
                          },
                      },
                      x: {
                          grid: {
                              drawBorder: false,
                              display: false,
                              drawOnChartArea: false,
                              drawTicks: false
                          },
                          ticks: {
                              display: false
                          },
                      },
                  },
              },
          });


          var ctx2 = document.getElementById("chart-line").getContext("2d");

          var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

          gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
          gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
          gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

          var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

          gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
          gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
          gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

          new Chart(ctx2, {
              type: "line",
              data: {
                  labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                  datasets: [{
                          label: "Mobile apps",
                          tension: 0.4,
                          borderWidth: 0,
                          pointRadius: 0,
                          borderColor: "#cb0c9f",
                          borderWidth: 3,
                          backgroundColor: gradientStroke3,
                          fill: true,
                          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                          maxBarThickness: 6

                      },
                      {
                          label: "Websites",
                          tension: 0.4,
                          borderWidth: 0,
                          pointRadius: 0,
                          borderColor: "#3A416F",
                          borderWidth: 3,
                          backgroundColor: gradientStroke2,
                          fill: true,
                          data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
                          maxBarThickness: 6
                      },
                  ],
              },
              options: {
                  responsive: true,
                  maintainAspectRatio: false,
                  plugins: {
                      legend: {
                          display: false,
                      }
                  },
                  interaction: {
                      intersect: false,
                      mode: 'index',
                  },
                  scales: {
                      y: {
                          grid: {
                              drawBorder: false,
                              display: true,
                              drawOnChartArea: true,
                              drawTicks: false,
                              borderDash: [5, 5]
                          },
                          ticks: {
                              display: true,
                              padding: 10,
                              color: '#b2b9bf',
                              font: {
                                  size: 11,
                                  family: "Open Sans",
                                  style: 'normal',
                                  lineHeight: 2
                              },
                          }
                      },
                      x: {
                          grid: {
                              drawBorder: false,
                              display: false,
                              drawOnChartArea: false,
                              drawTicks: false,
                              borderDash: [5, 5]
                          },
                          ticks: {
                              display: true,
                              color: '#b2b9bf',
                              padding: 20,
                              font: {
                                  size: 11,
                                  family: "Open Sans",
                                  style: 'normal',
                                  lineHeight: 2
                              },
                          }
                      },
                  },
              },
          });
      </script>
      <script>
          var win = navigator.platform.indexOf('Win') > -1;
          if (win && document.querySelector('#sidenav-scrollbar')) {
              var options = {
                  damping: '0.5'
              }
              Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
          }
      </script>
      <!-- Github buttons -->
      <script async defer src="https://buttons.github.io/buttons.js"></script>
      <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
      <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
  </body>

  </html>
