<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!html>
<html id="join">
    <title>Jooiiiinnn</title>
        <meta charset="utf-8">
        <meta name="author" content="Jack Steffens">
        <meta name="description" content="Index">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/sin/trunk/html5.js"></script>
        <![endif]-->

        <link rel="stylesheet" href="css/base.css" type="text/css" media="screen">
    <body>
        <h1>
            Join
        </h1>
        <ul>
            <li><a href="q01.php" >q01</a> - SQL: SELECT DISTINCT fldCourseName, fldGrade FROM tblEnrolls join tblCourses on fnkCourseId = pmkCourseId WHERE fldGrade=100 GROUP BY fnkCourseId</li>
            <li><a href="q02.php" >q02</a> - SQL: SELECT DISTINCT fldDays, fldStart, fldStop from tblSections JOIN tblTeachers on fnkTeacherNetId = pmkNetId WHERE fldLastName='Snapp' AND fldFirstName='Robert Raymond' ORDER BY fldStart</li>
            <li><a href="q03.php" >q03</a> - SQL: SELECT DISTINCT fldCourseName, fldDays, fldStart, fldStop from tblCourses join tblSections on fnkCourseId = pmkCourseId where fnkTeacherNetId = 'jlhorton' order by fldStart</li>
            <li><a href="q04.php" >q04</a> - SQL: SELECT fnkSectionId, fldFirstName, fldLastName FROM tblEnrolls JOIN tblStudents on pmkStudentID = fnkStudentId WHERE fnkCourseId=392 ORDER BY fnkCourseId</li>
            <li><a href="q05.php" >q05</a> - SQL: </li>
            <li><a href="q06.php" >q06</a> - SQL: SELECT fldFirstName, fldPhone, fldSalary from tblTeachers WHERE fldSalary < (SELECT AVG(fldSalary) from tblTeachers)</li>
            <li><a href="q07.php" >q07</a></li>
            <li><a href="q08.php" >q08</a></li>
        </ul>
    </body>
</html>
