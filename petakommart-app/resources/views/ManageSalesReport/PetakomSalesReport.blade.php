<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>HOMEPAGE</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="" />
    <!-- Bootstrap icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
</head>



<body id="">


    <nav class="navbar bg-light navbar-light fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a class="navbar-brand" href="#" style="font-weight: bold; color: red;">PETAKOM MART MANAGEMENT SYSTEM</a>
            <button type="button" class="btn"></button>

            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <img height="20%" width="100%" src="{{ asset('Gambaq/petakom-logo.png') }}" alt="My Image">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">ADMIN</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body bg-danger">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Schedule</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Inventory</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Payment</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sales Report</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Log Out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="d-flex gap-2 justify-content-center py-5 position-absolute top-50 start-50 translate-middle">
  <button class="btn btn-danger d-inline-flex align-items-center" type="button">
    WEEKLY<a class="nav-link" href="/salesReport">
  <svg class="bi ms-1" width="100" height="100"><use xlink:href="#arrow-right-short"></use></svg>
    </button>
  <button class="btn btn-danger d-inline-flex align-items-center" type="button">
    MONTHLY
    <svg class="bi ms-1" width="100" height="100"><use xlink:href="#arrow-right-short"></use></svg>
  </button>
  <button class="btn btn-danger d-inline-flex align-items-center" type="button">
    YEARLY
    <svg class="bi ms-1" width="100" height="100"><use xlink:href="#arrow-right-short"></use></svg>
  </button>
  </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- Core theme JS-->
    <script type="text/javascript" src="{{ URL::asset('assets/js/custom.js') }}"></script>

    <style>
        body {
            background-image: url('{{ asset('Gambaq/cancelori.jpg') }}');
            background-size: cover;
            background-position: center;
            height: 100vh;
            margin: 0;
        }
    </style>
</body>


</html>
