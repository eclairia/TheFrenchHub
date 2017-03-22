<?php
function reserve_time_slot($slot, $nb_reservation)
{
    global $pdo;
    try
    {
        $req = "UPDATE tfh_time_slots
                SET time_slot_reserve_status = 1, time_slot_nb_reservations = :time_slot_nb_reservations, time_slot_end_disponibility = :time_slot_end_disponibility
                WHERE time_slot_ID =:time_slot_ID";

        $query = $pdo->prepare($req);

        $query->bindValue(':time_slot_ID', $slot['time_slot_ID'], PDO::PARAM_INT);
        $query->bindValue(':time_slot_nb_reservations', $nb_reservation, PDO::PARAM_INT);
        $query->bindValue(':time_slot_end_disponibility', $slot['time_slot_end_disponibility'], PDO::PARAM_STR);

        $query->execute();

        return true;
    }
    catch (Exception $e)
    {
        return false;
        //die('Erreur SQL :' .$e->getMessage());
    }
}
