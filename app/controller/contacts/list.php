<?php
	$contacts = select_table_value(
					array("table1" => "tfh_contacts"),
					array("orderby" => "contact_ID",
							"order" => "DESC")
				);

	include_once("app/view/contacts/list.php");