<?php

include "top.php";

print '<table>';

    $query = 'SELECT DISTINCT fldCourseName, fldGrade FROM tblEnrolls join tblCourses on fnkCourseId = pmkCourseId WHERE fldGrade=100 GROUP BY fnkCourseId ORDER BY fldCourseName';
    $info2 = $thisDatabaseReader->select($query, "", 1, 1, 0, 0, false, false);
    $columns = 2;

    
   $fields = array_keys($info2[0]);
   $labels = array_filter($fields, "is_string");
   foreach ($labels as $label) {
       $camelCase = preg_split('/(?=[A-Z])/', substr($label, 3));
       print '<td>';
       foreach ($camelCase as $one) {
           print $one . " ";   
       }
       print '</td>';
     }

    $highlight = 0; // used to highlight alternate rows
    foreach ($info2 as $rec) {
        $highlight++;
        if ($highlight % 2 != 0) {
            $style = ' odd ';
        } else {
            $style = ' even ';
        }
        print '<tr class="' . $style . '">';
        for ($i = 0; $i < $columns; $i++) {
            print '<td>' . $rec[$i] . '</td>';
        }
        print '</tr>';
    }

    // all done
    print '</table>';
    print count($info2) . " total records";

include "footer.php";
?>