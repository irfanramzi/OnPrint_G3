<!DOCTYPE html>
<html>
  <head>
    <title>Online Printing Service</title>

    <!-- Navbar Font Elements -->
    <link
      href="https://fonts.googleapis.com/css2?family=Freight+Sans:wght@400;600&display=swap"
      rel="stylesheet"
    />

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="./Styles/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

  </head>
  <body>
    <header>
      <img src="./Images/logo.jpg" alt="Online Printing Service" class="img-fluid" />
      <nav class="navbar navbar-expand-lg navbar-light bg-turquoise">
        <!-- <a class="navbar-brand" href="#">
          <img src="logo.png" alt="Online Printing Service" />
        </a> -->
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link active" href="http://localhost/OnPrint/mainuser.php">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Order
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="http://localhost/OnPrint/U_proceedorder.php">Proceed Order</a></li>
              </ul>
           </li>
           <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Payment
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Proceed Payment</a></li>
              </ul>
           </li>
          </ul>
        </div>
        <div class="collapse navbar-collapse justify-content-end">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/OnPrint/Login.php">Logout</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>