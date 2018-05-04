<?php
ini_set('display_errors', 1);

// Load a list from the server into JSON
if(!empty($_GET['getlist'])) {
    $list = $_GET['getlist'];
    $qry = '';

    switch($list) {
        case 'states': {
            $qry = "select * from states";
            break;
        }
    }

    if(empty($qry)) { echo "Invalid list parameters"; exit; }
    
    $dbconn = mysql_connect('localhost', 'app', 'appconn1')
        or die("DB login failed");

    mysql_select_db('prunebeat_db', $dbconn)
        or die("Database does not exist: ".mysql_error($dbconn));

    $result = mysql_query($qry, $dbconn)
        or die("Query $qry failed. ".mysql_error($dbconn));

    $rows = array();

    while($rec = mysql_fetch_assoc($result)) {
        $rows[] = $rec;
    }
    mysql_free_result($result);
    mysql_close($dbconn);

    echo json_encode($rows);
}
?>