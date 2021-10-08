<?php
$sql_details = array(
    'user' => 'openbiblio2',
    'pass' => 'admin123',
    'db'   => 'openbiblio',
    'host' => '52.70.164.196'
);
/*
 * DataTables example server-side processing script.
 *
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 */

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */

// DB table to use
$table = 'biblio';

// Table's primary key
$primaryKey = 'bibid';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier - in this case object
// parameter names
$columns = array(
	array(
		'db' => 'bibid',
		'dt' => 'bibid',
		'formatter' => function( $d, $row ) {
			// Technically a DOM id cannot start with an integer, so we prefix
			// a string. This can also be useful if you have multiple tables
			// to ensure that the id is unique with a different prefix
			return 'row_'.$d;
		}
	),
	array( 'db' => 'title', 'dt' => 'title' ),
	array( 'db' => 'author',  'dt' => 'author' ),
	array( 'db' => 'topic1',   'dt' => 'topic1' )
);




/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */

require( 'ssp.class.php' );

echo json_encode(
	SSP::simple( $_POST, $sql_details, $table, $primaryKey, $columns )
);

