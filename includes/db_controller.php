<?php
class DBController
{
  private $host = 'localhost';
  private $user = 'root';
  private $password = 'root';
  private $database = 'ecommerce';
  private $connection;

  function __construct()
  {
    $this->connection = $this->connectDB();
  }

  function connectDB()
  {
    $connection = mysqli_connect($this->host, $this->user, $this->password, $this->database);
    return $connection;
  }

  function run_query($query)
  {
    $result = mysqli_query($this->connection, $query);

    while ($row = mysqli_fetch_array($result)) {
      $result_set[] = $row;
    }

    if (!empty($result_set)) {
      return $result_set;
    }
  }

  function num_rows($query)
  {
    $result = mysqli_query($this->connection, $query);
    $row_count = mysqli_num_rows($result);

    return $row_count;
  }
}
?>
