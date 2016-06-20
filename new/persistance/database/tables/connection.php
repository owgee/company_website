<?php

/**
 * file DB CONNECTION
 *
 *      INNOVATION NETWORK AND SOFTWARE COMPANY
 *
 *  @author Ephraim Swilla <swillae@yahoo.com>
 *  @author Yohanna Nasson <yohana.nasson@yahoo.com>
 *
 *
 * DESC: This is a super class file that used in all DB classes
 */
class db {
    /*
     *    All class variables are private as they
     *    should only be manipulated using accessor methods.
     */

    public $conn;              // Connection variable
    public $result;            // Result of the last query
    public $q_str;             // Last query string
    public $q_count = 0;       // Query count
    public $table;

    /*
     *    Constructor, here we set all connection based variables.
     */

    public function __construct() {
        @session_start();
       // $this->conn();
    }

    /*
     *    Destructor, the cleanup method called on script end.
     */

    public function __destruct() {
        // Clean up, not really needed as PHP does this on script end
        $this->free(); // Free result
        $this->close();
    }

    /*
     *    The connection method is only called if required.
     */

    function conn() {
        if (!$this->conn) { // If there is no existing connection
            $this->conn = mysql_connect(SERVER, DB_USERNAME, DB_PASSWORD,TRUE); // Make connection
            if (!$this->conn) { /* ----If no connection  ----- */
                throw new Exception('Can\'t establish a connection to the database, check your connection variables.');
            }
            $db = mysql_select_db(DB_NAME, $this->conn); // Select the database
            if (!$db) { // If script cannot find the database
                throw new Exception('Can\'t find the database, check your connection variables.');
            }
        }
        return $this->conn;
    }

    /*
     *    Our main query method. This method calls the connection method
     *    to establish a connection, this is the "lazy loading" feature
     *    in practice.
     */

    public function query($q_str) {
        //echo $q_str;
       $this->conn(); // Lazy loading
    $this->q_str = $q_str; // Store query string
       
        $this->result = mysql_query($q_str, $this->conn()); // Run the query
        if (!$this->result) { // Failed Query
            return $this->error();
            throw new Exception('Failed Query "'.$q_str.'" Error: '.$this->error());
        } else { // Success
            $this->q_count++; // One more successful query
            return $this->result; // Return the result
        }

    }

    /*
     *    The insert function here is an interesting one because of
     *    how it works. The first perameter is the table you wish to
     *    insert data into and the second is an associative array.
     *    The key is a string defining the column of the table to input
     *    into and the value being the information to input.
     */

    public function insert($table, $arr = array()) {
        /*
         *    Cleaning the key allows the developer to insert the entire
         *    $_POST array should he wish to and still be safe from attacks.
         */
        $keys = '`' . implode("`, `", $this->clean(array_keys($arr))) . '`';
        // Values should always be cleaned
        $values = "'" . implode("', '", $this->clean(array_values($arr))) . "'";

        // Build the query string
        $q_str = "INSERT INTO `" . $table . "` (" . $keys . ") VALUES (" . $values . ")";
        return $this->query($q_str); // Execute
    }

    public function insertMulti($table, $arr = array()) {
        /*
         *    Cleaning the key allows the developer to insert the entire
         *    $_POST array should he wish to and still be safe from attacks.
         */
        $keys = '`' . implode("`, `", $this->clean(array_keys($arr[0]))) . '`';
        // Values should always be cleaned
        for ($i = 0; $i < count($arr); $i++)
            $rows[$i] = "'" . implode("', '", $this->clean(array_values($arr[$i]))) . "'";
        $values = "(" . implode('),(', $rows) . ")";

        // Build the query string
        $q_str = "INSERT INTO `" . $table . "` (" . $keys . ") VALUES $values";
        return $this->query($q_str); // Execute
    }

    public function insertMultiZero($table, $arr = array()) {
        /*
         *    Cleaning the key allows the developer to insert the entire
         *    $_POST array should he wish to and still be safe from attacks.
         */
        $keys = '`' . implode("`, `", $this->clean(array_keys($arr[0]))) . '`';
        // Values should always be cleaned
        for ($i = 0; $i < count($arr); $i++) {
            $val = '';
            $arrSpace = array_count_values(array_values($arr[$i]));
            if ($arrSpace[$val] != 2)
                $rows[$i] = "'" . implode("', '", $this->clean(array_values($arr[$i]))) . "'";
        }
        $values = "(" . implode('),(', $rows) . ")";

        // Build the query string
        $q_str = "INSERT INTO `" . $table . "` (" . $keys . ") VALUES $values";
        return $this->query($q_str); // Execute
    }

    public function insert3DAry($table, $arr = array()) {
        /*
         *    Cleaning the key allows the developer to insert the entire
         *    $_POST array should he wish to and still be safe from attacks.
         */
        $keys = '`' . implode("`, `", array_keys($arr[0][0])) . '`';
        $keysarray = array_keys($arr[0][0]);
        // Values should always be cleaned
        for ($i = 0; $i < count($arr); $i++) {
            for ($j = 0; $j < count($arr[$i]); $j++) {
                $val = '';
                for ($k = 0; $k < count($keysarray); $k++) {
                    if ($k == 0)
                        $val.="'" . $arr[$i][$j][$keysarray[$k]] . "'";
                    else
                        $val.=",'" . $arr[$i][$j][$keysarray[$k]] . "'";
                }
                $rows[] = $val;
            }
        }
        $values = "(" . implode('),(', $rows) . ")";
        // Build the query string
        $q_str = "INSERT INTO `" . $table . "` (" . $keys . ") VALUES $values";
        return $this->query($q_str); // Execute
    }

    public function insert3DAryZero($table, $arr = array()) {
        /*
         *    Cleaning the key allows the developer to insert the entire
         *    $_POST array should he wish to and still be safe from attacks.
         */
        $keys = '`' . implode("`, `", array_keys($arr[0][0])) . '`';
        $keysarray = array_keys($arr[0][0]);
        // Values should always be cleaned
        for ($i = 0; $i < count($arr); $i++) {
            for ($j = 0; $j < count($arr[$i]); $j++) {
                $val = '';
                $flag = 0;
                //echo count($keysarray).'<br>';
                for ($k = 0; $k < count($keysarray); $k++) {
                    if ($k == 0)
                        $val.="'" . $arr[$i][$j][$keysarray[$k]] . "'";
                    else
                        $val.=",'" . $arr[$i][$j][$keysarray[$k]] . "'";
                    if ($arr[$i][$j][$keysarray[$k]] == '')
                        $flag = 1;
                }
                //echo $flag.'flag'.$i;
                if ($flag == 0)
                    $rows[] = $val;

                //print_r($rows);
                //echo '<br>';
            }
        }
        $values = "(" . implode('),(', $rows) . ")";
        // Build the query string
        $q_str = "INSERT INTO `" . $table . "` (" . $keys . ") VALUES $values";
        return $this->query($q_str); // Execute
    }

    /* Functions to insert the 3d array values and insert the only non empty values */

    public function insert3DAryZeroOne($table, $arr = array()) {
        /*
         *    Cleaning the key allows the developer to insert the entire
         *    $_POST array should he wish to and still be safe from attacks.
         */
        $keys = '`' . implode("`, `", array_keys($arr[0][0])) . '`';
        $keysarray = array_keys($arr[0][0]);
        // Values should always be cleaned
        for ($i = 0; $i < count($arr); $i++) {
            for ($j = 0; $j < count($arr[$i]); $j++) {
                $val = '';
                $flag = 0;
                //echo count($keysarray).'<br>';
                for ($k = 0; $k < count($keysarray); $k++) {
                    if ($k == 0)
                        $val.="'" . $arr[$i][$j][$keysarray[$k]] . "'";
                    else
                        $val.=",'" . $arr[$i][$j][$keysarray[$k]] . "'";

                    if ($arr[$i][$j][$keysarray[$k]] == '')
                        $flag++;
                    //$flag++;
                }
                //echo $flag.'flag'.$i;
                if ($flag < 2)
                    $rows[] = $val;

                //print_r($rows);
                //echo '<br>';
            }
        }
        $values = "(" . implode('),(', $rows) . ")";
        // Build the query string
        $q_str = "INSERT INTO `" . $table . "` (" . $keys . ") VALUES $values";
        return $this->query($q_str); // Execute
    }

    /*
     *    The update method works much in the same way as the insert
     *    method, except it takes an additional perameter which is the
     *    WHERE clause of the SQL query string which can be a string or
     *    an array coupled with the $andor perameter.
     */

    public function update($table, $arr = array(), $where = false, $andor = 'AND') {
        
        // Start the query string
        $q_str = "UPDATE `" . $table . "` SET ";

        // Build the SET part of the query string
        foreach ($arr as $key => $value) {
            $q_str .= '`' . $this->clean($key) . "` = '" . $this->clean($value) . "', ";
        }
        $q_str = rtrim($q_str, ', ');
$w_str ='';
        // Add WHERE clause if given
        if (is_array($where) && count($where) > 0) {
            foreach ($where as $key => $value) {
                $w_str .= '`' . $this->clean($key) . "` = '" . $this->clean($value) . "' " . $andor . " ";
            }
            $w_str = rtrim($w_str, $andor . ' '); // Trim the last AND/OR off
            $q_str .= " WHERE " . $w_str;
        
        } elseif (is_string($where) && strlen($where) > 0) {
            $q_str .= " WHERE " . $where;
            
        }
       //echo $q_str;
 
        return $this->query($q_str); // Execute
    }

    public function delete($table, $where) {
        // Start the query string
        $q_str = "DELETE FROM `" . $table . "` WHERE " . $where;
        //echo $q_str;
        $this->query($q_str); // Execute
    }

    /*
     *    This function takes an associative array from the database
     *    and then stores each value in another array. The sole reason
     *    for this is so that the returned array from this method may
     *    be called in a foreach loop. Handy for templating systems.
     */

    public function arr() {
        if (!$this->result) { // Require a previous query
            throw new Exception('You cannot call the arr() method without first making a query.');
        }

        // Store in another array
        while ($arr = @mysql_fetch_assoc($this->result)) {
            $newarr[] = $arr;
        }
        return $newarr;
    }

    public function fetchArray() {
        if (!$this->result) { // Require a previous query
            throw new Exception('You cannot call the arr() method without first making a query.');
        }

        // Store in another array
        $arr = @mysql_fetch_array($this->result);
        return $arr;
    }

    /* This function will return max field value from specified table acc to specified condition */

    public function qryMax($table, $field, $where) {
        // Start the query string
        $q_str = "SELECT MAX(`" . $field . "`) cd FROM `" . $table . "` " . $where;
        $this->conn(); // Lazy loading
        $this->q_str = $q_str; // Store query string
        $this->result = mysql_query($q_str, $this->conn); // Run the query

        if (!$this->result) { // Failed Query
            return $this->error();
            //throw new Exception('Failed Query "'.$q_str.'" Error: '.$this->error());
        } else { // Success
            $arr = @mysql_fetch_array($this->result);
            return $arr[cd]; // Return the result
        }
    }

    /*
     *    The purpose of this method is to take a query string,
     *    execute it and return a single value from the database.
     */

    public function single($q_str) {
        $this->query($q_str); // Execute the query
        $arr = $this->arr(); // Take the array
        if (is_array($arr)) {
            /*
             *    Because we store the assoc array in another array
             *    we have to "shift" it twice to get the single value.
             */
            $value = array_shift($arr);
            $value = array_shift($value);
            return $value;
        } else {
            // Fail
            return false;
        }
    }

    /*
     *    This method will take a given table name and return an integer
     *    counting the rows within the table.
     */

    public function count($table,$where='') { // yes, we're using a native php function name...
        if (!$table) {
            return 0;
        }
        $count = $this->single("SELECT count(*) FROM `" . $table . "` ".$where);
        return intval($count);
    }

    /*
     *    This is a standard "clean" method used to make sure
     *    query strings are safe.
     */

    public function clean($input) {
        $this->conn(); // Requires a connection to determine charset of db
        if (is_array($input)) {
            foreach ($input as $key => $str) {
                $arr[$this->clean($key)] = $this->clean($str); // Call self this time with a string
            }
            return $arr;
        } elseif (is_string($input)) {
            if (get_magic_quotes_gpc()) { // If magic quotes is set to on
                $input = stripslashes($input); // Undo what magic quotes did
            }

            if (!is_numeric($input)) { // Only if not numeric
                $input = mysql_real_escape_string($input, $this->conn()); // Escape
            }
        }
        return $input;
    }

    /*
     *    Gets the id from the last INSERT query.
     */

    public function id() {
        $result = @mysql_insert_id($this->conn);
        if (!$result) {
            throw new Exception('Failed getting last insert id. Error: ' . $this->error());
        } else {
            return $result;
        }
    }

    /*
     *    Counts number of rows in last query.
     */

    public function num() {
        if (!$this->result) { // Require a previous query
            throw new Exception('You cannot call the num() method without first making a query.');
        }
        $num = mysql_num_rows($this->result);
        return $num;
    }

    /*
     *    Shows the amount of affected rows in last query.
     */

    public function affected() {
        if (!$this->result) { // Require a previous query
            throw new Exception('You cannot call the affected() method without first making a query.');
        }
        $rows = mysql_affected_rows($this->conn);
        return $rows;
    }

    /*
     *    Frees the memory used by the result
     */

    public function free() {
       
        if (is_resource($this->result)) {
            return mysql_free_result($this->result);
        } else {
            return;
        }
    }

    /*
     *    Returns a mysql generated error.
     */

    public function error() {
        return mysql_error($this->conn);
    }

    /*
     *    Closes the mysql connection.
     */

    public function close() {
        if (is_resource($this->conn)) {
            return mysql_close($this->conn);
        }
    }

    /*
     *    Returns the last stored query string
     */

    public function q_str() {
        return $this->q_str;
    }

    /*
     *    Returns the amount of queries ran.
     */

    public function q_count() {
        return $this->q_count;
    }

    /*
     *    Returns the list data
     * $q_str -> Qry to fetch list data and first field in query is code
     * $listHead -> Heading of list screen
     * $headingList -> Headings to be display in screen
     * $tblWidth -> width of table
     * $modFile -> Name of the file which should be opened in modify mode(ex:'filename.php?code=')
     * $hyperPos -> hyper link position after S.No(Mention number like 1 or 2 etc)
     * $CdDisplay -> this is true or false(If it is true code will be display in screen otherwise not)
     * $delPos -> if it is not empty delete check box will display on screen
     * $arry -> array of codes for which delete check box should be disable
     * $css -> array of alignment of list data
     */

    public function listData($q_str, $listHead, $headingList, $tblWidth, $modFile, $hyperPos, $CdDisplay, $delPos, $arry, $css) {
        $headings = explode(',', $headingList);
        $tblDisplay = '<h3 align="center">' . $listHead . '</h3><table width="$tblWidth" align = "center" border="1" style="border-collapse:collapse">
		<tr>';
        $this->conn(); // Lazy loading
        $this->q_str = $q_str; // Store query string
        //echo $this->q_str;
        $this->result = mysql_query($q_str, $this->conn); // Run the query
        $noFields = mysql_num_fields($this->result);

        if (!$this->result) { // Failed Query
            throw new Exception('Failed Query "' . $q_str . '" Error: ' . $this->error());
        } else { // Success
            // Store in another array
            $i = 1;
            $k = ($CdDisplay == 'false') ? 1 : 0;
            if (mysql_num_rows($this->result) > 0) {
                while ($arr = @mysql_fetch_array($this->result, MYSQL_BOTH)) {
                    if ($i == 1) {
                        foreach ($headings as $key => $value) {
                            $tblDisplay .= "<th align = 'center'>" . $value . "</th>";
                        }
                        $tblDisplay .= "</tr>";
                    }
                    $tblDisplay .= "<tr><td align='center'>$i</td>";
                    $maxval = ($k == 1 ? (count($headings) - 2) : (count($headings) - 3)); //(count($headings)-2)
                    for ($j = $k; $j <= $maxval; $j++) {
                        if ($arr[$j] == '' || $arr[$j] == '0')
                            $arr[$j] = '--';
                        if ($j == $hyperPos) {
                            $tblDisplay .= "<td><a title='Click to modify' href=$modFile";
                            //$k=$j+1;
                            $tblDisplay .= "$arr[0]>$arr[$j]</a></td>";
                        }
                        else
                            $tblDisplay .= "<td align='$css[$j]'>$arr[$j]</td>";
                    }
                    if ($delPos != '') {
                        if (in_array($arr[0], $arry))
                            $disabld = 'disabled';
                        else
                            $disabld = '';
                        $tblDisplay .= "<td align='center'><input type='checkbox' name='chkDel[]' value='$arr[0]' $disabld></td>";
                    }
                    $tblDisplay .= "</tr>";
                    $i++;
                }
                $tblDisplay .= "</table>";
            }
            else {
                $tblDisplay.="<center><h3>No data exists</h3></center>";
            }
        }
        return $tblDisplay;
    }

    public static function find_where($where = false, $andor = 'AND') {
        $table = get_called_class();
        // Start the query string
            $q_str = "SELECT * FROM " . $table ;

        // build where clause 
        if (is_array($where) && count($where) > 0) {
            foreach ($where as $key => $value) {
                $w_str .= '`' . $this->clean($key) . "` = '" . $this->clean($value) . "' " . $andor . " ";
            }
            $w_str = rtrim($w_str, $andor . ' '); // Trim the last AND/OR off
            $q_str .= " WHERE " . $w_str;
        } elseif (is_string($where) && strlen($where) > 0) {
            $q_str .= " WHERE " . $where;
        }
        // echo $q_str;
        return self::find_by_sql($q_str);  //return all user data
    }

    public static function find_by_id($id) {

        $table = get_called_class();
        return self::find_by_sql("SELECT * FROM {$table} WHERE id='$id'  ");
    }

    public static function find_all($option='') {
        $table = get_called_class();
        return self::find_by_sql("SELECT * FROM `{$table}` ORDER BY id DESC ");
    }

    public static function find_by_sql($sql = "") {
        $db = new db();
        $db->query($sql);
        $object_array = array();
        while ($row = $db->fetchArray()) {
            // fetch_array=mysql_fetch_array
            $object_array[] = self::instantiate($row);
        }
        return $object_array;
    }

    private static function instantiate($record) {
        $object_class = get_called_class();
        $object = new $object_class;
        foreach ($record as $attribute => $value) {
            if ($object->has_attribute($attribute)) {
                $object->$attribute = $value;
            }
        }
        return $object;
    }

    private function has_attribute($attribute) {
        return array_key_exists($attribute, $this->attributes());
    }

    protected function attributes() {
        // return an array of attribute names and their values
        $attributes = array();
        $db_fields = $this->fields();
        foreach ($db_fields as $field) {
            if (property_exists($this, $field)) {
                $attributes[$field] = $this->$field;
            }
        }
        return $attributes;
    }

    public function save() {

        $data = $db_fields = $this->fields();
        $insert = $this->insert($this->table, $data);
        return $insert;
    }

}

$db = new db();
?>

