<head>
    <style>
      /* Add your own css, css comment out to see general effect */
      
      /*
      ul li ul {  display: none; }
      ul li:hover > ul { display: block; }
      */
    </style>
</head>
<?php

/*
 MySQL Database 
 =======================================================
 
CREATE TABLE IF NOT EXISTS `categories` (
`ID` int(11) NOT NULL,
  `parentID` int(11) NOT NULL,
  `categoryName` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`ID`, `parentID`, `categoryName`) VALUES
(1, 0, '1st Root Category '),
(2, 0, '2nd Root Category'),
(3, 0, '3rd Root Category'),
(4, 1, '1st Sub Category of 1st Root Cat'),
(5, 1, '2nd Sub Category of 1st Cat'),
(6, 2, '1st Sub Category of 2nd Cat'),
(7, 2, '2nd Sub Category of 2nd Cat'),
(8, 4, 'Sub Sub Category'),
(9, 4, 'Sub Sub Category');

*/


$pdo = new PDO("mysql:host=localhost;dbname=test", "root", "");
$stmt = $pdo->query("select * from categories");
$stmt->execute();

//print_r($stmt->fetchObject());
$categories = [];

while($row = $stmt->fetchObject()) {
   $categories[$row->parentID][] = $row;  
}

function drawCategoryTree($parentID = 0, $level = 0){
    global $categories;
    
    if(isset($categories[$parentID]) && count($categories[$parentID])) {
    
    foreach($categories[$parentID] as $cat) {
        echo "<li>".$cat->categoryName;
        echo "<ul>";
        drawCategoryTree($cat->ID, $level+1);
        echo "</ul></li>";
    }
    }
}

echo "<ul>";
drawCategoryTree(0, 0);
echo "</ul>";










