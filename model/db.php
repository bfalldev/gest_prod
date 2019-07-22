<?php

    function connexion()
    {
        $host = "localhost";
        $user = "root";
        $password = "";
        $dbname = "gest_produit";
        return mysqli_connect($host, $user, $password, $dbname);
    }

    function requeteSQL($sql)
    {
        return mysqli_query(connexion(), $sql);
    }

    function lastInsertId($table)
    {
        $sql1="SELECT id FROM ".$table." ORDER BY id DESC";
        $r=requeteSql($sql1);
        $rw=mysqli_fetch_row($r);
        return $rw[0];
    }

?>