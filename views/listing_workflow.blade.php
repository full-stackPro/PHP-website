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
		<link href="/css/listing_workflow.css" rel="stylesheet">
		<link href="/css/spinner.css" rel="stylesheet">
		<link href="/css/jquery-ui.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.min.css" rel="stylesheet" integrity="sha256-DOS9W6NR+NFe1fUhEE0PGKY/fubbUCnOfTje2JMDw3Y=" crossorigin="anonymous">
		<link href="css/header.css" rel="stylesheet" type="text/css" />
	</head>
	<!-- end::Head -->
	<!-- end::Body -->
	<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-light m-aside-left--fixed m-aside-left--offcanvas m-aside-left--minimize m-brand--minimize m-footer--push m-aside--offcanvas-default" id="workflow">
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
				<div class="m-portlet__body" style="width: 100%;">

					@if ( $workflow_templates )
						<div class="row" style="margin: 50px 10px 25px;">
							<div class="col-md-12 text-center">
								<h3>Select A Workflow</h3>
							</div>
						</div>
						<div class="row" style="margin: 25px 10px 50px;">
							<div class="col-md-12 text-center">
							@foreach( $workflow_templates as $template )
								<button class="btn btn-primary create_workflow_button" data-id="{!! $template["id"] !!}">{{ $template["name"] }}</button>
							@endforeach
							</div>
						</div>
						
					@else
						<div class="title">
							Workflow: {{ $workflow["name"] }} - {{ $active_milestone["name"] }}
						</div>
						<div>
							<div class="breadcrumbs">
								<div class="container">
									@foreach( $workflow["milestones"] as $milestone )
										<div class="crumb
											@if ( $milestone["status"] === 1 )
												active
											@elseif ( $milestone["status"] === 2 )
												completed
											@endif"><div class="text">{{ $milestone["name"] }}</div>
										</div>
									@endforeach
								</div>
							</div>
						</div>
						<div class="content_section">
							<div id="task_switcher">
								<div class="button active" data-switch="unfinished_tasks">Unfinished Tasks</div><div class="button" data-switch="completed_tasks">Completed Tasks</div>
							</div>
							<div id="unfinished_tasks">
								@foreach( $active_milestone["tasks"] as $task )
									<div class="task @if ( $task["status"] === 0 || $task["status"] === 1 ) show @else hide @endif" id="unfinished_task_{!! $task["id"] !!}" data-id="{!! $task["id"] !!}">
										<div class="row checkbox">
											<div class="col-md-10">
												<input type="checkbox" class="complete_task" name="{!! $task["id"] !!}">{{ $task["name"] }} <span class="spinner no_overlay"></span>
											</div>
											<div class="icons col-md-2">
												<span class="expand_icon" data-target="#unfinished_task_{!! $task["id"] !!}"></span>
												<span class="delete" data-toggle="modal" data-target="#deleteTaskModal" data-id="{!! $task["id"] !!}">x</span>
											</div>
										</div>
										<div class="toggle_content">
											<div class="card card-body">
												{{ $task["description"] }}
												<div class="due_date">
													@if ( $task["due_date"] && $task["due_date"] !== "0000-00-00 00:00:00" )
														<div class="text">Due on: {{ $task["due_date"] }}</div>
													@endif
													<div>
														<button class="btn edit_due_date" data-id="{!! $task["id"] !!}" data-toggle="modal" data-target="#editTaskModal" data-name="{{ $task["name"] }}" data-description="{{ $task["description"] }}" data-due_date="{{ $task["due_date"] }}">edit task</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								@endforeach
								<div class="create_task" data-toggle="modal" data-target="#createTaskModal" data-id="{!! $active_milestone["id"] !!}">
									Create Task
								</div>
							</div>
							<div id="completed_tasks">
								@foreach( $active_milestone["tasks"] as $task )
									<div class="task @if ( $task["status"] === 2 ) show @else hide @endif" id="completed_task_{!! $task["id"] !!}">
										<div class="row checkbox">
											<div class="col-md-10">
												{{ $task["name"] }}
											</div>
											<div class="icons col-md-2">
												<span class="expand_icon" data-target="#completed_task_{!! $task["id"] !!}"></span>
											</div>
										</div>
										<div class="toggle_content">
											<div class="card card-body">
												{{ $task["description"] }}
											</div>
										</div>
									</div>
								@endforeach
							</div>
						</div>
					@endif
					
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

		<div id="spinner"></div>

		<div class="modal fade" tabindex="-1" role="dialog" id="deleteTaskModal">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Delete Task</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<p>Are you sure you want to delete this task?</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-warning" id="deleteTaskButton" data-dismiss="modal">Delete Task</button>
						<button type="button" class="btn btn-muted" data-dismiss="modal">Cancel</button>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade" tabindex="-1" role="dialog" id="createTaskModal">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Create Task</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<form>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="newTaskName">Name: </label>
										<input type="text" class="form-control" id="newTaskName" placeholder="name">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="newTaskDescription">Description: </label>
										<input type="text" class="form-control" id="newTaskDescription" placeholder="description">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="newTaskDueDate">Due Date: </label>
										<input type="text" class="form-control datetimepicker" id="newTaskDueDate">
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-warning" id="createTaskButton" data-dismiss="modal">Create Task</button>
						<button type="button" class="btn btn-muted" data-dismiss="modal">Cancel</button>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade" tabindex="-1" role="dialog" id="editTaskModal">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Edit Task</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<form>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="updateTaskName">Name: </label>
										<input type="text" class="form-control" id="updateTaskName" placeholder="name">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="updateTaskDescription">Description: </label>
										<input type="text" class="form-control" id="updateTaskDescription" placeholder="description">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="updateTaskDueDate">Due Date: </label>
										<input type="text" class="form-control datetimepicker" id="updateTaskDueDate">
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-warning" id="editTaskButton" data-dismiss="modal">Edit Task</button>
						<button type="button" class="btn btn-muted" data-dismiss="modal">Cancel</button>
					</div>
				</div>
			</div>
		</div>


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
		

		<div id="spinner"></div>

		<script src="/js/jquery-ui.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js" integrity="sha256-FEqEelWI3WouFOo2VWP/uJfs1y8KJ++FLh2Lbqc8SJk=" crossorigin="anonymous"></script>
		<script>

			function showUnfinishedTab() {
				$( "#unfinished_tasks" ).show();
				$( "#completed_tasks" ).hide();
				$( '#task_switcher [data-switch="unfinished_tasks"]' ).addClass( "active" );
				$( '#task_switcher [data-switch="completed_tasks"]' ).removeClass( "active" );
			}

			function showCompletedTab() {
				$( "#unfinished_tasks" ).hide();
				$( "#completed_tasks" ).show();
				$( '#task_switcher [data-switch="unfinished_tasks"]' ).removeClass( "active" );
				$( '#task_switcher [data-switch="completed_tasks"]' ).addClass( "active" );
			}

			function tasksAll() {
				return $( "#unfinished_tasks .task:not( .ui-sortable-placeholder )" );
			}

			function tasksLeft() {
				return $( "#unfinished_tasks .task:not( .hide ):not( .ui-sortable-placeholder )" );
			}

			function init() {
				if ( tasksLeft().length === 0 )
					showCompletedTab();
				else
					showUnfinishedTab();
			}

			// form logic
			$( ".create_workflow_button" ).click( function() {
				let el = $(this);
				let workflow_template_id = el.attr( "data-id" );

				$.ajax({
					type: "POST",
					url: "/api/createWorkflow.php",
					data: {
						property_id: "{!! $listing["id"] !!}",
						workflow_template_id: workflow_template_id,
					},
					success: function( response ) {
						if ( response.success ) {
							reloadData();
						}
						else {
							console.error( response );
							showError( response );
						}
					},
					error: function( response ) {
						console.error( "error", response );
					},
					dataType: "json",
				});

			});

			function reloadData() {
				window.location.reload( true );
			}

			function showError( message ) {
				alert( message );
			}

			$( "#task_switcher .button" ).click( function() {
				let el = $(this);
				let target = el.attr( "data-switch" );
				if ( target === "unfinished_tasks" ) {
					showUnfinishedTab();
				}
				else if ( target === "completed_tasks" ) {
					showCompletedTab();
				}
				$( "#task_switcher .button" ).removeClass( "active" );
				el.addClass( "active" );
			});

			$( ".complete_task" ).change( function( event ) {

				let el = $(this);
				let id = el.attr( "name" );

				if ( ! el.prop( "checked" ) )
					return;

				showSpinnerInput( el );

				$.ajax({
					type: "POST",
					url: "/api/updateTasks.php",
					data: {
						tasks: [{
							id: id,
							status: 2,
							completion_date: ( +new Date() / 1000 ).toFixed( 0 ),
						}]
					},
					success: function( response ) {
						if ( response.success ) {
							if ( tasksLeft().length === 1 ) {
								window.location.reload( true );
							}
							else {
								$( "#unfinished_task_" + id ).removeClass( "show" ).addClass( "hide" );
								$( "#completed_task_" + id ).removeClass( "hide" ).addClass( "show" );
								showSpinnerInputSuccess( el );
							}
						}
						else {
							console.error( response );
							showSpinnerInputError( el, response.data );
						}
					},
					error: function( response ) {
						console.error( "error", response );
						showSpinnerInputError( el, response.toString() );
					},
					dataType: "json",
				});

			});

			$( ".expand_icon" ).click( function( event ) {

				let el = $(this);
				let id = el.attr( "data-target" );
				$( id ).toggleClass( "expanded" );

				event.stopPropagation();
				return;

			});

			$( ".delete" ).click( function() {

				let el = $(this);
				let id = el.attr( "data-id" );

				$( "#deleteTaskButton" ).on( "click.delete", function() {

					showSpinner();

					$.ajax({
						type: "POST",
						url: "/api/deleteTask.php",
						data: {
							task_id: id,
						},
						success: function( response ) {
							if ( response.success ) {
								if ( tasksLeft().length === 1 ) {
									window.location.reload( true );
								}
								else {
									$( "#unfinished_task_" + id ).remove();
									$( "#completed_task_" + id ).remove();
									hideSpinner();
								}
							}
							else {
								console.error( response );
								hideSpinner();
								alert( "Error" );
							}
						},
						error: function( response ) {
							console.error( "error", response );
							hideSpinner();
							alert( "Error" );
						},
						dataType: "json",
					});
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

			$( ".edit_due_date" ).click( function(){

				let el = $(this);
				let task_id = el.attr( "data-id" );

				let name = el.attr( "data-name" );
				let description = el.attr( "data-description" );
				let due_date = el.attr( "data-due_date" );

				$( "#updateTaskName" ).val( name );
				$( "#updateTaskDescription" ).val( description );
				$( "#updateTaskDueDate" ).val( due_date );

				$( "#editTaskButton" ).on( "click.edit", function() {

					let name = $( "#updateTaskName" ).val();
					let description = $( "#updateTaskDescription" ).val();
					let due_date = ( $( "#updateTaskDueDate" ).val() ) ? ( +new Date( $( "#updateTaskDueDate" ).val() ) / 1000 ).toFixed( 0 ) : null;

					showSpinner();

					$.ajax({
						type: "POST",
						url: "/api/updateTasks.php",
						data: {
							tasks: [{
								id: task_id,
								name: name,
								description: description,
								due_date: due_date,
							}]
						},
						success: function( response ) {
							if ( response.success ) {
								window.location.reload( true );
							}
							else {
								console.error( response );
								hideSpinner();
								alert( "Error" );
							}
						},
						error: function( response ) {
							console.error( "error", response );
							hideSpinner();
							alert( "Error" );
						},
						dataType: "json",
					});
				});

			});

			$( ".create_task" ).click( function(){

				let el = $(this);
				let milestone_id = el.attr( "data-id" );

				$( "#createTaskButton" ).on( "click.create", function() {

					let name = $( "#newTaskName" ).val();
					let description = $( "#newTaskDescription" ).val();
					let due_date = $( "#newTaskDueDate" ).val();
					let position = ( tasksAll().length + 1 );

					showSpinner();

					$.ajax({
						type: "POST",
						url: "/api/createTask.php",
						data: {
							milestone_id: milestone_id,
							name: name,
							description: description,
							due_date: due_date,
							position: position,
						},
						success: function( response ) {
							if ( response.success ) {
								window.location.reload( true );
							}
							else {
								console.error( response );
								hideSpinner();
								alert( "Error" );
							}
						},
						error: function( response ) {
							console.error( "error", response );
							hideSpinner();
							alert( "Error" );
						},
						dataType: "json",
					});
				});

			});

			$( "#unfinished_tasks" ).sortable({
				stop: function( event, ui ) {

					let unfinished_tasks = tasksLeft();
					let all_tasks = tasksAll();
					let tasks = [];

					let position = ( ( all_tasks.length - unfinished_tasks.length ) + 1 );
					unfinished_tasks.each( function() {
						let el = $(this);
						let id = el.attr( "data-id" );

						tasks.push({
							id: id,
							position: position++,
						});
					});

					showSpinner();

					$.ajax({
						type: "POST",
						url: "/api/updateTasks.php",
						data: {
							tasks: tasks,
						},
						success: function( response ) {
							if ( response.success ) {
								hideSpinner();
							}
							else {
								console.error( response );
								alert( "Error" );
								window.location.reload( true );
							}
						},
						error: function( response ) {
							console.error( "error", response );
							alert( "Error" );
							window.location.reload( true );
						},
						dataType: "json",
					});

				},
			});

			$( ".datetimepicker" ).datetimepicker();

			init();

		</script>
	</body>
</html>
