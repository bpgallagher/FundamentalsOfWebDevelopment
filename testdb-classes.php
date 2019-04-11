
<?php

include 'includes/book-config.inc.php';

?>

<html>
<body>

<?php

try {

    
    
    $db = new AuthorDB($pdo);
    $result = $db->findById(2);
    echo '<h3>Sample Author (id=2)</h3>';    
    echo $result['FirstName'] . ' ' . $result['LastName'];    
    
    $result = $db->getAll();
    echo '<h3>All Authors</h3>';    
    while ($row = $result->fetch()) {   
      echo $row['FirstName'] . ' ' . $row['LastName'];      
    }
    

  
    $db = new EmployeeDB($pdo);
    $result = $db->findById(2);
    echo '<h3>Sample Employee (id=2)</h3>';    
    echo $result['FirstName'] . ' ' . $result['LastName'];    
    
    $result = $db->getAll();
    echo '<h3>All Employees</h3>';    
    while ($row = $result->fetch()) {   
      echo $row['FirstName'] . ' ' . $row['LastName'];      
    }
    
    
    $db = new EmployeeToDoDB($pdo);
    $result = $db->findById(2);
    echo '<h3>Sample EmployeeToDo (id=2)</h3>';    
    echo $result['Status'] . ' ' . $result['DateBy'];        
    
    $result = $db->findByEmployee(30);
    echo '<h3>EmployeeToDo for Employee (30)</h3>';    
    while ($row = $result->fetch()) {   
      echo $row['FirstName'] . ' ' . $row['LastName'];      
    }
    
    
    
    $db = new UniversityDB($pdo);
    $result = $db->findById(100654);
    echo '<h3>Sample University (id=100654)</h3>';    
    echo $result['UniversityID'] . ' ' . $result['Name'];    
    
    $result = $db->getAll();
    echo '<h3>All Universities</h3>';    
    while ($row = $result->fetch()) {   
      echo $row['Name'] . ' ' . $row['City'];      
    }
    

}
catch (PDOException $e) {
   die( $e->getMessage() );
}

?>
</body>
</html>