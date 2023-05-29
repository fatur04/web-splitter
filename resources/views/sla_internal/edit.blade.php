@extends('layout.v_template')
@section('title', 'Edit SLA')

@section('content')

<form action="/update_internal/{{ $sla->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="col-md-2"></div>
    <div class="col-md-7">
        <div class="row">
            <div class="col-sm-12">
              <div class="register-box-body">
                <div class="form-group row">
                    <label>Nama Site</label>
                    <input type="text" name="nama_site" class="form-control" readonly value="{{ $sla->site }}">
                    {{-- <select class="cari form-control" placeholder="Nama Site ..." name="nama_site" ></select> --}}
                </div>

                <div class="form-group row">
                    <label>Problem</label>
                    <input type="text" name="problem" class="form-control" value="{{ $sla->problem }}" placeholder="Problem ..." autocomplete="off" required>
                </div>

                <div class="form-group row">
                    <label for="lang">Status</label>
                    <select name="status" class="form-control">
                        <option value="2">CLOSE</option>
                        <option value="1">OPEN</option>
                    </select>
                </div>

                <div class="form-group row">
                    <label>Start Down</label>
                    <input type="text" name="mulai" class="form-control" value="{{ $sla->mulai }}" placeholder="mulai ..." autocomplete="off" >
                </div>

                <div class="form-group row">
                    <label>End Down</label>
                    <input type="datetime-local" name="akhir" class="form-control" value="{{ $sla->akhir }}" placeholder="akhir ..." autocomplete="off" >
                </div>

                <div class="form-group row">
                    <a href="/sla_internal" class="btn btn-primary">Back</a>
                    <button type="submit" class="btn btn-success" rows="2">Update</button>
                </div>

              </div>
            </div>
        </div>
    </div>
</form>

<script type="text/javascript">
    $('.cari').select2({
      placeholder: 'Cari...',
      ajax: {
        url: '/cari',
        dataType: 'json',
        delay: 250,
        processResults: function (data) {
          return {
            results:  $.map(data, function (item) {
              return {
                text: item.site,
                id: item.id_site
              }
            })
          };
        },
        cache: true
      }
    });

  </script>
@endsection
