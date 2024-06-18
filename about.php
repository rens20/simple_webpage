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


    <br>
    <br>
    <br>
    <br>
    <br>
     <br>
    <br>
    <br>
    <br>




 <h2>Meet the People Behind <span class="green"> We-</span> <span class="blue"> Wash Laundry</h2></span>
    <section id="team">
    
    
        <div class="team-member">
            <div class="lefts">
                <div class="image">
                    <img src="./image/Melanie.png" class="owners" alt="Melanie Telebrico">
                </div>
                <div class="info">
                    <p><strong class="strong">Melanie Telebrico</strong><br><span class="owners">Owner </span> </br></p>
                    <p>Meet Melanie, the owner of We-Wash Laundry! During the day, she's a creative marketing freelancer,
                        crafting ads and promotions. But in the morning, she's our main laundry hero, making sure every sock
                        and shirt sparkles.</p>
                    <p>This year, Melanie started this awesome laundry business. With her skills in marketing and a passion
                        for clean clothes, she's making laundry day fun and easy for everyone.</p>
                </div>
            </div>
        </div>
 <div class="team-member">
            <div class="rights">
                <div class="image">
                    <img src="./image/Andrea.png" class="owner" alt="Andrea Telebrico">
                </div>
                <div class="info">
                    <p><strong class="strong">Andrea Telebrico</strong><br><span class="owner"> Social Media Manager</span>
                    </p>
                    <p>Meet Andrea, the lively mind behind We-Wash Laundry’s social media magic. As Melanie’s daughter,
                        Andrea adds a burst of creativity and energy to our team. She works full-time as a digital marketing
                        coordinator for international clients, bringing her love for storytelling and digital skills to
                        every post and campaign.</p>
                    <p>Andrea makes sure our social media is lively and engaging, making laundry day exciting! Join us
                        online and let Andrea Telebrico show you how fun laundry can be!</p>
                </div>
            </div>
        </div>
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
        document.querySelector('.learn-more').addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector('#team').scrollIntoView({ behavior: 'smooth' });
        });
    </script>
</body>
</html>