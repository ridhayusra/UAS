<div id="col-left" class="col-left">
			<div class="main-nav-wrapper">
				<nav id="main-nav" class="main-nav">
					<h3>MAIN</h3>
					<ul class="main-menu">
						<li>
							<a href="/home" class="submenu-toggle"><i class="icon ion-home"></i><span class="text">Home</span></a>
						</li>
						
						@if(auth()->user()->role == 'kasun')
						<li class="has-submenu">
							<a href="#" class="submenu-toggle"><i class="icon ion-ios-paper-outline"></i><span class="text">Data Warga</span></a>
							<ul class="list-unstyled sub-menu collapse">
								<li class="has-submenu">
									<a href="#" class="submenu-toggle"><span class="text">RW 06</span></a>
									<ul class="list-unstyled sub-menu collapse">
										<li><a href="/warga"><span class="text">RT 03</span></a></li>
										<li><a href="/warga/rt06"><span class="text">RT 06</span></a></li>
										<li><a href="/warga/rt03"><span class="text">RT 03</span></a></li>
									</ul>
								</li>
								<li class="has-submenu">
									<a href="#" class="submenu-toggle" ><span class="text">RW 07</span></a>
										<ul class="list-unstyled sub-menu collapse">
											<li><a href="/warga/rt02"><span class="text">RT 02</span></a></li>
											<li><a href="/warga/rt04"><span class="text">RT 04</span></a></li>
										</ul>
								</li>
								<li><a href="#"><span class="text">Second Lvl C</span></a></li>
								<li><a href="#"><span class="text">Second Lvl D</span></a></li>
							</ul>
						</li>
						@elseif(auth()->user()->role == 'RT_06')
						<li><a href="/warga/rt06"><i class="icon ion-ios-paper-outline"></i><span class="text">RT 06</span></a>
						</li>
						@endif
					</ul>
					
				</nav>
			</div>
		</div>