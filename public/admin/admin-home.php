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
          <h1>Chore Statistics</h1>
        <div class="main-skills">
          <a href="managechores.html" class="card">
            <i class="fas fa-globe"></i>
            <h3>All Chores</h3>
            <p>14</p>
          </a>
          <a href="managechores.html" class="card">
            <i class="fas fa-clock"></i>
            <h3>In Progress</h3>
            <p>14</p>
          </a>
          <a href="managechores.html" class="card">
            <i class="fas fa-exclamation"></i>
            <h3>Incomplete</h3>
            <p>3</p>
          </a>
          <a href="managechores.html" class="card">
            <i class="fas fa-check"></i>
            <h3>Completed</h3>
            <p>12</p>
          </a>
        </div>
        <section class="main-task">
          <h1>Assigned Tasks</h1>
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
                          <tr>
                              <td>Wash Car</td>
                              <td>Father</td>
                              <td>12/09/21</td>
                              <td>In Progress</td>
                              
                              <td><button>Edit</button></td>
                          </tr>
                          <tr>
                              <td>Laundry</td>
                              <td>Mother</td>
                              <td>23/09/21</td>
                              <td>Incomplete</td>
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
