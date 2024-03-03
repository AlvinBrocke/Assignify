<?php
include '../settings/core.php';
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
        <i class="fas fa-user-cog"></i>
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
                <tr>
                  <td>Wash Car</td>
                  <td>Father</td>
                  <td>12/09/21</td>
                  <td>13/09/21</td>
                  <td>In Progress</td>

                  <td><button><i class="fas fa-clock"></i></button><button><i
                        class="fas fa-exclamation"></i></button><button><i class="fas fa-check"></i></button></td>
                </tr>
                <tr>
                  <td>Laundry</td>
                  <td>Mother</td>
                  <td>23/09/21</td>
                  <td>23/09/21</td>
                  <td>Incomplete</td>
                  <td><button><i class="fas fa-clock"></i></button><button><i
                        class="fas fa-exclamation"></i></button><button><i class="fas fa-check"></i></button></td>
                </tr>
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
      <form action="action/assign_a_chore_action" method="POST" name="assign-chore-form" id="assign-chore-form">
        <div class="add-chore" id="assign-chore">
          <h2>Assign a Chore</h2><img src="../images/close.jpg" alt="close" class="close">
        </div>
        <label for="assignee-list">Assignee:</label><br>
        <?php include "../functions/select_assignee_fxn.php" ?>
        <label for="chore-list">Assign Chore:</label><br>
        <?php include "../functions/select_chore_fxn.php" ?>
        <label for="chore-due-date">Due Date</label>
        <input type="date">
        <p class="error-msg" id="error-msg"> Incorrect email or password. Try again</p>
        <button type="submit" id="assignBtn" name="assignBtn"> Submit</button>
      </form>
    </div>
  </div>
  <script src="../js/dashboard.js"></script>
</body>

</html>