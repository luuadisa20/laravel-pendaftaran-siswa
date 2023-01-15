@extends('layouts.admin')

@section('container')
  <div class="container pb-5">
    <div class="d-flex flex-column">
      <table class="table table-striped table-bordered table-hover">
        <thead>
          <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>No. HP</th>
            <th>Pesan</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($pesan as $p)
            <tr>
              <td>{{ $p->nama }}</td>
              <td>{{ $p->email }}</td>
              <td>{{ $p->no_hp }}</td>
              <td>
                @if ($p->pesan === '')
                  <strong class="text-primary-lrvl">Lihat</strong>
                @else
                  <a href="/detail-pesan/{{ $p->id }}">
                    <strong class="text-primary-lrvl">Lihat</strong>
                  </a>
                @endif
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>

      <div class="d-flex justify-content-end">
        {{ $pesan->links() }}
      </div>
    </div>
  </div>
@endsection
