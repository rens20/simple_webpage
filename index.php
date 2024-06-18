<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


</head>
<body>
      <header>
        <img src="./image/Logo.png" class="logo">

        <nav>
            <div class="hamburger-menu" id="hamburger-menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="background">
            <ul id="nav-menu">
                <li><a href="index.php">Home</a></li>
                
                <li><a href="about.php">About Us</a></li>
                <li class="dropdown">
                    <a href="services.php">Services</a>
                    <ul class="dropdown-content">
                        <li><a href="#self-service">SELF-SERVICE</a></li>
                        <li><a href="#full-service">FULL-SERVICE</a></li>
                    </ul>
                </li>
                <li><a href="inquiry.php">Inquiries</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            
            </ul>
            </div>
      
        </nav>
  
    </header>

   <main>
        <div class="left">
            <h1>Welcome to <span class="green">We-</span><span class="blue">Wash Laundry</span>!</h1>
        </div>

        <div class="right">
            <img src="./image/Homepage.png" alt="">
        </div>
    </main>
    <br>
    <br>
    <br>
    <br>
    <br>
     <br>
    <br>
    <br>
    <br>

    <section id="about">
        <h1 class="h1">About Us</h1>
        <p class="center">Welcome to <span class="green">We-</span>Wash Laundry</span>!</p>
        <p>At We-Wash Laundry, we are dedicated to providing you with top-notch laundry services that combine competitive
            pricing, exceptional quality, and unmatched customer convenience. Our commitment to excellence sets us apart as
            a trusted partner for all your laundry needs.</p>
        <h2>Competitive Pricing</h2>
        <p>We understand the importance of affordability without compromising on quality. That's why we offer competitive
            pricing on all our services, ensuring that you get the best value for your money. Our transparent pricing model
            means no hidden costs, so you can trust that what you see is what you get.</p>
        <h2>Unparalleled Quality Service</h2>
        <p>Quality is at the heart of everything we do at We-Wash Laundry. From using the finest detergents to employing
            advanced cleaning techniques, we ensure your clothes are treated with the utmost care. Our experienced staff is
            trained to handle all types of fabrics and stains, delivering spotless results every time. Your satisfaction is
            our priority, and we strive to exceed your expectations with every wash.</p>
        <h2>Ultimate Customer Convenience</h2>
        <p>We-Wash Laundry is designed with your convenience in mind. Our easy-to-use online booking system allows you to
            schedule pick-ups and drop-offs at your convenience. We offer flexible service options, including same-day and
            next-day deliveries, so you never have to worry about waiting. Plus, our customer support team is always ready
            to assist you with any queries or special requests.</p>
        <p>Join us at We-Wash Laundry, where we turn the chore of laundry into a seamless and satisfying experience.
            Discover the difference with our commitment to quality, affordability, and convenience.</p>
        <a href="about.php" class="learn-more">Learn More</a>
    </section>
  <main class="ser">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <h1>Services</h1>
        <div class="images">
            <img src="./image/Full Service.png" alt="">
            <img src="./image/Self Service.png" alt="">
        </div>
        <button class="hello">See More</button>
 

        </main>
 <section class="backgrounds"> 
 <h1 class="blues">INQUIRY</h1>
    <div class="inquiry">
          <h3 class="question" data-toggle="answer1" >1. What are your operating hours?</h3>
                 <p class="answer" id="answer1"> WE-Wash Laundry full service is open 24 hours.</p>
        
 
    </div>

    <div class="inquiry">
        <h3 class="question" data-toggle="answer2" >2. How do I use the self-service machines?</h3>
                  <p class="answer" id="answer2">Using our self-service machines is easy!  load your laundry in to the washer <pr> 
                    add detergent select your cycle and start.transwer clothes to the dryer when   <br>
                    washing is complete
                  </p>
 
    </div>

    <div class="inquiry">
                    <h3 class="question" data-toggle="answer3" >3. Do you provide detergent and other supplies?</h3>
                 <p class="answer" id="answer3"> Yes, we offer high qauality detergent and other laundry essentials for purchase <br>
                 at our facility but you can bring your own!
</p>
     
    </div>
    <button  onclick="go()" class="read-more">Read More</button>

    <br>
    <br>
    <br>
    <br>
    <br>

</section>


    <footer>
    <!-- <p><a href="https://www.facebook.com/wewashlaundry" target="_blank"><i class="fab fa-facebook-f"></i> Facebook</a></p>
    <p><a href="mailto:info@wewashlaundry.com"><i class="far fa-envelope"></i> Email</a></p><br> -->
        </div>
       <div class="footer-bottom">
    <p>&copy; 2024 We-Wash Laundry. All rights reserved.</p>
</div>
</footer>
<script>
      document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.question').forEach(function(question) {
                question.addEventListener('click', function() {

             document.querySelectorAll('.answer').forEach(function(answer) {
                answer.style.display = 'none';
             });

                    const answerId = this.getAttribute('data-toggle');
                    const answer =document.getElementById(answerId);
                    if (answer.style.display === 'none' || answer.style.display === "") {
                        answer.style.display = 'block';

                        setTimeout(function () {
                            answer.style.display = 'none';
                        },5000);
                        }else {
                            answer.style.display = 'none'
                        
                        }
                        });

                    
                });
            });

 function go() {
    window.location.href="services.php";
 }
    </script>
</body>
</html>