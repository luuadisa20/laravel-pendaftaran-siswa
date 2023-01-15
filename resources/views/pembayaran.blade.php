@extends('layouts.admin')

@section('container')
  <div class="container pb-5">
    <div class="d-flex flex-column">
      <table class="table table-striped table-bordered table-hover">
        <thead>
          <tr>
            <th>No. Registrasi</th>
            <th>Nama</th>
            <th>Bukti Pembayaran</th>
            <th>Detail Pendaftaran</th>
            <th>Status Pembayaran</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($pendaftaran as $siswa)
            <tr>
              <td>{{ $siswa->id }}</td>
              <td>{{ $siswa->nama }}</td>
              <td>
                @if ($siswa->bukti_pembayaran === null)
                  <strong class="text-primary-lrvl">Lihat</strong>
                @else
                  <a href="/detail-pembayaran/{{ $siswa->id }}">
                    <strong class="text-primary-lrvl">Lihat</strong>
                  </a>
                @endif
              </td>
              <td>
                <a href="/detail-pendaftaran/{{ $siswa->id }}">
                  <strong class="text-primary-lrvl">Detail</strong>
                </a>
              </td>
              <td>
                @if ($siswa->status_registrasi === 'accepted')
                  Pembayaran Valid
                @elseif ($siswa->status_registrasi === 'denied')
                  Ditolak
                @elseif ($siswa->status_registrasi === 'pending')
                  @if ($siswa->bukti_pembayaran === null)
                    Belum Bayar
                  @else
                    <button class="btn btn-sm btn-success btn-verifikasi" data-id="{{ $siswa->id }}">Verifikasi</button>

                    <button class="btn btn-sm btn-danger btn-tolak" data-id="{{ $siswa->id }}">Tolak</button>
                  @endif
                @endif
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>

      <div class="d-flex justify-content-end">
        {{ $pendaftaran->links() }}
      </div>
    </div>
  </div>

  <form action method="POST" id="form-pendaftaran">
    {{ csrf_field() }}

    <input type="hidden" name="id" id="id-pendaftaran">
  </form>
@endsection
