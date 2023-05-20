<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MYSTERY FOUNDATION</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/favicon_io/android-chrome-512x512.png" sizes="512x512" />
    <link rel="icon" type="image/png" href="img/favicon_io/apple-touch-icon.png" sizes="180x180" />
    <link rel="icon" type="image/png" href="img/favicon_io/android-chrome-192x192.png" sizes="192x192" />
    <link rel="icon" type="image/png" href="img/favicon_io/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="img/favicon_io/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="img/favicon_io/favicon.ico" />
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Top Bar Start -->
    <!-- <div class="top-bar d-none d-md-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="top-bar-left">
                            <div class="text">
                                <i class="fa fa-phone-alt"></i>
                                <p>+123 456 7890</p>
                            </div>
                            <div class="text">
                                <i class="fa fa-envelope"></i>
                                <p>info@example.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="top-bar-right">
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    <!-- Top Bar End -->
        <?php  
        echo $_SERVER['REQUEST_URI'];
           $headers = apache_request_headers();
        ?>
    <!-- Nav Bar Start -->
    <div class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            <a href="index.php" class="navbar-brand"><img src="img/logo.png" alt="" srcset=""></a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="about.php" class="nav-item nav-link">About Us</a>
                    <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">About</a>
                            <div class="dropdown-menu">
                                <a href="about.php" class="dropdown-item">About Us</a>
                                <a href="service.php" class="dropdown-item">Overview</a>
                                <a href="team.php" class="dropdown-item">Vision & Mission</a>
                                <a href="donate.php" class="dropdown-item">Milestones & Awards</a>
                                <a href="volunteer.php" class="dropdown-item">Our Team</a>
                                <a href="volunteer.php" class="dropdown-item">Legal Status</a>
                            </div>
                        </div> -->
                    <a href="our-work.php" class="nav-item nav-link">Our Works</a>
                    <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Our Work</a>
                            <div class="dropdown-menu">
                                <a href="causes.php" class="dropdown-item">Education</a>
                                <a href="service.php" class="dropdown-item">Health</a>
                                <a href="team.php" class="dropdown-item">Youth Empowerment</a>
                                <a href="donate.php" class="dropdown-item">Mid day Meal</a>
                                <a href="volunteer.php" class="dropdown-item">Women Empowerment</a>
                                <a href="volunteer.php" class="dropdown-item">Talent Search Exam</a>
                            </div>
                        </div> -->
                    <a href="donation.php" class="nav-item nav-link">Donation</a>
                    <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Donation</a>
                            <div class="dropdown-menu">
                                <a href="event.php" class="dropdown-item">Books</a>
                                <a href="service.php" class="dropdown-item">Ration</a>
                                <a href="team.php" class="dropdown-item">Food</a>
                                <a href="donate.php" class="dropdown-item">Mystery Children Academy</a>
                                <a href="volunteer.php" class="dropdown-item">Indian Bank Details</a>
                                <a href="volunteer.php" class="dropdown-item">Foreign Bank Account</a>
                                <a href="volunteer.php" class="dropdown-item">Donate via Paytm,Gpay,PhonePay</a>
                                <a href="volunteer.php" class="dropdown-item">Donation Policy</a>
                                <a href="volunteer.php" class="dropdown-item">Tax Exemption</a>
                            </div>
                        </div> -->
                    <a href="campaigns.php" class="nav-item nav-link">Campaign</a>
                    <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Campaigns</a>
                            <div class="dropdown-menu">
                                <a href="blog.htm" class="dropdown-item">Tayyari Kal Ki</a>
                                <a href="service.php" class="dropdown-item">Shiksha Na Ruke</a>
                                <a href="team.php" class="dropdown-item">Health Cannot Wait</a>
                                <a href="donate.php" class="dropdown-item">She Can Fly</a>
                                <a href="volunteer.php" class="dropdown-item">Smart Villagers</a>
                                <a href="volunteer.php" class="dropdown-item">Digital Training & Resource Center</a>
                                <a href="volunteer.php" class="dropdown-item">Digital Training Center</a>
                            </div>
                        </div> -->
                    <a href="get-involved.php" class="nav-item nav-link">Get involved</a>
                    <a href="resource.php" class="nav-item nav-link">Resource</a>
                    <a href="about.php" class="nav-item nav-link">Media</a>
                    <a href="about.php" class="nav-item nav-link">Partner with us</a>
                    <a href="donate.php" class="nav-item nav-link">Registration form</a>
                    <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Get involved</a>
                            <div class="dropdown-menu">
                                <a href="single.php" class="dropdown-item">Individual Support</a>
                                <a href="service.php" class="dropdown-item">Corporate Partnerships</a>
                                <a href="team.php" class="dropdown-item">School Partnerships</a>
                                <a href="donate.php" class="dropdown-item">Volunteers & Internships</a>
                                <a href="volunteer.php" class="dropdown-item">Work With Us</a>
                            </div>
                        </div> -->
                    <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Resource</a>
                            <div class="dropdown-menu">
                                <a href="single.php" class="dropdown-item">Annual Reports</a>
                                <a href="service.php" class="dropdown-item">FCRA Reports</a>
                            </div>
                        </div> -->
                    <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Media</a>
                            <div class="dropdown-menu">
                                <a href="single.php" class="dropdown-item">E-Magazine</a>
                                <a href="service.php" class="dropdown-item">Images Gallery</a>
                                <a href="single.php" class="dropdown-item">Events</a>
                                <a href="service.php" class="dropdown-item">E.T.S.E</a>
                            </div>
                        </div> -->
                    <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Partner With Us</a>
                            <div class="dropdown-menu">
                                <a href="single.php" class="dropdown-item">Open a Branch</a>
                                <a href="service.php" class="dropdown-item">Volunteering</a>
                                <a href="single.php" class="dropdown-item">Install a Donation Box</a>
                                <a href="service.php" class="dropdown-item">E.T.S.E</a>
                                <a href="service.php" class="dropdown-item">Free Education</a>
                                <a href="service.php" class="dropdown-item">Register for Divyang Vivah</a>
                            </div>
                        </div> -->
                    <a href="contact.php" class="nav-item nav-link">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Nav Bar End -->