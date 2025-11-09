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

  <!-- table -->
  <div class="teacher-table-section">
  <h3><i class="fas fa-table"></i> Teacher List</h3>
  <div class="table-container">
    <table class="teacher-table">
      <thead>
        <tr>
          <th>No</th>
          <th>Name</th>
          <th>Email</th>
          <th>Subject</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td class="teacher-info">
            <img src="https://i.pravatar.cc/100?img=15" alt="Teacher photo">
            John Doe
          </td>
          <td>john.doe@example.com</td>
          <td>Mathematics</td>
          <td><span class="status active">Active</span></td>
        </tr>

        <tr>
          <td>2</td>
          <td class="teacher-info">
            <img src="https://i.pravatar.cc/100?img=10" alt="Teacher photo">
            Jane Smith
          </td>
          <td>jane.smith@example.com</td>
          <td>Physics</td>
          <td><span class="status pending">Pending</span></td>
        </tr>

        <tr>
          <td>3</td>
          <td class="teacher-info">
            <img src="https://i.pravatar.cc/100?img=20" alt="Teacher photo">
            Michael Johnson
          </td>
          <td>michael.j@example.com</td>
          <td>English</td>
          <td><span class="status inactive">Inactive</span></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>



@endsection
