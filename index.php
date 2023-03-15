<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Layout Sederhana</title>
<!-- Bootstrap CSS -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
<link href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
<!-- Bootstrap Icon -->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-
icons@1.10.2/font/bootstrap-icons.css">

<!-- Data Tables CSS -->
<link rel="stylesheet" type="text/css"
href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" type="text/css"
href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.bootstrap5
.min.css">
</head>
<body>
<h3 class="text-center">Layout Sederhana<br>
</h3>
<hr class="d-block d-sm-none">
<!-- Navbar Atas -->
<nav class="navbar navbar-expand navbar-dark bg-dark d-none d-sm-block
mb-3">
<div class="container-fluid">
<a class="navbar-brand" href="#"></a>
<div class="collapse navbar-collapse"
id="navbarSupportedContent">
<ul class="navbar-nav me-auto mb-2 mb-lg-0">
<li class="nav-item">
<a class="nav-link active" aria-current="page"
href="?page=home"><i class="bi bi-house-door"></i> Home</a>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#"
role="button" data-bs-toggle="dropdown" aria-expanded="false">
Artikel
</a>

<ul class="dropdown-menu">
<li><a class="dropdown-item"
href="?page=grid">Grid</a></li>
<li><a class="dropdown-item"
href="?page=tables">Tables</a></li>
<li>


<hr class="dropdown-divider">
</li>

<li><a class="dropdown-item" href="#">Something else here</a></li>
</ul>
</li>
<li class="nav-item">
<a class="nav-link" href="?page=about">About</a>
</li>
<li class="nav-item">
<a class="nav-link" href="?page=contact"><i
class="bi bi-journal"></i> Kontak</a>
</li>
</ul>
</div>
</div>
</nav>
<!-- Navbar Bawah -->

<nav class="navbar navbar-expand navbar-dark bg-dark fixed-bottom d-
block d-sm-none">

<div class="container-fluid">
<div class="collapse navbar-collapse"
id="navbarSupportedContent">

<ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-
center">

<li class="nav-item">
<a class="nav-link active" aria-current="page"
href="?page=home"><i class="bi bi-house-door"></i> Home</a>
</li>

<!-- Default dropup button -->
<div class="btn-group dropup">
<a class="nav-link dropdown-toggle" href="#"
role="button" data-bs-toggle="dropdown" aria-expanded="false">
Bootstrap 5
</a>

<ul class="dropdown-menu">
<!-- Dropdown menu links -->
<li><a class="dropdown-item"
href="?page=grid">About</a></li>
<li><a class="dropdown-item"
href="?page=tables">Kontak</a></li>
<li>
<hr class="dropdown-divider">
</li>

<li><a class="dropdown-item" href="#">Something else here</a></li>
</ul>
</div>

<li class="nav-item">

<a class="nav-link" href="?page=about">About</a>
</li>
<li class="nav-item">
<a class="nav-link"
href="?page=contact">Kontak</a>

</li>
</ul>
</div>
</div>
</nav>
<!-- Area Konten -->
<?php
if (isset($_GET["page"])) {
$page = $_GET["page"];
switch ($page) {
default:
echo "Maaf, halaman tidak ditemukan !";
break;
case "home":
include "halaman/home.php";
break;
case "about":
include "halaman/about.php";
break;
case "contact":
include "halaman/contact.php";
break;
case "grid":
include "halaman/grid.php";
break;
case "tables":
include "halaman/tables.php";
break;
}
} else {
include "halaman/home.php";
}
?>
<!-- Bootstrap JS -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<!-- Data Tables JS -->
<script type="text/javascript" charset="utf8"
src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" charset="utf8"
src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></scrip
t>
<script type="text/javascript" charset="utf8"
src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></s
cript>


<script type="text/javascript" charset="utf8"
src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.m
in.js"></script>
<script type="text/javascript" charset="utf8"
src="https://cdn.datatables.net/responsive/2.4.0/js/responsive.bootstrap5.m
in.js"></script>
<script>
$(document).ready(function() {
$('#example').DataTable();
});
</script>
</body>
</html>
<p class="lh-1">This is a long paragraph written to show how the line-height of an element is affected by our utilities. Classes are applied to the element itself or sometimes the parent element. These classes can be customized as needed with our utility API.</p>
<img src="ll.jpeg" class="img-fluid" alt="">
<img src="pp.png" class="img-fluid" alt="">
<img src="22.jpeg" class="img-fluid" alt="">
<img src="33.jpeg" class="img-fluid" alt="">