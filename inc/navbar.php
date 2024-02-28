<nav class="navbar navbar-expand bg-dark navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="#"><h4>Welcome,<?php echo $_SESSION['user_email']; ?></h4></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item mx-auto">
          <a href="rss.xml"> <img src="image/rss.png" alt="rss logo" width="30px"> </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dashboard.php">Upload</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="view.php">Video List</a>
        </li>
        <li class="nav-item">
          <a href="logout.php" class="nav-link text-danger"><strong>Logout</strong></a>
        </li>
      </ul>
    </div>
  </div>
</nav> 