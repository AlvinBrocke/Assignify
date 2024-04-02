<?php
include '../settings/core.php';
include "../functions/get_all_assignment_fxn.php";
checkLogin();
checkUserRole();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>
  <link rel="stylesheet" href="../css/home.css">
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
        <li>
          <a href="../login/login_view.php" class="logout">
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
      <section class="main-task">
        <div class="chorelist-addchore">
          <h1>Chore List</h1>
          <button class="add-chore-button" id="add-chore-button"></i>Assign a Chore</button>
        </div>
        <div class="task-box">
          <div class="table-container">
            <table>
              <thead>
                <tr>
                  <th><i class="fas fa-clipboard"></i>Chore Name</th>
                  <th><i class="fas fa-user"></i>Assigned By</th>
                  <th><i class="fas fa-calendar-day"></i>Date Assigned</th>
                  <th><i class="fas fa-calendar-day"></i>Date Due</th>
                  <th><i class="fas fa-spinner"></i>Chore Status</th>
                  <th><i class="fas fa-hammer"></i>Action</th>


                </tr>
              </thead>
              <tbody>
                <?php if (!empty($var_data)) {
                  foreach ($var_data as $assignment) {
                    echo "<tr>";
                    echo "<td>" . $assignment['chorename'] . "</td>";
                    echo "<td>" . $assignment['assigned_by_name'] . "</td>";
                    echo "<td>" . $assignment['date_assign'] . "</td>";
                    echo "<td>" . $assignment['date_due'] . "</td>";
                    echo "<td>" . $assignment['status_name'] . "</td>";
                    echo "<td>";
                    echo "<a href='../action/delete_assignment_action.php?assignmentid=" . $assignment['assignmentid'] . "'><button class='deleteBtn'><i class='fas fa-trash'></i></button></a>";
                    echo "<button><i class='fas fa-check'></i></button>";
                    echo "</td>";
                    echo "</tr>";
                  }
                } else {
                  echo "<tr><td colspan='6'>No assignments found.</td></tr>";
                } ?>
              </tbody>
            </table>
          </div>


        </div>
  </div>
  </div>
  </div>
  </section>

  </div>
  <div class="add-chore-background">
    <div class="add-chore-container">
      <form action="../action/assign_a_chore_action.php" method="POST" name="assign-chore-form" id="assign-chore-form">
        <div class="add-chore" id="assign-chore">
          <h2>Assign a Chore</h2><img src="../images/close.jpg" alt="close" class="close">
        </div>
        <label for="assignee">Assignee:</label><br>
        <?php include "../functions/select_assignee_fxn.php" ?>
        <label for="chores">Assign Chore:</label><br>
        <?php include "../functions/select_chore_fxn.php" ?>
        <label for="due-date">Due Date</label>
        <input type="date" name="due-date">
        <p class="error-msg" id="error-msg">Invalid due date</p>
        <button type="submit" id="assignBtn" name="assignBtn"> Submit</button>
      </form>
    </div>
  </div>
  <script src="../js/dashboard.js"></script>
</body>

</html>