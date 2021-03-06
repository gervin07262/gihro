<div class="col-md-3 col-lg-3 hidden-xs">
  <section class="panel">
  	<div class="panel-body">
  		<div class="thumb-info mb-md">
        {{ HTML::image('images/'.session('path'), 'Joseph Doe Junior',
        ['class' => 'rounded img-responsive']) }}
  			<div class="thumb-info-title">
  				<span class="thumb-info-inner">John Doe</span>
  				<span class="thumb-info-type">CEO</span>
  			</div>
  		</div>

  		<div class="widget-toggle-expand mb-md">
  			<div class="widget-header">
  				<h6>Profile Completion</h6>
  				<div class="widget-toggle">+</div>
  			</div>
  			<div class="widget-content-collapsed">
  				<div class="progress progress-xs light">
  					<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
  						60%
  					</div>
  				</div>
  			</div>
  			<div class="widget-content-expanded">
  				<ul class="simple-todo-list">
  					<li class="completed">Update Profile Picture</li>
  					<li class="completed">Change Personal Information</li>
  					<li>Update Social Media</li>
  					<li>Follow Someone</li>
  				</ul>
  			</div>
  		</div>

  		<hr class="dotted short">

  		<h6 class="text-muted">About</h6>
  		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis vulputate quam. Interdum et malesuada</p>
  		<div class="clearfix">
  			<a class="text-uppercase text-muted pull-right" href="#">(View All)</a>
  		</div>

  		<hr class="dotted short">

  		<div class="social-icons-list">
  			<a rel="tooltip" data-placement="bottom" target="_blank" href="http://www.facebook.com" data-original-title="Facebook"><i class="fa fa-facebook"></i><span>Facebook</span></a>
  			<a rel="tooltip" data-placement="bottom" href="http://www.twitter.com" data-original-title="Twitter"><i class="fa fa-twitter"></i><span>Twitter</span></a>
  			<a rel="tooltip" data-placement="bottom" href="http://www.linkedin.com" data-original-title="Linkedin"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>
  		</div>

  	</div>
  </section>
</div>
