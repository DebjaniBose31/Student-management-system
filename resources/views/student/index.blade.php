<link rel="stylesheet" href="{{asset('css/style.css')}}">

<div class="navbar">

<h2>Student Management System</h2>

<div class="nav-links">
<a href="/students" class="add-btn">Student List</a>
<a href="/student/create" class="add-btn">Add Student</a>
</div>

</div>

@if(session('success'))
<div class="success-msg">
{{ session('success') }}
</div>
@endif
<table border="1" cellpadding="10">
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Course</th>
<th>Action</th>
</tr>

@foreach($students as $student)

<tr>
<td>{{ $student->id }}</td>
<td>{{ $student->name }}</td>
<td>{{ $student->email }}</td>
<td>{{ $student->course }}</td>
<td>
<a href="/student/edit/{{ $student->id }}"class="edit-btn">Edit</a>

<form action="/student/delete/{{ $student->id }}" method="POST">
@csrf
@method('DELETE')
<button type="submit"class="delete-btn">Delete</button>
</form>
</td>
</tr>

@endforeach

</table>
