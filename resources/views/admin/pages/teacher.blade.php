@extends('admin.layout.main')

@section('content')

  <div class="teacher-input-section">
    <h3><i class="fas fa-chalkboard-teacher"></i> Add New Teacher</h3>

    <form class="teacher-form">
      <div class="form-group">
        <label for="teacherName">Name</label>
        <input type="text" id="teacherName" name="teacherName" class="form-control" placeholder="Enter teacher's name" required>
      </div>

      <div class="form-group">
        <label for="teacherEmail">Email</label>
        <input type="email" id="teacherEmail" name="teacherEmail" class="form-control" placeholder="Enter email address" required>
      </div>

      <div class="form-group">
        <label for="teacherSubject">Subject</label>
        <input type="text" id="teacherSubject" name="teacherSubject" class="form-control" placeholder="Subject specialization" required>
      </div>

      <button type="submit">Add Teacher <i class="fas fa-plus-circle"></i></button>
    </form>

    <div class="tips">
      <i class="fas fa-lightbulb"></i>
      <span>Please ensure the email entered is valid — the teacher will receive their login credentials via email!</span>
    </div>
  </div>



@endsection
