<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Shop Item - Start Bootstrap Template</title>
	<!-- Favicon-->
	<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
	<!-- Bootstrap icons-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
	<!-- Core theme CSS (includes Bootstrap)-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/crud_css.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
	<script src="{{asset('js/modernizr.js')}}"></script>
</head>

<body>

	<header id="header" class="site-header header-scrolled position-fixed text-black bg-light">
		<nav id="header-nav" class="navbar navbar-expand-lg px-3 mb-3">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.html">
					<img src="{{ asset('images/main-logo.png') }}" class="logo">
				</a>
				<button class="navbar-toggler d-flex d-lg-none order-3 p-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false" aria-label="Toggle navigation">
					<svg class="navbar-icon">
						<use xlink:href="#navbar-icon"></use>
					</svg>
				</button>
				<div class="offcanvas offcanvas-end" tabindex="-1" id="bdNavbar" aria-labelledby="bdNavbarOffcanvasLabel">
					<div class="offcanvas-header px-4 pb-0">
						<a class="navbar-brand" href="index.html">
							<img src="{{ asset('images/main-logo.png') }}" class="logo">
						</a>
						<button type="button" class="btn-close btn-close-black" data-bs-dismiss="offcanvas" aria-label="Close" data-bs-target="#bdNavbar"></button>
					</div>
					<div class="offcanvas-body">
						<ul id="navbar" class="navbar-nav text-uppercase justify-content-end align-items-center flex-grow-1 pe-3">
							<li class="nav-item">
								<a class="nav-link me-4 active" href="#billboard">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link me-4" href="#company-services">Services</a>
							</li>
							<li class="nav-item">
								<a class="nav-link me-4" href="#mobile-products">Products</a>
							</li>
							<li class="nav-item">
								<a class="nav-link me-4" href="#smart-watches">Watches</a>
							</li>
							<li class="nav-item">
								<a class="nav-link me-4" href="#yearly-sale">Sale</a>
							</li>
							<li class="nav-item">
								<a class="nav-link me-4" href="#latest-blog">Blog</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link me-4 dropdown-toggle link-dark" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Pages</a>
								<ul class="dropdown-menu">
									<li>
										<a href="about.html" class="dropdown-item">About</a>
									</li>
									<li>
										<a href="blog.html" class="dropdown-item">Blog</a>
									</li>
									<li>
										<a href="shop.html" class="dropdown-item">Shop</a>
									</li>
									<li>
										<a href="cart.html" class="dropdown-item">Cart</a>
									</li>
									<li>
										<a href="checkout.html" class="dropdown-item">Checkout</a>
									</li>
									<li>
										<a href="single-post.html" class="dropdown-item">Single Post</a>
									</li>
									<li>
										<a href="single-product.html" class="dropdown-item">Single Product</a>
									</li>
									<li>
										<a href="contact.html" class="dropdown-item">Contact</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<div class="user-items ps-5">
									<ul class="d-flex justify-content-end list-unstyled">
										<li class="search-item pe-3">
											<a href="#" class="search-button">
												<svg class="search">
													<use xlink:href="#search"></use>
												</svg>
											</a>
										</li>
										<li class="pe-3">
											<a href="#">
												<svg class="user">
													<use xlink:href="#user"></use>
												</svg>
											</a>
										</li>
										<li>
											<a href="cart.html">
												<svg class="cart">
													<use xlink:href="#cart"></use>
												</svg>
											</a>
										</li>
									</ul>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</nav>
	</header>
	<!-- Product section-->
	<section class="py-5">
		<div class="container px-4 px-lg-5 my-5">
			<div class="row gx-4 gx-lg-5 align-items-center">
				<div class="table-wrapper">
					<div class="table-title">
						<div class="row">
							<div class="col-sm-6">
								<h2>Manage <b>Employees</b></h2>
							</div>
							<div class="col-sm-6">
								<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="bi bi-pencil"></i><span>Add New Employee</span></a>
								<a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="bi bi-trash"></i> <span>Delete</span></a>
							</div>
						</div>
					</div>
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th>
									<span class="custom-checkbox">
										<input type="checkbox" id="selectAll">
										<label for="selectAll"></label>
									</span>
								</th>
								<th>Name</th>
								<th>Email</th>
								<th>Address</th>
								<th>Phone</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<span class="custom-checkbox">
										<input type="checkbox" id="checkbox1" name="options[]" value="1">
										<label for="checkbox1"></label>
									</span>
								</td>
								<td>Thomas Hardy</td>
								<td>thomashardy@mail.com</td>
								<td>89 Chiaroscuro Rd, Portland, USA</td>
								<td>(171) 555-2222</td>
								<td>
									<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="bi bi-pencil"></i></a>
									<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="bi bi-trash"></i></a>
								</td>
							</tr>
							<tr>
								<td>
									<span class="custom-checkbox">
										<input type="checkbox" id="checkbox2" name="options[]" value="1">
										<label for="checkbox2"></label>
									</span>
								</td>
								<td>Dominique Perrier</td>
								<td>dominiqueperrier@mail.com</td>
								<td>Obere Str. 57, Berlin, Germany</td>
								<td>(313) 555-5735</td>
								<td>
									<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="bi bi-pencil"></i></a>
									<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="bi bi-trash"></i></a>
								</td>
							</tr>
							<tr>
								<td>
									<span class="custom-checkbox">
										<input type="checkbox" id="checkbox3" name="options[]" value="1">
										<label for="checkbox3"></label>
									</span>
								</td>
								<td>Maria Anders</td>
								<td>mariaanders@mail.com</td>
								<td>25, rue Lauriston, Paris, France</td>
								<td>(503) 555-9931</td>
								<td>
									<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="bi bi-pencil"></i></a>
									<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="bi bi-trash"></i></a>
								</td>
							</tr>
							<tr>
								<td>
									<span class="custom-checkbox">
										<input type="checkbox" id="checkbox4" name="options[]" value="1">
										<label for="checkbox4"></label>
									</span>
								</td>
								<td>Fran Wilson</td>
								<td>franwilson@mail.com</td>
								<td>C/ Araquil, 67, Madrid, Spain</td>
								<td>(204) 619-5731</td>
								<td>
									<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="bi bi-pencil"></i></a>
									<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="bi bi-trash"></i></a>
								</td>
							</tr>
							<tr>
								<td>
									<span class="custom-checkbox">
										<input type="checkbox" id="checkbox5" name="options[]" value="1">
										<label for="checkbox5"></label>
									</span>
								</td>
								<td>Martin Blank</td>
								<td>martinblank@mail.com</td>
								<td>Via Monte Bianco 34, Turin, Italy</td>
								<td>(480) 631-2097</td>
								<td>
									<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="bi bi-pencil"></i></a>
									<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="bi bi-trash"></i></a>
								</td>
							</tr>
						</tbody>
					</table>
					<div class="clearfix">
						<div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
						<ul class="pagination">
							<li class="page-item"><a href="#" class="page-link">Previous</a></li>
							<li class="page-item"><a href="#" class="page-link">1</a></li>
							<li class="page-item"><a href="#" class="page-link">2</a></li>
							<li class="page-item active"><a href="#" class="page-link">3</a></li>
							<li class="page-item"><a href="#" class="page-link">4</a></li>
							<li class="page-item"><a href="#" class="page-link">5</a></li>
							<li class="page-item"><a href="#" class="page-link">Next</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- Edit Modal HTML -->
			<div id="addEmployeeModal" class="modal fade">
				<div class="modal-dialog">
					<div class="modal-content">
						<form>
							<div class="modal-header">
								<h4 class="modal-title">Add Employee</h4>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							</div>
							<div class="modal-body">
								<div class="form-group">
									<label>Name</label>
									<input type="text" class="form-control" required>
								</div>
								<div class="form-group">
									<label>Email</label>
									<input type="email" class="form-control" required>
								</div>
								<div class="form-group">
									<label>Address</label>
									<textarea class="form-control" required></textarea>
								</div>
								<div class="form-group">
									<label>Phone</label>
									<input type="text" class="form-control" required>
								</div>
							</div>
							<div class="modal-footer">
								<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
								<input type="submit" class="btn btn-success" value="Add">
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- Edit Modal HTML -->
			<div id="editEmployeeModal" class="modal fade">
				<div class="modal-dialog">
					<div class="modal-content">
						<form>
							<div class="modal-header">
								<h4 class="modal-title">Edit Employee</h4>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							</div>
							<div class="modal-body">
								<div class="form-group">
									<label>Name</label>
									<input type="text" class="form-control" required>
								</div>
								<div class="form-group">
									<label>Email</label>
									<input type="email" class="form-control" required>
								</div>
								<div class="form-group">
									<label>Address</label>
									<textarea class="form-control" required></textarea>
								</div>
								<div class="form-group">
									<label>Phone</label>
									<input type="text" class="form-control" required>
								</div>
							</div>
							<div class="modal-footer">
								<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
								<input type="submit" class="btn btn-info" value="Save">
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- Delete Modal HTML -->
			<div id="deleteEmployeeModal" class="modal fade">
				<div class="modal-dialog">
					<div class="modal-content">
						<form>
							<div class="modal-header">
								<h4 class="modal-title">Delete Employee</h4>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							</div>
							<div class="modal-body">
								<p>Are you sure you want to delete these Records?</p>
								<p class="text-warning"><small>This action cannot be undone.</small></p>
							</div>
							<div class="modal-footer">
								<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
								<input type="submit" class="btn btn-danger" value="Delete">
							</div>
						</form>
					</div>
				</div>

			</div>
		</div>
		</div>
	</section>

	<!-- Footer-->
	<footer class="py-5 bg-dark">
		<div class="container">
			<p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p>
		</div>
	</footer>
	<!-- Bootstrap core JS-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	<!-- Core theme JS-->
	<script src="js/scripts.js"></script>

</body>

</html>