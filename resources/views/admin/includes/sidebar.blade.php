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
								<a class="sidenav-item-link" href="#">
								<span class="nav-text">Cars</span>
								</a>
							</li>
							<li>
								<a class="sidenav-item-link" href="#">
								<span class="nav-text">Employees</span>
								</a>
							</li>
							<li>
								<a class="sidenav-item-link" href="#">
								<span class="nav-text">Attributes</span>
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
								<a class="sidenav-item-link" href="#">
								<span class="nav-text">Users</span>
								</a>
                            </li>
                            <li>
								<a class="sidenav-item-link" href="#">
								<span class="nav-text">Employees</span>
								</a>
							</li>
							<li>
								<a class="sidenav-item-link" href="#">
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
                

			</ul>
		</div>
	</div>
</aside>