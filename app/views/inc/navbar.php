<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo URLROOT . 'public'; ?>"><?php echo SITENAME; ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo URLROOT . 'public'; ?>">Home</a>
          </li>
          <?php  if(isset($_SESSION['user_id'])){
          if ($_SESSION['user_role'] == '0'){
            ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT . 'pages/about'; ?>">Profile</a>
        </li>
        </li>
		    <li class="nav-item">  <a class="nav-link" href="<?php echo URLROOT . 'pages/contact'; ?>">Concerns</a>
         </li>
          <?php } ?>
          <?php if ($_SESSION['user_role'] == '1'){
            ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT . 'pages/admin'; ?>">Admin</a>
          <?php } ?>
        <?php if ($_SESSION['user_role'] == '2'){
            ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT . 'pages/hr'; ?>">Permissions</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT . 'pages/reports'; ?>">Reports</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT . 'pages/Hconcern'; ?>">Concerns</a>
          </li>
          <?php }
          } ?>
		 <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php if (isset($_SESSION['user_id'])) {
              echo $_SESSION['user_name'];
            } else {
              echo 'User';
            }
            ?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php if (isset($_SESSION['user_id'])) : ?>
              <li><a class="dropdown-item" href=" <?php echo URLROOT . 'users/logout';?>">Logout</a></li>
            <?php else : ?>
              <li><a class="dropdown-item" href="<?php echo URLROOT . 'users/login'; ?>">Login</a></li>
              <li><a class="dropdown-item" href="<?php echo URLROOT . 'users/register'; ?>">Sign Up</a></li>
              
              
            <?php endif; ?>
          </ul>
        </li>

            </ul>
    </div>
  </div>
</nav>
