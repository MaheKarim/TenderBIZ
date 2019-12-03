<div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="../assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									Admin
									<span class="user-level">Administrator</span>
								</span>
							</a>
							<div class="clearfix"></div>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item active">
							<a  href="{{ url('/home')}}" class="collapsed" aria-expanded="false">
									<i class="fas fa-home"></i>
									<p>Dashboard</p>	
						    </a>
						</li>
					
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Components</h4>
						</li>
						<li class="nav-item">
							<a href="{{ route('showCategory') }}">
								<i class="fas fa-list-alt"></i>
								<p>Category</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('showTender') }}">
								<i class="fas fas fa-atom"></i>
								<p>Service Tender</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('showTeam') }}">
								<i class="fas fas fa-atom"></i>
								<p>Team Mate</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
</div>