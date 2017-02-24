<?php if (is_active_sidebar('sidebar-footertwo')) { ?>
				<div class="col-md-4" id="sidebar-footertwo">
					<?php do_action('before_sidebar'); ?> 
					<?php dynamic_sidebar('sidebar-footertwo'); ?>
				</div>
<?php } ?> 