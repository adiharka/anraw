@extends('admin.master')

@section('header')
<script>
    document.getElementById('guru').className = 'active active-click';
    document.title = 'List Guru';
</script>
<div class="flex-row header">
    <h1 id="header">List Guru</h1>
    <div class="form-group flex-row primary-button" style="align-items: flex-end; margin: 0; max-width: 175px;">
        <a href="{{ route('admin.guru.create')}}"><button type="submit" value="Submit">Tambah</button></a>
    </div>
</div>
@endsection
@section('content')

<div class="flex-wrap" style="justify-content: flex-start;">
    <div class="task-group" style="width: 100%;">
        @if (!$teacher->isEmpty())
        <table id="table">
        <input type="text" id="searchInput" style='margin-bottom: 1rem' class="form-control" onkeyup="search(1)" placeholder="Ketik untuk mencari">
            <tr class="tableheader">
                <th width="25px" class="rowstart">ID</th>
                <th>Nama</th>
                <th>NIP</th>
                <th width="140px" class="rowend">Action</th>
            </tr>
            <?php $count=0 ?>
            @foreach ($teacher as $guru)
            <?php $count++ ?>
            <tr>
                <td class="rowstart">{{$guru->id}}</td>
                <td>{{$user->where('id', $guru->user_id)->first()->name}}</td>
                <td>{{$guru->NIP}}</td>
                <td class="rowend flex-row">
                    <a href="{{ route('admin.guru.show', $guru->id)}}">
                        <button color="info">Detail</button>
                    </a>
                    <form action="{{ route('admin.guru.destroy', $guru->id)}}" method="POST">
                    {{-- <button onclick="{{ route('admin.guru.edit', $guru->user_id)}}" color="edit">Edit</button> --}}
                        @csrf
                        @method('DELETE')
                        <button type='submit' color="remove">Remove</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        @else
        <p>Tidak ada guru</p>
        @endif

    </div>

</div>
@endsection
