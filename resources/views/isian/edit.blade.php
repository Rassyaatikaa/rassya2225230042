@extends('layout.sya')
@section('content')
{{-- <h1>Data Minat Mahasiswa Pendidikan Matematika</h1> --}}
<form method="POST" action="{{'/isian/'.$data->Nama}}">
    @csrf
    @method('put')
    <div class="mb-3">
        <label for="Nama" class="form-label">Nama:</label>
        <input type="text" id="Nama" name="Nama" class="form-control" placeholder="Nama" value="{{$data->Nama}}">
    </div>

    <div class="mb-3">
        <label for="Kelas" class="form-label">Kelas:</label>
        <input type="text" id="Kelas" name="Kelas" class="form-control" placeholder="Kelas" value="{{$data->Kelas}}">
    </div>

    <div class="mb-3">
        <label for="Minat" class="form-label">Minat:</label>
        <input type="text" id="Minat" name="Minat" class="form-control" placeholder="Minat" value="{{$data->Minat}}">
    </div>

    <div class="mb-3">
        <button>Submit</button> <a class="btn btn-secondry" href="/isian">Kembali</a>
    </div>
</form>
@endsection