<!doctype html>
<html lang="en">
  ini_set('memory_limit', '256M');
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $pageTitle; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <div class="container">
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item"><a class="nav-link active" href="/">HOME</a></li>
                      <li class="nav-item"><a class="nav-link" href="category.php">CATEGORY</a></li>
                      <li class="nav-item"><a class="nav-link" href="product.php">PRODUCT</a></li>
                      <li class="nav-item"><a class="nav-link" href="employee.php">EMPLOYEE</a></li>
                  </ul>
              </div>
          </div>
      </nav>
    </div>
