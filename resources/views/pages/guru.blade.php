  @include('index')

  @extends('layouts.app')


  <body class="g-sidenav-show  bg-gray-100">

      @include('layouts.side')
      @include('layouts.navbar')

      <div class="container-fluid py-4 ">
          <button type="button" class="btn btn-block bg-gradient-success btn-sm mb-3" data-bs-toggle="modal"
              data-bs-target="#modal-form">Tambah</button>


          @include('pages.modal.add_guru')
          @include('pages.modal.del_guru')
          @include('pages.modal.edit_guru')

          <div class="col-lg-7 position-relative z-index-2">
              <div class="row">
                  <div class="col-12">
                      <div class="card mb-4">
                          <div class="card-body px-0 pt-0 pb-2">
                              <div class="scrollable table-responsive p-0">
                                  <table class="table" id="datatable">
                                      <thead>
                                          <tr>
                                              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                                  style="width: 1%;">
                                                  NO.</th>
                                              <th class=" text-start text-uppercase text-xxs font-weight-bolder opacity-7"
                                                  style="width: 20%;">
                                                  Nama Pengajar</th>
                                              <th class="text-secondary opacity-7 ps-2" style="width:100%;"></th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          @php
                                              $no = 1;
                                          @endphp
                                          @foreach ($showData as $showData)
                                              <tr>
                                                  <td
                                                      class="text-center align-middle text-xs font-weight-bolder opacity-7">
                                                      {{ $no++ }}</td>
                                                  <td class="align-middle mb-0 text-sm font-weight-bolder ">
                                                      {{ $showData->nama }}
                                                  </td>
                                                  <td class="align-middle ">

                                                      <a href="/guru/editData/{{ $showData->id_guru }}"
                                                          data-bs-toggle="modal"
                                                          data-bs-target="#modal-edit{{ $showData->id_guru }}"
                                                          class="text-secondary font-weight-bold text-xs"
                                                          data-toggle="tooltip" data-original-title="Edit user">
                                                          Edit
                                                      </a>

                                                      <a href="/guru/deleteData/{{ $showData->id_guru }}"
                                                          data-bs-toggle="modal"
                                                          data-bs-target="#modal-delete{{ $showData->id_guru }}"
                                                          class="text-secondary font-weight-bold text-xs"
                                                          data-toggle="tooltip" data-original-title="Edit user">
                                                          Delete
                                                      </a>
                                                      <button class="btn btn-primary" {{-- href="{{ route("approval_schema.import") }}" --}}
                                                          data-bs-toggle="modal" data-bs-target="#modalImport"
                                                          data-bs-guruId="2">
                                                          Import Approval Scheme
                                                      </button>
                                                  </td>
                                              </tr>
                                          @endforeach
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              @if (session('berhasil'))
                  <div class="text-center align-middle text-xs alert alert-success po-0" role="alert">
                      <strong>Success!!</strong>{{ session('berhasil') }}
                  </div>
              @endif
              @error('nama')
                  <div class="text-center align-middle text-xs alert alert-warning po-0" role="alert">
                      <strong>Warning!</strong> {{ $message }}
                  </div>
              @enderror
          </div>

          {{-- Modal Edit Start --}}

          <div class="modal fade" id="modalImport" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                  <form method="post" action="" enctype="multipart/form-data">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Import Approval Scheme</h5>
                          </div>
                          <div class="modal-body">

                              {{ csrf_field() }}

                              <label>Pilih file excel</label>
                              <div class="form-group">
                                  <input type="file" name="file" required="required"
                                      accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">
                              </div>
                              <div class="input-group mb-3">
                                      <input type="text" class="form-control" value="\"
                                          aria-label="Nama" name="nama">
                                  </div>

                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Import</button>
                          </div>
                      </div>
                  </form>
              </div>
          </div>

          {{-- Modal Edit End --}}


      </div>



      <style>
          .scrollable {
              width: 100%;
              height: 460px;
              overflow-y: auto;

          }

      </style>



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
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
      <script src="../assets/js/core/popper.min.js"></script>
      <script src="../assets/js/core/bootstrap.min.js"></script>
      <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
      <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
      <script src="../assets/js/plugins/chartjs.min.js"></script>
      {{-- <script src="../../assets/js/plugins/datatables.js"></script> --}}

      <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>


      <script>
          var win = navigator.platform.indexOf('Win') > -1;
          if (win && document.querySelector('#sidenav-scrollbar')) {
              var options = {
                  damping: '0.5'
              }
              Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
          }
      </script>

      <script>

      </script>

      <script>
          $(document).on('click', '#edit-guru', function() {
              let nama = $(this).data('nama');
              $('#edit-nama').val(nama);
          });

          var exampleModal = document.getElementById('modalImport')
          exampleModal.addEventListener('show.bs.modal', function(event) {
              console.log("test");
              var button = event.relatedTarget
              var id = button.getAttribute('data-bs-guruId')
              console.log(id)
          });
      </script>

      <!-- Github buttons -->
      <script async defer src="https://buttons.github.io/buttons.js"></script>
      <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
      <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
  </body>

  </html>
