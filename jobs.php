<!DOCTYPE html>
<!--
Skeleton structure and overall layout of Web-site.
-->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Find a Career</title>
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
                <div style="padding-top: 10px;" class="col-md-9 col-md-offset-2 col-sm-9 col-sm-offset-2">
                    <form action="jobs.php" method="post" class="navbar-form navbar-left">
                        <div class="form-group">
                            <input type="text" name="job" placeholder="Job Title" class="form-control">
                            <input type="text" name="location" placeholder="Location" class="form-control">
                            <input class='btn btn-default' type="submit">
                        </div>
                    </form>
                </div>
                <div id="job-results" class="col-md-12 col-sm-12">
                    <?php
                        function get_jobs($search="computer science", $location="pomona") {
                            // initialize job search
                            $publisher = "3980815013669700";
                            $jobs_url = "http://api.indeed.com/ads/apisearch?publisher=$publisher&q=$search&l=$location&v=2";

                            $xml = simplexml_load_file($jobs_url);
                            foreach ($xml->results->result as $result) {
                                echo "<div class='panel panel-default'>
                                          <div class='panel-body'>
                                          <div class='col-md-9 col-sm-9'>
                                            <h4>$result->jobtitle</h4>
                                            $result->company
                                            $result->formattedLocation
                                          </div>
                                          <div style='padding-top: 10px;' class='col-md-3 col-sm-3'>
                                            <a class='btn btn-default' href='$result->url'>View Job</a>
                                          </div>
                                          </div>
                                      </div>";
                            }
                        }
                        if (!empty($_POST["job"]) && !empty($_POST["location"])) {
                            get_jobs($_POST["job"], $_POST["location"]);
                        } elseif (!empty($_POST["job"])) {
                            get_jobs($_POST["job"]);
                        } elseif (!empty($_POST["location"])) {
                            get_jobs("computer science",$_POST["location"]);
                        } else {
                            get_jobs();
                        }
                    ?>
                </div>
            </div>

            <footer>
                <div class="row">
                    <hr style="size: 5px;">
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <p>All rights reserved &copy;</p>
                    </div>
                    <div style="text-align: right; font-size: 10px; padding-top: 0px;" class="col-md-6 col-sm-6">
                        <b>Resources</b>
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

