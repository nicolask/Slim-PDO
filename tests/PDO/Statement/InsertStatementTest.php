<?php

namespace Slim\PDO\Statement;


use PHPUnit\Framework\TestCase;

class InsertStatementTest extends TestCase
{
    /**
     * @var \Slim\PDO\Database
     */
    private $slimPdo;

    protected function setUp()
    {
        global $slim_pdo;
        $this->slimPdo = $slim_pdo;
        $this->slimPdo->exec('TRUNCATE people');
    }

    public function testInsert()
    {

        $insert = $this->slimPdo->insert(array('name', 'birthdate', 'approved'))
            ->into('people')
            ->values(array('A Name', '1965-04-01', true));
        $id = $insert->execute();

        $numberOfEntries = $this->slimPdo->query("SELECT count(*) FROM people")->fetchColumn();
        $this->assertEquals(1, $numberOfEntries);
    }
}
