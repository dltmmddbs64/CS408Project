<!DOCTYPE html>
<!--
Skeleton structure and overall layout of Web-site.
-->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title ?></title>
        <link rel = "stylesheet" type="text/css" href="Styles/StyleSheet.css" />
    </head>
    <body>
        <div id = "wrapper">
            <div id = "banner">
            </div>
            
            <nav id = "navigation">
                <ul id = "nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="FacultyStaff.php">Faculty&Staff</a></li>
                    <li><a href="Courses.php">Courses</a></li>
                    <li><a href="Clubs.php">Clubs</a></li>
                    <li><a href="Management.php">Management</a></li>
                </ul>
            </nav>
            
            <div id = "content_area">
                <?php
                 echo $content;
                 ?>
            </div>
            
            <div id = "sidebar">
                <?php
                $resource = '<h3>Resources</h3>'
                    . '<a href="https://www.cpp.edu/~sci/computer-science/undergraduate-program/student-resources.shtml"> Student Resources</a><br/>'
                    . '<a href="https://www.cpp.edu/~sci/computer-science/undergraduate-program/employment-opportunities.shtml"> Employment Opportunities</a><br/>'
                    . '<a href="https://www.cpp.edu/~sci/computer-science/undergraduate-program/scholarship-opportunities.shtml"> Scholarship Opportunities</a><br/>'
                    . '<a href="https://www.cpp.edu/~sci/computer-science/undergraduate-program/research-opportunities.shtml"> Research Opportunities</a><br/>'
                    . '<a href="https://www.cpp.edu/~sci/computer-science/advising-and-procedures/index.shtml"> Advising & Procedures</a><br/>';
                echo $resource;
                ?>
            </div>
 
            <footer>
                <p>All rights reserved</p>
            </footer>
        </div>
    </body>
</html>
