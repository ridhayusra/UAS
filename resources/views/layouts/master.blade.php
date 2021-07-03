<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie ie9" lang="en" class="no-js"> <![endif]-->
<!--[if !(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
	<title>Dashboard | QueenAdmin - Beautiful Admin Dashboard</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="QueenAdmin - Beautiful Bootstrap Admin Dashboard Theme">
	<meta name="author" content="The Develovers">
	<!-- CSS -->
	<link href="{{asset('admin/assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('admin/assets/css/ionicons.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('admin/assets/css/main.css')}}" rel="stylesheet" type="text/css">
	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,300,400,700' rel='stylesheet' type='text/css'>
	<!-- Fav and touch icons -->
	<link rel="apple-touch-icon-precomposed" type="image/png" sizes="144x144" href="{{asset('admin/assets/ico/queenadmin-favicon144x144.png')}}">
	<link rel="apple-touch-icon-precomposed" type="image/png" sizes="114x114" href="{{asset('admin/assets/ico/queenadmin-favicon114x114.png')}}">
	<link rel="apple-touch-icon-precomposed" type="image/png" sizes="72x72" href="{{asset('admin/assets/ico/queenadmin-favicon72x72.png')}}">
	<link rel="apple-touch-icon-precomposed" type="image/png" sizes="57x57" href="{{asset('admin/assets/ico/queenadmin-favicon57x57.png')}}">
	<link rel="shortcut icon" href="{{asset('admin/assets/ico/favicon.ico')}}">
</head>

<body class="fixed-top-active dashboard">
	<!-- WRAPPER -->
	<div class="wrapper">
		<!-- TOP NAV BAR -->
		<nav class="top-bar navbar-fixed-top" role="navigation">
			<div class="logo-area">
				<a href="#" id="btn-nav-sidebar-minified" class="btn btn-link btn-nav-sidebar-minified pull-left"><i class="icon ion-arrow-swap"></i></a>
				<a class="btn btn-link btn-off-canvas pull-left"><i class="icon ion-navicon"></i></a>
				<div class="logo pull-left">
					<a href="index.html">
						<img src="{{asset('admin/assets/img/queenadmin-logo.png')}}" alt="QueenAdmin Logo" />
					</a>
				</div>
			</div>
			<form class="form-inline searchbox hidden-xs" role="form">
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon"><i class="icon ion-ios-search"></i></span>
						<input type="search" class="form-control" placeholder="search the site ...">
					</div>
				</div>
			</form>
			<div class="top-bar-right pull-right">
				<div class="action-group hidden-xs hidden-sm">
					<ul>
						<!-- skins -->
						
						<!-- end skins -->
						<!-- notification: inbox -->
						<li class="action-item inbox">
							<div class="btn-group">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="icon ion-ios-email-outline"></i><span class="count">2</span>
								</a>
								<div class="arrow"></div>
								<ul class="dropdown-menu" role="menu">
									<li class="menu-item-header">You have 2 unread messages</li>
									<li class="inbox-item clearfix">
										<a href="#">
											<div class="media">
												<div class="pull-left">
													<img class="media-object" src="{{asset('admin/assets/img/user1.png')}}" alt="Antonio">
												</div>
												<div class="media-body">
													<h5 class="media-heading name">Antonius</h5>
													<p class="text">The problem just happened this morning. I can't see ...</p>
													<span class="timestamp text-muted">4 minutes ago</span>
												</div>
											</div>
										</a>
									</li>
									<li class="inbox-item unread clearfix">
										<a href="#">
											<div class="media">
												<div class="pull-left">
													<img class="media-object" src="{{asset('admin/assets/img/user2.png')}}" alt="Antonio">
												</div>
												<div class="media-body">
													<h5 class="media-heading name">Michael</h5>
													<p class="text">Hey dude, cool theme!</p>
													<span class="timestamp text-muted">2 hours ago</span>
												</div>
											</div>
										</a>
									</li>
									<li class="inbox-item unread clearfix">
										<a href="#">
											<div class="media">
												<div class="pull-left">
													<img class="media-object" src="{{asset('admin/assets/img/user3.png')}}" alt="Antonio">
												</div>
												<div class="media-body">
													<h5 class="media-heading name">Stella</h5>
													<p class="text">Ok now I can see the status for each item. Thanks! :D</p>
													<span class="timestamp text-muted">Oct 6</span>
												</div>
											</div>
										</a>
									</li>
									<li class="inbox-item clearfix">
										<a href="#">
											<div class="media">
												<div class="pull-left">
													<img class="media-object" src="{{asset('admin/assets/img/user4.png')}}" alt="Antonio">
												</div>
												<div class="media-body">
													<h5 class="media-heading name">Jane Doe</h5>
													<p class="text"><i class="icon ion-reply text-muted"></i> Please check the status of your ...</p>
													<span class="timestamp text-muted">Oct 2</span>
												</div>
											</div>
										</a>
									</li>
									<li class="inbox-item clearfix">
										<a href="#">
											<div class="media">
												<div class="pull-left">
													<img class="media-object" src="{{asset('admin/assets/img/user5.png')}}" alt="Antonio">
												</div>
												<div class="media-body">
													<h5 class="media-heading name">John Simmons</h5>
													<p class="text"><i class="icon ion-reply text-muted"></i> I've fixed the problem :)</p>
													<span class="timestamp text-muted">Sep 12</span>
												</div>
											</div>
										</a>
									</li>
									<li class="menu-item-footer">
										<a href="#">View All Messages</a>
									</li>
								</ul>
							</div>
						</li>
						<!-- end notification: inbox -->
						<!-- notification: general -->
						<li class="action-item skins">
							<form id="style-switcher">
								<div class="btn-group open">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="icon ion-ios-gear-outline"></i>
									</a>
									<div class="arrow"></div>
									<ul class="dropdown-menu" role="menu">
										<li>
											<p><strong>Dark Side Nav</strong></p>
											<button type="button" class="btn-skin nav-dark full-dark" data-skin="{{asset('admin/assets/css/skins/full-dark.css')}}"></button>
											<button type="button" class="btn-skin nav-dark green" data-skin="{{asset('admin/assets/css/skins/green.css')}}"></button>
											<button type="button" class="btn-skin nav-dark blue" data-skin="{{asset('admin/assets/css/skins/blue.css')}}"></button>
											<button type="button" class="btn-skin nav-dark darkorange" data-skin="{{asset('admin/assets/css/skins/darkorange.css')}}"></button>
											<button type="button" class="btn-skin nav-dark seagreen" data-skin="{{asset('admin/assets/css/skins/seagreen.css')}}"></button>
										</li>
										<li>
											<p><strong>Light Side Nav</strong></p>
											<button type="button" class="btn-skin nav-light full-white" data-skin="{{asset('admin/assets/css/skins/full-white.css')}}"></button>
											<button type="button" class="btn-skin nav-light green green-light-nav" data-skin="{{asset('admin/assets/css/skins/green-light-nav.css')}}"></button>
											<button type="button" class="btn-skin nav-light blue blue-light-nav" data-skin="{{asset('admin/assets/css/skins/blue-light-nav.css')}}"></button>
											<button type="button" class="btn-skin nav-light darkorange darkorange-light-nav" data-skin="{{asset('admin/assets/css/skins/darkorange-light-nav.css')}}"></button>
											<button type="button" class="btn-skin nav-light seagreen seagreen-light-nav" data-skin="{{asset('admin/assets/css/skins/seagreen-light-nav.css')}}"></button>
										</li>
										<li>
											<label class="fancy-checkbox">
												<input type="checkbox" id="fixed-top-nav" checked="checked"><span>Fixed Top Navigation</span></label>
										</li>
										<li data-toggle="popover" data-placement="top" data-container="body" data-content="If checked, try expanding <strong>Pages</strong> menu item on left sidebar. Disabled on minified sidebar." data-trigger="hover">
											<label class="fancy-checkbox">
												<input type="checkbox" id="fixed-left-nav"><span>Fixed Left Navigation</span></label>
										</li>
										<li class="menu-item-footer"><a href="#" title="Reset Style" class="reset-style">Reset Style</a></li>
									</ul>
								</div>
							</form>
						</li>
						<!-- end notification: general -->
					</ul>
				</div>
				<div class="logged-user">
					<div class="btn-group">
						<a href="#" class="btn btn-link dropdown-toggle" data-toggle="dropdown">
							<img src="{{asset('admin/assets/img/user-loggedin.png')}}" alt="Sebastian" /><span class="name">Sebastian <i class="icon ion-ios-arrow-down"></i></span>
						</a>
						<ul class="dropdown-menu" role="menu">
							<li>
								<a href="#">
									<i class="icon ion-ios-person"></i>
									<span class="text">Profile</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="icon ion-ios-gear"></i>
									<span class="text">Settings</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="icon ion-power"></i>
									<span class="text">Logout</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="action-group visible-lg-inline-block">
					
				</div>
			</div>
		</nav>
		<!-- END TOP NAV BAR -->
		<!-- COLUMN LEFT -->
		<div id="col-left" class="col-left">
			<div class="main-nav-wrapper">
				<nav id="main-nav" class="main-nav">
					<h3>MAIN</h3>
					<ul class="main-menu">
						<li class="has-submenu active">
							<a href="#" class="submenu-toggle"><i class="icon ion-ios-speedometer-outline"></i><span class="text">Dashboards</span></a>
							<ul class="list-unstyled sub-menu collapse in">
								<li class="active"><a href="index.html"><span class="text">Dashboard v1</span></a></li>
								<li><a href="index2.html"><span class="text">Dashboard v2</span></a></li>
							</ul>
						</li>
						<li class="has-submenu">
							<a href="#" class="submenu-toggle"><i class="icon ion-ios-paper-outline"></i><span class="text">Forms</span></a>
							<ul class="list-unstyled sub-menu collapse">
								<li><a href="form-fancy-elements.html"><span class="text">Fancy Elements</span></a></li>
								<li><a href="form-inplace-editing.html"><span class="text">In-place Editing</span></a></li>
								<li><a href="form-bootstrap-elements.html"><span class="text">Bootstrap Elements</span></a></li>
								<li><a href="form-layouts.html"><span class="text">Form Layouts</span></a></li>
								<li><a href="form-validations.html"><span class="text">Validation</span></a></li>
								<li><a href="form-upload.html"><span class="text">File Upload</span></a></li>
								<li><a href="form-text-editor.html"><span class="text">Text Editor</span></a></li>
								<li><a href="form-wizard.html"><span class="text">Wizards</span></a></li>
							</ul>
						</li>
						<li class="has-submenu">
							<a href="#" class="submenu-toggle"><i class="icon ion-ios-flask-outline"></i><span class="text">UI Elements</span></a>
							<ul class="list-unstyled sub-menu collapse">
								<li><a href="ui-elements-general.html"><span class="text">General</span></a></li>
								<li><a href="ui-elements-buttons.html"><span class="text">Buttons</span></a></li>
								<li><a href="ui-elements-tabs.html"><span class="text">Tabs</span></a></li>
								<li><a href="ui-elements-tour.html"><span class="text">Tour</span></a></li>
								<li><a href="ui-elements-icons.html"><span class="text">Icons</span></a></li>
							</ul>
						</li>
						<li><a href="widgets.html"><i class="icon ion-ios-color-wand-outline"></i><span class="text">Widgets</span></a></li>
						<li class="has-submenu">
							<a href="#" class="submenu-toggle"><i class="icon ion-ios-copy-outline"></i><span class="text">Pages</span></a>
							<ul class="list-unstyled sub-menu collapse">
								<li><a href="page-projects.html"><span class="text">Projects</span></a></li>
								<li><a href="page-project-detail.html"><span class="text">Project Detail</span></a></li>
								<li><a href="page-user-profile.html"><span class="text">Profile</span></a></li>
								<li><a href="page-search-result.html"><span class="text">Search Result</span></a></li>
								<li><a href="page-inbox.html"><span class="text">Inbox</span><span class='badge bg-orange'>12</span></a></li>
								<li><a href="page-view-message.html"><span class="text">View Message</span></a></li>
								<li><a href="page-new-message.html"><span class="text">New Message</span></a></li>
								<li><a href="page-knowledgebase.html"><span class="text">Knowledge Base</span></a></li>
								<li><a href="page-submit-ticket.html"><span class="text">Submit Ticket</span></a></li>
								<li><a href="page-faq.html"><span class="text">FAQ</span></a></li>
								<li><a href="page-pricing-tables.html"><span class="text">Pricing Tables</span></a></li>
								<li><a href="page-invoice.html"><span class="text">Invoice</span></a></li>
								<li><a href="page-register.html"><span class="text">Register</span></a></li>
								<li><a href="page-login.html"><span class="text">Login</span></a></li>
								<li><a href="page-login-alt.html"><span class="text">Login Alt.</span></a></li>
								<li><a href="page-404.html"><span class="text">Not Found 404</span></a></li>
								<li><a href="page-505.html"><span class="text">Error 505</span></a></li>
								<li><a href="page-blank.html"><span class="text">Blank Page</span></a></li>
							</ul>
						</li>
					</ul>
					<h3>ESSENTIALS</h3>
					<ul class="main-menu">
						<li class="has-submenu">
							<a href="#" class="submenu-toggle"><i class="icon ion-ios-pie-outline"></i><span class="text">Charts</span></a>
							<ul class="list-unstyled sub-menu collapse">
								<li class="active"><a href="charts-basic.html"><span class="text">Basic</span></a></li>
								<li><a href="charts-interactive.html"><span class="text">Interactive Charts</span></a></li>
							</ul>
						</li>
						<li class="has-submenu">
							<a href="#" class="submenu-toggle"><i class="icon ion-ios-grid-view-outline"></i><span class="text">Tables</span></a>
							<ul class="list-unstyled sub-menu collapse">
								<li class="active"><a href="tables-static.html"><span class="text">Static Table</span></a></li>
								<li><a href="tables-dynamic.html"><span class="text">Dynamic Table</span></a></li>
							</ul>
						</li>
						<li><a href="maps.html"><i class="icon ion-ios-world-outline"></i><span class="text">Maps</span></a></li>
						<li><a href="typography.html"><i class="icon ion-ios-compose-outline"></i><span class="text">Typography</span></a></li>
						<li class="has-submenu">
							<a href="#" class="submenu-toggle"><i class="icon ion-navicon"></i><span class="text">Data Warga</span></a>
							<ul class="list-unstyled sub-menu collapse">
								<li class="has-submenu">
									<a href="#" class="submenu-toggle"><span class="text">RW 06</span></a>
									<ul class="list-unstyled sub-menu collapse">
										<li><a href="/warga"><span class="text">RT 03</span></a></li>
										<li><a href="#"><span class="text">RT 04</span></a></li>
										<li><a href="#"><span class="text">RT 05</span></a></li>
									</ul>
								</li>
								<li><a href="#"><span class="text">Second Lvl B</span></a></li>
								<li><a href="#"><span class="text">Second Lvl C</span></a></li>
								<li><a href="#"><span class="text">Second Lvl D</span></a></li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END COLUMN LEFT -->
		<!-- COLUMN RIGHT -->
		<div id="col-right" class="col-right ">
			@yield('content')
			<div class="right-sidebar">
				<!-- CHAT -->
				<div class="widget widget-chat-contacts">
					<div class="widget-header clearfix">
						<h3 class="sr-only">CHAT</h3>
						<div class="btn-group btn-group-justified widget-header-toolbar visible-lg">
							<div class="btn-group">
								<button type="button" class="btn btn-primary btn-xs"><i class="icon ion-plus-circled"></i> Add</button>
							</div>
							<div class="btn-group">
								<button type="button" class="btn dropdown-toggle btn-xs btn-success" data-btnclass="btn-success" data-toggle="dropdown">Online <span class="caret"></span></button>
								<ul class="dropdown-menu dropdown-menu-right chat-status" role="menu">
									<li><a href="#" class="online" data-btnclass="btn-success">Online</a></li>
									<li><a href="#" class="away" data-btnclass="btn-warning">Away</a></li>
									<li><a href="#" class="busy" data-btnclass="btn-danger">Busy</a></li>
									<li><a href="#" class="offline" data-btnclass="btn-default">Offline</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="widget-content">
						<strong>Online (4)</strong>
						<ul class="list-unstyled chat-contacts">
							<li>
								<a href="#" id="theusername"><img src="{{asset('admin/assets/img/user1.png')}}" class="img-circle" alt="Antonius">Antonius</a>
							</li>
							<li>
								<a href="#"><img src="{{asset('admin/assets/img/user2.png')}}" class="img-circle" alt="Antonius">Michael Smith</a>
							</li>
							<li class="away">
								<a href="#"><img src="{{asset('admin/assets/img/user3.png')}}" class="img-circle" alt="Antonius">Stella Ray</a>
							</li>
							<li class="busy">
								<a href="#"><img src="{{asset('admin/assets/img/user4.png')}}" class="img-circle" alt="Antonius">Jane Doe</a>
							</li>
						</ul>
						<strong>Offline (6)</strong>
						<ul class="list-unstyled chat-contacts contacts-offline">
							<li>
								<a href="#"><img src="{{asset('admin/assets/img/user5.png')}}" class="img-circle" alt="John Simmons">John Simmons</a>
							</li>
							<li>
								<a href="#"><img src="{{asset('admin/assets/img/user6.png')}}" class="img-circle" alt="Jack Bay">Jack Bay</a>
							</li>
							<li>
								<a href="#"><img src="{{asset('admin/assets/img/user7.png')}}" class="img-circle" alt="Daraiana">Daraiana</a>
							</li>
							<li>
								<a href="#"><img src="{{asset('admin/assets/img/user8.png')}}" class="img-circle" alt="Alessio Ferrara">Alessio Ferrara</a>
							</li>
							<li>
								<a href="#"><img src="{{asset('admin/assets/img/user9.png')}}" class="img-circle" alt="Sorana">Sorana</a>
							</li>
							<li>
								<a href="#"><img src="{{asset('admin/assets/img/user10.png')}}" class="img-circle" alt="Regan Morton">Regan Morton</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- END CHAT -->
			</div>
		</div>
		<!-- END COLUMN RIGHT -->
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="{{asset('admin/assets/js/jquery/jquery-2.1.0.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/bootstrap/bootstrap.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/bootstrap-multiselect/bootstrap-multiselect.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/queen-common.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/stat/flot/jquery.flot.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/stat/flot/jquery.flot.resize.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/stat/flot/jquery.flot.time.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/stat/flot/jquery.flot.orderBars.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/stat/flot/jquery.flot.tooltip.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/mapael/raphael/raphael-min.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/mapael/jquery.mapael.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/mapael/maps/world_countries.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/moment/moment.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/bootstrap-editable/bootstrap-editable.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/jquery-maskedinput/jquery.masked-input.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/queen-charts.js')}}"></script>
	<script src="{{asset('admin/assets/js/queen-maps.js')}}"></script>
	<script src="{{asset('admin/assets/js/queen-elements.js')}}"></script>
</body>

</html>
