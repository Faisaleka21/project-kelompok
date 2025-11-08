<div class="sidebar">
        <div class="logo">
            <i class="fas fa-graduation-cap"></i>
            <h1>Adaptive LMS-Admin</h1>
        </div>
        <ul class="nav-links">
            <li><a href="{{ uri('/') }}" class="{{ Request::is('/') ? 'active' : ''}}"><i class="fas fa-th-large"></i> <span>Dashboard</span></a></li>
            <li><a href="#"><i class="fas fa-users"></i> <span>Users</span></a></li>
            <li><a href="{{ route('admin.teacher') }}" class="{{ Route::is('admin.teacher') ? 'active' : ''}}"><i class="fas fa-chalkboard-teacher"></i> <span>Teachers</span></a></li>
            <li><a href="#"><i class="fas fa-user-graduate"></i> <span>Students</span></a></li>
            <li><a href="#"><i class="fas fa-book-open"></i> <span>Classes</span></a></li>
            <li><a href="#"><i class="fas fa-chart-bar"></i> <span>Reports</span></a></li>
            <li><a href="#"><i class="fas fa-cog"></i> <span>System Settings</span></a></li>
        </ul>
    </div>