<?php
include "../functions/chore_fxn.php";
include "../settings/core.php";
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
        <h1>DASHBOARD<span>admin</span></h1>
      </div>
      <section class="main-task">
        <div class="chorelist-addchore">
          <h1>Chore List</h1>
          <button class="add-chore-button" id="add-chore-button"><i class="fas fa-plus"></i>Add a Chore</button>
        </div>
        <div class="task-box">
          <div class="table-container">
            <table>
              <thead>
                <tr>
                  <th><i class="fas fa-clipboard"></i>Chore Name</th>
                  <th><i class="fas fa-hammer"></i>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                if (!empty($var_data)) {
                  foreach ($var_data as $chore) {

                    echo "<tr>";
                    echo "<td>" . $chore['chorename'] . "</td>";
                    echo "<td>";
                    echo "<a href='../admin/edit_chore_view.php?cid=" . $chore['cid'] . "'><button class='editBtn'><i class='fas fa-pen'></i></button></a>"; // Edit icon
                    echo "<a href='../action/delete_chore_action.php?cid=" . $chore['cid'] . "'><button class='deleteBtn'><i class='fas fa-trash'></i></button></a>"; // Delete icon
                    echo "</td>";
                    echo "</tr>";
                  }
                } else {
                  echo "<tr><td colspan='2'>No chores found.</td></tr>";
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
  <div class="add-chore-background">
    <div class="add-chore-container">
      <form action="../action/add_chore_action.php" method="POST" name="add-chore-form" id="add-chore-form">
        <div class="add-chore">
          <h2>Add a Chore</h2><img src="../images/close.jpg" alt="close" class="close">
        </div>
        <input type="text" id="chore-name" name="chore-name" placeholder="Chore name">
        <p class="error-msg" id="chore-name-error-msg"> Invalid chore name</p>
        <button type="submit" id="addChoreSubmitBtn" name="addChoreSubmitBtn"> Add</button>
      </form>
    </div>
  </div>
  <script src="../js/dashboard.js"></script>
</body>

</php>