@extends('guru.master')

@section('content')
<script>
    document.getElementById('jadwal').className = 'active active-click';
</script>    
        <h1 id="header">Jadwal Pelajaran</h1>
        <div class="flex-wrap">
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
          <div class="task-group group-jadwal">
            <h1>Selasa</h1>
            <div style="gap:0.65rem" class="tasks">
              <div onclick="location.href='#'" color="red" class="task jadwal">
                <h1>Sejarah</h1>
                <p>09.00 - 09.40</p>
              </div>
              <div onclick="location.href='#'" color="yellow" class="task jadwal">
                <h1>Matematika</h1>
                <p>07.00 - 08.40</p>
              </div>
              <div onclick="location.href='#'" color="tosca" class="task jadwal">
                <h1>Kimia</h1>
                <p>23:59 - 03:30</p>
              </div>
              <div onclick="location.href='#'" color="purple" class="task jadwal">
                <h1>Fisika</h1>
                <p>09.00 - 09.40</p>
              </div>
            </div>
          </div>
          <div class="task-group group-jadwal">
            <h1>Rabu</h1>
            <div style="gap:0.65rem" class="tasks">
              <div onclick="location.href='#'" color="purple" class="task jadwal">
                <h1>Fisika</h1>
                <p>09.00 - 09.40</p>
              </div>
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
            </div>
          </div>
          <div class="task-group group-jadwal">
            <h1>Kamis</h1>
            <div style="gap:0.65rem" class="tasks">
              <div onclick="location.href='#'" color="tosca" class="task jadwal">
                <h1>Kimia</h1>
                <p>23:59 - 03:30</p>
              </div>
              <div onclick="location.href='#'" color="yellow" class="task jadwal">
                <h1>Matematika</h1>
                <p>07.00 - 08.40</p>
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
          <div class="task-group group-jadwal">
            <h1>Jumat</h1>
            <div style="gap:0.65rem" class="tasks">
              <div onclick="location.href='#'" color="tosca" class="task jadwal">
                <h1>Kimia</h1>
                <p>23:59 - 03:30</p>
              </div>
              <div onclick="location.href='#'" color="red" class="task jadwal">
                <h1>Sejarah</h1>
                <p>09.00 - 09.40</p>
              </div>
              <div onclick="location.href='#'" color="yellow" class="task jadwal">
                <h1>Matematika</h1>
                <p>07.00 - 08.40</p>
              </div>
              <div onclick="location.href='#'" color="purple" class="task jadwal">
                <h1>Fisika</h1>
                <p>09.00 - 09.40</p>
              </div>
            </div>
          </div>
          
        </div>

@endsection