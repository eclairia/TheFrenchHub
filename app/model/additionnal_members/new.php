<?php
/**
 * Created by PhpStorm.
 * User: guill
 * Date: 20/03/2017
 * Time: 19:01
 */
	function add_member($additionnal_member)
    {
        global $pdo;

        try
        {
            $req = "INSERT INTO tfh_additionnal_members(additionnal_member_first_name, additionnal_member_last_name, additionnal_member_mail, additionnal_member_project)
					VALUES (:additionnal_member_first_name, :additionnal_member_last_name, :additionnal_member_mail, :additionnal_member_project)";

            $query = $pdo->prepare($req);

            $query->bindValue(':additionnal_member_first_name', $additionnal_member["additionnal_member_first_name"], PDO::PARAM_STR);
            $query->bindValue(':additionnal_member_last_name', $additionnal_member["additionnal_member_last_name"], PDO::PARAM_STR);
            $query->bindValue(':additionnal_member_mail', $additionnal_member["additionnal_member_mail"], PDO::PARAM_STR);
            $query->bindValue(':additionnal_member_project', $additionnal_member["user_project"], PDO::PARAM_INT);

            $query->execute();

            //Récupération de l'ID
            return true;
        }

        catch(Exception $e)
        {
            return false;
        }
    }