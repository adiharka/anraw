@extends('guru.master')

@section('content')
<script>
    document.getElementById('home').className = 'active active-click';
</script>
<div class="flex-row">
    <h1 style="padding-left: 1rem;">Selamat Datang</h1>
</div>
<div class="garis" style="margin-bottom: 1.5rem; height:unset"></div>
<div class="flex-row" style="width: 100%; align-items: flex-start; gap: 2rem; justify-content: space-around;">
    <div class="flex-col">
        <h1 style="font-size: 24px;">Pelajaran Hari Ini</h1>
        <div class="task-group group-jadwal">
            <h1>Senin</h1>
            <div style="gap:0.65rem" class="tasks">
                <div onclick="location.href='#'" color="yellow" class="task jadwal">
                    <h1>Matematika</h1>
                    <p>07.00 - 08.40</p>
                </div>
                <div onclick="location.href='#'" color="tosca" class="task jadwal">
                    <h1>Kimia</h1>
                    <p>23:59 - 03:30</p>
                </div>
                <div onclick="location.href='#'" color="red" class="task jadwal">
                    <h1>Sejarah</h1>
                    <p>09.00 - 09.40</p>
                </div>
                <div onclick="location.href='#'" color="purple" class="task jadwal">
                    <h1>Fisika</h1>
                    <p>09.00 - 09.40</p>
                </div>
            </div>
        </div>
    </div>
    <div class="flex-col" style="max-width: 485px;">
        <h1 style="font-size: 24px;">Tugas Terdekat</h1>
        <div class="task-group">
            <h1>Senin, 14 Januari</h1>
            <div class="tasks">
                <div onclick="location.href='#'" color="yellow" class="task">
                    <h1>Tugas BAB 3 - Aritmetika</h1>
                    <p>23:59 - Matematika</p>
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
            </div>
        </div>
    </div>
</div>


@endsection
