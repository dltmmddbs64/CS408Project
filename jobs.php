<!DOCTYPE html>
<html>
<head>
    <title>Find a dream CS job</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body style="margin: 0 auto; text-align: center;">
    <form action="jobs.php" method="post">
        Job <br>
        <input type="text" name="job"> <br>
        Location <br>
        <input type="text" name="location"> <br>
        <input class='btn btn-default' type="submit">
    </form>
    <div id="job-results">
        <?php
            function get_jobs($search="computer science", $location="pomona") {
                // initialize job search
                $publisher = ""; // need publisher id
                $jobs_url = "http://api.indeed.com/ads/apisearch?publisher=$publisher&q=$search&l=$location&v=2";

                $xml = simplexml_load_file($jobs_url);
                foreach ($xml->results->result as $result) {
                    echo "<h4>$result->jobtitle</h4>
                          $result->company
                          $result->formattedLocation <br>
                          <a class='btn btn-default' href='$result->url'>View Job</a> <br>";
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
</body>
</html>