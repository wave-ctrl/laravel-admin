  @foreach ($showData as $editData)
  
  <form action="/guru/editData" method="post" enctype="multipart/form-data" role="form text-left">
      @csrf<div class="col-md-4">
          <div class="modal fade" id="modal-edit{{$editData->id_guru}}" tabindex="-1" role="dialog" aria-labelledby="modal-edit"
              aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                  <div class="modal-content">
                      <div class="modal-body p-0">
                          <div class="card card-plain">
                              <div class="card-header pb-0 text-left">
                                  <h3 class="font-weight-bolder text-success text-gradient">Guru</h3>
                                  <p class="mb-0">Masukan Nama Guru / Tenaga Pengajar</p>
                              </div>
                              <div class="card-body">

                                  <label>Nama</label>
                                  <div class="input-group mb-3">
                                      <input type="text" class="form-control" value="{{$editData->nama}}"
                                          aria-label="Nama" name="nama">
                                  </div>


                                  <div class="input-group mb-3">
                                      <button type="submit"
                                          class=" text-center btn btn-round bg-gradient-success btn-lg w-100 mt-4 mb-0">Simpan
                                      </button>
                                  </div>

                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </form>
@endforeach