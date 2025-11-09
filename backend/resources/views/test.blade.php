<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard - Adaptive LMS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #4285F4;
            --secondary: #34A853;
            --accent: #00C8E5;
            --warning: #FBBC05;
            --danger: #EA4335;
            --light: #F8F9FA;
            --dark: #202124;
            --gray: #5F6368;
            --card-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
            --sidebar-width: 280px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Roboto, Oxygen, Ubuntu, sans-serif;
        }

        body {
            background-color: #f0f2f5;
            color: var(--dark);
            line-height: 1.6;
        }

        /* Header Styles */
        .header {
            background: white;
            padding: 15px 30px;
            box-shadow: var(--card-shadow);
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo i {
            font-size: 28px;
            color: var(--primary);
            margin-right: 10px;
        }

        .logo h1 {
            font-size: 22px;
            font-weight: 600;
            color: var(--dark);
        }

        .search-bar {
            display: flex;
            align-items: center;
            background-color: var(--light);
            border-radius: 24px;
            padding: 10px 20px;
            width: 600px;
            border: 1px solid #e0e0e0;
        }

        .search-bar input {
            border: none;
            background: transparent;
            padding: 5px 10px;
            width: 100%;
            outline: none;
            font-size: 16px;
        }

        .user-menu {
            display: flex;
            align-items: center;
        }

        .user-menu div {
            margin-left: 20px;
            position: relative;
            cursor: pointer;
        }

        .notification-badge {
            position: absolute;
            top: -5px;
            right: -5px;
            background-color: var(--danger);
            color: white;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            font-size: 11px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .profile {
            display: flex;
            align-items: center;
        }

        .profile img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
            object-fit: cover;
            border: 2px solid var(--primary);
        }

        /* Main Content */
        .main-content {
            display: flex;
            max-width: 1400px;
            margin: 30px auto;
            padding: 0 20px;
        }

        /* Sidebar */
        .sidebar {
            width: var(--sidebar-width);
            margin-right: 30px;
        }

        .sidebar-card {
            background: white;
            border-radius: 12px;
            padding: 20px;
            box-shadow: var(--card-shadow);
            margin-bottom: 20px;
        }

        .sidebar-card h3 {
            font-size: 18px;
            margin-bottom: 15px;
            color: var(--dark);
            display: flex;
            align-items: center;
        }

        .sidebar-card h3 i {
            margin-right: 10px;
            color: var(--primary);
        }

        .class-list {
            list-style: none;
        }

        .class-list li {
            padding: 12px 0;
            border-bottom: 1px solid #f0f0f0;
            display: flex;
            align-items: center;
            cursor: pointer;
            transition: all 0.2s;
        }

        .class-list li:hover {
            background-color: #f8f9fa;
            padding-left: 10px;
        }

        .class-list li:last-child {
            border-bottom: none;
        }

        .class-icon {
            width: 36px;
            height: 36px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 12px;
            color: white;
            font-size: 16px;
        }

        .math { background: linear-gradient(135deg, #4285F4, #34A853); }
        .science { background: linear-gradient(135deg, #EA4335, #FBBC05); }
        .english { background: linear-gradient(135deg, #00C8E5, #4285F4); }
        .history { background: linear-gradient(135deg, #34A853, #00C8E5); }

        .upcoming-item {
            display: flex;
            align-items: center;
            padding: 12px 0;
            border-bottom: 1px solid #f0f0f0;
        }

        .upcoming-item:last-child {
            border-bottom: none;
        }

        .upcoming-icon {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 12px;
            color: white;
        }

        .assignment { background-color: var(--primary); }
        .quiz { background-color: var(--warning); }
        .project { background-color: var(--secondary); }

        .upcoming-details h4 {
            font-size: 15px;
            margin-bottom: 4px;
        }

        .upcoming-details p {
            font-size: 13px;
            color: var(--gray);
        }

        /* Dashboard Content */
        .dashboard-content {
            flex: 1;
        }

        .welcome-banner {
            background: linear-gradient(135deg, var(--primary), var(--accent));
            border-radius: 16px;
            padding: 30px;
            color: white;
            margin-bottom: 25px;
            box-shadow: var(--card-shadow);
            position: relative;
            overflow: hidden;
        }

        .welcome-banner::before {
            content: '';
            position: absolute;
            top: -50px;
            right: -50px;
            width: 200px;
            height: 200px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
        }

        .welcome-banner h2 {
            font-size: 28px;
            margin-bottom: 10px;
        }

        .welcome-banner p {
            font-size: 16px;
            opacity: 0.9;
            max-width: 600px;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-bottom: 25px;
        }

        .stat-card {
            background: white;
            border-radius: 12px;
            padding: 20px;
            box-shadow: var(--card-shadow);
            transition: transform 0.3s;
            border-left: 4px solid var(--primary);
        }

        .stat-card:hover {
            transform: translateY(-5px);
        }

        .stat-card h3 {
            font-size: 14px;
            color: var(--gray);
            margin-bottom: 10px;
        }

        .stat-card .number {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 5px;
            color: var(--dark);
        }

        .stat-card .trend {
            font-size: 13px;
            display: flex;
            align-items: center;
        }

        .trend.up { color: var(--secondary); }
        .trend.down { color: var(--danger); }

        .courses-section {
            margin-top: 30px;
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .section-header h2 {
            font-size: 22px;
            color: var(--dark);
        }

        .view-all {
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
            display: flex;
            align-items: center;
        }

        .view-all i {
            margin-left: 5px;
        }

        .courses-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }

        .course-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: var(--card-shadow);
            transition: all 0.3s;
        }

        .course-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .course-header {
            height: 100px;
            background: linear-gradient(135deg, var(--primary), var(--accent));
            position: relative;
            padding: 20px;
            color: white;
        }

        .course-icon {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 50px;
            height: 50px;
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        .course-body {
            padding: 20px;
        }

        .course-body h3 {
            font-size: 18px;
            margin-bottom: 10px;
            color: var(--dark);
        }

        .course-body p {
            font-size: 14px;
            color: var(--gray);
            margin-bottom: 15px;
        }

        .progress-container {
            margin-bottom: 15px;
        }

        .progress-info {
            display: flex;
            justify-content: space-between;
            margin-bottom: 5px;
            font-size: 13px;
            color: var(--gray);
        }

        .progress-bar {
            height: 8px;
            background-color: #e0e0e0;
            border-radius: 4px;
            overflow: hidden;
        }

        .progress-fill {
            height: 100%;
            background: linear-gradient(to right, var(--primary), var(--accent));
            border-radius: 4px;
        }

        .course-actions {
            display: flex;
            justify-content: space-between;
            margin-top: 15px;
        }

        .btn {
            padding: 8px 15px;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s;
            border: none;
            display: flex;
            align-items: center;
        }

        .btn i {
            margin-right: 5px;
        }

        .btn-primary {
            background-color: var(--primary);
            color: white;
        }

        .btn-primary:hover {
            background-color: #3367d6;
        }

        .btn-outline {
            background-color: transparent;
            border: 1px solid var(--primary);
            color: var(--primary);
        }

        .btn-outline:hover {
            background-color: rgba(66, 133, 244, 0.1);
        }

        /* Recent Activity */
        .recent-activity {
            background: white;
            border-radius: 12px;
            padding: 25px;
            box-shadow: var(--card-shadow);
            margin-top: 30px;
        }

        .activity-list {
            list-style: none;
        }

        .activity-item {
            display: flex;
            padding: 15px 0;
            border-bottom: 1px solid #f0f0f0;
        }

        .activity-item:last-child {
            border-bottom: none;
        }

        .activity-icon {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            color: white;
            font-size: 16px;
        }

        .activity-details h4 {
            font-size: 15px;
            margin-bottom: 5px;
        }

        .activity-details p {
            font-size: 13px;
            color: var(--gray);
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 25px;
            color: var(--gray);
            font-size: 14px;
            border-top: 1px solid #e0e0e0;
            margin-top: 50px;
        }

        /* Responsive Design */
        @media (max-width: 1200px) {
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .courses-grid {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            }
            
            .search-bar {
                width: 400px;
            }
        }

        @media (max-width: 768px) {
            .main-content {
                flex-direction: column;
            }
            
            .sidebar {
                width: 100%;
                margin-right: 0;
                margin-bottom: 20px;
            }
            
            .stats-grid {
                grid-template-columns: 1fr;
            }
            
            .search-bar {
                width: 200px;
            }
            
            .welcome-banner h2 {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <div class="logo">
            <i class="fas fa-graduation-cap"></i>
            <h1>Adaptive LMS</h1>
        </div>
        <div class="search-bar">
            <i class="fas fa-search"></i>
            <input type="text" placeholder="Search for courses, assignments, or materials...">
        </div>
        <div class="user-menu">
            <div>
                <i class="far fa-bell"></i>
                <span class="notification-badge">3</span>
            </div>
            <div>
                <i class="far fa-envelope"></i>
                <span class="notification-badge">5</span>
            </div>
            <div class="profile">
                <img src="https://i.pravatar.cc/150?img=8" alt="Student Profile">
                <span>Alex Johnson</span>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="sidebar-card">
                <h3><i class="fas fa-list-alt"></i> My Classes</h3>
                <ul class="class-list">
                    <li>
                        <div class="class-icon math">
                            <i class="fas fa-calculator"></i>
                        </div>
                        <div>
                            <div>Mathematics</div>
                            <div style="font-size: 12px; color: var(--gray);">Mr. Anderson</div>
                        </div>
                    </li>
                    <li>
                        <div class="class-icon science">
                            <i class="fas fa-flask"></i>
                        </div>
                        <div>
                            <div>Science</div>
                            <div style="font-size: 12px; color: var(--gray);">Dr. Roberts</div>
                        </div>
                    </li>
                    <li>
                        <div class="class-icon english">
                            <i class="fas fa-book"></i>
                        </div>
                        <div>
                            <div>English Literature</div>
                            <div style="font-size: 12px; color: var(--gray);">Ms. Parker</div>
                        </div>
                    </li>
                    <li>
                        <div class="class-icon history">
                            <i class="fas fa-monument"></i>
                        </div>
                        <div>
                            <div>World History</div>
                            <div style="font-size: 12px; color: var(--gray);">Mr. Davis</div>
                        </div>
                    </li>
                </ul>
            </div>
            
            <div class="sidebar-card">
                <h3><i class="far fa-calendar-alt"></i> Upcoming</h3>
                <div class="upcoming-item">
                    <div class="upcoming-icon assignment">
                        <i class="fas fa-tasks"></i>
                    </div>
                    <div class="upcoming-details">
                        <h4>Math Assignment Due</h4>
                        <p>Tomorrow, 11:59 PM</p>
                    </div>
                </div>
                <div class="upcoming-item">
                    <div class="upcoming-icon quiz">
                        <i class="fas fa-question-circle"></i>
                    </div>
                    <div class="upcoming-details">
                        <h4>Science Quiz</h4>
                        <p>Oct 18, 10:00 AM</p>
                    </div>
                </div>
                <div class="upcoming-item">
                    <div class="upcoming-icon project">
                        <i class="fas fa-project-diagram"></i>
                    </div>
                    <div class="upcoming-details">
                        <h4>History Project</h4>
                        <p>Oct 22, 5:00 PM</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Dashboard Content -->
        <div class="dashboard-content">
            <!-- Welcome Banner -->
            <div class="welcome-banner">
                <h2>Welcome back, Alex!</h2>
                <p>You have 2 new assignments and 1 upcoming quiz. Keep up the great work!</p>
            </div>

            <!-- Stats Grid -->
            <div class="stats-grid">
                <div class="stat-card">
                    <h3>ACTIVE COURSES</h3>
                    <div class="number">6</div>
                    <div class="trend up"><i class="fas fa-arrow-up"></i> 1 new this semester</div>
                </div>
                <div class="stat-card">
                    <h3>ASSIGNMENTS DUE</h3>
                    <div class="number">3</div>
                    <div class="trend down"><i class="fas fa-exclamation-circle"></i> 2 overdue</div>
                </div>
                <div class="stat-card">
                    <h3>AVERAGE GRADE</h3>
                    <div class="number">87%</div>
                    <div class="trend up"><i class="fas fa-arrow-up"></i> 2% from last month</div>
                </div>
                <div class="stat-card">
                    <h3>STREAK DAYS</h3>
                    <div class="number">14</div>
                    <div class="trend up"><i class="fas fa-fire"></i> Keep it up!</div>
                </div>
            </div>

            <!-- Courses Section -->
            <div class="courses-section">
                <div class="section-header">
                    <h2>My Courses</h2>
                    <a href="#" class="view-all">View All <i class="fas fa-chevron-right"></i></a>
                </div>
                <div class="courses-grid">
                    <div class="course-card">
                        <div class="course-header">
                            <h3>Mathematics</h3>
                            <p>Algebra & Calculus</p>
                            <div class="course-icon">
                                <i class="fas fa-calculator"></i>
                            </div>
                        </div>
                        <div class="course-body">
                            <p>Explore advanced algebraic concepts and introductory calculus.</p>
                            <div class="progress-container">
                                <div class="progress-info">
                                    <span>Progress</span>
                                    <span>78%</span>
                                </div>
                                <div class="progress-bar">
                                    <div class="progress-fill" style="width: 78%"></div>
                                </div>
                            </div>
                            <div class="course-actions">
                                <button class="btn btn-primary"><i class="fas fa-play"></i> Continue</button>
                                <button class="btn btn-outline"><i class="far fa-folder-open"></i> Materials</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="course-card">
                        <div class="course-header" style="background: linear-gradient(135deg, #EA4335, #FBBC05);">
                            <h3>Science</h3>
                            <p>Physics & Chemistry</p>
                            <div class="course-icon">
                                <i class="fas fa-flask"></i>
                            </div>
                        </div>
                        <div class="course-body">
                            <p>Discover the fundamentals of physics and chemical reactions.</p>
                            <div class="progress-container">
                                <div class="progress-info">
                                    <span>Progress</span>
                                    <span>65%</span>
                                </div>
                                <div class="progress-bar">
                                    <div class="progress-fill" style="width: 65%"></div>
                                </div>
                            </div>
                            <div class="course-actions">
                                <button class="btn btn-primary"><i class="fas fa-play"></i> Continue</button>
                                <button class="btn btn-outline"><i class="far fa-folder-open"></i> Materials</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="course-card">
                        <div class="course-header" style="background: linear-gradient(135deg, #00C8E5, #4285F4);">
                            <h3>English Literature</h3>
                            <p>Shakespeare & Poetry</p>
                            <div class="course-icon">
                                <i class="fas fa-book"></i>
                            </div>
                        </div>
                        <div class="course-body">
                            <p>Analyze classic literature and develop critical reading skills.</p>
                            <div class="progress-container">
                                <div class="progress-info">
                                    <span>Progress</span>
                                    <span>92%</span>
                                </div>
                                <div class="progress-bar">
                                    <div class="progress-fill" style="width: 92%"></div>
                                </div>
                            </div>
                            <div class="course-actions">
                                <button class="btn btn-primary"><i class="fas fa-play"></i> Continue</button>
                                <button class="btn btn-outline"><i class="far fa-folder-open"></i> Materials</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Activity -->
            <div class="recent-activity">
                <div class="section-header">
                    <h2>Recent Activity</h2>
                    <a href="#" class="view-all">View All <i class="fas fa-chevron-right"></i></a>
                </div>
                <ul class="activity-list">
                    <li class="activity-item">
                        <div class="activity-icon" style="background-color: var(--primary);">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <div class="activity-details">
                            <h4>Completed Math Assignment</h4>
                            <p>You submitted "Algebra Problems Set 3" - Graded 95%</p>
                        </div>
                    </li>
                    <li class="activity-item">
                        <div class="activity-icon" style="background-color: var(--secondary);">
                            <i class="fas fa-book-open"></i>
                        </div>
                        <div class="activity-details">
                            <h4>New Material Available</h4>
                            <p>Dr. Roberts uploaded new Science chapter notes</p>
                        </div>
                    </li>
                    <li class="activity-item">
                        <div class="activity-icon" style="background-color: var(--warning);">
                            <i class="fas fa-exclamation-triangle"></i>
                        </div>
                        <div class="activity-details">
                            <h4>Upcoming Deadline</h4>
                            <p>History essay due in 2 days - Don't forget!</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2023 Adaptive Learning System. Student Portal v2.0</p>
    </footer>
</body>
</html>