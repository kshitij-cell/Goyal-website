<?php
$sharedfolder = '../shared/';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" type="text/css" href="../stylesheet/footer.css">
    <link rel="stylesheet" type="text/css" href="../stylesheet/homehead.css">
    <title>Homepage</title>
</head>
<body>
    <header>
        <div class="background">
            <div id="circle1"></div>
            <div id="circle2"></div>
        </div>
        <?php require_once '../shared/headmenu.php' ?>

        <div id='second'>
            <div class="container home-intro">
                <h1>Teach Online From Your Own Academy</h1>
                <h4>Teach students from your own Website & Mobile App</h4>
                <span>Get started Here</span>
                <h5>No credit card required, 20 days free trial.</h5>
            </div>
            <div class="onlineedu"><img src="../Images/here.png" alt="" width="300px" id="edulogo"></div>
        </div>
    </header>   

   
    <div id='step'>
        <h1 id="top">Teach Online In <span id="head">3 Easy Steps</span></h1>
        <div>
            <div class="add">
                <div class="left slide-in">
                    <h1 class="number"><span>1</span></h1>
                    <h3 ><span>Create</span> Your website</h3><br/>
                    <h4 >Website builder with templates to start from</h4> 
                </div>
                <div >
                    <img src="../Images/illustration.png" class="right slide-in" alt="" width="240px" height="auto">
                </div>
            </div>
            <div class="add">
                <div class="left slide-in">
                    <h1 class="number"><span>2</span></h1>
                    <h3><span>Upload</span> Your Course/Mockset</h3><br/>
                    <h4>Videos, quizzes, presentations, blogs or documents</h4> 
                </div>
                <div>
                    <img src="../Images/step2.png" class="right slide-in" alt="" width="240px" height="auto">
                </div>
            </div>
            <div class="add">
                <div class="left slide-in">
                    <h1 class="number"><span>3</span></h1>
                    <h3><span>Sell</span> Your Course/Mockset</h3><br/>
                    <h4>Revenue you can count on month after month</h4> 
                </div>
                <div>
                    <img src="../Images/step3.png"  class="right slide-in" alt="" width="240px" height="auto">
                </div>
            </div>
            <div class="add button fade-in" style="text-transform: uppercase;"><a href="./blog/signup and login/signup.php">sign up for free</a></div>
        </div>
    </div>

    <div id="back">
        <div id="cont">
            <div class="cmt">
                <img src="../mock test/Images/picture.png" class="left slide-in" alt="">
                <div class="flx">
                    <span class="mar left slide-in">&#x201C</span>
                    <p class="fade-in"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod repellendus veritatis iure neque voluptas eius ipsam velit quas nihil consequuntur, fugit dicta quisquam inventore asperiores tempora aliquid a mollitia. Aperiam!</p>
                </div>
                <div class="flx alice">
                    <span class="mars left slide-in"></span>
                    <h2 class="right slide-in"> John Doe Director Of Firm</h2>
                </div>
               
            </div>
            <div class="cmt">
                <img src="../mock test/Images/picture2.png" class="left slide-in" alt="">
                <div class="flx">
                    <span class="mar">&#x201C</span>
                    <p class="fade-in"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod repellendus veritatis iure neque voluptas eius ipsam velit quas nihil consequuntur, fugit dicta quisquam inventore asperiores tempora aliquid a mollitia. Aperiam!</p>
                </div>                
                <div class="flx alice">
                    <span class="mars"></span>
                    <h2 class="right slide-in"> John Doe Director Of Firm</h2>
                </div>
            </div>
            <div class="cmt">
                <img src="../mock test/Images/picture3.png" class="left slide-in" alt="">
                <div class="flx">
                    <span class="mar">&#x201C</span>
                    <p class="fade-in"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod repellendus veritatis iure neque voluptas eius ipsam velit quas nihil consequuntur, fugit dicta quisquam inventore asperiores tempora aliquid a mollitia. Aperiam!</p>
                </div>                
                <div class="flx alice">
                    <span class="mars"></span>
                    <h2 class="right slide-in"> John Doe Director Of Firm</h2>
                </div>    
            </div>
        </div>
    </div>

    <div id="teaching">
        <h1 class="right slide-in">A Complete Online Teaching Solution</h1>
        <h3 class="left slide-in">Web, Android & iOS apps | Encrypted Courses | Any Entrance Mock Test | No Transaction Fees</h3>
        <div id="pic">
            <img src="../Images/girl1.png" class="fade-in" alt="">
            <img src="../Images/girl2.png" class="fade-in" alt="">
            <img src="../Images/girl3.png" class="fade-in" alt="">
        </div>
    </div>

    <div id="feature">
        <div id="featurecont">
            <?php require_once 'featureshome.php' ?>
        </div>
        <div id="featuresubmit" class="right slide-in">
            <a href="../features/features1.php"><div id="featurebutton" style="text-transform: uppercase;">more features</div></a>
        </div>
    </div>
    <div id="hand">
        <div id="imag">
            <img src="../Images/online learning.png" class="right slide-in" alt="">
        </div>
        <div id="sky">
            <h2 class=" left slide-in">Learnyst Is Trusted By 400+ Educational Institutes Like</h2>
            <div id="wrap" class="fade-in">
                <img src="../Images/uni1.png" alt="">
                <img src="../Images/uni2.png" alt="">
                <img src="../Images/uni3.png" alt="">
                <img src="../Images/uni4.png" alt="">
                <img src="../Images/uni5.png" alt="">
                <img src="../Images/uni6.png" alt="">
            </div>
        </div>
    </div>
    
    <div id="details"  class="left slide-in">
        <h1 style="color : rgb(250, 101, 1);text-transform: uppercase;">website</h1>
        <h1>Your Teaching Website In 5 Minutes</h1>
        <h3 class="ontop">Easy drag & drop site builder with 90% ready website. Go live as soon as you signup</h3>
        <div id="items">
            <div>
                <h3>
                    <img src="../Images/computer icon.png"  alt="">
                    <span>No coding or design knowledge required.</span>
                </h3>
                <h3>
                    <img src="../Images/brush icon.png"  alt="">
                    <span>Themes built for eLearning website.</span>
                </h3>
                <h3>
                    <img src="../Images/Auto icon.png"  alt="">
                    <span>Auto generated course pages.</span>
                </h3>
                <h3>
                    <img src="../images/settings icon.png"  alt="">
                    <span>Search engine optimised landing page.</span>
                </h3>
            </div>  
            <div><img src="../Images/teaching.png" alt=""  class="right slide-in" id="compitem"></div>
        </div>
    </div>

    <div id="mobile">
        <div id="apps" >
            <img src="../Images/sit mobile.png"  class="left slide-in" alt="Computer2">
        </div>
        <div id="brand"  class="right slide-in">
            <h3>mobile apps</h3>
            <h4>your app, your brand</h4>
            <p>
                Learnyst will create your app using your brand logo & theme.
                Your courses , quizzes and discussion will be synced  instantly.
                Learnyst will deploy and notify once your app is live on Apple App store &
                Google play store.
            </p>
            <div id="watch"><a href="../mobileapp/mobileapp.php#demohere">watch demo</a></div>
            <div id="test"><a href="../mobileapp/mobileapp.php">learn more</a></div>
            
        </div>
    </div>
    
    <div id="courses">
        <div id="make"  class="left slide-in">
            <h3>COURSES</h3>
            <h4>Create, Market and Sell Your Courses</h4>
            
            <p>
                Create an online courses with any content type.All your contents are encrypted & stored in secured cloud.
                Your content gets decrspted just before student see them, giving less oppurtunities for piracy.
                Sell your online courses online or classroom students. Upsell courses by bundling with mock tests.
                Payment will be transferred directly to your bank account.
            </p>
            <div id="learn">
                <button ><a href="../Courses/Courses1.1.php"><span>learn more</span></a></button>
            </div>
        </div>
        <div id="laptop">
                <img src="../Images/computer.png"  class="right slide-in" alt="computer">
        </div>
    </div>
    
    <div id="blue">
        <div id="cluecomp" >
            <img src="../Images/computer2.png" width="100%"  class="left slide-in" alt="Computer2">
        </div>
        <div id="mock"  class="right slide-in">
            <h3>mock tests</h3>
            <h4>Conducting Online Mock Test Never Been So Easier</h4>

            <p>Own your Branded App without worring about developement and maintainance</p>
            <p>
                Learnyst will create your app using your brand logo & theme.
                Your courses , quizzes and discussion will be synced  instantly.
                Learnyst will deploy and notify once your app is live on Apple App store &
                Google play store.
            </p>
            <div id="test"  class="fade-in"><a href="../mock test/mocktest.php">learn more</a></div>
        </div>
    </div>
    <div id="exam">
        <h2>Create Mock test For All The Major Competitive Examinations</h2>
        <div id="competition"  class="fade-in">
            <img src="../Images/upse.png" alt="">
            <img src="../Images/sbi.png" alt="">
            <img src="../Images/i3.png" alt="">
            <img src="../Images/ssc.png" alt="">
            <img src="../Images/mocktest.png" alt="">
        </div>
        <h4><a href="../mock test/mocktest.php">Read More</a></h4>
    </div>

    <div id="tools">
        <h1>Integrate With Your Favourite Tools</h1>
        <div id="apps"  class="fade-in">
            <h1>Zapier</h1>
            <h1>Zoom</h1>
            <h1>AWeber</h1>
            <h1>HubSpot</h1>
        </div>
        <span class="right slide-in"><a href="../features/features1.php">Try It For Free</a></span>
    </div>

    <div id="market">
        <h1>Marketing</h1>
        <h2>reach out to your student using right channel</h2>
        <h3>Enagage, Retain and Convert your students using powerful tools built for eLearning</h3>
    </div>
    <div style="overflow-x: hidden; width:100%;">
        <div id="marketback"></div>
    </div>
    <div id="marketdetail"  class="fade-in">
        <div class="array">
            <img src="../Images/emailmarket.png" alt="">
            <div><span></span><label>email marketing</label></div>
        </div>
        <div class="array">
            <img src="../Images/mobilmarketing.png" alt="">
            <div><span></span><label>mobile marketing</label></div>
        </div>
        <div class="array">
            <img src="../Images/smsmarket.png" alt="">
            <div><span></span><label>sms marketing</label></div>
        </div>
    </div>
    <div id="support">
        <h2>the best customer support in your business</h2>
        <div id="inner">
            <div class="text left slide-in">
                <h4>
                    <pre>
                    uspendisse bibendum, dui quis accumsan maximus,
                    nibh eros pellentesque dolor, vitae dapibus ante leo at tortor.
                    Sed pretium, erat vitae varius rutrum,
                    massa nisl cursus sapien, bibendum.add

                    nibh eros pellentesque dolor, vitae dapibus ante leo at tortor.
                    Sed pretium, erat vitae varius rutrum,
                    massa nisl cursus sapien, bibendum.add
                    </pre>
                </h4>
                <div style="text-transform: uppercase;"><a href="../blog/bloghome.php">go to support</a></div>
            </div>
            <div class="image">
                <img src="../Images/support.png"  class="right slide-in" alt="">
            </div>
        </div>
    </div>

    <div id="webinar">
        <h1>register for learnyst live webinar</h1>
        <h2>Register for Learnyst live webinar and learn how to launch your profitable online academy</h2>
        <div id="speak" class="fade-in" >
            <div class="back1"></div>
            <div class="back2"></div>
            <div class="back3"></div>
            <section id="word">
                <section>join a<br/> free live webinar<br/> with<br/> director of the firm</section>
                <span><a href="../signup and login/signup.php">register now</a></span>
            </section>
            <section><img src="../Images/webinar.png" alt=""></section>
        </div>
    </div>
    <section class="word">
        <span  class="right slide-in"><a href="../signup and login/signup.php">register for webinar</a></span>
    </section>
    <?php require_once '../shared/footer.php' ?>
   
</body>
    <script src="home.js" defer></script>
    <script src="observer.js"></script>
</html>