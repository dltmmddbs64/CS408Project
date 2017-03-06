<!DOCTYPE html>
<!--
Skeleton structure and overall layout of Web-site.
-->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title ?></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div id = "wrapper" class="container">
            <div id = "banner">
            </div>

            <nav id = "navigation">
                <ul id = "nav" class="nav nav-tabs nav-justified">
                    <li><a href="index.php" style="color: black">Home</a></li>
                    <li><a href="FacultyStaff.php" style="color: black">Faculty&amp;Staff</a></li>
                    <li><a href="Courses.php" style="color: black">Courses</a></li>
                    <li><a href="Clubs.php" style="color: black">Clubs</a></li>
                    <li><a href="Management.php" style="color: black">Management</a></li>
                    <li><a href="jobs.php" style="color: black">Jobs</a></li>
                </ul>
            </nav>

            <div class="row">
                <div style="padding-top: 10px;" class="col-md-12 col-sm-12">
                    <?php
                     echo $content;
                     ?>
                </div>
            </div>

            <footer>
                <div class="row">
                    <hr>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <p>All rights reserved &copy;</p>
                    </div>
                    <div style="text-align: right; font-size: 10px; padding-top: 0px;" class="col-md-6 col-sm-6">
                        <b style="font-size: 15px;">Resources</b> <br>
                        <a href="https://www.cpp.edu/~sci/computer-science/undergraduate-program/student-resources.shtml"> Student Resources</a> <br>
                        <a href="https://www.cpp.edu/~sci/computer-science/undergraduate-program/employment-opportunities.shtml"> Employment Opportunities</a> <br>
                        <a href="https://www.cpp.edu/~sci/computer-science/undergraduate-program/scholarship-opportunities.shtml"> Scholarship Opportunities</a> <br>
                        <a href="https://www.cpp.edu/~sci/computer-science/undergraduate-program/research-opportunities.shtml"> Research Opportunities</a> <br>
                        <a href="https://www.cpp.edu/~sci/computer-science/advising-and-procedures/index.shtml"> Advising &amp; Procedures</a> <br>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>
