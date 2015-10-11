<?php

include "top.php";

print '<table>';

    $query = "SELECT DISTINCT fldCourseName, fldDays, fldStart, fldStop from tblCourses join tblSections on fnkCourseId = pmkCourseId where fnkTeacherNetId = 'jlhorton' order by fldStart";
    $info2 = $thisDatabaseReader->select($query, "", 1, 1, 2, 0, false, false);
    $columns = 4;

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


include "footer.php";
?>
