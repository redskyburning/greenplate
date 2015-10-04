<form method="get" id="searchform" action="<?php bloginfo('url'); ?>">
	<input type="text" class="field" name="s" id="s"  value="<?php _e('Search...', 'woothemes') ?>" onfocus="if (this.value == '<?php _e('Search...', 'woothemes') ?>') {this.value = '';}" onblur="if (this.value == '') {this.value = '<?php _e('Search...', 'woothemes') ?>';}" />
	<button type="submit" class="glyphicon glyphicon-search search-button"  name="submit" value="<?php _e('Search', 'woothemes'); ?>" />
</form>