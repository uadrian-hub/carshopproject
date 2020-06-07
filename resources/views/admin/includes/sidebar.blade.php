 <!--
	====================================
	——— LEFT SIDEBAR WITH FOOTER
	=====================================
-->
<aside class="left-sidebar bg-sidebar">
	<div id="sidebar" class="sidebar sidebar-with-footer">
		<!-- Aplication Brand -->
		<div class="app-brand">
			<a href="{{route('home')}}">
			<span class="brand-name">CarShop Dashboard</span>
            </a>
		</div>
        <!-- begin sidebar scrollbar -->
		<div class="sidebar-scrollbar">

			<!-- sidebar menu -->
			<ul class="nav sidebar-inner" id="sidebar-menu">

                <li>
					<a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
						aria-expanded="false" aria-controls="dashboard">
						<i class="mdi mdi-view-dashboard-outline"></i>
						<span class="nav-text">Catalog</span> <b class="caret"></b>
					</a>
					<ul  class="collapse" id="dashboard"
						data-parent="#sidebar-menu">
						<div class="sub-menu">
							<li>
								<a class="sidenav-item-link" href="{{route('cars.index')}}">
								<span class="nav-text">Cars</span>
								</a>
							</li>
							<li>
								<a class="sidenav-item-link" href="{{route('brands.index')}}">
								<span class="nav-text">Brand</span>
								</a>
							</li>
							<li>
								<a class="sidenav-item-link" href="{{route('models.index')}}">
								<span class="nav-text">Models</span>
								</a>
							</li>
						</div>
					</ul>
                </li>

				<li>
					<a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#users"
						aria-expanded="false" aria-controls="dashboard">
						<i class="mdi mdi-account-multiple-outline"></i>
						<span class="nav-text">Users &amp; Roles</span> <b class="caret"></b>
					</a>
					<ul class="collapse" id="users"
						data-parent="#sidebar-menu">
						<div class="sub-menu">
							<li>
								<a class="sidenav-item-link" href="{{route('users.index')}}">
								<span class="nav-text">Users</span>
								</a>
                            </li>
                            <li>
								<a class="sidenav-item-link" href="{{route('employees.index')}}">
								<span class="nav-text">Employees</span>
								</a>
							</li>
							<li>
								<a class="sidenav-item-link" href="{{route('rolesemployees')}}">
								<span class="nav-text">Roles</span>
								</a>
							</li>
						</div>
					</ul>
                </li>   
                
                <li>
					<a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#sale"
						aria-expanded="false" aria-controls="dashboard">
						<i class="mdi mdi-calculator"></i>
						<span class="nav-text">Sales &amp; Reports</span> <b class="caret"></b>
					</a>
					<ul class="collapse" id="sale"
						data-parent="#sidebar-menu">
						<div class="sub-menu">
							<li>
								<a class="sidenav-item-link" href="#">
								<span class="nav-text">Sales Reports</span>
								</a>
                            </li>
                            <li>
								<a class="sidenav-item-link" href="#">
								<span class="nav-text">Rental Reports</span>
								</a>
							</li>
							<li>
								<a class="sidenav-item-link" href="#">
								<span class="nav-text">Montly Statistics</span>
								</a>
							</li>
						</div>
					</ul>
                </li>             
				
				
				<li>
					<a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#tools"
						aria-expanded="false" aria-controls="dashboard">
						<i class="mdi mdi-blur"></i>
						<span class="nav-text"> Tools &amp; Appoiments </span> <b class="caret"></b>
					</a>
					<ul class="collapse" id="tools"
						data-parent="#sidebar-menu">
						<div class="sub-menu">
							<li>
								<a class="sidenav-item-link" href="{{route('events.index')}}">
								<span class="nav-text">Test Drives Appoiments</span>
								</a>
							</li>
							<li>
								<a class="sidenav-item-link" href="#">
								<span class="nav-text">Mark/Edit Appoiments</span>
								</a>
                            </li>
						</div>
					</ul>
                </li>   

				<li>
					<a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#blog"
						aria-expanded="false" aria-controls="dashboard">
						<i class="mdi mdi-pen"></i>
						<span class="nav-text"> Blog &amp; Posts </span> <b class="caret"></b>
					</a>
					<ul class="collapse" id="blog"
						data-parent="#sidebar-menu">
						<div class="sub-menu">
							<li>
								<a class="sidenav-item-link" href="#">
								<span class="nav-text">Posts</span>
								</a>
							</li>
							<li>
								<a class="sidenav-item-link" href="#">
								<span class="nav-text">Categories</span>
								</a>
							</li>
							<li>
								<a class="sidenav-item-link" href="#">
								<span class="nav-text">Comments</span>
								</a>
                            </li>
						</div>
					</ul>
                </li>   

				<li>
					<a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#ticket"
						aria-expanded="false" aria-controls="dashboard">
						<i class="mdi mdi-wechat"></i>
						<span class="nav-text"> Tickets &amp; Chat </span> <b class="caret"></b>
					</a>
					<ul class="collapse" id="ticket"
						data-parent="#sidebar-menu">
						<div class="sub-menu">
							<li>
								<a class="sidenav-item-link" href="{{route('tickets.index')}}">
								<span class="nav-text">Tickets</span>
								</a>
							</li>
							<li>
								<a class="sidenav-item-link" href="#">
								<span class="nav-text">Conversations</span>
								</a>
							</li>
							<li>
								<a class="sidenav-item-link" href="#">
								<span class="nav-text">Request Call Backs</span>
								</a>
							</li>
							<li>
								<a class="sidenav-item-link" href="#">
								<span class="nav-text">Talk to your manager</span>
								</a>
                            </li>
						</div>
					</ul>
                </li>   

			</ul>
		</div>
	</div>
</aside>