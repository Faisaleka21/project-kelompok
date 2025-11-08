@extends('admin.layout.main')

@section('content')    

        <!-- Dashboard Stats Cards -->
        <div class="dashboard-grid">
            <div class="card stat-card users">
                <i class="fas fa-users"></i>
                <h3>TOTAL USERS</h3>
                <div class="number">2,847</div>
                <div class="trend up"><i class="fas fa-arrow-up"></i> 12% from last month</div>
            </div>
            <div class="card stat-card teachers">
                <i class="fas fa-chalkboard-teacher"></i>
                <h3>TEACHERS</h3>
                <div class="number">184</div>
                <div class="trend up"><i class="fas fa-arrow-up"></i> 5% from last month</div>
            </div>
            <div class="card stat-card students">
                <i class="fas fa-user-graduate"></i>
                <h3>STUDENTS</h3>
                <div class="number">2,663</div>
                <div class="trend up"><i class="fas fa-arrow-up"></i> 8% from last month</div>
            </div>
            <div class="card stat-card classes">
                <i class="fas fa-book-open"></i>
                <h3>ACTIVE CLASSES</h3>
                <div class="number">142</div>
                <div class="trend down"><i class="fas fa-arrow-down"></i> 2% from last month</div>
            </div>
        </div>

        <!-- Charts Section -->
        <div class="charts-section">
            <div class="chart-container">
                <div class="chart-header">
                    <h2>User Activity Overview</h2>
                    <div class="chart-actions">
                        <button>Daily</button>
                        <button>Weekly</button>
                        <button class="active">Monthly</button>
                    </div>
                </div>
                <div class="chart">
                    <canvas id="activityChart"></canvas>
                </div>
            </div>
            <div class="chart-container">
                <div class="chart-header">
                    <h2>User Distribution</h2>
                    <div class="chart-actions">
                        <button>Export</button>
                    </div>
                </div>
                <div class="chart">
                    <canvas id="distributionChart"></canvas>
                </div>
            </div>
        </div>

        <!-- Recent Activity and System Alerts -->
        <div class="charts-section">
            <div class="recent-activity">
                <div class="chart-header">
                    <h2>Recent User Registrations</h2>
                    <div class="chart-actions">
                        <button>View All</button>
                    </div>
                </div>
                <table class="activity-table">
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Role</th>
                            <th>Date Registered</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="user-info">
                                    <img src="https://i.pravatar.cc/150?img=1" alt="User">
                                    <div>
                                        <div>Sarah Johnson</div>
                                        <div style="font-size: 12px; color: var(--dark-gray);">sarah.j@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td>Teacher</td>
                            <td>Oct 12, 2023</td>
                            <td><span class="status active">Active</span></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="user-info">
                                    <img src="https://i.pravatar.cc/150?img=5" alt="User">
                                    <div>
                                        <div>Michael Chen</div>
                                        <div style="font-size: 12px; color: var(--dark-gray);">michael.c@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td>Student</td>
                            <td>Oct 11, 2023</td>
                            <td><span class="status active">Active</span></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="user-info">
                                    <img src="https://i.pravatar.cc/150?img=8" alt="User">
                                    <div>
                                        <div>Emma Wilson</div>
                                        <div style="font-size: 12px; color: var(--dark-gray);">emma.w@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td>Student</td>
                            <td>Oct 10, 2023</td>
                            <td><span class="status pending">Pending</span></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="user-info">
                                    <img src="https://i.pravatar.cc/150?img=12" alt="User">
                                    <div>
                                        <div>David Brown</div>
                                        <div style="font-size: 12px; color: var(--dark-gray);">david.b@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td>Teacher</td>
                            <td>Oct 9, 2023</td>
                            <td><span class="status active">Active</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="system-alerts">
                <div class="chart-header">
                    <h2>System Alerts</h2>
                    <div class="chart-actions">
                        <button>Mark All Read</button>
                    </div>
                </div>
                <div class="alert-item alert-warning">
                    <div class="alert-icon">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                    <div class="alert-info">
                        <h4>Storage Usage High</h4>
                        <p>System storage is at 85% capacity</p>
                    </div>
                </div>
                <div class="alert-item alert-success">
                    <div class="alert-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <div class="alert-info">
                        <h4>Backup Completed</h4>
                        <p>System backup completed successfully</p>
                    </div>
                </div>
                <div class="alert-item alert-info">
                    <div class="alert-icon">
                        <i class="fas fa-info-circle"></i>
                    </div>
                    <div class="alert-info">
                        <h4>New Feature Available</h4>
                        <p>Check out the new analytics dashboard</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="teacher-form-section" style="margin-bottom: 40px;">
            <h3>Add New Teacher</h3>
            <form  method="POST" class="teacher-form" style="max-width: 500px;">
                @csrf
                <div class="form-group" style="margin-bottom: 15px;">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required class="form-control" style="width:100%;padding:8px;">
                </div>
                <div class="form-group" style="margin-bottom: 15px;">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required class="form-control" style="width:100%;padding:8px;">
                </div>
                <div class="form-group" style="margin-bottom: 15px;">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject" required class="form-control" style="width:100%;padding:8px;">
                </div>
                <button type="submit" class="btn btn-primary" style="padding:10px 20px;">Add Teacher</button>
            </form>
        </div>

        <div class="teacher-table-section" style="margin-bottom: 40px;">
            <h3>Teacher List</h3>
            <table class="table" style="width:100%; border-collapse: collapse;">
                <thead style="background:#f5f5f5;">
                    <tr>
                        <th style="padding:10px; border:1px solid #ccc;">No</th>
                        <th style="padding:10px; border:1px solid #ccc;">Name</th>
                        <th style="padding:10px; border:1px solid #ccc;">Email</th>
                        <th style="padding:10px; border:1px solid #ccc;">Subject</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="padding:10px; border:1px solid #ccc;">1</td>
                        <td style="padding:10px; border:1px solid #ccc;">John Doe</td>
                        <td style="padding:10px; border:1px solid #ccc;">john.doe@example.com</td>
                        <td style="padding:10px; border:1px solid #ccc;">Mathematics</td>
                    </tr>
                    <tr>
                        <td style="padding:10px; border:1px solid #ccc;">2</td>
                        <td style="padding:10px; border:1px solid #ccc;">Jane Smith</td>
                        <td style="padding:10px; border:1px solid #ccc;">jane.smith@example.com</td>
                        <td style="padding:10px; border:1px solid #ccc;">Physics</td>
                    </tr>
                    <tr>
                        <td style="padding:10px; border:1px solid #ccc;">3</td>
                        <td style="padding:10px; border:1px solid #ccc;">Michael Johnson</td>
                        <td style="padding:10px; border:1px solid #ccc;">michael.j@example.com</td>
                        <td style="padding:10px; border:1px solid #ccc;">English</td>
                    </tr>
                </tbody>
            </table>
        </div>

@endsection