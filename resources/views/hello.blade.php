<!doctype html>
<html>

<head>
    <title>Brand Name</title>
    <link rel="stylesheet" type="text/css" media="screen" href="styles.css" />
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css"
        media="screen,projection" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <!-- scripts -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <!-- icons -->
    <script src="https://kit.fontawesome.com/a5545a28d1.js" crossorigin="anonymous"></script>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <style>
    nav{
    background: rgb(255,95,109);
    background: linear-gradient(75deg, rgb(255, 86, 100) 0%, rgb(255, 191, 101) 100%);
    /*
    blue & purple
    background: rgb(0,150,255);
    background: linear-gradient(90deg, rgba(0,150,255,1) 0%, rgba(215,31,255,1) 100%);

    blue & green
    background: rgb(0,150,255);
    background: linear-gradient(90deg, rgba(0,150,255,1) 0%, rgba(139,237,33,1) 100%);*/
}
    
body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
    background-color: #f7f7f7;
}

main {
    flex: 1 0 auto;
}	  

a, p, h1, h2, h3, h4 {
    font-family: 'Work Sans', sans-serif;
    /*text-transform: capitalize;*/
    /*font-weight: 700!important;*/
    color: #000000;
}

.page-footer{
    position: fixed;
    bottom:0;
    width: 100%;
    background-color: #fff!important;
    border-top-style: solid!important;
    border-top-color: #f1f1f1!important;
}

.material-icons{
    color: black;
}

.tab.col.s3:hover, .material-icons:hover{
    color: #545454;
}

#frow {
  margin-top:-10px!important;
  
}

.card-title {  
    font-family: 'Work Sans', sans-serif;
    text-transform: capitalize; /*uppercase;*/
    font-weight: 700!important;
    font-size: 28px!important;
    border-radius: 20px;
    background-color: rgba(0, 0, 0, 0.623);
    /*filter: blur(8px);
    -webkit-filter: blur(8px);*/
}

.card .card-image img, .card, .card-action  {
    border-radius: 20px!important;
}

.container .row {
    /*margin-bottom: 3.5em!important;*/
    padding-bottom: 3em;
}

.card {
    margin-bottom: 1em!important;
}

/* currently broken
.tabs .indicator {
  height: 5px!important;
  border-radius: 20px!important;
  background-color:  rgb(255, 86, 100)!important;
}  */

.material-icons{
    color: rgb(255, 86, 100)!important;
}

.material-icons:hover{
    color: rgb(255, 191, 101)!important;
}

/*.tab.col.s3:hover .white-text:hover, .a.active:hover{
    background-color: rgb(223, 223, 223)!important;
}*/ 



.store-category {
    font-family: 'Work Sans', sans-serif;
    font-size: 22px;
    text-transform: capitalize; /*uppercase;*/
    font-weight: 600!important;
}

.store-location {
    font-family: 'Work Sans', sans-serif;
    font-size: 16px;
    text-transform: capitalize; /*uppercase;*/
    font-weight: 400!important;
}










/* registering page */

:root {
    --input-padding-x: 1.5rem;
    --input-padding-y: .75rem;
  }
  
  .card-signin {
    border: 0;
    border-radius: 1rem;
    box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
  }
  
  .card-signin .card-title {
    margin-bottom: 2rem;
    font-weight: 300;
    font-size: 1.5rem;
  }
  
  .card-signin .card-body {
    padding: 2rem;
  }
  
  .form-signin {
    width: 100%;
  }
  
  .form-signin .btn {
    font-size: 80%;
    border-radius: 5rem;
    letter-spacing: .1rem;
    font-weight: bold;
    padding: 1rem;
    transition: all 0.2s;
  }
  
  .form-label-group {
    position: relative;
    margin-bottom: 1rem;
  }
  
  .form-label-group input {
    height: auto;
    border-radius: 2rem;
  }
  
  .form-label-group>input,
  .form-label-group>label {
    padding: var(--input-padding-y) var(--input-padding-x);
  }
  
  .form-label-group>label {
    position: absolute;
    top: 0;
    left: 0;
    display: block;
    width: 100%;
    margin-bottom: 0;
    /* Override default `<label>` margin */
    line-height: 1.5;
    color: #495057;
    border: 1px solid transparent;
    border-radius: .25rem;
    transition: all .1s ease-in-out;
  }
  
  .form-label-group input::-webkit-input-placeholder {
    color: transparent;
  }
  
  .form-label-group input:-ms-input-placeholder {
    color: transparent;
  }
  
  .form-label-group input::-ms-input-placeholder {
    color: transparent;
  }
  
  .form-label-group input::-moz-placeholder {
    color: transparent;
  }
  
  .form-label-group input::placeholder {
    color: transparent;
  }
  
  .form-label-group input:not(:placeholder-shown) {
    padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
    padding-bottom: calc(var(--input-padding-y) / 3);
  }
  
  .form-label-group input:not(:placeholder-shown)~label {
    padding-top: calc(var(--input-padding-y) / 3);
    padding-bottom: calc(var(--input-padding-y) / 3);
    font-size: 12px;
    color: #777;
  }
  
  .btn-google {
    color: white;
    background-color: #ea4335;
  }
  
  .btn-facebook {
    color: white;
    background-color: #3b5998;
  }
  
  /* Fallback for Edge
  -------------------------------------------------- */
  
  @supports (-ms-ime-align: auto) {
    .form-label-group>label {
      display: none;
    }
    .form-label-group input::-ms-input-placeholder {
      color: #777;
    }
  }
  
  /* Fallback for IE
  -------------------------------------------------- */
  
  @media all and (-ms-high-contrast: none),
  (-ms-high-contrast: active) {
    .form-label-group>label {
      display: none;
    }
    .form-label-group input:-ms-input-placeholder {
      color: #777;
    }
  }

    </style>





</head>
<!-- layout forked from https://codepen.io/Lcallaghan84/pen/qPRRNO -->

<header>

    <nav>
        <div class="container">
            <div class="nav-wrapper">
                <a href="file:///Users/rolandudv/Documents/Dissertation/index.html" class="brand-logo">Brand Name</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="file:///Users/rolandudv/Documents/Dissertation/signin.html">Sign In</a></li>
                    <li><a href="file:///Users/rolandudv/Documents/Dissertation/register.html">Register</a></li>
                    <li><a href="file:///Users/rolandudv/Documents/Dissertation/business.html">Business</a></li>
                    <li><a href="file:///Users/rolandudv/Documents/Dissertation/about.html">About</a></li>
                    <li><a href="file:///Users/rolandudv/Documents/Dissertation/contact-us.html">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>

</header>

<body>
    <main>

        <div class="container">
            <div class="row" style="margin-top:20px;">

                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            <a href="#"><img
                                    src="https://d1593xiyv01mio.cloudfront.net/gb/images/19693/biz_photo_153874755271.jpeg?size=750x500">
                                <span class="card-title">Ace of Fadez</span></a>
                        </div>
                        <div class="card-content">
                            <p class="store-category">Barber Shop</p>
                            <p class="store-location">34 Gold Street, Northampton, NN1 2PT</p>
                        </div>
                        <div class="card-action">
                            <a href="#"><span class="grey-text text-darken-4" title="Add to Favorites"><i
                                        class="material-icons">bookmark</i></span></a>
                            <a href="#"><span class="grey-text text-darken-4" title="Book Appointment"><i
                                        class="material-icons">date_range</i></span></a>
                            <a href="#"><span class="grey-text text-darken-4" title="See Reviews"><i
                                        class="material-icons">star</i></span></a>
                            <a href="#"><span class="grey-text text-darken-4" title="Visit Store"><i
                                        class="material-icons">store</i></span></a>
                        </div>
                    </div>
                </div>

                <div id="test2" class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            <a href="#"><img
                                    src="https://d1593xiyv01mio.cloudfront.net/gb/images/19693/biz_photo_153874755271.jpeg?size=750x500">
                                <span class="card-title">Born Urban Barbers</span></a>
                        </div>
                        <div class="card-content">
                            <p class="store-category">Barber Shop</p>
                            <p class="store-location">34 Gold Street, Northampton, NN1 2PT</p>
                        </div>
                        <div class="card-action">
                            <a href="#"><span class="grey-text text-darken-4" title="Add to Favorites"><i
                                        class="material-icons">bookmark</i></span></a>
                            <a href="#"><span class="grey-text text-darken-4" title="Book Appointment"><i
                                        class="material-icons">date_range</i></span></a>
                            <a href="#"><span class="grey-text text-darken-4" title="See Reviews"><i
                                        class="material-icons">star</i></span></a>
                            <a href="#"><span class="grey-text text-darken-4" title="Visit Store"><i
                                        class="material-icons">store</i></span></a>
                        </div>
                    </div>
                </div>

                <div id="test2" class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            <a href="#"><img
                                    src="https://d1593xiyv01mio.cloudfront.net/gb/images/7162/biz_photo_153934568607.jpeg?size=750x500">
                                <span class="card-title">Born Urban Barbers</span></a>
                        </div>
                        <div class="card-content">
                            <p class="store-category">Barber Shop</p>
                            <p class="store-location">34 Gold Street, Northampton, NN1 2PT</p>
                        </div>
                        <div class="card-action">
                            <a href="#"><span class="grey-text text-darken-4" title="Add to Favorites"><i
                                        class="material-icons">bookmark</i></span></a>
                            <a href="#"><span class="grey-text text-darken-4" title="Book Appointment"><i
                                        class="material-icons">date_range</i></span></a>
                            <a href="#"><span class="grey-text text-darken-4" title="See Reviews"><i
                                        class="material-icons">star</i></span></a>
                            <a href="#"><span class="grey-text text-darken-4" title="Visit Store"><i
                                        class="material-icons">store</i></span></a>
                        </div>
                    </div>
                </div>

                <div id="test2" class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            <a href="#"><img
                                    src="https://d1593xiyv01mio.cloudfront.net/gb/images/7162/biz_photo_153934568607.jpeg?size=750x500">
                                <span class="card-title">Born Urban Barbers</span></a>
                        </div>
                        <div class="card-content">
                            <p class="store-category">Barber Shop</p>
                            <p class="store-location">34 Gold Street, Northampton, NN1 2PT</p>
                        </div>
                        <div class="card-action">
                            <a href="#"><span class="grey-text text-darken-4" title="Add to Favorites"><i
                                        class="material-icons">bookmark</i></span></a>
                            <a href="#"><span class="grey-text text-darken-4" title="Book Appointment"><i
                                        class="material-icons">date_range</i></span></a>
                            <a href="#"><span class="grey-text text-darken-4" title="See Reviews"><i
                                        class="material-icons">star</i></span></a>
                            <a href="#"><span class="grey-text text-darken-4" title="Visit Store"><i
                                        class="material-icons">store</i></span></a>
                        </div>
                    </div>
                </div>

                <div id="test2" class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            <a href="#"><img
                                    src="https://d1593xiyv01mio.cloudfront.net/gb/images/7162/biz_photo_153934568607.jpeg?size=750x500">
                                <span class="card-title">Born Urban Barbers</span></a>
                        </div>
                        <div class="card-content">
                            <p class="store-category">Barber Shop</p>
                            <p class="store-location">34 Gold Street, Northampton, NN1 2PT</p>
                        </div>
                        <div class="card-action">
                            <a href="#"><span class="grey-text text-darken-4" title="Add to Favorites"><i
                                        class="material-icons">bookmark</i></span></a>
                            <a href="#"><span class="grey-text text-darken-4" title="Book Appointment"><i
                                        class="material-icons">date_range</i></span></a>
                            <a href="#"><span class="grey-text text-darken-4" title="See Reviews"><i
                                        class="material-icons">star</i></span></a>
                            <a href="#"><span class="grey-text text-darken-4" title="Visit Store"><i
                                        class="material-icons">store</i></span></a>
                        </div>
                    </div>
                </div>

                <div id="test2" class="col s12 m4">
                        <div class="card">
                            <div class="card-image">
                                <a href="#"><img
                                        src="https://d1593xiyv01mio.cloudfront.net/gb/images/7162/biz_photo_153934568607.jpeg?size=750x500">
                                    <span class="card-title">Born Urban Barbers</span></a>
                            </div>
                            <div class="card-content">
                                <p class="store-category">Barber Shop</p>
                                <p class="store-location">34 Gold Street, Northampton, NN1 2PT</p>
                            </div>
                            <div class="card-action">
                                <a href="#"><span class="grey-text text-darken-4" title="Add to Favorites"><i
                                            class="material-icons">bookmark</i></span></a>
                                <a href="#"><span class="grey-text text-darken-4" title="Book Appointment"><i
                                            class="material-icons">date_range</i></span></a>
                                <a href="#"><span class="grey-text text-darken-4" title="See Reviews"><i
                                            class="material-icons">star</i></span></a>
                                <a href="#"><span class="grey-text text-darken-4" title="Visit Store"><i
                                            class="material-icons">store</i></span></a>
                            </div>
                        </div>
                    </div>

                    <!-- featured post -->
                    <div id="test2" class="col s12 m12">
                            <div class="card">
                                <div class="card-image">
                                    <a href="#"><img
                                            src="https://d1593xiyv01mio.cloudfront.net/gb/images/7162/biz_photo_153934568607.jpeg?size=750x500">
                                        <span class="card-title">Born Urban Barbers</span></a>
                                </div>
                                <div class="card-content">
                                    <p class="store-category">Barber Shop</p>
                                    <p class="store-location">34 Gold Street, Northampton, NN1 2PT</p>
                                </div>
                                <div class="card-action">
                                    <a href="#"><span class="grey-text text-darken-4" title="Add to Favorites"><i
                                                class="material-icons">bookmark</i></span></a>
                                    <a href="#"><span class="grey-text text-darken-4" title="Book Appointment"><i
                                                class="material-icons">date_range</i></span></a>
                                    <a href="#"><span class="grey-text text-darken-4" title="See Reviews"><i
                                                class="material-icons">star</i></span></a>
                                    <a href="#"><span class="grey-text text-darken-4" title="Visit Store"><i
                                                class="material-icons">store</i></span></a>
                                </div>
                            </div>
                        </div>




                <!--  
    <div id="test1" class="col s12 m6">
        <div class="card">
          <div class="card-image">
            <img src="http://materializecss.com/images/sample-1.jpg">
            <span class="card-title">Card Title</span>
          </div>
          <div class="card-content">
            <p>I am a very simple card. I am good at containing small bits of information.
            I am convenient because I require little markup to use effectively.</p>
          </div>
          <div class="card-action">
            <a href="#">This is a link</a>
          </div>
        </div>	
  </div>

	
  <div id="test1" class="col s12 m6">
 <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Card Title</span>
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
              <a href="#">This is a link</a>
            </div>
          </div>	
	</div>
	
    <div id="test1" class="col s12 m6">
      <div class="card">
        <div class="card-image">
          <img src="http://materializecss.com/images/office.jpg">
          <span class="card-title">Card Title</span>
          <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
        </div>
      </div>	
	</div>
	
    <div id="test1" class="col s12 m6">
            <div class="card">
                <div class="card-image">
                  <img src="http://materializecss.com/images/sample-1.jpg">
                  <span class="card-title">Best Barbershop Northampton</span>
                  <span class="card-title right">Best Barbershop Northampton</span>
                </div>
                <div class="card-content">
                    <p class="card=content-desc1">I am a very simple card. I am good at containing small bits of information.</p>
                    <p class="card=content-desc2">34 Gold Street, Northampton, NN1 2PT</p>
                </div>
                <div class="card-action">
                        <a href="#"><span class="grey-text text-darken-4" title="Add to Favourites"><i class="material-icons">bookmark</i></span></a>
                    <a href="#"><span class="grey-text text-darken-4" title="Book Appointment"><i class="material-icons">date_range</i></span></a>
                    <a href="#"><span class="grey-text text-darken-4" title="See Reviews"><i class="material-icons">star</i></span></a>
                    <a href="#"><span class="grey-text text-darken-4" title="Visit Store"><i class="material-icons">store</i></span></a>
                </div>
            </div>	
        </div>
    
    <div id="test1" class="col s12 m6">
        <div class="card">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="https://d1593xiyv01mio.cloudfront.net/gb/images/7162/biz_photo_153934568607.jpeg?size=750x500">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Card Title</span>
            <p><a href="#">This is a link</a></p>
            <p>Here is some more information about this product that is only revealed once clicked on.</p>
          </div>
        -->

            </div>
        </div>
    </main>

    <footer class="page-footer">
        <div class="row" id="frow" style="margin-bottom:0px;">
            <div class="col s12" style="padding-left:0px!important;padding-right:0px!important;">
                <ul class="tabs tabs-fixed-width transparent white-text">
                    <li class="tab col s3 white-text"><a target="_self"
                            href="file:///Users/rolandudv/Documents/Dissertation/index.html"
                            class="active white-text"><i class="material-icons">home</i></a></li>
                    <li class="tab col s3"><a target="_self"
                            href="file:///Users/rolandudv/Documents/Dissertation/search.html" class="white-text"><i
                                class="material-icons">search</i></a></li>
                    <!--<li class="tab col s3"><a href="#" class="white-text"><i class="fa fa-qrcode">A</i></a></li>-->
                    <li class="tab col s3"><a target="_self"
                            href="file:///Users/rolandudv/Documents/Dissertation/scan.html" class="white-text"><i
                                class="material-icons">camera_enhance</i></a></li>
                    <li class="tab col s3"><a target="_self"
                            href="file:///Users/rolandudv/Documents/Dissertation/favorites.html" class="white-text"><i
                                class="material-icons">bookmark</i></a></li>
                    <li class="tab col s3"><a target="_self"
                            href="file:///Users/rolandudv/Documents/Dissertation/profile.html" class="white-text"><i
                                class="material-icons">account_circle</i></a></li>
                </ul>
            </div>
        </div>
</body>
</footer>


</body>

</html>