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
	<body  class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-light m-aside-left--fixed m-aside-left--offcanvas m-aside-left--minimize m-brand--minimize m-footer--push m-aside--offcanvas-default"  >

		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">

			<!-- BEGIN: Header -->
			<?php echo $__env->make( "shared.header" , array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<!-- END: Header -->		

			<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

				<!-- BEGIN: Left Aside -->
				<button class="m-aside-left-close  m-aside-left-close--skin-light " id="m_aside_left_close_btn">
					<i class="la la-close"></i>
				</button>

				<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-light ">
					<!-- BEGIN: Brand -->
					<?php echo $__env->make("shared.logo", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
					<!-- END: Brand -->

					<!-- BEGIN: Aside Menu -->
					<?php echo $__env->make( "shared.sidebar" , array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
					<!-- END: Aside Menu -->

				</div>
				
				
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-body">
									test
								</div>
							</div>
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
