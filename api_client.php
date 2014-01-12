<?php

include("dreamhost_api.php");
$api_key="6SHU5P2HLDAYECUM";
$meta = new \DreamHost_API_Meta_Commands($api_key);
$meta->list_accessible_cmds();
$meta->execute_command();
echo "<pre>";
print_r ($meta->get_final_results());
echo "</pre>";

?>
