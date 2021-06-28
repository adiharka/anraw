@extends('admin.master')

@section('header')
<script>
    document.getElementById('siswa').className = 'active active-click';
    document.title = 'List Siswa';
</script>
<div class="flex-row header">
    <h1 id="header">List Siswa</h1>
        <div class="form-group flex-row primary-button" style="align-items: flex-end; margin: 0; max-width: 175px;">
            <a href="{{ route('admin.siswa.create')}}"><button type="submit" value="Submit">Tambah</button></a>
        </div>
    </div>
@endsection
@section('content')

<div class="flex-wrap" style="justify-content: flex-start;">
    <div class="task-group" style="width: 100%;">
        @if (!$student->isEmpty())
        <table id="table">
        <input type="text" id="searchInput" style='margin-bottom: 1rem' class="form-control" onkeyup="search(1)" placeholder="Ketik untuk mencari">
            <tr class="tableheader">
                <th width="25px" class="rowstart">ID</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>NISN</th>
                <th width="140px" class="rowend">Action</th>
            </tr>
            <?php $count=0 ?>
            @foreach ($student as $siswa)
            <?php $count++ ?>
            <tr>
                <td class="rowstart">{{$siswa->id}}</td>
                <td>{{$siswa->user->name}}</td>
                <td>{{$siswa->classroom->class}} {{$siswa->classroom->major}} {{$siswa->classroom->letter}}</td>
                <td>{{$siswa->NISN}}</td>
                <td class="rowend flex-row">
                    <a href="{{ route('admin.siswa.show', $siswa->id)}}">
                        <button color="info">Detail</button>
                    </a>
                    <form action="{{ route('admin.siswa.destroy', $siswa->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type='submit' color="remove">Remove</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        @else
        <p>Tidak ada siswa</p>
        @endif
    </div>

</div>
@endsection
