<?php
add_action('wp_head', 'clearit_script');
function clearit_script() {
echo '<script type="text/javascript" src="/wp-content/themes/gsilver/js/clearit.js"></script>
';
}
?>