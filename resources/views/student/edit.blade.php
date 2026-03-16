<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<div class="navbar">

<h2>Student Management System</h2>

<div class="nav-links">
<a href="/students" class="add-btn">Student List</a>
<a href="/student/create" class="add-btn">Add Student</a>
</div>

</div>


<div class="form-card">

<h2>Edit Student</h2>

<form method="POST" action="/student/update/{{ $student->id }}">

@csrf

<div class="form-group">
<label>Name</label>
<input type="text" name="name" value="{{ $student->name }}">
</div>

<div class="form-group">
<label>Email</label>
<input type="email" name="email" value="{{ $student->email }}">
</div>

<div class="form-group">
<label>Course</label>
<input type="text" name="course" value="{{ $student->course }}">
</div>

<button type="submit" class="update-btn">Update Student</button>

</form>

</div>