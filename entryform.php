<?php

/*TXE-274165*/

require_once('../../config.php');
global $DB, $USER;
$html = array();
$requestorname = fullname($USER);
$html['name'] = $requestorname;

$fieldidsql = "SELECT id 
               FROM {data_fields} df
               WHERE dataid IN (SELECT id FROM {data} WHERE name = 'Maintenance') 
               AND type = 'text'
               AND name = 'Name of Requestor'";

$fieldid = $DB->get_field_sql($fieldidsql);
$html['id'] = $fieldid;
echo json_encode($html);
