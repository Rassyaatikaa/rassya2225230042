@extends('layout.sya')
@section('content')
<center>
<a href="/" class="btn btn-ptimary">+Tambah Data</a>
<p></p>
<table class=table border="2" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Minat</th>
            <th>Tanggapan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
                <td>{{$item->Nama}}</td>
                <td>{{$item->Kelas}}</td>
                <td>{{$item->Minat}}</td>
                <td>
                    <a class='btn-e' href="{{url('/isian/'.$item->Nama.'/edit')}}">Edit</a>
                    <form onsubmit="return confirm('Ingin Menghapusnya?')" class="d-inline" action="{{'/isian/'.$item->Nama}}" method="post"> @csrf @method('DELETE')
                    <button class="btn-h">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</center>
@endsection