<!-- start: sidebar -->
<aside id="sidebar-left" class="sidebar-left visible-xs-block visible-sm-block">
  <div class="sidebar-header">
    <div class="sidebar-title">
    	Navigation
    </div>
    <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
    	<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
    </div>
	</div>
  <div class="nano">
  	<div class="nano-content">
  		<nav id="menu" class="nav-main" role="navigation">
  			<ul class="nav nav-main">
  				<li>
  					<a href="/panelDirectors/profile/<?php echo Session::get('director_id'); ?>/edit">
  						<i class="fa fa-home" aria-hidden="true"></i>
  						<span>Perfil</span>
  					</a>
  				</li>
          <li>
  					<a href="/panelDirectors/classrooms">
  						<i class="fa fa-home" aria-hidden="true"></i>
  						<span>Clases</span>
  					</a>
  				</li>
          <li>
              <a href="/panelDirectors/kids">
                <i class="fa fa-home" aria-hidden="true"></i>
                <span>Niños</span>
              </a>
          </li>
          <li>
  					<a href="/panelDirectors/teachers">
  						<i class="fa fa-home" aria-hidden="true"></i>
  						<span>Profesores</span>
  					</a>
  				</li>
  			</ul>
  		</nav>
  	</div>
    <script>
			// Maintain Scroll Position
			if (typeof localStorage !== 'undefined') {
				if (localStorage.getItem('sidebar-left-position') !== null) {
					var initialPosition = localStorage.getItem('sidebar-left-position'),
						sidebarLeft = document.querySelector('#sidebar-left .nano-content');

					sidebarLeft.scrollTop = initialPosition;
				}
			}
		</script>
  </div>
</aside>
<!-- end: sidebar -->
