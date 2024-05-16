<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce | about</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .about_us {
            padding: 100px;

        }

        .about_us h2 {
            color: orange;
            font-size: 35px;
            text-align: center;
            padding: 10px;
            font-family: cosmic, sans-serif;
            text-transform: uppercase;
        }

        .about_us p {
            padding: 10px;
            font-size: 12px;
            font-family: cosmic, sans-serif;
            text-align: center;
            line-height: 25px;
        }

        @media screen and (max-width : 500px) {
            .about_us p {
                padding: 1px;
                font-size: 12px;
                font-family: cosmic, sans-serif;
                text-align: center;
                line-height: 20px;
            }

            .about_us {
                padding: 1px;

            }
        }
    </style>
</head>

<body>

    <div id="header">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- LOGO -->
                <div class=" col-md-offset-4 col-md-4">
                    <?php
                    include "config.php";

                    $sql = "SELECT * FROM settings";

                    $result = mysqli_query($conn, $sql) or die("Query Failed.");
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            if ($row['logo'] == "") {
                                echo '<a href="index.php"><h1>' . $row['websitename'] . '</h1></a>';
                            } else {
                                echo '<a href="index.php" id="logo"><img src="admin/images/' . $row['logo'] . '"></a>';
                            }
                        }
                    }
                    ?>
                </div>
                <!-- /LOGO -->
            </div>
        </div>
    </div>
    <!-- /HEADER -->
    <!-- Menu Bar -->
    <div id="menu-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php
                    include "config.php";

                    if (isset($_GET['cid'])) {
                        $cat_id = $_GET['cid'];
                    }

                    $sql = "SELECT * FROM category WHERE post > 0";
                    $result = mysqli_query($conn, $sql) or die("Query Failed. : Category");
                    if (mysqli_num_rows($result) > 0) {
                        $active = "";
                    ?>
                        <ul class='menu'>
                            <li><a href='<?php $host = "https://udaynews.000webhostapp.com/";
                  echo $host; ?>'>Home</a></li>
                            <?php while ($row = mysqli_fetch_assoc($result)) {
                                if (isset($_GET['cid'])) {
                                    if ($row['category_id'] == $cat_id) {
                                        $active = "active";
                                    } else {
                                        $active = "";
                                    }
                                }
                                echo "<li><a class='{$active}' href='category.php?cid={$row['category_id']}'>{$row['category_name']}</a></li>";
                            } ?>
                        </ul>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <!-- /Menu Bar -->

    <div class="about_us">

        <h2>About us</h2>

        <p> Welcome to udaynews, your number one source for all information. We're dedicated to providing you the very best of Information, with an emphasis on content, images and about.
        </p>

        <p>Founded in 2022 by Utkarsh Shukla, udaynews has come a long way from its beginnings in Lucknow. When Utkarsh Shukla first started out, his passion for important information drove them to start their own business.
        </p>

        <p>We hope you enjoy our products as much as we enjoy offering them to you. If you have any questions or comments, please don't hesitate to contact us.
        </p>

        <p>Sincerely,
        </p>
        <p>Utkarsh Shukla
        </p>
    </div>


    <?php include 'footer.php' ?>