@extends('layout.sya')
@section('content')
{{-- <h1>Data Minat Mahasiswa Pendidikan Matematika</h1> --}}
<link rel="stylesheet" href="/css/app.css">
<center>
<form class="form" method="POST" action="/isian">
    @csrf
    <div class="mb-3">
        <label for="Nama" class="form-label">Nama:</label>
        <input type="text" id="Nama" name="Nama" class="form-control" placeholder="Namanya Siapa?" value="{{Session::get('Nama')}}">
    </div>

    <div class="mb-3">
        <label for="Kelas" class="form-label">Kelas:</label>
        <input type="text" id="Kelas" name="Kelas" class="form-control" placeholder="Kelas Berapa?" value="{{Session::get('Kelas')}}">
    </div>

    <div class="mb-3">
        <label for="Minat" class="form-label">Minat:</label>
        <input type="text" id="Minat" name="Minat" class="form-control" placeholder="Minatnya Apa?" value="{{Session::get('Minat')}}">
    </div>

    <div class="mb-4">
        <button>Submit</button>
    </div>
</form>
</center>
@endsection