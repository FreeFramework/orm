<?php

if (!function_exists('orm'))
{
    /**
     * @param string $table
     * @param string $database
     * @param \PDO $connection
     * @return \ORMSkeleton
     */
    function orm(string $table = null, string $database = null, \PDO $connection = null)
    {
        return ORM::reach($table, $database, $connection);
    }
}
