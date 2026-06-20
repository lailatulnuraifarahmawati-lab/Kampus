<?php

namespace App\Database\Connectors;

use Illuminate\Database\Connectors\PostgresConnector;

class NeonPostgresConnector extends PostgresConnector
{
    protected function getDsn(array $config)
    {
        $dsn = parent::getDsn($config);

        if (! empty($config['pgsql_options'])) {
            $options = str_replace("'", "\'", (string) $config['pgsql_options']);

            $dsn .= ";options='{$options}'";
        }

        return $dsn;
    }
}
