<?php

namespace App;

use PDO;
use PDOException;

class DB
{
    private $conn;

    public function __construct()
    {
        try {
            $this->conn = new PDO("sqlite:" . __DIR__ . "/../db.sqlite");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            // do NOT echo anything — throw exception
            throw new \Exception("Connection failed: " . $e->getMessage());
        }
    }

    public function all($table, $class)
    {
        $stmt = $this->conn->prepare("SELECT * FROM $table");
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, $class);
        return $stmt->fetchAll();
    }

    public function where($table, $class, $field, $value)
    {
        $stmt = $this->conn->prepare("SELECT * FROM $table WHERE $field=:value");
        $stmt->bindValue(':value', $value);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, $class);
        return $stmt->fetchAll();
    }

    public function find($table, $class, $id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM $table WHERE id=:id");
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, $class);
        return $stmt->fetch();
    }

    public function insert($table, $fields)
    {   
        $fieldNames = array_keys($fields);
        $fieldNamesText = implode(', ', $fieldNames);
        $placeholders = ':' . implode(', :', $fieldNames);

        $sql = "INSERT INTO $table ($fieldNamesText) VALUES ($placeholders)";
        $stmt = $this->conn->prepare($sql);

        foreach ($fields as $key => $value) {
            $stmt->bindValue(":$key", $value);
        }

        $stmt->execute();
        return $this->conn->lastInsertId();
    }

    public function update($table, $fields, $id)
    {
        $updateText = '';
        foreach ($fields as $key => $value) {
            $updateText .= "$key=:$key, ";
        }
        $updateText = rtrim($updateText, ', ');

        $sql = "UPDATE $table SET $updateText WHERE id=:id";
        $stmt = $this->conn->prepare($sql);

        foreach ($fields as $key => $value) {
            $stmt->bindValue(":$key", $value);
        }
        $stmt->bindValue(':id', $id);

        $stmt->execute();
    }

    public function delete($table, $id)
    {
        $sql = "DELETE FROM $table WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
    }
}
