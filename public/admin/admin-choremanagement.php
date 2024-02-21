<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="../css/home.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    
  </head>
  <body>
    <div class="container">
      <nav>
        <ul>
          <li>
            <a href="#" class="logo">
              <img src="assignify logo.png" alt="" />
              <span id="name" class="nav-item">Assignify</span>
            </a>
          </li>
          <li>
            <a href="admin-home.html">
              <i class="fas fa-home"></i>
              <span class="nav-item">Home</span>
            </a>
          </li>
          <li>
            <a href="admin-choremanagement.html">
              <i class="fas fa-clipboard-check"></i>
              <span class="nav-item">Chore Management</span>
            </a>
          </li>
          <li>
            <a href="admin-choreassignments.html">
              <i class="fas fa-tasks"></i>
              <span class="nav-item">Chore Assignments</span>
            </a>
          </li>
          <li>
            <a href="#" class="settings">
              <i class="fas fa-cog"></i>
              <span class="nav-item">Settings</span>
            </a>
          </li>
          <li>
            <a href="#" class="help">
              <i class="fas fa-question-circle"></i>
              <span class="nav-item">Help</span>
            </a>
          </li>
          <li>
            <a href="loginpage.html" class="logout">
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
                          <tr>
                              <td>Wash Car</td>
                              <td><button><i class="fas fa-pen"></i></button><button><i class="fas fa-trash"></i></button></td>
                          </tr>
                          <tr>
                              <td>Laundry</td>
                              <td><button><i class="fas fa-pen"></i></button><button><i class="fas fa-trash"></i></button></td>
                          </tr>
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
            <form action="" method="POST" name="add-chore-form" id="add-chore-form">
                <div class="add-chore">
                    <h2>Add a Chore</h2><img src="close.jpg" alt="close" class="close">
                </div>
                <input type="text" id="chore-name" name="chore-name" placeholder="Chore name">
                <button type="submit" id="addBtn" name="addBtn"> Add</button>    
            </form>
        </div>
    </div>
    <script src="dashboard.js"></script>
  </body>
</html>
