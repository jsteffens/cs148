<?php

//##############################################################################
//
// This page lists your tables and fields within your database. if you click on
// a database name it will show you all the records for that table. 
// 
// 
// This file is only for class purposes and should never be publicly live
//##############################################################################
include "top.php";

print '<table>';

    $query = 'SELECT * FROM tblStudents ORDER BY fldLastName ASC, fldFirstName LIMIT 10 OFFSET 1000';
    $info2 = $thisDatabaseReader->select($query, "", 0, 1, 0, 0, false, false);
    $columns = 8;

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