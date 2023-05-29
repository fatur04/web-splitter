@extends('layout.v_template')
@section('title', 'Report SLA ')

@section('content')

<div class="container-fluid">
    <div class="box">
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Site</th>
                <th scope="col">SLA Performance</th>
                <th scope="col">Remark</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
            </tbody>
          </table>
    </div>
</div>


@endsection
