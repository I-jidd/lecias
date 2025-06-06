<?php
  require_once '../process/check_auth.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ExpenseTracker - 
      <?php
      $current_page = basename($_SERVER['PHP_SELF']);
      $titles = [
        'index.php' => 'Home',
        'profile.php' => 'Profile',
        'add_expense.php' => 'Add Expense',
        'categories.php' => 'Categories',
        'login-page.php' => 'Login',
        'signup-page.php' => 'Sign Up'
      ];
      echo $titles[$current_page] ?? 'Dashboard';
      ?>
    </title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../styles/main.css" />
    <link rel="stylesheet" href="../styles/homepage.css" />
  </head>
  <body>
    <header class="header">
      <div class="container">
        <nav class="navbar">
          <div class="logo">
            <a href="index.php">
              <span class="logo-icon"
                ><img
                  src="../icons/arrow.png"
                  alt="arrow"
                  class="logo-arrow"
                  style="width: 18px"
              /></span>
              <span class="logo-text">ExpenseTracker</span>
            </a>
          </div>
          <ul class="nav-links">
            <li>
              <a
                href="../public/index.php"
                class="<?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>"
                >Home</a
              >
            </li>
            <li>
              <a
                href="../public/profile.php"
                class="<?= basename($_SERVER['PHP_SELF']) == 'profile.php' ? 'active' : '' ?>"
                >Profile</a
              >
            </li>
            <li>
              <a
                href="../public/add_expense.php"
                class="<?= basename($_SERVER['PHP_SELF']) == 'add_expense.php' ? 'active' : '' ?>"
                >Add Expense</a
              >
            </li>
            <li>
              <a
                href="../public/categories.php"
                class="<?= basename($_SERVER['PHP_SELF']) == 'categories.php' ? 'active' : '' ?>"
                >Categories</a
              >
            </li>
            <li>
              <a href="../process/logout.php" class="logout-link">Logout</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>
  </body>
</html>
