<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

    <div class="container">



        <div class="row" style="margin-top: 4%">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
                <?php
                include('simple_html_dom.php');
                include('includes/header.php');
                $html = file_get_html('https://www.indiatoday.in/');
                echo $html->find('title', 0)->innertext;
                echo $html->find('ul.itg-listing', 0)->innertext;


                ?>
            </div>
        </div>
    </div>
</head>hi

</html>