<?php


$categories = ['pid' => array(10,9,8), 'name' => 'Test',];

while($row = mysql_fetch_assoc($result)) {
    $categories[$row['pid']][] = $row['name'];
}

function getCategoryTree($pid , $level) {
    global $categories;
    if(count($categories[$pid]) > 0) {
        foreach($categories[$pid] as $category) {
            return getCategoryTree($category['id'], $level++);
        }
    }
    
    return "";
}

// Incomplete Function 