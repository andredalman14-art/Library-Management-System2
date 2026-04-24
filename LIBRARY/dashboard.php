<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - DJ Library</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="logo-container">
            <img src="css/pictures/logo4.png" alt="DJ Library Logo" class="logo">
        </div>

        <div class="nav-links">
            <a href="home.php" class="nav-item">Home</a>
            <a href="dashboard.php" class="nav-item">Dashboard</a>
        </div>

        <div class="login-container">
            <a href="Login.php" class="login-btn">Login</a>
        </div>
    </nav>

    <div class="dashboard-container">
        <h1 class="page-title">Dashboard</h1>

        <!-- Statistics Cards -->
        <div class="stats-grid">
            <div class="stat-box">
                <h3>Total Books</h3>
                <h2 class="stat-number">248</h2>
            </div>
            <div class="stat-box">
                <h3>Books Assigned</h3>
                <h2 class="stat-number">87</h2>
            </div>
            <div class="stat-box">
                <h3>Books Returned</h3>
                <h2 class="stat-number">62</h2>
            </div>
            <div class="stat-box">
                <h3>Available</h3>
                <h2 class="stat-number">161</h2>
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="recent-activity">
            <h2 class="section-title">Recent Activity</h2>
            <table class="activity-table">
                <thead>
                    <tr>
                        <th>Book Title</th>
                        <th>Name</th>
                        <th>Issue Date</th>
                        <th>Return Date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Project Hail Mary</td>
                        <td>Juan Dela Cruz</td>
                        <td>2026-04-01</td>
                        <td>2026-04-15</td>
                        <td class="status returned">Returned</td>
                    </tr>
                    <tr>
                        <td>The Alchemist</td>
                        <td>Maria Santos</td>
                        <td>2026-04-05</td>
                        <td>2026-04-20</td>
                        <td class="status borrowed">Borrowed</td>
                    </tr>
                    <tr>
                        <td>Rites of the Starling</td>
                        <td>Pedro Reyes</td>
                        <td>2026-04-08</td>
                        <td>2026-04-22</td>
                        <td class="status borrowed">Borrowed</td>
                    </tr>
                    <tr>
                        <td>Dune</td>
                        <td>Ana Lopez</td>
                        <td>2026-04-10</td>
                        <td>2026-04-25</td>
                        <td class="status overdue">Overdue</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Add New Borrowing Record (Static Form) -->
        <div class="add-record">
            <h2 class="section-title">Add New Borrowing Record</h2>
            <form class="record-form">
                <div class="form-row">
                    <input type="text" placeholder="Book Title" required>
                    <input type="text" placeholder="Student Name" required>
                </div>
                <div class="form-row">
                    <input type="date" required>
                    <input type="date">
                </div>
                <button type="button" class="submit-btn">Add Record</button>
            </form>
        </div>
    </div>
</body>
</html>