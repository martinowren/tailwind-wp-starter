<?php

/**
 * De-register jquery-migrate on the frontend
 *
 * @return void
 */
add_action('wp_default_scripts', function ($scripts) {
	if (!is_admin() && isset($scripts->registered['jquery'])) {
		$script = $scripts->registered['jquery'];

		if ($script->deps) {
			// Check whether the script has any dependencies
			$script->deps = array_diff($script->deps, ['jquery-migrate']);
		}
	}
});
