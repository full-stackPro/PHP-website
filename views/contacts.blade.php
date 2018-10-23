<!DOCTYPE html>
<html lang="en" >
	<!-- begin::Head -->
	<head>
		@include("shared.header-meta")
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
			@media only screen and (min-width: 1200px)  {
				.m-content{
					width: 100% !important;
				}
			}
			@media only screen and (max-width: 1199px)  {
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
	<body  class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-light m-aside-left--fixed m-aside-left--offcanvas m-aside-left--minimize m-brand--minimize m-footer--push m-aside--offcanvas-default"  >

		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">

			<!-- BEGIN: Header -->
			@include( "shared.header" )
			<!-- END: Header -->		

			<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

				<!-- BEGIN: Left Aside -->
				<button class="m-aside-left-close  m-aside-left-close--skin-light " id="m_aside_left_close_btn">
					<i class="la la-close"></i>
				</button>

				<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-light ">
					<!-- BEGIN: Brand -->
					@include("shared.logo")
					<!-- END: Brand -->

					<!-- BEGIN: Aside Menu -->
					@include( "shared.sidebar" )
					<!-- END: Aside Menu -->

				</div>
				
				<div style="width: 100%">

					<div class="m-subheader header">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title m-subheader__title--separator">
									Contacts
								</h3>
							</div>
							<div>
								<a class="btn btn-primary" href="/contact_create.php">Create</a>
								<a class="btn btn-primary" href="/contacts_upload.php">Import</a>
								
							</div>
						</div>
					</div>

					<div class="m-content">
						<div class="m-portlet">
							<div class="m-portlet__body tab-content content_box" style="width: 100%;">
							<!---<div class="tab-content">---->
								
									<table  class="table-striped table-responsive" style="width: 100%;" id="example">
										<thead style="width: 100%;">
											<tr>
												<th style="width: 20%" class="px-2 pb-3">Name</th>
												<th style="width: 20%" class="px-2 pb-3">Address</th>
												<th style="width: 10%" class="px-2 pb-3">Phone</th>
												<th style="width: 10%" class="px-2 pb-3">Email</th>
												<th style="width: 10%" class="px-2 pb-3">Pipeline Status</th>
												<th style="width: 10%" class="px-2 pb-3">Transaction Type</th>
												<th style="width: 10%" class="px-2 pb-3">Contact Type</th>
												<th style="width: 10%" class="px-2 pb-3">Action</th>
											</tr>
										</thead>
										<tbody>

											@if ( count( $contacts ) === 0 )
												<tr>
													<td colspan="9" style="text-align:center">You don't have any contacts yet. <a class="btn btn-primary" href="/contact_create.php" style="margin-left: 10px;">Create a new one</a></td>
												</tr>
											@else

												@foreach ( $contacts as $key => $contact )
													<tr>
														<td style="width: 20%">
															<div class="row">{{ $contact["name_first"] }}</div>
															<div class="row">{{ $contact["name_last"] }}</div>
														</td>
														<td style="width: 20%">
															<div class="row nowrap">{{ $contact["street"] }}</div>
															<div class="row nowrap">{{ $contact["city"] }}</div>
															<div class="row nowrap">{{ $contact["state"] }}</div>
															<div class="row nowrap">{{ $contact["zip"] }}</div>
														</td>
														<td style="width: 10%"><div class="row nowrap">{{ $contact["mobile_phone"] }}</div></td>
														<td style="width: 10%"><div class="row nowrap">{{ $contact["email"] }}</div></td>
														<td style="width: 10%">
															<div class="row">{{ $contact["pipeline_status"]["name"] }}</div>
														</td>
														<td style="width: 10%">
															<div class="row">{{ $contact["transaction_type"]["name"] }}</div>
														</td>
														<td style="width: 10%">
															<div class="row">{{ $contact["contact_type"]["name"] }}</div>
														</td>
														
														
														
														<td style="width: 10%">
															<a class="btn btn-primary" href="/contact_edit.php?id={{ urlencode( $contact["id"] ) }}">Edit</a>
														</td>
													</tr>
												@endforeach

											@endif

										</tbody>
									</table>
								
							</div>
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
		<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

		<!--end::Page Snippets -->
		<script type="text/javascript">
			$(document).ready(function() {
			    $('#example').DataTable({
			    	responsive:true,
			    	"bSort" : false
			    });

			} );

			$(".show_more").on("click",function(e){
				e.preventDefault();
				contactId  = $(this).attr('contact-id');
				// alert(contactId);
				$(".more"+contactId).slideToggle();
				$(this).addClass("hidden");
			});
			$(".notes_more").on("click",function(e){
				e.preventDefault();
				noteId = $(this).attr('note-id');
				$(".notes"+noteId).slideToggle();
				$(this).addClass("hidden");
			});
			$("#show_more").on("click",function(e){
				$(".details").removeClass('hidden');
				$(this).addClass('hidden');
			});
		</script>
	</body>
	<!-- end::Body -->
</html>
