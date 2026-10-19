<div class="d-flex align-items-start mt-3">
  <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <a class="nav-link {{ ($menu == 'home') ? 'active' : '' }}" href="/" type="button">Home</a>
    <a class="nav-link {{ ($menu == 'mahasiswa') ? 'active' : '' }}" href="/mahasiswa" type="button">Form Mahasiswa</a>
    <a class="nav-link {{ ($menu == 'proses') ? 'active' : '' }}" href="/proses" type="button">Hasil Pengiriman Data</a>
    <a class="nav-link {{ ($menu == 'courses') ? 'active' : '' }}" href="#" type="button">Courses</a>
    <a class="nav-link {{ ($menu == 'students') ? 'active' : '' }}" href="#" type="button">Students</a>
    <a class="nav-link {{ ($menu == 'grades') ? 'active' : '' }}" href="#" type="button">Grades</a>
    <a class="nav-link {{ ($menu == 'assignments') ? 'active' : '' }}" href="#" type="button">Assignments</a>
  </div>
</div>