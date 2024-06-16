<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="stylesheet" href="styles.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        body {
          
    margin: 0;

        }

        main {
            display: flex;
              background-color: #84cc16;
            flex-direction: column;
            /* Change flex-direction to column */
            justify-content: center;
            align-items: center;
            /* max-width: 1200px; */
            width: 100%;
               font-family: cursive;
                  display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
   font-family: cursive;
        }

        .images {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            margin-bottom: 20px;
            /* Adjust margin as needed */
        }

        img {
            max-width: 45%;
            height: auto;
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 35px;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            margin-bottom:170px ;
        }
        h1{
            color:#fff;
            font-size: 44px;
        }
            .container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
    }

    .section {
        width: 30%;
        margin-bottom: 20px;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
    }

    .features {
        order: 1;
    }

    .how-it-works {
        order: 2;
    }

    .benefits {
        order: 3;
    }

    @media only screen and (max-width: 768px) {
        .section {
            width: 100%;
        }
    }











.section {
            width: calc(30% - 20px);
        
            margin-bottom: 20px;
            padding: 20px;
         border-right: 3px solid #141212;

         
        }

        @media only screen and (max-width: 768px) {
            .section {
                width: 100%;
                /* Full width on smaller screens */
            }
        }
       h2, .green{
    color: #a3e635;
   font-family: cursive;

    text-align: center;
        }
        .text{
            text-align: center;
   font-family: cursive;

        }
        .blue{
    color: #1d4ed8;
        text-align: center;
   font-family: curs
           
        }
    .section.benefits {
        margin-left: auto; 
        border-radius: 0; 
        border: 0;
            }
    .footer-container {

flex-direction: row;

    max-width: 1200px;
    margin: auto;
    padding: 20px;
}

.footer-section {
    flex: 1;
    margin: 10px;
}

.footer-section h2 {
    margin-top: 0;
}

.footer-section p, .footer-section a {
    color: #fff;
    text-decoration: none;
flex-direction: row;

}

.footer-section a:hover {
    text-decoration: underline;
}

.footer-bottom {
    text-align: center;
    padding: 10px;
    background-color:#007bff;
    margin-left: 400px;
  
}
    </style>

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
                
                <li><a href="index.php">About Us</a></li>
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
        <button>See More</button>
    </main>
    <br>
    <br>
   <br>
    <h1 id="self-service" class="green">SELF-SERVICE</h1>
    <br>
    <p class="text">Explore the convenience of our self-service laundry at We-Wash Laundry. Whether you're local or just
        <br>
    
        visiting, our self-service area makes doing laundry easy and stress-free.</p>
    <div class="container">
    
        <div class="section features">
            <h2>FEATURES</h2>
            <ul>
                <p><strong>Flexible Hours:</strong> Open long hours to fit your busy day.</p>
                <p><strong>Easy Machines:</strong> Washers and dryers that are simple to use for quick cleaning.</p>
                <p><strong>Various Sizes:</strong> Machines for small to large loads, including bedding.</p>
                <p><strong>Supplies Available:</strong> We provide detergent and other essentials.</p>
            </ul>
        </div>
        <div class="section how-it-works">
            <h2>HOW IT WORKS</h2>
            <ol>
                <p><strong>Load & Start:</strong> Put your clothes in the washer, add detergent, and start it.</p>
                <p><strong>Transfer & Dry:</strong> Move clothes to dryers once washed for fast drying.</p>
                <p><strong>Fold & Finish:</strong> Fold or hang your clothes in our folding areas.</p>
            </ol>
        </div>
        <div class="section benefits">
            <h2>BENEFITS</h2>
            <ul>
                <p><strong>Cost-Effective:</strong> Pay only for what you use, no extra fees.</p>
                <p><strong>Control:</strong> Manage your laundry process from start to finish.</p>
                <p><strong>Time-Saving:</strong> Wash multiple loads at once, reducing wait times.</p>
            </ul>
        </div>
    </div>
    <p class="blue">Try our self-service laundry today for affordable, convenient cleaning!</p>
    <br>
    <hr>
    <section>
        <h1 id="full-service"  class="green">FULL-SERVICE</h1>
        <br>
        <p class="text">
            At We-Wash Laundry, our full-service option gives you a top-quality laundry experience that's easy and
            <br>
            convenient.
        </p>
        <div class="container">
    
            <div class="section features">
                <h2>FEATURES</h2>
                <ul>
                    <p><strong>Pick-Up & Delivery:</strong> Schedule a pick-up
                        time, and we'll collect your laundry.</p>
                    <p><strong>Professional Cleaning:</strong> Expertly clean
                        your clothes with quality products.</p>
                    <p><strong>Careful Folding:</strong> Fold or hang your
    
                        clothes with care.</p>
                    <p><strong>Special Requests:</strong> We handle delicate
                        items and follow your preferences.</p>
                </ul>
            </div>
            <div class="section how-it-works">
                <h2>HOW IT WORKS</h2>
                <ol>
                    <p><strong>Schedule Pick-Up:</strong> Arrange a time for us to
    
                        pick up your laundry.</p>
                    <p><strong>Collection:</strong> We'll collect your laundry from
    
                        your location.</p>
                    <p><strong>Professionally Washed:</strong> Relax while we
                        clean and fold your clothes.</p>
                    <p><strong>Delivery:</strong> Get your clothes back clean and
    
                        ready to wear.</p>
                </ol>
            </div>
            <div class="section benefits">
                <h2>BENEFITS</h2>
                <ul>
                    <p><strong>Convenience:</strong> Save time with door-to-
                        door service..</p>
                    <p><strong>Quality:</strong> Trust our team for clean,</p>
                    <p><strong>Personalized:</strong>Tailor service to fit your
    
                        needs.</p>
                </ul>
            </div>
        </div>
        <p class="blue">Try our self-service laundry today for affordable, convenient cleaning!</p>
        <br>
        <br>
        <br>
          <footer>
    <!-- <p><a href="https://www.facebook.com/wewashlaundry" target="_blank"><i class="fab fa-facebook-f"></i> Facebook</a></p>
    <p><a href="mailto:info@wewashlaundry.com"><i class="far fa-envelope"></i> Email</a></p><br> -->
        </div>
       <div class="footer-bottom">
    <p>&copy; 2024 We-Wash Laundry. All rights reserved.</p>
</div>
</footer>
    </section>
      <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            document.querySelectorAll('.dropdown-content a').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href').substring(1);
                    document.getElementById(targetId).scrollIntoView({ behavior: 'smooth' });
                });
            });
        });
    </script>
    
  
</body>

</html>