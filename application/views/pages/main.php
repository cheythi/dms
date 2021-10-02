<style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:400,100,900);

    html,
    body {
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        height: 100%;
        width: 100%; 
        background: #FFF;
        font-family: 'Roboto', sans-serif;
        font-weight: 400;
        background-image: url("assets/images/seylan_tower.jpg");
        background-size: cover;
    }
    
    .wrapper {
        display: table;
        height: 100%;
        width: 100%;
    }

    .container-fostrap {
        display: table-cell;
        padding: 1em;
        text-align: center;
        vertical-align: middle;
    }
    .fostrap-logo {
        width: 15rem;
    }
    h1.heading {
        color: #fff;
        font-size: 1.15em;
        font-weight: 900;
        margin: 0 0 0.5em;
        color: #505050;
    }
    @media (min-width: 450px) {
    h1.heading {
        font-size: 3.55em;
    }
    }
    @media (min-width: 760px) {
    h1.heading {
        font-size: 3.05em;
    }
    }
    @media (min-width: 900px) {
    h1.heading {
        font-size: 3.25em;
        margin: 0 0 0.3em;
        color: #ea222b;
    }
    } 
    .card {
    display: block; 
        margin-bottom: 20px;
        line-height: 1.42857143;
        background-color: #fff;
        border-radius: 2px;
        box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12); 
        transition: box-shadow .25s; 
    }
    .card:hover {
        box-shadow: 0 8px 17px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    }
    .img-card {
        width: 100%;
        height:200px;
        border-top-left-radius:2px;
        border-top-right-radius:2px;
        display:block;
        overflow: hidden;
    }
    .img-card img{
        width: 100%;
        height: 200px;
        object-fit:cover; 
        transition: all .25s ease;
    } 
    .card-content {
        padding:15px;
        text-align:left;
    }
    .card-title {
        margin-top:0px;
        font-weight: 700;
        font-size: 1.65em;
    }
    .card-title a {
        color: #000;
        text-decoration: none !important;
    }
    .card-read-more {
        border-top: 1px solid #D4D4D4;
    }
    .card-read-more a {
        text-decoration: none !important;
        padding:10px;
        font-weight:600;
        text-transform: uppercase
    }
</style>

<!--  -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">SEYLAN</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
        <a class="nav-link" href="#">Personal<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Bussiness <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Corporate<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          About Us
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Contac Us</a>
          <a class="dropdown-item" href="#">Bussiness</a>
          <a class="dropdown-item" href="#">Corporate</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> -->
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<!--  -->
<section class="wrapper">
    <div class="container-fostrap">
        <div>
            <img src="assets/images/seylan_logo.png" class="fostrap-logo"/>
            <h1 class="heading" style>
                Seylan Bank DMS
            </h1>
        </div>
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-3">
                        <div class="card">
                            <!-- <a class="img-card" href="http://www.fostrap.com/2016/03/5-button-hover-animation-effects-css3.html"> -->
                            <!-- <img src="https://4.bp.blogspot.com/-TDIJ17DfCco/Vtneyc-0t4I/AAAAAAAABmk/aa4AjmCvRck/s1600/cover.jpg" /> -->
                          <!-- </a> -->
                          <img src="assets/images/home.jpg"  class="card-img-top" alt="Card image cap" style="height: 12rem;">
                            <div class="card-content">
                                <h4 class="card-title text-center">
                                    <a href="http://www.fostrap.com/2016/03/5-button-hover-animation-effects-css3.html">Home Loans Division
                                  </a>
                                </h4>
                                <br><br><br>
                            </div>
                            <div class="card-read-more">
                                <a href="<?php echo base_url();?>MainController/login1" class="btn btn-link btn-block">
                                    Login
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="card">
                            <!-- <a class="img-card" href="http://www.fostrap.com/2016/03/5-button-hover-animation-effects-css3.html">
                            <img src="https://4.bp.blogspot.com/-TDIJ17DfCco/Vtneyc-0t4I/AAAAAAAABmk/aa4AjmCvRck/s1600/cover.jpg" />
                          </a> -->
                          <img src="assets/images/s.jfif"  class="card-img-top" alt="Card image cap" style="height: 12rem;">

                            <div class="card-content text-center">
                                <h4 class="card-title">
                                    <a href="http://www.fostrap.com/2016/03/5-button-hover-animation-effects-css3.html">Savings Account Division
                                  </a>
                                </h4>
                                <br><br><br>
                            </div>
                            <div class="card-read-more">
                                <a href="<?php echo base_url();?>MainController/login2" class="btn btn-link btn-block">
                                    Login
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="card">
                            <!-- <a class="img-card" href="http://www.fostrap.com/2016/03/5-button-hover-animation-effects-css3.html">
                            <img src="https://4.bp.blogspot.com/-TDIJ17DfCco/Vtneyc-0t4I/AAAAAAAABmk/aa4AjmCvRck/s1600/cover.jpg" />
                          </a> -->
                          <img src="assets/images/pp.jpg"  class="card-img-top" alt="Card image cap" style="height: 12rem;">
                            <div class="card-content text-center">
                                <h4 class="card-title">
                                    <a href="http://www.fostrap.com/2016/03/5-button-hover-animation-effects-css3.html">Personal Loans Division
                                  </a>
                                </h4>
                                <br><br><br>
                            </div>
                            <div class="card-read-more">
                                <a href="<?php echo base_url();?>MainController/login3" class="btn btn-link btn-block">
                                    Login
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="card">
                            <!-- <a class="img-card" href="http://www.fostrap.com/2016/03/5-button-hover-animation-effects-css3.html">
                            <img src="https://4.bp.blogspot.com/-TDIJ17DfCco/Vtneyc-0t4I/AAAAAAAABmk/aa4AjmCvRck/s1600/cover.jpg" />
                          </a> -->
                          <img src="assets/images/f.jfif"  class="card-img-top" alt="Card image cap" style="height: 12rem;">
                            <div class="card-content text-center">
                                <h4 class="card-title">
                                    <a href="http://www.fostrap.com/2016/03/5-button-hover-animation-effects-css3.html">Fixed Deposits Division
                                  </a>
                                </h4>
                                <br><br><br>
                            </div>
                            <div class="card-read-more">
                                <a href="<?php echo base_url();?>MainController/login4" class="btn btn-link btn-block">
                                    Login
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="card">
                            <!-- <a class="img-card" href="http://www.fostrap.com/2016/03/5-button-hover-animation-effects-css3.html">
                            <img src="https://4.bp.blogspot.com/-TDIJ17DfCco/Vtneyc-0t4I/AAAAAAAABmk/aa4AjmCvRck/s1600/cover.jpg"  /> -->
                          </a>
                            <div class="card-content text-center">
                                <h4 class="card-title">
                                    <a href="">Online Banking Division
                                  </a>
                                </h4>
                                <br><br><br>
                            </div>
                            <div class="card-read-more">
                                <a href="<?php echo base_url();?>MainController/login5" class="btn btn-link btn-block">
                                    Login
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="card">
                            <!-- <a class="img-card" href="http://www.fostrap.com/2016/03/5-button-hover-animation-effects-css3.html">
                            <img src="https://4.bp.blogspot.com/-TDIJ17DfCco/Vtneyc-0t4I/AAAAAAAABmk/aa4AjmCvRck/s1600/cover.jpg" /> -->
                          </a>
                            <div class="card-content text-center">
                                <h4 class="card-title">
                                    <a href="">Customer Support Section
                                  </a>
                                </h4>
                                <br><br><br>
                            </div>
                            <div class="card-read-more">
                                <a href="<?php echo base_url();?>MainController/login6" class="btn btn-link btn-block">
                                    Login
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="card">
                            <!-- <a class="img-card" href="http://www.fostrap.com/2016/03/5-button-hover-animation-effects-css3.html">
                            <img src="https://4.bp.blogspot.com/-TDIJ17DfCco/Vtneyc-0t4I/AAAAAAAABmk/aa4AjmCvRck/s1600/cover.jpg" /> -->
                          </a>
                            <div class="card-content text-center">
                                <h4 class="card-title">
                                    <a href="">Human Resource Department
                                  </a>
                                </h4>
                                <br><br><br>
                            </div>
                            <div class="card-read-more">
                                <a href="<?php echo base_url();?>MainController/login7" class="btn btn-link btn-block">
                                    Login
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="card">
                            <!-- <a class="img-card" href="http://www.fostrap.com/2016/03/5-button-hover-animation-effects-css3.html">
                            <img src="https://4.bp.blogspot.com/-TDIJ17DfCco/Vtneyc-0t4I/AAAAAAAABmk/aa4AjmCvRck/s1600/cover.jpg" /> -->
                          </a>
                            <div class="card-content text-center">
                                <h4 class="card-title">
                                    <a href="">Employee Recruitment
                                  </a>
                                </h4>
                                <br><br><br>
                            </div>
                            <div class="card-read-more">
                                <a href="<?php echo base_url();?>MainController/login8" class="btn btn-link btn-block">
                                    Login
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
