@extends('template.dashboard')

@section('contentdashboard')
    <div class="container-fluid d-flex flex-column">
        <table id="tableBuku" class="table table-striped">
            <thead>
                <th>ID</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Halaman</th>
            </thead>
            <tbody>
                @foreach($items as $item)
                    <tr>
                        <td>{{$item->id_buku}}</td>
                        <td>{{$item->judul}}</td>
                        <td>{{$item->penulis}}</td>
                        <td>{{$item->penerbit}}</td>
                        <td>{{$item->tahun_terbit}}</td>
                        <td>{{$item->halaman}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        new DataTable('#tableBuku');
    </script>
@endsection