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
		<link href="/assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Page Vendors -->
		<link href="/assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
		<link href="/assets/demo/demo7/base/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Base Styles -->
		<link rel="shortcut icon" href="assets/demo/demo7/media/img/logo/favicon.ico" />
		<script src="//cdn.trackduck.com/toolbar/prod/td.js" async data-trackduck-id="5af9de894f8fb4e570081c41"></script>
		<link href="/css/spinner.css" rel="stylesheet" async>
		<link href="css/header.css" rel="stylesheet" type="text/css" />
		<style>
                        table.m-datatable__table {
    width: 100%;
}
table.m-datatable__table tr {
    border-bottom: 2px solid #ddd;
}
table.m-datatable__table td {
    display: inline-block;
    position: relative;
    width: 100%;
    text-align: center;
    font-weight: 500;
}

			.display_image {
				width: 400px;
			}

			.spinner {
				position: relative;
				display: none;
			}
				.spinner.loading,
				.spinner.error,
				.spinner.success {
					display: inline-block;
				}

				.spinner:not( :required ):after {
					font-size: 5px;
					margin-left: 10px;
					margin-top: -8px;
				}

				.spinner.error:before,
				.spinner.success:before {
					font-weight: bold;
					font-size: 20px;
					margin-left: 3px;
				}

				.spinner.error:before {
					content: "x";
					color: rgb( 240,0,0 );
				}

				.spinner.success:before {
					content: "✓";
					color: rgb( 0,220,0 );
				}
@media  screen and ( max-width: 1024px ) {

				        .m-header--fixed-mobile .m-topbar {
                                                margin-top: 0;
                                                top: 0;
                                        }

					.listing .item label {
						text-align: right;
					}

					.listing .item label,
					.listing .item .input {
						width: 46%;
					}
.m-aside-header-menu-mobile {
    left: 0;
    width: 20% !important;
}
.m-header--fixed-mobile .m-topbar {
    width: 80% !important;
}
.m-aside-header-menu-mobile {
    left: 0;
    width: 100% !important;
    height: 65px;
    top: 60px;
}
.m-header--fixed-mobile .m-body {
    padding-top: 126px!important;
}
.m-header--fixed-mobile .m-topbar {
    width: 100% !important;
}
.m-aside-header-menu-mobile .m-menu__nav .m-menu__item>.m-menu__heading .m-menu__link-text, .m-aside-header-menu-mobile .m-menu__nav .m-menu__item>.m-menu__link .m-menu__link-text {
    display: inline-block;
    width: initial;
}
.m-aside-header-menu-mobile .m-menu__nav .m-menu__item>.m-menu__heading, .m-aside-header-menu-mobile .m-menu__nav .m-menu__item>.m-menu__link {
    display: inline-block;
}
.m-aside-header-menu-mobile .m-menu__nav .m-menu__item {
    display: inline-block;
}
.m-aside-header-menu-mobile .m-menu__nav {
    padding: 10px 0 10px 0;
    margin-bottom: 0 !important;
}

			}

			@media  screen and ( max-width: 510px ) {

					.listing .item label,
					.listing .item .input {
						margin-left: auto;
						margin-right: auto;
						width: 98%;
						text-align: center;
					}
.m-aside-header-menu-mobile {
    left: 0;
    width: 100% !important;
    height: 65px;
}
.m-aside-header-menu-mobile .m-menu__nav .m-menu__item>.m-menu__heading, .m-aside-header-menu-mobile .m-menu__nav .m-menu__item>.m-menu__link {
    display: inline-block;
}
.m-aside-header-menu-mobile .m-menu__nav .m-menu__item>.m-menu__heading .m-menu__link-text, .m-aside-header-menu-mobile .m-menu__nav .m-menu__item>.m-menu__link .m-menu__link-text {
    display: inline-block;
    width: initial;
}
.m-aside-header-menu-mobile .m-menu__nav {
    list-style: none;
    padding: 10px 0 10px 0;
    margin-bottom: 0 !important;
}
.m-aside-header-menu-mobile .m-menu__nav>.m-menu__item {
    display: inline-block;
}
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

			<!-- BEGIN: Listing Header -->
			<?php echo $__env->make( "shared.header_listing" , array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<!-- END: Listing Header -->	

			<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

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
					<?php echo $__env->make( "shared.sidebar" , array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
					<!-- END: Aside Menu -->

				</div>
				<div class="m-portlet__body" style="width: 100%;">

					<form action="/api/update_listing_images.php" method="post" enctype="multipart/form-data">

						<input type="hidden" name="id" value="<?php echo urlencode( $listing["id"] ); ?>">

						<table class="m-datatable__table" cellspacing="10" cellpadding="15">
							<tbody>
								<tr>
									<td>Hero</td>
									<td><img src="<?php echo $listing["hero-image"]; ?>" class="display_image" data-name="hero-image"></td>
									<td><input type="file" name="hero-image"></td>
								</tr>
								<tr>
									<td>Description</td>
									<td><img src="<?php echo $listing["desc_image"]; ?>" class="display_image" data-name="desc_image"></td>
									<td><input type="file" name="desc_image"></td>
								</tr>
								<tr>
									<td>Amenities</td>
									<td><img src="<?php echo $listing["amenities_image"]; ?>" class="display_image" data-name="amenities_image"></td>
									<td><input type="file" name="amenities_image"></td>
								</tr>
								<tr>
									<td>Gallery 1</td>
									<td><img src="<?php echo $listing["gallery_image_1"]; ?>" class="display_image" data- name="gallery_image_1"></td>
									<td>
										<div>File: <input type="file" name="gallery_image_1"></div>
										<div>Title: <input type="text" name="gallery_image_1_title" placeholder="Title" class="spinner_input"><span class="spinner no_overlay"></span></div>
										<div>Text: <input type="text" name="gallery_image_1_text" placeholder="Text" class="spinner_input"><span class="spinner no_overlay"></span></div>
										<div>Detail 1: <input type="text" name="gallery_image_1_detail_1" placeholder="Detail 1" class="spinner_input"><span class="spinner no_overlay"></span></div>
										<div>Detail 2: <input type="text" name="gallery_image_1_detail_2" placeholder="Detail 2" class="spinner_input"><span class="spinner no_overlay"></span></div>
										<div>Detail 3: <input type="text" name="gallery_image_1_detail_3" placeholder="Detail 3" class="spinner_input"><span class="spinner no_overlay"></span></div>
									</td>
								</tr>
								<tr>
									<td>Gallery 2</td>
									<td><img src="<?php echo $listing["gallery_image_2"]; ?>" class="display_image" data-name="gallery_image_2"></td>
									<td>
										<div>File: <input type="file" name="gallery_image_2"></div>
										<div>Title: <input type="text" name="gallery_image_2_title" placeholder="Title" class="spinner_input"><span class="spinner no_overlay"></span></div>
										<div>Text: <input type="text" name="gallery_image_2_text" placeholder="Text" class="spinner_input"><span class="spinner no_overlay"></span></div>
										<div>Detail 1: <input type="text" name="gallery_image_2_detail_1" placeholder="Detail 1" class="spinner_input"><span class="spinner no_overlay"></span></div>
										<div>Detail 2: <input type="text" name="gallery_image_2_detail_2" placeholder="Detail 2" class="spinner_input"><span class="spinner no_overlay"></span></div>
										<div>Detail 3: <input type="text" name="gallery_image_2_detail_3" placeholder="Detail 3" class="spinner_input"><span class="spinner no_overlay"></span></div>
									</td>
								</tr>
								<tr>
									<td>Gallery 3</td>
									<td><img src="<?php echo $listing["gallery_image_3"]; ?>" class="display_image" data-name="gallery_image_3"></td>
									<td>
										<div>File: <input type="file" name="gallery_image_3"></div>
										<div>Title: <input type="text" name="gallery_image_3_title" placeholder="Title" class="spinner_input"><span id="spinner"></span></div>
										<div>Text: <input type="text" name="gallery_image_3_text" placeholder="Text" class="spinner_input"><span id="spinner"></span></div>
										<div>Detail 1: <input type="text" name="gallery_image_3_detail_1" placeholder="Detail 1" class="spinner_input"><span id="spinner"></span></div>
										<div>Detail 2: <input type="text" name="gallery_image_3_detail_2" placeholder="Detail 2" class="spinner_input"><span id="spinner"></span></div>
										<div>Detail 3: <input type="text" name="gallery_image_3_detail_3" placeholder="Detail 3" class="spinner_input"><span id="spinner"></span></div>
									</td>
								</tr>
								<tr>
									<td>Gallery 4</td>
									<td><img src="<?php echo $listing["gallery_image_4"]; ?>" class="display_image" data-name="gallery_image_4"></td>
									<td>
										<div>File: <input type="file" name="gallery_image_4"></div>
										<div>Title: <input type="text" name="gallery_image_4_title" placeholder="Title" class="spinner_input"><span id="spinner"></span></div>
										<div>Text: <input type="text" name="gallery_image_4_text" placeholder="Text" class="spinner_input"><span id="spinner"></span></div>
										<div>Detail 1: <input type="text" name="gallery_image_4_detail_1" placeholder="Detail 1" class="spinner_input"><span id="spinner"></span></div>
										<div>Detail 2: <input type="text" name="gallery_image_4_detail_2" placeholder="Detail 2" class="spinner_input"><span id="spinner"></span></div>
										<div>Detail 3: <input type="text" name="gallery_image_4_detail_3" placeholder="Detail 3" class="spinner_input"><span id="spinner"></span></div>
									</td>
								</tr>
								<tr>
									<td colspan="3">
										<button>Save</button>
									</td>
								</tr>
							</tbody>
						</table>
					</form>
				</div>
			</div>
			<!-- end:: Body -->

			<?php echo $__env->make(  "shared.footer" , array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

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

		<div id="spinner"></div>	    


		<!-- begin::Quick Nav -->	
		<!--begin::Base Scripts -->
		<script src="/assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
		<script src="/assets/demo/demo7/base/scripts.bundle.js" type="text/javascript"></script>
		<!--end::Base Scripts -->   
		<!--begin::Page Vendors -->
		<script src="/assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
		<!--end::Page Vendors -->  
		<!--begin::Page Snippets -->
		<script src="/assets/app/js/dashboard.js" type="text/javascript"></script>
		<!--end::Page Snippets -->

		<script src="/js/jquery.ba-throttle-debounce.min.js"></script>
		<script>

			// form logic

			$( 'input[type="file"]' ).change( function() {
				console.log( "input change" );
				let el = $(this);

				let name = el.attr( "name" );

				let file_data = el.prop("files")[0];
				let form_data = new FormData();
					form_data.append( "file", file_data );

				showSpinner();

				$.ajax({
					type: "POST",
					url: "<?php echo FRONTEND_BASE_URL; ?>/api/propertyImageUpload.php?id=" + encodeURIComponent( <?php echo $listing["id"]; ?> ) + "&name=" + encodeURIComponent( name ),
					cache: false,
					contentType: false,
					processData: false,
					data: form_data,
					success: function( response ) {
						console.log( "success", response );
						if ( response.data && response.data.url ) {
							let img = $( "body" ).find( 'img[data-name="'+ name +'"]' );
								img.attr( "src", response.data.url );

							console.log( "img", img )
							console.log( "src", response.data.url )
						}
						else {
							console.error( "unknown response", response );
						}
						hideSpinner();
					},
					error: function( response ) {
						console.error( "error", response );
						hideSpinner();
					},
					dataType: "json",
				});

			});

			function showSpinner() {
				$( "#spinner" ).addClass( "loading" );
			}

			function hideSpinner() {
				$( "#spinner" ).removeClass( "loading" );
			}

			function showSpinnerInput( el ) {
				el.parent().find( ".spinner" ).removeClass( "error" ).removeClass( "success" ).addClass( "loading" ).attr( "title", "" );
			}

			function hideSpinnerInput( el ) {
				el.parent().find( ".spinner" ).removeClass( "loading" ).removeClass( "error" ).removeClass( "success" ).attr( "title", "" );
			}

			function showSpinnerInputError( el, text ) {
				el.parent().find( ".spinner" ).removeClass( "loading" ).removeClass( "success" ).addClass( "error" ).attr( "title", text );
			}

			function showSpinnerInputSuccess( el ) {
				el.parent().find( ".spinner" ).removeClass( "loading" ).removeClass( "error" ).addClass( "success" ).attr( "title", "" );
			}

			$( "input.spinner_input" ).keyup( $.debounce( 500, function() {
				console.log( "debounce" );

				let el = $(this);

				showSpinnerInput( el );

				let data = {
					value: el.val(),
					key: el.attr( "name" ),
					id: "<?php echo $listing["id"]; ?>",
				};

				$.ajax({
					type: "POST",
					url: "/api/propertyDetailUpdate.php",
					data: data,
					success: function( response ) {
						console.log( "success", response );
						showSpinnerInputSuccess( el );
					},
					error: function( response ) {
						console.error( "error", response );
						showSpinnerInputError( el, response.toString() );
					},
					dataType: "json",
				});
				
			}) );


		</script>
	</body>
	<!-- end::Body -->
</html>
