<html>
    <head>
        <title>StrathHack - StrathTech</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <base href="https://hack.strathtech.co.uk/" />
        <!-- Lets clear out the styles -->
        <link rel="stylesheet" href="css/reset.css">

        <!-- Any libs -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Open+Sans:400,700" rel="stylesheet" type="text/css">

        <!-- And now add our styles -->
        <link rel="stylesheet" href="css/style.css">
        
        <link rel="icon" type="image/png" href="/images/logo/icon-72.png" />
        <link rel="manifest" href="/manifest.json">
        <meta name="msapplication-TileImage" content="/images/logo/xxhdpi/ic_launcher.png"/>
        <meta name="msapplication-TileColor" content="#D05722"/>
        <link rel="apple-touch-icon" href="/images/logo/crapple/touch-icon-iphone.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/images/logo/crapple/touch-icon-ipad.png">
        <link rel="apple-touch-icon" sizes="100x100" href="/images/logo/crapple/touch-icon-iphone-retina.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/images/logo/crapple/touch-icon-ipad-retina.png">
        
    </head>
    <body>
        <header>
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="contianer">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <ul>
                            <li><a class="navbar-brand" href="https://strathtech.co.uk" data-hover="StrathTech">StrathTech</a></li>
                        </ul>
                    </div>
                       <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="#about" data-hover="About" id="nav-about">About</a></li>
                            <li><a href="#timeline" data-hover="Timeline" id="nav-timeline">Timeline</a></li>
                            <li><a href="#location" data-hover="Location" id="nav-location">Location</a></li>
                            <li><a href="#sponsers" data-hover="Sponsors" id="nav-sponsors">Sponsors</a></li>
                            <li><a href="#faq" data-hover="FAQ" id="nav-faq">FAQ</a></li>
                            <li><a href="#signup" data-hover="Sign Up" id="nav-signup">Sign Up</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="header-content">
                <div id="animation-container">
                    <canvas id="canvas" style="-webkit-filter: blur(1px);-moz-filter: blur(1px);-o-filter: blur(1px);-ms-filter: blur(1px);filter: blur(1px);"></canvas>
                </div>
                <div id="header-content-content">
                        <h1>StrathHACK</h1>
                        <h2>Build something Awesome, Shape the future</h2>    
                </div>
            </div>        
        </header>
        <main>
            <a id="about"></a>
            <section class="tile" id="about">
                <div class="tilecontent">
                    <h3>About</h3>
                    <p>February brings us the second StrathHACK event, and the first in our new venue; the newly renovated Architecture Building within the University of Strathclyde, right in the heart of Glasgow City Center. </p>
                    <p>Over a 24 hour period, expect to work on some unique projects, meet plenty of new people, and perhaps even learn a thing or two along the way. Our industry sponsors will be in attendance offering cool gadgets to develop with, challenges, and prizes for their chosen winning teams!</p>
                    <p>Students are welcome from all across the UK (and beyond!), regardless of skill level, the aim here is to create something amazing and learn something interesting. </p>
                </div>
            </section>
            <a id="timeline"></a>
            <section class="tile" id="timeline">
                <div class="tilecontent">
                    <h3>Date and Timeline</h3>
                    <p>StrathHACK takes place on the 20th and 21st of February.</p>
                    <p>Arrivals kick off from 11:00, however we'll be getting started at 12 o'clock. Here's the schedule for the event;:</p>
                    <table>
                        <tr>
                            <td>12:00</td>
                            <td>Project Briefings</td>
                        <tr>
                            <td>13:00</td>
                            <td>Late Lunch &#38 Team Forming</td>
                        <tr>
                            <td>14:00</td>
                            <td>Coding Starts</td>
                        <tr>
                            <td>18:00</td>
                            <td>Dinner</td>
                        <tr>
                            <td>22:00</td>
                            <td>Break game/talks</td>
                        <tr>
                            <td>00:00</td>
                            <td>Midnight Snacks</td>
                        <tr>
                            <td>06:30</td>
                            <td>Breakfast</td>
                        <tr>
                            <td>12:00</td>
                            <td>Coding Ends</td>
                        <tr>
                            <td>12:00</td>
                            <td>Lunch and Assessing of Groups</td>
                        <tr>
                            <td>14:00</td>
                            <td>Presentations &#38 Closing</td>
                        <tr>
                            <td>15:00</td>
                            <td>Event Ends</td>
                    </table>
                </div>
            </section>
            <a id="location"></a>
            <section class="tile" id="location">
                <div class="tilecontent">
                    <h3>Location</h3>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <p>StrathHACK is being held in the Architecture Building at The University of Strathclyde, Glasgow.</p>
                            <p>This is easily accessible by train, with Glasgow Central Station and Glasgow Queen Street both within short walking distance. By Coach or bus Buchanan Street Bus Station is just around the corner too. For those driving, there is an NCP car park near the bottom of the hill, however parking is scarce in Glasgow with high prices and strict wardens so plan ahead in that case.</p>
                        </div>
                        <div class="col-md-6">
                            <div id='google-map' style="height: 350px;"></div>
                        </div>
                    </div>
                </div>
                </div>
            </section>
            <a id="sponsors"></a>
            <section class="tile" id="sponsor">
                <div class="tilecontent">
                    <h3>Sponsors</h3>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 imgholder">
                            <!-- 500 x 200 http://dummyimage.com/500x200/000/777 -->
                                <img class="img-responsive" src="/images/J_P_Morgan_Logo.svg" alt="J.P. Morgan Chase">
                            </div>
                            <div class="col-md-6 imgholder">
                                <img class="img-responsive" src="/images/Morgan_Stanley_Logo.svg" alt="Morgan Stanley">
                            </div>
                        </div>
                        <div class="row">
                            <!-- 300 x 125 http://dummyimage.com/300x125/000/777 -->
                            <div class="col-md-4 imgholder">
                                <img class="img-responsive" src="/images/Strathclyde_Logo.png" alt="Sponsor Goes Here">
                            </div>
                            <div class="col-md-4 imgholder">
                                <img class="img-responsive" src="http://dummyimage.com/300x125/000/777" alt="Sponsor Goes Here">
                            </div>
                            <div class="col-md-4 imgholder">
                                <img class="img-responsive" src="/images/Uber_Logo_Developers_White.png" alt="Uber developers">
                            </div>
                        </div>
                    </div>
                    <div id="sponsor-interested">
                        <p>Interested in sponsoring this event? Get in <a href="mailto:contact@strathtech.co.uk">touch</a></p>
                    </div>
                </div>
            </section>
            <a id="strathtech"></a>
            <section class="tile" id="strathtech">
                <div class="tilecontent">
                    <h3>Hosted by StrathTech</h3>
                    <p>This event is hosted by StrathTech, created in the wake of GeekSoc, and is a new name for the long running IT Society at Strathclyde University.</p>
                    <p>We strive to promote good programming skills, hardware and networking knowledge, in the name of fun, and education! We aim to facilitate, and enhance learning of Computer Science based skills whilst promoting good security practices and coding techniques to complement student's coursework.</p>
                </div>
            </section>
            <a id="faq"></a>
            <section class="tile" id="faq">
                <div class="tilecontent">
                    <h3>FAQ</h3>
                    <p>Are there ID requirements or an age limit to enter the event?</p>
                    <p>Attendees should be aged 18 or over. If you are under the age of 18 then you will not be able to attend.</p>
                    <p>What are my transport/parking options getting to the event?</p>                
                    <p>The University is easy to access by train, with Glasgow Central Station and Glasgow Queen Street both within short walking distance. By Coach or bus Buchanan Street Bus Station is just around the corner too. For those driving, there is an NCP car park near the bottom of the hill, however parking is scarce in Glasgow with high prices and strict wardens so plan ahead in that case.</p>
                    <p>What can/can't I bring to the event?</p> 
                    <p>Please bring a laptop and charger! If you have a laptop with a foreign plug then please also bring a travel adapter as we will not have any on-site. We cannot provide laptops for attendees. Sorry!<br/>
                    Also, feel free to bring your own snacks and drinks, change of clothes, headphones, mice, sleeping bags. We'll be providing food, but you might have your own favourites! That's okay!<br/>
                    No pets, drugs, weapons or illegal things will be allowed though.</p>
                    <p>Where can I contact the organiser with any questions?</p>
                    <p>You can email us at: <a href="mailto:contact@strathtech.co.uk">contact@strathtech.co.uk</a><br/>
                    You can tweet us at: <a href="https://twitter.com/StrathTech">@StrathTech</a><br/>
                    You can Facebook Message us at: <a href="https://facebook.com/StrathTech">StrathTech</a><br/>
                    We'll also be covering the event on our social media channels from beginning to end! </p>
                    <p>Is my registration/ticket transferrable?</p>
                    <p>Registrations are non-transferrable. Due to the safe nature of the event, and building control requirements, we need to know who is attending the event. If you are unable to attend for any reason, please contact us by any of the means listed above so we can free a space for another person. Thanks!</p>
                </div>
            </section>
            <a id="signup"></a>
            <section class="tile" id="signup">
                <div class="tilecontent">
                    <h3>Interested? Sign Up</h3>
                    <!-- <p>Sign up info coming soon!</p> -->
                    <div>
                        <a class="btn btn-default" type="button" id="signup" href="http://strathhack.eventbrite.com/?aff=website">Register</a>
                    </div>
                </div>
            </section>
        </main>
        <footer class="clearFix">
            <ul id="contact">
                <li><a id="email" href="mailto:contact@strathtech.co.uk"></a></li>
                <li><a id="twitter" href="https://twitter.com/strathtech"></a></li>
                <li><a id="facebook" href="https://www.facebook.com/StrathTech"></a></li>
                <div class="spacer" style="clear: both;"></div>
            </ul>
            <ul id="info">
                <li>&copy <?php echo date("Y"); ?> <a href="https://www.strathtech.co.uk/">StrathTech</a></li>
                <li><a href="http://www.strathstudents.com/">strathstudents</a></li>
            </ul>
            <div class="spacer" style="clear: both;"></div>
        </footer>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
        <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyBlWdYVomePM23RcDikarZvZqHHwkr8nJE&extension=.js'></script>

        <script src="js/style.js"></script>
        <script type="text/javascript" src="js/map.js"></script>
        <script src="js/functions.js"></script>

        <script src="js/RAF.polyfill.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/easing/EasePack.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenLite.min.js"></script>
        <script src="js/animation.js"></script>
    <!-- Piwik -->
    <script type="text/javascript">
      var _paq = _paq || [];
      _paq.push(["setDocumentTitle", document.domain + "/" + document.title]);
      _paq.push(["setCookieDomain", "*.strathhack.co.uk"]);
      _paq.push(['trackPageView']);
      _paq.push(['enableLinkTracking']);
      (function() {
        var u="//metrics.strathtech.co.uk/";
        _paq.push(['setTrackerUrl', u+'piwik.php']);
        _paq.push(['setSiteId', 5]);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
      })();
    </script>
    <noscript><p><img src="//metrics.strathtech.co.uk/piwik.php?idsite=5" style="border:0;" alt="" /></p></noscript>
    <!-- End Piwik Code -->
    </body>
</html>