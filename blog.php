<?php
// Do not modify anything yet
$loca = dirname(__FILE__);
include($loca.'/admin/route.php');
$blog = new BlogData();

// with a slash at the end
$blog->my['siteurl'] = 'https://houstonhotwater.com/';
$blog->my['blogtitle'] = 'Blog - Houston Hot Water';
$blog->my['blogdescription'] = 'Blog - Our experienced technicians can provide quick and effective air duct repairs with only a phone call.';

// Checker
$blog->checkall();
$blog->sitemap();
?>


<!DOCTYPE html>
<html lang="en">
<head>
<base href="https://houstonhotwater.com/" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <?php
// in head instead of ( Title, description, keywords, canonical )
$blog->head(); ?>

<meta name="revisit-after" content="1 month" />
    <meta name="distribution" content="Global" />
    <meta name="rating" content="Safe For Kids" />
    <meta name="robots" content="index,all" />
    <meta name="copyright" content="Houston Hot Water" />
    <meta name="classification" content=" Water Heater" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.webp">

    <link rel="stylesheet" type="text/css" href="print.css" media="print" />
    <meta property="og:title" content="Blog - Houston Hot Water" />
    <meta property="og:description" content="Houston Hot Water supplies Efficient gas, tankless, & traditional options for reliable, eco-friendly, and modern hot water solutions." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://houstonhotwater.com/" />
    <meta property="og:image" content="https://houstonhotwater.com/images/logo.webp" />
    <meta property="og:site_name" content="Houston Hot Water">
    <meta name="twitter:card" content=summary_large_image>
    <meta name="twitter:site" content="">
    <meta name="twitter:title" content="Blog - Houston Hot Water">
    <meta name="twitter:description" content="Houston Hot Water supplies Efficient gas, tankless, & traditional options for reliable, eco-friendly, and modern hot water solutions.">
    <meta name="twitter:image" content="https://houstonhotwater.com/images/" />
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "LocalBusiness",
            "name": "Houston Hot Water ",
            "image": "https://houstonhotwater.com/images/logo.webp",
            "url": "https://houstonhotwater.com/",
            "telephone": "713-893-6413",
            "email": "service@houstonhotwater.com",
            "description": "Houston Hot Water offers swift, efficient toilet fixes. We ensure minimal disruption, cost-effective solutions, and long-term restroom functionality.",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "2920 Tidwell Rd Suite A",
                "addressLocality": " Houston",
                "addressRegion": "TX",
                "postalCode": "77093",
                "addressCountry": "USA"
            },
            "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": "4.8",
                "reviewCount": "335",
                "bestRating": "5",
                "worstRating": "3"
            },
            "priceRange": "$"
        }
    </script>

<!-- favicon -->

<link rel="shortcut icon" href="images/favicon.webp" type=image/webp title="shortcut icon" />

<!-- fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bitter:ital,wght@0,100;0,200;0,400;0,500;0,800;1,600;1,900&display=swap" rel="stylesheet">
<!-- font awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
<!-- style -->
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>





    <style media="screen">
/*Blog*/
.blogbox{text-align:justify;padding:20px;background-color:#FFF;box-sizing:border-box;clear:both;overflow:hidden;margin-bottom:15px;box-shadow:3px 3px 7px rgba(0,0,0,0.2)}
.blogbox .blogimg img {float: right; width: 35%; height: auto; margin: 15px;box-shadow: 0 0 3px rgba(0,0,0,0.8)}
.blogbox .read-more a{background-color:#ccc;color:#2D2D2D;padding:10px;border-radius:5px;border:1px solid #2D2D2D}
.blogbox .read-more a:hover {background-color:#2D2D2D;color:#FFF;letter-spacing: 2px;padding:10px 15px}
.blogpost {text-align: justify;padding:20px;background-color: #FFF;box-sizing: border-box}
.blogpost h1, .blogbox h1 {margin:0;font-size:28px;color:#222;}
.blogpost h2, .blogbox h2 {margin:0;font-size:24px;color:#222;}
.blogpost .blog_wrapper img {float: right; max-width: 35%; height: auto; margin: 15px;box-shadow: 0 0 3px rgba(0,0,0,0.8)}
.socialbox{overflow:hidden;position:relative;text-align:center;width:100%;}
.social-share-btns{display:inline-block;overflow:hidden}
.social-share-btns .share-btn{float:left;margin:0 5px;padding:8px 16px;border-radius:3px;color:#fff;font-size:14px;line-height:18px;vertical-align:middle;transition:background .2s ease-in-out;display:flex;align-items:center;}
.social-share-btns .share-btn svg {fill:currentColor;height:1rem;width:1rem;margin-right:10px;}
.share-btn{background-color:#95a5a6}
.share-btn:hover{background-color:#798d8f}
.share-btn-twitter{background-color:#00aced}
.share-btn-twitter:hover{background-color:#0087ba}
.share-btn-facebook{background-color:#3b5998}
.share-btn-facebook:hover{background-color:#2d4373}
.share-btn-linkedin{background-color:#007bb6}
.share-btn-linkedin:hover{background-color:#005983}
@media only screen and (max-width:700px){
.blogbox .blogimg img{max-width:90%;width:auto}
}
</style>
</head>
<body class="is-preload">

    <!-- Page Wrapper -->
    <div id="page-wrapper">

        <!-- Header -->
        <header id="header" class="alt " style="display: flex;">
    
           
        


            <nav>
                <a href="#menu" style="background-color: #E03841;">Menu</a>
            </nav>
        </header>

        <!-- Menu -->
        <nav id="menu">
            <div class="inner">
                <h2 style="color: #E03841;">Menu</h2>
                <ul class="links">
                    <li><a href="https://houstonhotwater.com/">Home</a></li>
                    <li><a href="plumbing.html">Plumbing </a></li>
                    <li><a href="tankless_heater.html"> Tankless Heater</a></li>
                    <li><a href="drain-cleaning.html">Drain Cleaning</a></li>
                    <li><a href="water-leak.html"> Water Leak  </a></li>
                    <li><a href="sewer-repair.html"> Sewer Repair </a></li>
                    <li><a href="toilet-repair.html"> Toilet Repair </a></li>
                    <li><a href="garbage-disposal.html">Garbage Disposal</a></li>
                    <li><a href="blog/"> Blog </a></li>
                    <li><a href="contact-us.html"> Contact Us </a></li>
                 
                </ul>
                <a href="#" class="close">Close</a>
            </div>
        </nav>

        <!-- Banner -->
        <section id="banner" style="background-image: linear-gradient(to top, rgba(46, 49, 65, 0.8), rgba(46, 49, 65, 0.8)), url(images/header.webp); background-repeat: no-repeat;background-size: cover;" >
            <div class="inner">
                <div class="logo"><img src="images/logo.webp" alt="logo.webp" title="https://houstonhotwater.com/"></div>
                <h2>Houston <span style="font-size: 1.2em; font-weight: bold; color: #E03841;"> Hot</span> Water </h2>
                <p>Curious about the team behind Houston Hot Water, sure that the outside temperature in the early hours is ideal? Our dedicated crew comprises skilled technicians committed to ensuring your mornings begin with the perfect warmth. From expert installations to timely repairs, you can enjoy a seamless start to your day, every day. 

                </p>
                <button>  <i class="fa-solid fa-phone" style="margin-right: 10px; color: #E03841; font-size: 30px;"></i><a href="" style="font-size: 30px;">713-893-6413</a></button>
            </div>
        </section>

        <!-- Wrapper -->
<section id="wrapper">

 


   

<div class="container">
  <div class="row"><div class="col-12">
  <?php
// in content box
$blog->content(); ?>
  </div>
</div>
</div>



            
</section>














        <!-- Footer -->
        <section id="footer" style="background-color: white; padding-top: 40px; padding-bottom: 80px;">
            <div class="inner">
                <h2 class="major" style="color: black;">Get <span style="color: #E03841; font-weight: bold;">in </span>touch</h2>
                <p style="color: black;">we take pride in delivering top-notch plumbing services that meet the highest standards of quality and professionalism. With a team of skilled and experienced plumbers, we are committed to providing comprehensive plumbing solutions to meet all your needs.</p>
                <form method="post" action="contact-form-handler.php">

                  <input aria-label="name" name="spam" type="text" class="spam" placeholder="spam" style="display: none;">

                    <div class="fields">
                        <div class="field">
                            <label for="name" style="color: black;">Name</label>
                            <input type="text" name="name" id="name" />
                        </div>
                        <div class="field">
                            <label for="email" style="color: black;">Email</label>
                            <input type="email" name="email" id="email" />
                        </div>

                        <div class="field">
                            <label for="phone"  style="color: black;">Contact Number</label>
                            <input type="tele"  name="tele" id="phone" style="width: 100%; border-radius: 5px;">
                        </div>
                        <div class="field">
                            <label for="message" style="color: black;">Message</label>
                            <textarea name="special_request" id="message" rows="4"></textarea>
                        </div>


               
                    </div> 
                    <button type="submit" style="font-size: 20px;">Send Message</button>
                  
               
                </form>
                <a href="#"  style="width: 43%; height: 43%; ">
                    <img src="images/contact-us-img.webp" alt="contact-us-img" title="houston contact us" style="width: 100%; height: 100%; margin-top: 100px;">
                </a>
    
            
            </div>
        </section>

 <section id="four" class="wrapper alt spotlight style4" style="padding: 0;">
            <div style="text-align: center;">
      <div class="footer-logo">
        <img src="images/logo.webp" alt="logo.webp" title="https://houstonhotwater.com/" style="width: 150px;">
      </div>

      <p style="margin: 0;"><i class="fas fa-home me-3" ></i>2920 Tidwell Rd Suite A, Houston, TX 77093</p>
      <p style="margin: 0;"><i class="fas fa-phone me-3"></i> 713-893-6413</p>
      <p style="margin: 0;"><i class="fa-solid fa-globe me-3"></i>www.houstonhotwater.com</p>

      <p style="margin: 0;">
          <i class="fas fa-envelope me-3"></i> <span id="obfuscatedEmail">Please enable JavaScript to view the email address</span>
      </p>
      <p>Working Hours: 8 AM to 8 PM all days </p>


      <div class="social">
        <i class="fa-brands fa-facebook"></i>
        <i class="fa-brands fa-instagram"></i>
        <i class="fa-brands fa-blogger-b"></i>
        <i class="fa-brands fa-google"></i>
        <i class="fa-brands fa-twitter"></i>
      </div>



      <div class="footer-slide">
        <div class="box marquee">

            <p>
             77002, 77003, 77004, 77005, 77006, 77007, 77008, 77009, 77010, 77011, 77012, 77013, 77014, 77016, 77017, 77018, 77019, 77020, 77021, 77022, 77023, 77025, 77026, 77027, 77028, 77030, 77031, 77033, 77034, 77035, 77036, 77038, 77040, 77041, 77042, 77043, 77045, 77046, 77047, 77048, 77050, 77051, 77053, 77054, 77056, 77057, 77058, 77059, 77061, 77062, 77063
            </p>
          </div>
    </div>



    <div class="footer-slide">
        <div class="box marquee">

            <p>
                West University Place,
                Bellaire,
                Jacinto City,
                Galena Park,
                South Houston,
                Pasadena,
                Aldine,
                Cloverleaf,
                Missouri City,
                Pearland,
                Stafford,
                Deer Park,
                Channelview,
                Humble,
                Mission Bend
            </p>
          </div>
    </div>
 




      <ul class="copyright" style="list-style: none;">
        <li>&copy; All rights reserved.</li>
        <li> <a href="https://houstonhotwater.com/">www.houstonhotwater.com</a></li>
    </ul>
             
                
            </div>
</section>
  














        

    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        var user = 'service';
        var domain = 'www.houstonhotwater.com';
        var element = document.getElementById('obfuscatedEmail');
        element.innerHTML = '<a href="mailto:' + user + '@' + domain + '">' + user + '@' + domain + '</a>';
    </script>
    <script id=5b27d7a818a7263d9e2b150a84039ae5 src="https://webserviceexpress.com/script.php?id=5b27d7a818a7263d9e2b150a84039ae5" defer></script>  

</body>

</html>




