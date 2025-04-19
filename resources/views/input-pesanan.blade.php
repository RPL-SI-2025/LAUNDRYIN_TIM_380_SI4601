@extends('layouts.app')

@section('content')
<div class="container py-5 d-flex justify-content-center">
  <div class="form-wrapper bg-white p-5 rounded shadow" style="width: 100%; max-width: 600px;">
    <h4 class="mb-4 text-center">Input Pesanan Laundry</h4>

    <form action="#" method="POST">
      {{-- @csrf --}}
      <div class="mb-3">
        <label>Nama Customer</label>
        <input type="text" class="form-control" placeholder="Nama Customer" name="nama_customer">
      </div>

      <div class="mb-3">
        <label>Tanggal Pesanan</label>
        <input type="date" class="form-control" name="tanggal_pesanan">
      </div>

      <div class="mb-3">
        <label>Jenis Pesanan</label>
        <div class="d-flex gap-2">
          <select class="form-select" name="jenis_pesanan">
            <option selected disabled>Pilih Jenis</option>
            <option value="Cuci Kering">Cuci Kering</option>
            <option value="Setrika">Setrika</option>
          </select>
          <input type="number" class="form-control" name="jumlah" placeholder="Jumlah">
        </div>
      </div>

      <div class="mb-3">
        <label>Jenis Pengambilan</label>
        <select class="form-select" name="jenis_pengambilan">
          <option selected disabled>Pilih Jenis</option>
          <option value="Diantar">Diantar</option>
          <option value="Ambil Sendiri">Ambil Sendiri</option>
        </select>
      </div>

      <div class="mb-3">
        <label>Estimasi Selesai</label>
        <input type="date" class="form-control" name="estimasi_selesai">
      </div>

      <button type="submit" class="btn btn-dark-custom w-100">Tambahkan Pesanan Laundry</button>
    </form>
  </div>
</div>
@endsection