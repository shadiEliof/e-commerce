<?php


class db {

    use singleton;
    /* @var PDO */
    private $pdo;

    private function __construct() {
        $this->connect();
    }

    private function connect() {
        try {
            global $config;
            $dbConfig = $config['db'];
            $this->pdo = new PDO("mysql:host=${dbConfig['host']};dbname=${dbConfig['name']}", $dbConfig['user'], $dbConfig['pass'],array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        } catch (PDOException $e) {
            echo "error in connecting to databasee";
            die();
        }
    }

    public function query(String $sql, array $params = []): array {
        try {
            $statements = $this->pdo->prepare($sql);
            $statements->setFetchMode(PDO::FETCH_ASSOC);
            $statements->execute($params);

            $rows = [];
            foreach ($statements as $row) {
                $rows[] = $row;
            }
            return $rows;
        } catch (PDOException $e) {
            dump($e);
        }


    }

    public function insert(String $sql, array $params = []): string {
        try {
            $statements = $this->pdo->prepare($sql);
            $statements->setFetchMode(PDO::FETCH_ASSOC);
            $statements->execute($params);
            return $this->pdo->lastInsertId();
        } catch (PDOException $e) {
            dump($e);
        }


    }

    public function update(String $sql, array $params = []): string {
        try {
            $statements = $this->pdo->prepare($sql);
            $statements->setFetchMode(PDO::FETCH_ASSOC);
            $statements->execute($params);
            return $statements->rowCount();
        } catch (PDOException $e) {
            dump($e);
        }


    }


}

function db(): db {
    return db::getInstance();
}

function query(String $sql, array $params = []): array {
    return db()->query($sql, $params);
}

function first(String $sql, array $params = []) {
    $result = db()->query($sql, $params);
    if (is_array($result) && count($result) !== 0) {
        return $result[0];
    } else {
        return null;
    }
}

function insert(String $sql, array $params = []): string {
    return db()->insert($sql, $params);
}

function update(String $sql, array $params = []): string {
    return db()->update($sql, $params);
}