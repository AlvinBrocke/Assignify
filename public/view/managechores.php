<?php
include "../settings/core.php";
include "../settings/connection.php";
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
          <a href="#" class="help">
            <i class="fas fa-question-circle"></i>
            <span class="nav-item">Help</span>
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
        <i class="fas fa-user-cog"></i>
      </div>
      <section class="main-task" id="ongoing">
        <h1><i class="fas fa-hourglass-half"></i>Ongoing/pending List</h1>
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

                  <td><button>Edit</button></td>
                </tr>
                <tr>
                  <td>Laundry</td>
                  <td>Mother</td>
                  <td>23/09/21</td>
                  <td>23/09/21</td>
                  <td>Incomplete</td>
                  <td><button>Edit</button></td>
                </tr>
              </tbody>
            </table>
          </div>


        </div>

        <section class="main-task" id="completed">
          <h1><i class="fas fa-check"></i>Completed List</h1>
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
                  <tr>
                    <td>Bath Dogs</td>
                    <td>Brother</td>
                    <td>12/09/21</td>
                    <td>12/09/21</td>
                    <td>Completed</td>

                    <td><button>Edit</button></td>
                  </tr>
                  <tr>
                    <td>Make the bed</td>
                    <td>Sister</td>
                    <td>23/09/21</td>
                    <td>23/09/21</td>
                    <td>Completed</td>
                    <td><button>Edit</button></td>
                  </tr>
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