<?php


class MysqliDatabase {

    private $connection;
    private static $db;


    public static function getInstance($option = null) {
        if (self::$db == null) {
            self::$db = new MysqliDatabase($option);
        }

        return self::$db;
    }


    public function __construct($option = null) {
        if ($option != null) {
            $host = $option['host'];
            $user = $option['user'];
            $pass = $option['pass'];
            $name = $option['name'];
        } else {
            global $config;
            $host = $config['database']['host'];
            $user = $config['database']['user'];
            $pass = $config['database']['pass'];
            $name = $config['database']['name'];
        }

        $this->connection = new mysqli($host, $user, $pass, $name);
        if ($this->connection->connect_error) {
            echo "Connection failed: " . $this->connection->connect_error;
            exit;
        }

        $this->connection->query("SET NAMES 'utf8'");
    }


    private function safeQuery(&$sql, $data) {
        foreach ($data as $key => $value) {
            $value = $this->connection->real_escape_string($value);
            $value = "'$value'";

            $sql = str_replace(":$key", $value, $sql);
        }

        return $this->connection->query($sql);
    }


    public function first($sql, $data = array(), $field = null) {
        $records = $this->query($sql, $data);
        if (count($records) == 0) {
            return null;
        }

        if ($field != null) {
            return $records[0][$field];
        }

        return $records[0];
    }


    public function modify($sql, $data = array()) {
        $result = $this->safeQuery($sql, $data);
        if (!$result) {
            echo "Query: " . $sql . " failed due to " . mysqli_error($this->connection);
            exit;
        }

        return $result;
    }


    public function insert($sql, $data = array()) {
        $result = $this->safeQuery($sql, $data);
        if (!$result) {
            echo "Query: " . $sql . " failed due to " . mysqli_error($this->connection);
            exit;
        }

        $lastId = mysqli_insert_id($this->connection);
        return $lastId;
    }


    public function query($sql, $data = array()) {
        $result = $this->safeQuery($sql, $data);
        if (!$result) {
            echo "Query: " . $sql . " failed due to " . mysqli_error($this->connection);
            exit;
        }

        $records = array();

        if ($result->num_rows == 0) {
            return $records;
        }

        while ($row = $result->fetch_assoc()) {
            $records[] = $row;
        }

        return $records;
    }


    public function getRecordId() {
        $recordId = mysqli_insert_id($this->connection);
        return $recordId;
    }


    public function connection() {
        return $this->connection;
    }


    public function close() {
        $this->connection->close();
    }

}

function db(): MysqliDatabase {
    return MysqliDatabase::getInstance();
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
    return db()->modify($sql, $params);
}

