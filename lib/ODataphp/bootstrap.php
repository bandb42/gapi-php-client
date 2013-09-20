<?php
# set the include path
#
# # @TODO: remove hardcoded string

 $path = dirname(__FILE__);

 set_include_path(get_include_path() . PATH_SEPARATOR . $path);

 ini_set('ODataphp_path', $path);

?>
