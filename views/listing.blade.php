<!DOCTYPE html>
<html lang="en" >
	<!-- begin::Head -->
	<head>
		@include("shared.header-meta")
		<link href="../css/listing.css" rel="stylesheet" type="text/css" />
		<link href="css/header.css" rel="stylesheet" type="text/css" />
		<style>
		    .input input[type="checkbox"] {
    display: inline-block;
    float: left;
    position: relative;
    width: initial !important;
    height: 20px;
    margin-right: 6px;
}
.listing .item label, .listing .item .input {
    float: left;
    position: relative;
}
.listing .item label {
    padding-top: 6px;
}
		</style>
	</head>
	<!-- end::Head -->
	<!-- end::Body -->
	<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-light m-aside-left--fixed m-aside-left--offcanvas m-aside-left--minimize m-brand--minimize m-footer--push m-aside--offcanvas-default"  >
		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">

			<!-- BEGIN: Header -->
			@include( "shared.header" )
			<!-- END: Header -->

			<!-- BEGIN: Listing Header -->
			@include( "shared.header_listing" )
			<!-- END: Listing Header -->	

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
				<div class="m-portlet__body" style="width: 100%;">

					<form action="/api/update_listing.php" method="post">
						<input type="hidden" name="id" value="{!! $listing["id"] !!}">
						<div class="listing" style="margin-top: 10px;font-size: 20px;">
													<div class="item" style="width: 100%;">
								<label for="offer_create_dt">Offer Create Dt</label>
								<div class="input">
									{{ $listing["offer_create_dt"] }}
								</div>
							</div>
							</div>
							<div class="listing">  <h1 style="padding: 10px;font-size: 29px;border-top: 1px solid #ddd;margin-top: 20px;">TRANSACTION DETAILS</h1>
							<div class="item">
								<label for="floors">Address</label>
								<div class="input">
									<input id="floors" type="text" name="floors" value="" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
								
							</div>
							<div class="item"><label for="floors"><a href="#">Add New Listing</a></label></div>
							<div class="item">
								<label for="square-feet">Sale price</label>
								<div class="input">
									<input id="square-feet" type="text" name="square-feet" value="" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
							</div>
							<div class="item"></div>
							<div class="item">
								<label for="bathrooms">List date</label>
								<div class="input">
									<input id="bathrooms" type="text" name="bathrooms" value="" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
							</div>
							<div class="item"></div>
							<div class="item">
								<label for="bedrooms">Contract date</label>
								<div class="input">
									<input id="bedrooms" type="text" name="bedrooms" value="" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
							</div>
							<div class="item"></div>
							<div class="item">
								<label for="garage-space">Closing date</label>
								<div class="input">
									<input id="garage-space" type="text" name="garage-space" value="" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
							</div>
							<div class="item"></div>
							<div class="item">
								<label for="property-desc">Expiration date</label>
								<div class="input">
									<input id="property-desc" type="text" name="property-desc" value="" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
							</div>
							<div class="item"></div>
							<div class="item">
								<label for="property-desc">PROPERTY TITLE</label>
								<div class="input">
									<input id="property-desc" type="text" name="property-desc" value="" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
							
								<label for="property-desc">PROPERTY DESCRIPTION</label>
								<div class="input">
									<input id="property-desc" type="text" name="property-desc" value="" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
							
								<label for="property-desc">PROPERTY AMENITIES</label>
								<div class="input">
									<input id="property-desc" type="text" name="property-desc" value="" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
								</div>
								<div class="item"></div>
							    <div class="item">
								<div style="padding: 10px;font-size: 29px;border-top: 1px solid #ddd;margin-top: 20px; float:left;width: 100%;">Features<br/></div>							
																
									<label for="property-desc">Beds</label>
									<div class="input"><input type="text" name="feature1" value=""class="spinner_input"><span class="spinner no_overlay"></span>
								</div> 
									<label for="property-desc">Baths</label>
									<div class="input"><input type="text" name="feature2" value=""class="spinner_input"><span class="spinner no_overlay"></span>
								</div> 
									<label for="property-desc">Square Feet</label>
									<div class="input"><input type="text" name="feature3" value=" " class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
									<label for="property-desc">Team Built</label>
									<div class="input"><input type="text" name="feature4" value=" " class="spinner_input"><span class="spinner no_overlay"></span>
								</div> 
									<label for="property-desc">Pool</label>
									<div class="input"><input type="text" name="feature5" value="" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
									<label for="property-desc">Stories</label>
									<div class="input"><input type="text" name="feature6" value="" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
									<label for="property-desc">Type</label>
									<div class="input"><input type="text" name="feature7" value="" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
									<label for="property-desc">Lot Square Feet</label>
									<div class="input"><input type="text" name="feature8" value="" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
									<label for="property-desc">Garage Spaces</label>
									<div class="input"><input type="text" name="feature9" value="" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
									<label for="property-desc">Spa</label>
									<div class="input"><input type="text" name="feature10" value="" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
									<label for="property-desc">Fireplace</label>
									<div class="input"><input type="text" name="feature11" value="" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
								</div>
								<div class="item">
							<div style="padding: 10px;font-size: 29px;border-top: 1px solid #ddd;margin-top: 20px; float:left;width: 100%;">Neighborhood<br/></div>
							
								
									<label for="property-desc">Estimated Population</label>
									<div class="input">
									<input type="text" name="neighborhood1" value="" class="spinner_input"><span class="spinner no_overlay"></span>
								</div> 
									<label for="property-desc">Median Age</label>
									<div class="input">
									<input type="text" name="neighborhood2" value="" class="spinner_input"><span class="spinner no_overlay"></span>
								</div> 
									<label for="property-desc">Household</label>
									<div class="input">
									<input type="text" name="neighborhood3" value="" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
									<label for="property-desc">Number of Households</label>
									<div class="input">
									<input type="text" name="neighborhood4" value="" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
									<label for="property-desc">Average Household Size</label>
									<div class="input">
									<input type="text" name="neighborhood5" value="" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
									<label for="property-desc">Households with Children</label>
									<div class="input">
									<input type="text" name="neighborhood6" value="" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
									<label for="property-desc">Gender</label>
									<div class="input">
									<input type="text" name="neighborhood7" value="" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
									<label for="property-desc">Marital Statuse</label>
									<div class="input">
									<input type="text" name="neighborhood8" value="" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
									<label for="property-desc">Housing</label>
									<div class="input">
									<input type="text" name="neighborhood9" value="" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
									<label for="property-desc">Income</label>
									<div class="input">
									<input type="text" name="neighborhood10" value="" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
								<label for="property-desc"></label>
									<div class="input"><span class="spinner no_overlay"></span>
								</div>
								<label for="property-desc"></label>
									<div class="input"><span class="spinner no_overlay"></span>
								</div>
								</div>
								 <div class="item">
							  <div style="padding: 10px;font-size: 29px;border-top: 1px solid #ddd;margin-top: 20px; float:left;width: 100%;">Room Details<br/></div>
								<label for="property-desc">Kitchen Features</label>
									<div class="input">
									<input type="text" name="roomdetails1" value="" class="spinner_input"><span class="spinner no_overlay"></span>
								</div> 
									<label for="property-desc">Master Bathroom</label>
									<div class="input">
									<input type="text" name="roomdetails2" value="" class="spinner_input"><span class="spinner no_overlay"></span>
								</div> 
									<label for="property-desc">Laundry</label>
									<div class="input">
									<input type="text" name="roomdetails3" value="" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
									<label for="property-desc">Dining Area</label>
									<div class="input">
									<input type="text" name="roomdetails4" value="" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
									<label for="property-desc">Basement</label>
									<div class="input">
									<input type="text" name="roomdetails5" value="" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
									<label for="property-desc">Den/Office</label>
									<div class="input">
									<input type="text" name="roomdetails6" value="" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
								
							
						
								<div style="padding: 10px;font-size: 29px;border-top: 1px solid #ddd;margin-top: 20px; float:left;width: 100%;">Construction<br/></div>
									<label for="property-desc">Architecture</label>
									<div class="input">
									<input type="text" name="construction1" value="" class="spinner_input"><span class="spinner no_overlay"></span>
								</div> 
									<label for="property-desc">Finish</label>
									<div class="input">
									<input type="text" name="construction2" value="" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
									<label for="property-desc">Frame</label>
									<div class="input">
									<input type="text" name="construction3" value="" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
									<label for="property-desc">Roofing</label>
									<div class="input">
									<input type="text" name="construction4" value="" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
									<label for="property-desc">Fencing</label>
									<div class="input">
									<input type="text" name="construction5" value="" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
									<label for="property-desc">Cooling</label>
									<div class="input">
									<input type="text" name="construction6" value="" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
									<label for="property-desc">Heating</label>
									<div class="input">
									<input type="text" name="construction7" value="" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
									<label for="property-desc">Utilities</label>
									<div class="input">
									<input type="text" name="construction8" value="" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
									<label for="property-desc">Water</label>
									<div class="input">
									<input type="text" name="construction9" value="" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
									<label for="property-desc">Sewer</label>
									<div class="input">
									<input type="text" name="construction10" value="" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
							   
							
							
							
							</div>
							
						    
							
								 <div class="item">
							
							         <div style="padding: 10px;font-size: 29px;border-top: 1px solid #ddd;margin-top: 20px; float:left;width: 100%;">Other<br/></div>
								
									<label for="property-desc">Elementary School</label>
									<div class="input">
									<input type="text" name="other1" value="" class="spinner_input"><span class="spinner no_overlay"></span>
								</div> 
									<label for="property-desc">Jr. High School</label>
									<div class="input">
									<input type="text" name="other2" value="" class="spinner_input"><span class="spinner no_overlay"></span>
								</div> 
									<label for="property-desc">High School</label>
									<div class="input">
									<input type="text" name="other3" value="" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
									<label for="property-desc">Subdivision</label>
									<div class="input">
									<input type="text" name="other4" value="" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
									<label for="property-desc">Tax Municipality</label>
									<div class="input">
									<input type="text" name="other5" value="" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
									<label for="property-desc">HOA</label>
									<div class="input">
									<input type="text" name="other6" value="" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
									<label for="property-desc">HOA Fee</label>
									<div class="input">
									<input type="text" name="other7" value="" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
								
							
								<label for="property-desc">3D WALKTHROUGH</label>
								<div class="input">
									<input id="property-desc" type="text" name="property-desc" value="" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
							
								<label for="property-desc">PROPERTY MAP</label>
								<div class="input">
									<input id="property-desc" type="text" name="property-desc" value="" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
														<label for="property-desc">WALK SCORE</label>
								<div class="input">
									<input id="property-desc" type="text" name="property-desc" value="" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
							
								<label for="property-desc">NEARBY PLACE</label>
								<div class="input">
									<input id="property-desc" type="text" name="property-desc" value="" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
							
								<label for="property-desc">SCHOOL RANKINGS</label>
								<div class="input">
									<input id="property-desc" type="text" name="property-desc" value="" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
							
								<label for="property-desc">PHOTOS</label>
								<div class="input">
									<input id="property-desc" type="text" name="property-desc" value="" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
								<label for="property-desc"></label>
									<div class="input"><span class="spinner no_overlay"></span>
								</div>
								<label for="property-desc"></label>
									<div class="input"><span class="spinner no_overlay"></span>
								</div>
								<label for="property-desc"></label>
									<div class="input"><span class="spinner no_overlay"></span>
								</div>
								<label for="property-desc"></label>
									<div class="input"><span class="spinner no_overlay"></span>
								</div>
								<label for="property-desc"></label>
									<div class="input"><span class="spinner no_overlay"></span>
								</div>
								<label for="property-desc"></label>
									<div class="input"><span class="spinner no_overlay"></span>
								</div>
								<label for="property-desc"></label>
									<div class="input"><span class="spinner no_overlay"></span>
								</div>
								<label for="property-desc"></label>
									<div class="input"><span class="spinner no_overlay"></span>
								</div>
								<label for="property-desc"></label>
									<div class="input"><span class="spinner no_overlay"></span>
								</div>
								<label for="property-desc"></label>
									<div class="input"><span class="spinner no_overlay"></span>
								</div>
								<label for="property-desc"></label>
									<div class="input"><span class="spinner no_overlay"></span>
								</div>
							</div>
                                                  </div>				
						<!--<div class="listing">
							<h1 style="padding: 10px;font-size: 29px;border-top: 1px solid #ddd;margin-top: 20px;">Seller Information</h1>
							<div style="display:none;" class="item">
								<label for="id">Id</label>
								<div class="input">
									{!! $listing["id"] !!}
								</div>
							</div>
							<div class="item">
								<label for="firstname">Firstname</label>
								<div class="input">
									<input id="firstname" type="text" name="firstname" value="{!! $listing["firstname"] !!}" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
							</div>
							<div class="item">
								<label for="lastname">Lastname</label>
								<div class="input">
									<input id="lastname" type="text" name="lastname" value="{!! $listing["lastname"] !!}" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
							</div>
							<div class="item">
								<label for="email">Email</label>
								<div class="input">
									<input id="email" type="text" name="email" value="{!! $listing["email"] !!}" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
							</div>
							<div class="item">
								<label for="phone">Phone</label>
								<div class="input">
									<input id="phone" type="text" name="phone" value="{!! $listing["phone"] !!}" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
							</div>
							<div class="item">
								<label for="street">Street</label>
								<div class="input">
									<input id="street" type="text" name="street" value="{!! $listing["street"] !!}" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
							</div>
							<div class="item">
								<label for="city">City</label>
								<div class="input">
									<input id="city" type="text" name="city" value="{!! $listing["city"] !!}" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
							</div>
							<div class="item">
								<label for="state">State</label>
								<div class="input">
									<input id="state" type="text" name="state" value="{!! $listing["state"] !!}" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
							</div>
							<div class="item">
								<label for="zip">Zip</label>
								<div class="input">
									<input id="zip" type="text" name="zip" value="{!! $listing["zip"] !!}" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
							</div>
                                                  </div>
                                                  <div class="listing">
                                                        <h1 style="padding: 10px;font-size: 29px;border-top: 1px solid #ddd;margin-top: 20px;">Property Information</h1>
							<div class="item">
								<label for="floors">Floors</label>
								<div class="input">
									<input id="floors" type="text" name="floors" value="{!! $listing["floors"] !!}" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
							</div>
							<div class="item">
								<label for="square-feet">Square Feet</label>
								<div class="input">
									<input id="square-feet" type="text" name="square-feet" value="{!! $listing["square-feet"] !!}" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
							</div>
							<div class="item">
								<label for="bathrooms">Bathrooms</label>
								<div class="input">
									<input id="bathrooms" type="text" name="bathrooms" value="{!! $listing["bathrooms"] !!}" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
							</div>
							<div class="item">
								<label for="bedrooms">Bedrooms</label>
								<div class="input">
									<input id="bedrooms" type="text" name="bedrooms" value="{!! $listing["bedrooms"] !!}" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
							</div>
							<div class="item">
								<label for="garage-space">Garage-space</label>
								<div class="input">
									<input id="garage-space" type="text" name="garage-space" value="{!! $listing["garage-space"] !!}" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
							</div>
							<div class="item">
								<label for="property-desc">Property Description</label>
								<div class="input">
									<input id="property-desc" type="text" name="property-desc" value="{!! $listing["property-desc"] !!}" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
							</div>
                                                  </div>-->
												  
												  
												  
                                                  <div class="listing">
                                                        <h1 style="padding: 10px;font-size: 29px;border-top: 1px solid #ddd;margin-top: 20px;">Condition Information</h1>
							<div class="item">
								<label for="avm_date">Avm Date</label>
								<div class="input">
									<input id="avm_date" type="text" name="avm_date" value="{!! $listing["avm_date"] !!}" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
							</div>
                             <div class="item"></div>                           
							<div class="item">
								<label for="permitted_additions">Permitted Additions</label>
								<div class="input">
									<input id="permitted_additions" type="text" name="permitted_additions" value="{!! $listing["permitted_additions"] !!}" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
							</div>
							<div class="item">
								<label for="unpermitted_additions">Unpermitted Additions</label>
								<div class="input">
									<input id="unpermitted_additions" type="text" name="unpermitted_additions" value="{!! $listing["unpermitted_additions"] !!}" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
							</div>
							<div class="item">
								<label for="features_list">Features List</label>
								<div class="input">
									<textarea id="features_list" rows="5" cols="30" name="features_list" class="spinner_input">{!! $listing["features_list"] !!}</textarea><span class="spinner no_overlay"></span>
								</div>
							</div>
							<div class="item">
								<label for="has_pool">Has Pool</label>
								<div class="input">
									<input id="has_pool" type="text" name="has_pool" value="{!! $listing["has_pool"] !!}" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
							</div>
							<div class="item">
								<label for="kitchen_condition">Kitchen Condition</label>
								<div class="input">
									<input id="kitchen_condition" type="text" name="kitchen_condition" value="{!! $listing["kitchen_condition"] !!}" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
							</div>
							<div class="item">
								<label for="kitchen_counters">Kitchen Counters</label>
								<div class="input">
									<input id="kitchen_counters" type="text" name="kitchen_counters" value="{!! $listing["kitchen_counters"] !!}" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
							</div>
							<div class="item">
								<label for="kitchen_appiances">Kitchen Appliances</label>
								<div class="input">
									<input id="kitchen_appiances" type="text" name="kitchen_appiances" value="{!! $listing["kitchen_appiances"] !!}" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
							</div>
							<div class="item">
								<label for="flooring_type">Flooring Type</label>
								<div class="input">
									<input id="flooring_type" type="text" name="flooring_type" value="{!! $listing["flooring_type"] !!}" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
							</div>
							<div class="item">
								<label for="masterbath_condition">Masterbath Condition</label>
								<div class="input">
									<input id="masterbath_condition" type="text" name="masterbath_condition" value="{!! $listing["masterbath_condition"] !!}" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
							</div>
							<div class="item">
								<label for="flooring_condition">Flooring Condition</label>
								<div class="input">
									<input id="flooring_condition" type="text" name="flooring_condition" value="{!! $listing["flooring_condition"] !!}" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
							</div>
							<div class="item">
								<label for="interior-paint_condition">Interior-paint Condition</label>
								<div class="input">
									<input id="interior-paint_condition" type="text" name="interior-paint_condition" value="{!! $listing["interior-paint_condition"] !!}" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
							</div>
							<div class="item">
								<label for="backyard_condition">Backyard Condition</label>
								<div class="input">
									<input id="backyard_condition" type="text" name="backyard_condition" value="{!! $listing["backyard_condition"] !!}" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
							</div>
							<div class="item">
								<label for="has_renovated">Has Renovated</label>
								<div class="input">
									<input id="has_renovated" type="text" name="has_renovated" value="{!! $listing["has_renovated"] !!}" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
							</div>
							<div class="item">
								<label for="sales_timeline">Sales Timeline</label>
								<div class="input">
									<input id="sales_timeline" type="text" name="sales_timeline" value="{!! $listing["sales_timeline"] !!}" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
							</div>
							<div class="item">
								<label for="structure-mech_issues">Structure or Mechanical Issues</label>
								<div class="input">
                                                                        <select id="structure-mech_issues" name="structure-mech_issues" class="spinner_input">
                                                                          <option value="{!! $listing["structure-mech_issues"] !!}">No</option>
                                                                          <option value="{!! $listing["structure-mech_issues"] !!}">Yes</option>
                                                                        </select>
                                                                        <span class="spinner no_overlay"></span>
								</div>
							</div>
							<div class="item">
								<label for="what_else_home">What Else Home</label>
								<div class="input">
									<input id="what_else_home" type="text" name="what_else_home" value="{!! $listing["what_else_home"] !!}" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
							</div>
							<div class="item">
								<label for="selling_reason">Selling Reason</label>
								<div class="input">
									<input id="selling_reason" type="text" name="selling_reason" value="{!! $listing["selling_reason"] !!}" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
							</div>
							<div class="item">
								<label for="heard_about_us">Heard About Us</label>
								<div class="input">
									<input id="heard_about_us" type="text" name="heard_about_us" value="{!! $listing["heard_about_us"] !!}" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
							</div>
							<div class="item">
								<label for="source_url">Source Url</label>
								<div class="input">
									<input id="source_url" type="text" name="source_url" value="{!! $listing["source_url"] !!}" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
							</div>
							<div style="display:none;" class="item">
								<label for="estimate-token">Estimate-token</label>
								<div class="input">
									{{ $listing["estimate-token"] }}
								</div>
							</div>
							<div class="item">
								<label for="listing-url">Listing-url</label>
								<div class="input">
									<input id="listing-url" type="text" name="listing-url" value="{!! $listing["listing-url"] !!}" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
							</div>
							<div class="item">
								<label for="average-high">Average-high</label>
								<div class="input">
									<input id="average-high" type="text" name="average-high" value="{!! $listing["average-high"] !!}" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
							</div>
							<div class="item">
								<label for="average-low">Average-low</label>
								<div class="input">
									<input id="average-low" type="text" name="average-low" value="{!! $listing["average-low"] !!}" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
							</div>
							<div class="item">
								<label for="show_countdown">Show Countdown</label>
								<div class="input">
									<select id="show_countdown" name="show_countdown" class="spinner_input">
                                                                          <option value="{!! $listing["show_countdown"] !!}">No</option>
                                                                          <option value="{!! $listing["show_countdown"] !!}">Yes</option>
                                                                        </select>
                                                                        <span class="spinner no_overlay"></span>
								</div>
							</div>
							<div class="item">
								<label for="walkthrough_date">Walkthrough Date</label>
								<div class="input">
									<input id="walkthrough_date" type="text" name="walkthrough_date" value="{!! $listing["walkthrough_date"] !!}" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
							</div>
							<div class="item">
								<label for="walkthrough_time">Walkthrough Time</label>
								<div class="input">
									<input id="walkthrough_time" type="text" name="walkthrough_time" value="{!! $listing["walkthrough_time"] !!}" class="spinner_input"><span class="spinner no_overlay"></span>
								</div>
							</div>
						</div>
						
						<div class="button_row">
							<button class="btn btn-success">Save Changes</button>
						</div>
						
					</form>
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

		<script src="/js/jquery.ba-throttle-debounce.min.js"></script>
		<script>

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
					id: "{!! $listing["id"] !!}",
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
