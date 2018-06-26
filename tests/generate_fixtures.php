<?php

function generate_fixtures(\PDO $pdo)
{
    $table_sql = <<<EOL
CREATE TABLE IF NOT EXISTS people (
  id SERIAL PRIMARY KEY,
  name varchar(25) NOT NULL,
  birthdate TIMESTAMP WITH TIME ZONE NOT NULL,
  approved boolean NOT NULL     
)
EOL;

    $pdo->exec($table_sql);
}