@extends('siswa.master')

@section('content')
<script>
    document.getElementById('tugas').className = 'active active-click';
</script>
<h1 id="header">Tugas</h1>
<div class="flex-wrap" style="justify-content: flex-start;">
    <div class="task-group">
        <h1>Senin, 14 Januari</h1>
        <div class="tasks">
            <div onclick="location.href='#'" color="yellow" class="task">
                <h1>Tugas BAB 3 - Aritmetika</h1>
                <p>23:59 - Mtk</p>
            </div>
            <div onclick="location.href='#'" color="tosca" class="task">
                <h1>Praktek Laboratorium</h1>
                <p>23:59 - Kimia</p>
            </div>
            <div onclick="location.href='#'" color="red" class="task">
                <h1>Sejarah Belanda</h1>
                <p>23:59 - Sejarah</p>
            </div>
            <div onclick="location.href='#'" color="purple" class="task">
                <h1>Hitung kec. pesawat</h1>
                <p>23:59 - Fisika</p>
            </div>
            <div onclick="location.href='#'" color="purple" class="task">
                <h1>Hitung kec. pesawat</h1>
                <p>23:59 - Fisika</p>
            </div>
            <div onclick="location.href='#'" color="purple" class="task">
                <h1>Hitung kec. pesawat</h1>
                <p>23:59 - Fisika</p>
            </div>
            <div onclick="location.href='#'" color="purple" class="task">
                <h1>Hitung kec. pesawat</h1>
                <p>23:59 - Fisika</p>
            </div>
        </div>
    </div>
    <div class="task-group">
        <h1>Selasa, 15 Januari</h1>
        <div class="tasks">
            <div onclick="location.href='#'" color="yellow" class="task">
                <h1>Tugas BAB 3 - Geometri</h1>
                <p>23:59 - Mtk</p>
            </div>
            <div onclick="location.href='#'" color="purple" class="task">
                <h1>Luas Planet</h1>
                <p>23:59 - Fisika</p>
            </div>
        </div>
    </div>
    <div class="task-group">
        <h1>Rabu, 16 Januari</h1>
        <div class="tasks">
            <div onclick="location.href='#'" color="tosca" class="task">
                <h1>Raksa</h1>
                <p>23:59 - Kimia</p>
            </div>
            <div onclick="location.href='#'" class="task">
                <h1>How to Speak</h1>
                <p>23:59 - Inggris</p>
            </div>
        </div>
    </div>
</div>

@endsection
