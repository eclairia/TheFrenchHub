<?php
    //protection("user", "users", "login", USER_LAMBDA);

    $_SESSION['user']['user_project'] = $_SESSION['user']['user_project'] == null ? 0 : $_SESSION['user']['user_project'];

	$user_project = select_table_value(
        		array("table1" => "tfh_users",
                      "table2" => "tfh_projects"),
        		array("where_column" => "project_ID",
                      "where_value" => $_SESSION['user']['user_project']),
                array("and_column1" => "user_login",
                      "and_value1" => $_SESSION['user']['user_login'],
                      "and_column2" => "user_password",
                      "and_value2" => $_SESSION['user']['user_password']));

    //var_dump($user_project);

    $nb_additionnal_members = count_table(array("table1" => "tfh_additionnal_members"),
                                          array("where_column" => "additionnal_member_project",
                                                "where_value" => $_SESSION['user']['user_project']));

    if ($nb_additionnal_members > 0)
    {
        $additionnal_members = select_table_value(array("table1" => "tfh_additionnal_members"),
                                                  array("where_column" => "additionnal_member_project",
                                                        "where_value" => $_SESSION['user']['user_project']));
    }

    $order = select_table_value(
        array("table1" => "tfh_orders"),
        array("where_column" => "order_user_password",
              "where_value" => $_SESSION['user']['user_password']),
        array("and_column1" => "order_user_login",
              "and_value1" => $_SESSION['user']['user_login']));

	define("PAGE_TITLE", "Votre espace utilisateur The French Hub");
	include_once("app/view/users/dashboard.php");
