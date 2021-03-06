<!DOCTYPE html>
<html lang="en" >
	<!-- begin::Head -->
	<head>
		<?php echo $__env->make("shared.header-meta", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<link href="/css/listing.css" rel="stylesheet" type="text/css" />
		<link href="/css/header.css" rel="stylesheet" type="text/css" />
		<link href="/css/custom.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
		<style>

			.form-row {
				padding: 2px 0px;
			}

			.notes_textarea {
				min-width: 230px;
			}

			.bootstrap-select {
				background: rgb( 255,255,255 );
			}

			.bootstrap-select .dropdown-toggle::before {
				display: none;
			}

			td{
				padding: 15px 25px;
			}
			th{
				text-align: left; !important;
			}

			.nowrap {
				white-space: nowrap;
			}
			@media  only screen and (min-width: 1200px)  {
				.m-content{
					width: 100% !important;
				}
			}
			@media  only screen and (max-width: 1199px)  {
				.m-content{
					width: 100% !important;
				}
			}

			table.dataTable thead .sorting, 
			table.dataTable thead .sorting_asc, 
			table.dataTable thead .sorting_desc {
			    background : none;
			}

		</style>
		
	</head>
	<!-- end::Head -->
	<!-- end::Body -->
	<body class="m--skin- m-content--skin-light m-header--fixed m-header--fixed-mobile m-aside-left--offcanvas-default m-aside-left--enabled m-aside-left--fixed m-aside-left--skin-dark m-aside--offcanvas-default">

		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">

			<!-- BEGIN: Header -->
			
			<!-- END: Header -->		

			<!-- begin::Body -->
			<div class="m-grid m-grid--hor m-grid--root m-page">

				<!-- BEGIN: Left Aside -->
				

				<!--<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-light ">
					
				

				</div>-->
				
				<div style="width: 100%">

					

					<div class="row">
						<div class="col-md-4 offset-md-4">
							<form method="post">
							<div class="text-center">
								<img src="https://portal.theoffercompany.com/assets/demo/demo7/media/img/logo/logo.png" style="height: 300px; width: 300px;">
							</div>
							<div class="card" style="margin-top:50px;margin-left: 40px; margin-right: 40px; margin-bottom: 30px;">
								<div class="card-header">
									Login
								</div>
								<div class="card-body">
									<div class="form-group">
										<label>Email</label>
										<input type="email" name="email" class="form-control">
									</div>
									<div class="form-group">
										<label>Password</label>
										<input type="password" name="password" class="form-control">
									</div>
								</div>
								<div class="card-footer">
									<button class="btn btn-primary float-right" type="submit" name="login">Login</button>
								</div>
							</div>
							</form>
						</div>

					</div>
				</div>
			</div>
			<!-- end:: Body -->
			
				<?php echo $__env->make( "shared.footer" , array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

		</div>
		<!-- end:: Page -->

		<!-- begin::Quick Sidebar -->
		<?php echo $__env->make( "shared.quickSidebar" , array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<!-- end::Quick Sidebar -->
		<?php echo $__env->make( "shared.quickNav" , array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<!-- begin::Scroll Top -->
		<div id="m_scroll_top" class="m-scroll-top">
			<i class="la la-arrow-up"></i>
		</div>
		<!-- end::Scroll Top -->		    


		<!-- begin::Quick Nav -->	
		<!--begin::Base Scripts -->
		<script src="assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
		<script src="assets/demo/demo7/base/scripts.bundle.js" type="text/javascript"></script>
		<!--end::Base Scripts -->   
		<!--begin::Page Vendors -->
		<script src="assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
		<!--end::Page Vendors -->  
		<!--begin::Page Snippets -->
		<script src="assets/app/js/dashboard.js" type="text/javascript"></script>
		<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

		<!--end::Page Snippets -->
		
	</body>
	<!-- end::Body -->
</html>
