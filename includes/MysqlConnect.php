<?php

class MysqlConnect {

    private static $_instance = false;
    private $_con;

    public function __construct() {
        //
    }

    public function __sleep() {
        //
    }

    public function __wakeup() {
        //
    }

    /**
     *
     * @return MysqlConnect instance of this class 
     */
    public static function getInstance() {
        if (self::$_instance === false) {

            $instance = new self();
            $instance->_con = mysqli_connect('localhost', 'aruncp_trendmake', 'trendmaker')
                    or trigger_error('Could not connect to database server', E_USER_ERROR);

            mysqli_select_db($instance->_con, 'aruncp_trendmaker')
                    or trigger_error('Could not select database', E_USER_ERROR);

            self::$_instance = $instance;
        }

        return self::$_instance;
    }
 public static function dbEscape($value) {
        return self::getInstance()->_escapeString($value);
    }
    public function select($sql, $fetchAll = false) {
		
        $str = mysqli_query($this->_con, $sql);

        if ($fetchAll === false) {
            $row = mysqli_fetch_assoc($str);
            return $row;
        }

        $result = array();
        while (($row = mysqli_fetch_assoc($str))) {
            $result[] = $row;
        }

        return $result;
    }

    public function update($table, $data, $where) {

        $dataUpdate = array();
        foreach ($data as $field => $value) {
            $dataUpdate[] = "`" . $field . "` = " . $this->_escapeString($value);
        }

        if (is_array($where)) {
            $where = '(' . implode(') AND (', $where) . ')';
        }

        $sql = "UPDATE `" . $table . "` SET "
                . implode(',', $dataUpdate) . " WHERE " . $where;

        $result = mysqli_query($this->_con, $sql);
        return $result;
    }
    
    public function delete($table, $where) {

        $dataDelete = array();
        

        if (is_array($where)) {
            $where = '(' . implode(') AND (', $where) . ')';
        }

        $sql = "DELETE FROM `" . $table . "` WHERE " . $where;

        $result = mysqli_query($this->_con, $sql);
        return $result;
    }

    public function insert($table, $data) {

        $formattedVals = array();
        foreach (array_values($data) as $value) {
            $formattedVals[] = $this->_escapeString($value);
        }

        $sql = "INSERT INTO `" . $table . "`"
                . " (" . '`' . implode('`,`', array_keys($data)) . '`' . ")"
                . " VALUES (" . implode(",", $formattedVals) . ")";

        $result = mysqli_query($this->_con, $sql);
        return $result;
    }
 public function insert_id($table, $data) {

        $formattedVals = array();
        foreach (array_values($data) as $value) {
            $formattedVals[] = $this->_escapeString($value);
        }

        $sql = "INSERT INTO `" . $table . "`"
                . " (" . '`' . implode('`,`', array_keys($data)) . '`' . ")"
                . " VALUES (" . implode(",", $formattedVals) . ")";

        $result = mysqli_query($this->_con, $sql);
		$id = mysqli_insert_id($this->_con);
        return $id;
    }
    //--------------------------------------------------------------------------
    // private methods
    //--------------------------------------------------------------------------

    private function _escapeString($value) {

        if ($value === null) {
            return 'NULL';
        }

        if (is_int($value)) {
            return $value;
        }

        return "'" . mysqli_real_escape_string($this->_con, $value) . "'";
    }

}
