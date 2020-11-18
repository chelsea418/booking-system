<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tsada CDO</title>
        <link rel="icon" type="image/x-icon" href="assets/img/logo.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <?php include "includes/views/header.php" ?>

        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/1.jpg" alt="" />
                            <h4>Chelsea Therese Pareja</h4>
                            <p class="text-muted">Designer | Developer</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/chelseatherese.pareja"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/2.jpg" alt="" />
                            <h4>Cristine Mae Aratan</h4>
                            <p class="text-muted">Planning</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://m.facebook.com/cristinemae.aratan"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/3.jpg" alt="" />
                            <h4>Melle Jane Manansala</h4>
                            <p class="text-muted">Analysis | Mentoring</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/ohemjeeee"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">The team aims to create and design a system/program The team is always open to learn, collaborate and innovate even as a student.</p></div>
                </div>
            </div>
        </section>

        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="places">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Places</h2>
                    <h3 class="section-subheading text-muted">
                        Category:   
                        <select id="categorySelector" style="width: 250px; margin: auto;" class="form-control">
                            <option value="all">All</option>
                            <option value="Sights and Landmark">Sights and Landmark</option>
                            <option value="Shopping Malls<">Shopping Malls</option>
                            <option value="Water & Amusement Parks">Water & Amusement Parks</option>
                            <option value="Nature and Parks">Nature and Parks</option>
                        </select>
                    </h3>
                  
                </div>
                <div id="placeRes" class="row fade-in">
                    
                </div>
            </div>
        </section>

        <?php include "includes/views/footer.php" ?>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <!-- Core JS-->
        <script src="js/scripts.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
