<?php
include "../functions/home_fxn.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>
  <link rel="stylesheet" href="../css/managechores.css" />
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
          <a href="../view/home.php">
            <i class="fas fa-home"></i>
            <span class="nav-item">Home</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-tasks"></i>
            <span class="nav-item">Manage Chores</span>
          </a>
        </li>
        <li>
          <a href="../login/logout_view.php" class="logout">
            <i class="fas fa-sign-out-alt"></i>
            <span class="nav-item">Log out</span>
          </a>
        </li>
      </ul>
    </nav>


    <section class="main">
      <div class="main-top">
        <h1>DASHBOARD</h1>
      </div>
      <section class="main-task" id="ongoing">
        <h1></i>Ongoing/pending List</h1>
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
                <?php
                $chores = getAllInProgressAssignments();
                if ($chores != false) {
                  foreach ($chores as $chore) {
                    ?>
                    <tr>
                      <td>
                        <?php echo $chore['chorename']; ?>
                      </td>
                      <td>
                        <?php echo $chore['who_assigned']; ?>
                      </td>
                      <td>
                        <?php echo $chore['date_assigned']; ?>
                      </td>
                      <td>
                        <?php echo $chore['date_due']; ?>
                      </td>
                      <td>
                        <?php echo $chore['status']; ?>
                      </td>
                      <td>
                        <a href="../functions/complete_chore.php?id=<?php echo $chore['id']; ?>"
                          class="complete">Complete</a>
                      </td>
                    </tr>
                    <?php
                  }
                } else {
                  echo "<tr><td colspan='6'>No chores found</td></tr>";
                }
                ?>
              </tbody>
            </table>
          </div>


        </div>

        <section class="main-task" id="completed">
          <h1></i>Completed List</h1>
          <div class="task-box">
            <div class="table-container">
              <table>
                <thead>
                  <tr>
                    <th><i class="fas fa-clipboard"></i>Chore Name</th>
                    <th><i class="fas fa-user"></i>Assigned By</th>
                    <th><i class="fas fa-calendar-day"></i>Date Assigned</th>
                    <th><i class="fas fa-calendar-day"></i>Date Completed</th>
                    <th><i class="fas fa-spinner"></i>Chore Status</th>
                    <th><i class="fas fa-hammer"></i>Action</th>


                  </tr>
                </thead>
                <tbody>
                  <?php
                  $chores = getAllCompletedAssignments();
                  if ($chores != false) {
                    foreach ($chores as $chore) {
                      ?>
                      <tr>
                        <td>
                          <?php echo $chore['chorename']; ?>
                        </td>
                        <td>
                          <?php echo $chore['who_assigned']; ?>
                        </td>
                        <td>
                          <?php echo $chore['date_assigned']; ?>
                        </td>
                        <td>
                          <?php echo $chore['date_due']; ?>
                        </td>
                        <td>
                          <?php echo $chore['status']; ?>
                        </td>
                        <td>
                          <a href="../functions/complete_chore.php?id=<?php echo $chore['id']; ?>"
                            class="complete">Complete</a>
                        </td>
                      </tr>
                      <?php
                    }
                  } else {
                    echo "<tr><td colspan='6'>No chores found</td></tr>";
                  }
                  ?>
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