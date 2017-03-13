<?php

    $users = select_table(
                array("table1" => "tfh_users"),
                array(
                	"orderby" => "user_date",
                	"order" => "DESC"
                ));

    include_once("app/view/users/list.php");