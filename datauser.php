<span style="font-family: poppins;"><!DOCTYPE html>
    <html lang="en">
    <head>
      <title>Data User</title>
      <link rel="icon" href="logo1.png">
      <link rel="stylesheet" href="datauser.css" />
      <!-- Font Awesome Cdn Link -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    </head>
    <body>
      <div class="container">
        <nav>
          <div class="navbar">
            <div class="logo">
              <img src="logo.png" alt="">
              <h1></h1>
            </div>
            <ul>
              <li><a href="admin.php">
                <i class="fas fa-user"></i>
                <span class="nav-item">Dashboard</span>
              </a>
              </li>
              <li><a href="analis.html">
                <i class="fas fa-chart-bar"></i>
                <span class="nav-item">Analytics</span>
              </a>
              </li>
              <li><a href="datauser.php">
                <i class="fas fa-tasks"></i>
                <span class="nav-item">Data User</span>
              </a>
              </li>
              <li><a href="dokumentasi.html">
                <i class="fab fa-dochub"></i>
                <span class="nav-item">Dokumentasi</span>
              </a>
              </li>
              <li><a href="#">
                <i class="fas fa-cog"></i>
                <span class="nav-item">Setting</span>
              </a>
              </li>
              <li><a href="#">
                <i class="fas fa-question-circle"></i>
                <span class="nav-item">Help</span>
              </a>
              </li>
              <li><a href="logout.php" >
                <i class="fas fa-sign-out-alt"></i>
                <span class="nav-item">Logout</span>
              </a>
              </li>
            </ul>
          </div>
        </nav>
    
        <section class="main">
          <div class="main-body">
          
          <div class="search_bar">
            <input type="search" placeholder="Search data here...">
            <select name="" id="">
              <option>Category</option>
              <option>Admin</option>
              <option>Psikolog</option>
              <option>Masyarakat</option>
            </select>
            <select class="filter">
              <option>Filter</option>
            </select>
          </div>
       
          <table border="1">
    <tr>
        <th width="50">Id</th>
        <th width="50">Nama</th>
        <th width="255">Email</th>
        <th width="150">Password</th>
        <th width="100">User Type</th>
    </tr>

    <?php
    include "koneksi.php";
    $ambildata = mysqli_query($conn, "SELECT * FROM user");
    while ($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
            <th>$tampil[id]</th>
            <th>$tampil[name]</th>
            <th>$tampil[email]</th>
            <th>$tampil[password]</th>
            <th>$tampil[user_type]</th>
            </tr>";

    }
    ?>
    </table>

        </div>
        </section>
      </div>
    
    </body>
    </html></span>

</table>