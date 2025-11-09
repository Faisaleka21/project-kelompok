 @extends('siswa.layout.main')
 
 @section('content')
 
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
@endsection