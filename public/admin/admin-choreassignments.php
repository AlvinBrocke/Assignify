<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="../css/home.css">
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
              <img src="../images/assignify logo.png" alt="" />
              <span id="name" class="nav-item">Assignify</span>
            </a>
          </li>
          <li>
            <a href="../view/admin-home.html">
              <i class="fas fa-home"></i>
              <span class="nav-item">Home</span>
            </a>
          </li>
          <li>
            <a href="../view/admin-choremanagement.html">
              <i class="fas fa-clipboard-check"></i>
              <span class="nav-item">Chore Management</span>
            </a>
          </li>
          <li>
            <a href="../view/admin-choreassignments.html">
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
            <a href="../view/loginpage.html" class="logout">
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
                              
                              <td><button><i class="fas fa-clock"></i></button><button><i class="fas fa-exclamation"></i></button><button><i class="fas fa-check"></i></button></td>
                          </tr>
                          <tr>
                              <td>Laundry</td>
                              <td>Mother</td>
                              <td>23/09/21</td>
                              <td>23/09/21</td>
                              <td>Incomplete</td>
                              <td><button><i class="fas fa-clock"></i></button><button><i class="fas fa-exclamation"></i></button><button><i class="fas fa-check"></i></button></td>
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
            <form action="" method="POST" name="assign-chore-form" id="assign-chore-form">
                <div class="add-chore">
                    <h2>Add a Chore</h2><img src="../images/close.jpg" alt="close" class="close">
                </div>
                <label for="chore-category" >Assignee:</label><br>
                    <select id="chore-assignee" name="chore-category">
                      <option value="default">Assign person</option>
                      <option value="father">Father</option>
                      <option value="mother">Mother</option>
                      <option value="Brother">Brother</option>
                      <option value="Sister">Sister</option>
                    </select><br>
                    <label for="chore-category" >Assign Chore:</label><br>
                    <select id="chore-category" name="chore-category">
                      <option value="default">Assign Chore</option>
                      <option value="laundry">Laundry</option>
                      <option value="wash-car">Wash Car</option>
                      <option value="mow-lawn">Mow Lawn</option>
                      <option value="wash-dishes">Wash Dishes</option>
                    </select><br>
                    <label for="chore-due-date">Due Date</label>
                    <input type="date">
                <button type="submit" id="assignBtn" name="assignBtn"> Submit</button>    
            </form>
        </div>
    </div>
    <script src="../js/dashboard.js"></script>
  </body>
</html>
