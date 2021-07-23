@foreach ($showData as $deleteData)

    <div class="col-md-4">
        <div class="modal fade" id="modal-delete{{ $deleteData->id_guru }}" tabindex="-1" role="dialog"
            aria-labelledby="modal-delete" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-body p-0">
                        <div class="card card-plain">
                            <div class="card-header pb-0 text-left">
                                <h3 class="font-weight-bolder text-danger text-gradient">Delete</h3>
                                <p class="mb-0">Apa Kamu Yakin Ingin Menghapus data guru {{ $deleteData->nama }} ?
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="/guru/deleteData/{{ $deleteData->id_guru }}">
                            <button type="button" class="btn bg-gradient-danger">Hapus</button>
                        </a>
                        <button type="button" class="btn btn-link  ml-auto" data-bs-dismiss="modal">Kembali</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endforeach
