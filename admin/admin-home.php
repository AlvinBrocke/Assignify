<?php
include "../functions/home_fxn.php";
include '../settings/core.php';
checkLogin();
checkUserRole();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>
  <link rel="stylesheet" href="../css/home.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>

<body>
  <div class="container">
    <nav>
      <ul>
        <li>
          <a href="#" class="logo">
            <img src="../images/assignify logo.png" alt="" />
            <span id="name" class="nav-item">Assignify</span>
          </a>
        </li>
        <li>
          <a href="../admin/admin-home.php">
            <i class="fas fa-home"></i>
            <span class="nav-item">Home</span>
          </a>
        </li>
        <li>
          <a href="../admin/admin-choremanagement.php">
            <i class="fas fa-clipboard-check"></i>
            <span class="nav-item">Chore Management</span>
          </a>
        </li>
        <li>
          <a href="../admin/admin-choreassignments.php">
            <i class="fas fa-tasks"></i>
            <span class="nav-item">Chore Assignments</span>
          </a>
        </li>
        <a href="../login/logout_view.php" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a>
        </li>
      </ul>
    </nav>


    <section class="main">
      <div class="main-top">
        <h1>DASHBOARD<span>admin</span></h1>
      </div>
      <h1>Chore Statistics</h1>
      <div class="main-skills">
        <a href="managechores.php" class="card">
          <i class="fas fa-globe"></i>
          <h3>All Chores</h3>
          <p>
            <?php echo $numAA; ?>
          </p>
        </a>
        <a href="managechores.php" class="card">
          <i class="fas fa-clock"></i>
          <h3>In Progress</h3>
          <p>
            <?php echo $numIPA; ?>
          </p>
        </a>
        <a href="managechores.php" class="card">
          <i class="fas fa-exclamation"></i>
          <h3>Incomplete</h3>
          <p>
            <?php echo $numICA; ?>
          </p>
        </a>
        <a href="managechores.php" class="card">
          <i class="fas fa-check"></i>
          <h3>Completed</h3>
          <p>
            <?php echo $numCA; ?>
          </p>
        </a>
      </div>
      <section class="main-task">
        <h1>Recently Assigned Tasks</h1>
        <div class="task-box">
          <div class="table-container">
            <table>
              <thead>
                <tr>
                  <th><i class="fas fa-clipboard"></i>Task Name</th>
                  <th><i class="fas fa-user"></i>Assigned To</th>
                  <th><i class="fas fa-calendar-day"></i>Date Assigned</th>
                  <th><i class="fas fa-spinner"></i>Status</th>

                </tr>
              </thead>
              <tbody>
                <?php
                if (!empty($recentAssignments)) {
                  foreach ($recentAssignments as $recent) {
                    echo "<tr>";
                    echo "<td>" . $recent['chorename'] . " </td>";
                    echo "<td>" . $recent['assigned_to'] . "</td>";
                    echo "<td>" . $recent['date_due'] . "</td>";
                    echo "<td>" . $recent['sname'] . "</td>";
                    echo "<td><a>Chore details</a></td>";
                    echo "</tr>";
                  }
                } else {
                  echo "<tr><td colspan='5'>No recent assignments found.</td></tr>";
                } ?>
              </tbody>
            </table>
          </div>
        </div>
  </div>
  </div>
  </section>
  </div>
</body>

</html>