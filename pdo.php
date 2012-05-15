<?php

class Pdotest
{
  
public function insert_data()
{
    echo "in insert";
    $hostname = 'localhost';
    $username = 'root';
    $password = '123456';
    
    try {
    $dbh = new PDO("mysql:host=$hostname;dbname=animals", $username, $password);
    // echo a message saying we have connected
    echo 'Connected to database<br />';

    // INSERT data
    $count = $dbh->exec("INSERT INTO animal (animal_type, animal_name) VALUES ('kiwi', 'troy')");

    // echo the number of affected rows
if($count!=0){    
echo $count;
}else{
echo 0;
}

    // close the database connection
    $dbh = null;
    }
    catch(PDOException $e)
    {
    echo $e->getMessage();
    }
}


public function select_data()
{
    $hostname = 'localhost';
    $username = 'root';
    $password = '123456';
    try {
    $dbh = new PDO("mysql:host=$hostname;dbname=animals", $username, $password);
    // echo a message saying we have connected
    echo 'Connected to database<br />';

    // The SQL SELECT statement
    $sql = "SELECT * FROM animals";
    foreach ($dbh->query($sql) as $row)
        {
        print $row['animal_type'] .' - '. $row['animal_name'] . '<br />';
        }

    //close the database connection
    $dbh = null;
    }
    catch(PDOException $e)
    {
    echo $e->getMessage();
    }
}



public function update_data()
{
    $hostname = 'localhost';
    $username = 'root';
    $password = '123456';
    try {
    $dbh = new PDO("mysql:host=$hostname;dbname=animals", $username, $password);
    // echo a message saying we have connected
    echo 'Connected to database<br />';

    // INSERT data
    $count = $dbh->exec("UPDATE animals SET animal_name='bruce' WHERE animal_name='troy'");

    // echo the number of affected rows
    echo $count;

    // close the database connection
    $dbh = null;
    }
    catch(PDOException $e)
    {
    echo $e->getMessage();
    }
}


public function fetchassoc_data()
{

    $hostname = 'localhost';
    $username = 'root';
    $password = '123456';
    try {
    $dbh = new PDO("mysql:host=$hostname;dbname=animals", $username, $password);
    // echo a message saying we have connected
    echo 'Connected to database<br />';

    // The SQL SELECT statement
    $sql = "SELECT * FROM animals";

    // fetch into an PDOStatement object
    $stmt = $dbh->query($sql);

    // echo number of columns
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    // loop over the object directly
    foreach($result as $key=>$val)
    {
    echo $key.' - '.$val.'<br />';
    }

    // close the database connection
    $dbh = null;
    }
    catch(PDOException $e)
    {
    echo $e->getMessage();
    }
}


public function fetchnum_data()
{
    $hostname = 'localhost';
    $username = 'root';
    $password = '123456';

    try {
    $dbh = new PDO("mysql:host=$hostname;dbname=animals", $username, $password);
    //  echo a message saying we have connected
    echo 'Connected to database<br />';

    // The SQL SELECT statement
    $sql = "SELECT * FROM animals";

    // fetch into an PDOStatement object
    $stmt = $dbh->query($sql);

    // echo number of columns
    $result = $stmt->fetch(PDO::FETCH_NUM);

    // loop over the object directly
    foreach($result as $key=>$val)
    {
    echo $key.' - '.$val.'<br />';
    }

    // close the database connection
    $dbh = null;
    }
    catch(PDOException $e)
    {
    echo $e->getMessage();
    }
}
}



    echo "hello";

    $p=new Pdotest;
    $p->insert_data();
    $p->select_data();
    $p->update_data();
    $p->fetchassoc_data();
    $p->fetchnum_data();

    
       
?>
