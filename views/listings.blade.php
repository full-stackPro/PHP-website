<!DOCTYPE html>
<html lang="en" >
	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>
			Metronic | Dashboard
		</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
				google: {"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]},
				active: function () {
					sessionStorage.fonts = true;
				}
			});
		</script>
		<!--end::Web font -->
		<!--begin::Base Styles -->  
		<!--begin::Page Vendors -->
		<link href="assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Page Vendors -->
		<link href="assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/demo/demo7/base/style.bundle.css" rel="stylesheet" type="text/css" />
		<link href="css/header.css" rel="stylesheet" type="text/css" />
		<!--end::Base Styles -->
		<link rel="icon" href="assets/demo/demo7/media/img/logo/favicon.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="assets/demo/demo7/media/img/logo/favicon.ico" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
		<script src="//cdn.trackduck.com/toolbar/prod/td.js" async data-trackduck-id="5af9de894f8fb4e570081c41"></script>
		<style>
		    table#example th, table#example td {
    width: 16.7% !important;
}
		</style>
	</head>
	<!-- end::Head -->
	<!-- end::Body -->
	<body  class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-light m-aside-left--fixed m-aside-left--offcanvas m-aside-left--minimize m-brand--minimize m-footer--push m-aside--offcanvas-default"  >

		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">

			<!-- BEGIN: Header -->
			@include( "shared.header" )
			<!-- END: Header -->		

			<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid m-body">

				<!-- BEGIN: Left Aside -->
				<button class="m-aside-left-close  m-aside-left-close--skin-light " id="m_aside_left_close_btn">
					<i class="la la-close"></i>
				</button>

				<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-light ">
					<!-- BEGIN: Brand -->
					<div class="m-brand  m-brand--skin-light ">
						<a href="index.php" class="m-brand__logo">
							<img alt="" src="assets/demo/demo7/media/img/logo/logo.png"/>
						</a>
					</div>
					<!-- END: Brand -->

					<!-- BEGIN: Aside Menu -->
					@include( "shared.sidebar" )
					<!-- END: Aside Menu -->

				</div>
				<div class="m-subheader header">
					<div class="d-flex align-items-center">
						<div class="mr-auto">
							<h3 class="m-subheader__title m-subheader__title--separator">
								Listings
							</h3>
						</div>
						<div style="display:none;">
							<a class="btn btn-primary" href="/contact_create.php">Create</a>
						</div>
					</div>
				</div>
				<div class="m-content">
					<div class="tab-content m-portlet">
						<div class="tab-pane active show m-portlet__body" id="details_content" aria-expanded="true">
							
							<table cellspacing="10" cellpadding="15" class="table-striped table-responsive" id="example">
								<thead style="width: 100%; display: table;">
									<tr>
										<th>Action</th>
										<th>First</th>
										<th>Last</th>
										<th>Street</th>
										<th>State</th>
										<th>Zip</th>
									</tr>
								</thead>
								<tbody style="width: 100%; display: table;">

								@foreach( $listings as $listing )

									<tr>
										<td><a href=/listing.php?id={!! urlencode( $listing["id"] ) !!}>Edit</a></td>
										<td>{{ $listing["firstname"] }}</td>
										<td>{{ $listing["lastname"] }}</td>
										<td>{{ $listing["street"] }}</td>
										<td>{{ $listing["city"] }}</td>
										<td>{{ $listing["zip"] }}</td>
									</tr>

								@endforeach

								</tbody>
							</table>
						</div>
						<div class="tab-pane" id="workflow_content" aria-expanded="false">
							WorkFlow
						</div>
					</div>

				</div>
			</div>
			<!-- end:: Body -->

			@include( "shared.footer" )

		</div>
		<!-- end:: Page -->

		<!-- begin::Quick Sidebar -->
		@include( "shared.quickSidebar" )
		<!-- end::Quick Sidebar -->
		@include( "shared.quickNav" )
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
		<!--end::Page Snippets -->
		<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
			    $('#example').DataTable({
			    	iDisplayLength:100,
			    	responsive:true
			    });
			} );
		</script>
	</body>
	<!-- end::Body -->
</html>
