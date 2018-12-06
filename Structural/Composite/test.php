<?php
/**
 * Created by PhpStorm.
 * User: conghoan
 * Date: 12/6/18
 * Time: 07:30
 */
include_once 'Developer.php';
include_once 'Designer.php';
include_once 'Organization.php';

// Prepare the employees
$john = new \Structural\Composite\Developer('John Doe', 12000);
$jane = new \Structural\Composite\Designer('Jane Doe', 15000);

// Add them to organization
$organization = new \Structural\Composite\Organization();
$organization->addEmployee($john);
$organization->addEmployee($jane);

echo "Net salaries: " . $organization->getNetSalaries(); // Net Salaries: 27000