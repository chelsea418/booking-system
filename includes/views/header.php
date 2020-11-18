<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img id="imageView" src="assets/img/logo.png" alt="" /></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ml-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul id="menu-list" class="navbar-nav text-uppercase ml-auto">
                <li id="loginHeaderBtn" style="cursor:pointer;" data-toggle="modal" onclick='$("#loginDiv").fadeIn(); $("#signupDiv").hide();' href="#loginModal" class="nav-item"><a class="nav-link js-scroll-trigger">Login</a></li>
                <li style="cursor:pointer; display: none" onclick="logout()" id="logoutHeaderBtn" class="nav-item"><a class="nav-link js-scroll-trigger">Logout</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">Team</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#places">Places</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Masthead-->
<header class="masthead">
    <div class="container">
        <div class="masthead-subheading">Welcome To Our Cagayan de Oro!</div>
        <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
       
    </div>
</header>

<?php include "login.php"; ?>