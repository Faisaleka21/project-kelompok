
// Initialize Charts
document.addEventListener('DOMContentLoaded', function() {
    // Activity Chart
    const activityCtx = document.getElementById('activityChart').getContext('2d');
    const activityChart = new Chart(activityCtx, {
        type: 'bar',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
            datasets: [
                {
                    label: 'Teachers',
                    data: [45, 52, 48, 61, 58, 65, 60, 71, 75, 80],
                    backgroundColor: 'rgba(66, 133, 244, 0.7)',
                    borderRadius: 6
                },
                {
                    label: 'Students',
                    data: [120, 135, 130, 145, 142, 155, 160, 168, 175, 185],
                    backgroundColor: 'rgba(0, 200, 229, 0.7)',
                    borderRadius: 6
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'top',
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        drawBorder: false
                    }
                },
                x: {
                    grid: {
                        display: false
                    }
                }
            }
        }
    });

    // Distribution Chart
    const distributionCtx = document.getElementById('distributionChart').getContext('2d');
    const distributionChart = new Chart(distributionCtx, {
        type: 'doughnut',
        data: {
            labels: ['Teachers', 'Students', 'Admins'],
            datasets: [{
                data: [184, 2663, 12],
                backgroundColor: [
                    'rgba(66, 133, 244, 0.8)',
                    'rgba(0, 200, 229, 0.8)',
                    'rgba(52, 168, 83, 0.8)'
                ],
                borderWidth: 0,
                hoverOffset: 10
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'bottom'
                }
            },
            cutout: '70%'
        }
    });
});