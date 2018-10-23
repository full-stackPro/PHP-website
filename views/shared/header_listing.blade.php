<header class="m-grid__item    m-header listing_header"  m-minimize-offset="200" m-minimize-mobile-offset="200" >
	<div class="m-container m-container--fluid m-container--full-height">
		<div class="m-stack m-stack--ver m-stack--desktop">
			<!-- BEGIN: Brand -->
			<div class="m-stack__item m-brand ">
				<div class="m-stack m-stack--ver m-stack--general">
					<div class="m-stack__item m-stack__item--middle m-brand__logo">
						<a href="index1.html" class="m-brand__logo-wrapper">
							<img alt="" src="assets/demo/demo7/media/img/logo/logo.png"/>
						</a>
					</div>
					<div class="m-stack__item m-stack__item--middle m-brand__tools">
						<!-- BEGIN: Responsive Aside Left Menu Toggler -->
						<a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
							<span></span>
						</a>
						<!-- END -->
						<!-- BEGIN: Responsive Header Menu Toggler -->
						<a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
							<span></span>
						</a>
						<!-- END -->
						<!-- BEGIN: Topbar Toggler -->
						<a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
							<i class="flaticon-more"></i>
						</a>
						<!-- BEGIN: Topbar Toggler -->
					</div>
				</div>
			</div>
			<!-- END: Brand -->
			<div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
				<!-- BEGIN: Horizontal Menu -->
				<button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-light " id="m_aside_header_menu_mobile_close_btn">
					<i class="la la-close"></i>
				</button>
				<div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-light m-aside-header-menu-mobile--submenu-skin-light "  >
					<ul class="m-menu__nav  m-menu__nav--submenu-arrow ">

						<li class="m-menu__item m-menu__item--submenu m-menu__item--rel">
							<a href="/listing.php?id={!! urlencode( $listing["id"] ) !!}" class="m-menu__link @if ( $page === "listing" ) active @endif">
								<span class="m-menu__item-here"></span>
								<span class="m-menu__link-text">
									Listing Details
								</span>
							</a>
						</li>

                       <li class="m-menu__item m-menu__item--submenu m-menu__item--rel">
							<a href="/contact_edit.php?id={!! urlencode( $contact["id"] ) !!}" class="m-menu__link @if ( $page === "contact" ) active @endif">
								<span class="m-menu__item-here"></span>
								<span class="m-menu__link-text">
									Contact Details
								</span>
							</a>
						</li>

                                                <li class="m-menu__item m-menu__item--submenu m-menu__item--rel">
							<a href="#">
								<span class="m-menu__item-here"></span>
								<span class="m-menu__link-text">
									Buyer
								</span>
							</a>
						</li>

						<!--<li class="m-menu__item m-menu__item--submenu m-menu__item--rel">
							<a href="/listing_images.php?id={!! urlencode( $listing["id"] ) !!}" class="m-menu__link @if ( $page === "photos" ) active @endif">
								<span class="m-menu__item-here"></span>
								<span class="m-menu__link-text">
									Photos
								</span>
							</a>
						</li>

						<li class="m-menu__item  m-menu__item--submenu m-menu__item--rel">
							<a href="/listing_workflow.php?id={!! urlencode( $listing["id"] ) !!}" class="m-menu__link @if ( $page === "workflow" ) active @endif">
								<span class="m-menu__item-here"></span>
								<span class="m-menu__link-text">
									WorkFlow
								</span>
							</a>
						</li>-->						
					</ul>
				</div>
			</div>
		</div>
	</div>
</header>