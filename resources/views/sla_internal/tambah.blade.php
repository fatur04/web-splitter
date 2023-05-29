@extends('layout.v_template')
@section('title', 'Tambah SLA')

@section('content')

<form action="/simpan_internal/" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="col-md-2"></div>
    <div class="col-md-7">
        <div class="row">
            <div class="col-sm-12">
              <div class="register-box-body">
                <div class="form-group row">
                    <label>Nama Site</label>
                    <select class="cari form-control" placeholder="Nama Site ..." name="nama_site" required></select>
                </div>

                <div class="form-group row">
                    <label>Problem</label>
                    <input type="text" name="problem" class="form-control" placeholder="Problem ..." autocomplete="off" required>
                </div>

                <div class="form-group row">
                    <label for="lang">Status</label>
                    <select name="status" class="form-control">
                        <option value="1">OPEN</option>
                        <option value="2">CLOSE</option>
                    </select>
                </div>

                {{-- <div class="form-group row">
                    <label>Tanggal dan Jam sekarang</label>
                    <input type="datetime-local" name="mulai_now" class="form-control" placeholder="Tanggal dan jam sekarang ..." autocomplete="off" >
                </div> --}}

                <div class="form-group row">
                    <label>Start Down</label>
                    <input type="datetime-local" name="mulai" class="form-control" placeholder="mulai ..." autocomplete="off" >
                </div>

                <div class="form-group row">
                    <label>End Down</label>
                    <input type="datetime-local" name="akhir" class="form-control" placeholder="akhir ..." autocomplete="off" >
                </div>

                <div class="form-group row">
                    <a href="/index" class="btn btn-primary">Back</a>
                    <button type="submit" class="btn btn-success" rows="2">Tambah</button>
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
