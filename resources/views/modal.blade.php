@extends('layouts.admin')
@section('content')

@if(session('success'))
	<div class="alert alert-success alert-dismissible" role="alert">
		<a href="" class="close" data-dismiss='alert'>&times;</a>
		Schema <strong>{!! session('success') !!}</strong> has successfully added!
	</div>
@elseif(session('updated'))
	<div class="alert alert-success alert-dismissible" role="alert">
		<a href="" class="close" data-dismiss='alert'>&times;</a>
		Schema <strong>{!! session('updated') !!}</strong> has successfully updated!
	</div>
@elseif(session('deleted'))
	<div class="alert alert-warning alert-dismissible" role="alert">
		<a href="" class="close" data-dismiss='alert'>&times;</a>
		<strong> Schema</strong> has successfully deleted!
	</div>
@elseif(session('success_import'))
	<div class="alert alert-success alert-dismissible" role="alert">
		<a href="" class="close" data-dismiss='alert'>&times;</a>
		<strong> Schema</strong> has successfully imported!
	</div>
@elseif(session('failed_import'))
	<div class="alert alert-danger alert-dismissible" role="alert">
		<a href="" class="close" data-dismiss='alert'>&times;</a>
		<strong> Schema</strong> has failed imported!
	</div>
@endif
<div style="margin-bottom: 10px;" class="row">
	<div class="col-auto pr-0">
		<a class="btn btn-success" href="{{ route("approval-schema.create") }}">
			{{ trans('global.add') }} Approval Schema
		</a>
	</div>
    <div class="col">
        <button class="btn btn-primary" {{-- href="{{ route("approval_schema.import") }}" --}} data-toggle="modal" data-target="#modalImport" data-guruId="2">
			Import Approval Scheme
		</button>
    </div>
</div>

<div class="modal fade" id="modalImport" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <form method="post" action="{{ route("approval_schema.import") }}" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Import Approval Scheme</h5>
                </div>
                <div class="modal-body">

                    {{ csrf_field() }}

                    <label>Pilih file excel</label>
                    <div class="form-group">
                        <input type="file" name="file" required="required" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">
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

<div class="card">
	<div class="card-header">
		Approval Schema {{ trans('global.list') }}
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class=" table table-bordered table-striped table-hover datatable" id="approvaltable">
				<thead>
					<tr>
                        <th>
                            Company
                        </th>
						<th>
							Cost Center
                        </th>
                        <th>
                            Location
                        </th>
						<th>
							Applicant
						</th>
						<th>
							Approver
						</th>
						<th width="65">

						</th>
					</tr>
				</thead>
				<tbody>
                    @foreach($schemas as $key => $sch)

					<tr data-entry-id="{{ $sch->approval_id }}">
                        <td>
                            {{ $sch->cur_company->name ?? ''}}
                        </td>
						<td>
                            {{ $sch->cur_milik ?? '' }}
                        </td>
                        <td>
                            {{ $sch->cur_lokasi ?? '' }}
                        </td>
						<td>
                            <span class="badge badge-info"> {{ $sch->curpos->posisi ?? '' }} </span>
                            <br>
                            @php
                                $employees = App\Employee::join('careers', 'careers.user_id', 'employees.id')
                                ->join('master_positions', 'master_positions.id', 'careers.posisi_id')
                                ->where([
                                    ['employees.status_form', 'Active'],
                                    ['employees.perusahaan_id', $sch->cur_perusahaan_id],
                                    ['careers.cost_center', $sch->cur_milik],
                                    ['careers.lokasi_kerja', $sch->cur_lokasi],
                                    ['master_positions.id', $sch->cur_pos_id],
                                ])->get()
                            @endphp
                            @foreach($employees as $emp)
                                [{{ $emp->nama }} - {{ $emp->nik }}] <br>
                            @endforeach
						</td>
						<td>
							@php
								$previous =  App\ApprovalSchema::where([['prev_pos_id', '!=', NULL], ['approval_id', $sch->approval_id]])->groupBy('cur_pos_id')->get()
                            @endphp
                            @foreach($previous as $prev)
                                <span class="badge badge-info"> {{ $prev->curpos->posisi ?? '' }} </span>
                                <br>
                                @php
                                    $employees = App\Employee::join('careers', 'careers.user_id', 'employees.id')
                                    ->where([
                                    ['employees.status_form', 'Active'],
                                    ['careers.cost_center', $prev->cur_milik],
                                    ['employees.perusahaan_id', $prev->cur_perusahaan_id],
                                    ['careers.lokasi_kerja', $prev->cur_lokasi],
                                    ['careers.posisi_id', $prev->cur_pos_id],
                                ])->get()
                                @endphp
                                @foreach($employees as $emp)
                                    [{{ $emp->nama }} - {{ $emp->nik }}] <br>
                                @endforeach
                            @endforeach
						</td>
						<td align="center">

							<a class="btn btn-xs btn-primary" href="{{ route('approval-schema.show', $sch->approval_id) }}">
								<i class="fa fa-eye"></i>
							</a>

							<a class="btn btn-xs btn-info" href="{{ route('approval-schema.edit',$sch->approval_id) }}">
								<i class="fa fa-edit"></i>
							</a>

							<form action="{{ route('approval-schema.destroy', $sch->approval_id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
								<input type="hidden" name="_method" value="DELETE">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<button type="submit" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></button>
							</form>
						</td>

					</tr>
					{{-- @endif --}}
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@section('scripts')
@parent
<script>

	$(document).ready(function(){
        $('#approvaltable').dataTable({
            order : [],
            dom : 'frtip',
	    });

        $('#modalImport').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var id= button.data('guruid') // Extract info from data-* attributes
            console.log(id)
        })

	});

</script>
@endsection
@endsection
