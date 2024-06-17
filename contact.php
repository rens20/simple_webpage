<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="styles.css">
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: cursive;
            margin: 0;
            padding: 0;

        }

        .container {
            display: flex;
        }

        .inquiries {
            flex: 1;
            padding: 20px;
        }

        .inquiry {
            margin-bottom: 20px;
            padding: 10px 10px;

            color: aliceblue;
            position: relative;
            overflow: hidden;
            background-color: #a3e635;
            border-radius: 30px;
        }

        .form-container {
            flex: 1;
            padding: 20px;

            border-radius: 5px;
        }

        .form-container h2 {
            margin-top: 0;
        }

        .form-container input,
        .form-container textarea,
        .form-container button {
            display: block;
            width: 100%;
            margin-bottom: 10px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        .form-container button {
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-container button:hover {
            background-color: #45a049;
        }

        h1 {
            color: #1d4ed8;
            text-align: center;
            font-family: cursive;
        }

        h2 {
            text-align: center;
        }
        .thank{
            text-align: center;
        }
        .image{
            width: 80px;
            height: auto;
            margin-left:300px ;
        }
            .icons {
        display: flex;
        flex-direction: column;
        width: 200px;
        margin: 20px 0;
        gap: 8px;
       margin-left:180px;
        color: #1d4ed8;
      

    }
   

    .icons i {
        font-size: 10spx;
        
    }
    span{
        color: #4CAF50;
    }













    .contact-container {
            display: flex;
            background-color: #1d4ed8;
        }

        .inquiries-section {
            flex: 1;
            padding: 20px;
        }

        .inquiry-item {
            margin-bottom: 20px;
            padding: 10px 10px;
            color: aliceblue;
            position: relative;
            overflow: hidden;
            background-color: #a3e635;
            border-radius: 30px;
        }

        .form-section {
            flex: 1;
            padding: 20px;
            background-color: #fdfdfd;
            border-radius: 5px;
        }

        .form-section h2 {
            margin-top: 0;
        }

        .form-section input,
        .form-section textarea,
        .form-section button {
            display: block;
            width: 100%;
            margin-bottom: 10px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        .form-section button {
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-section button:hover {
            background-color: #45a049;
        }

        .main-title {
            color: #1d4ed8;
            text-align: center;
            font-family: cursive;
        }

        .form-title {
            text-align: center;
        }

        .logo-image {
            width: 35%;
        }

        .contact-icons div {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .contact-icons i {
            font-size: 24px;
            color: #fff7f7;
            margin-right: 10px;
        }

        .contact-text {
            color: #fff7f7;
            font-size: 17px;
        }

        .form-row {
            display: flex;
            gap: 10px;
        }

        .form-row .form-group {
            flex: 1;
        }

        .white-text {
            color: #fff7f7;
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
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
 <?php
require_once __DIR__ . '../config/process_db.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];

    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $inquiry = $_POST['inquiry'];

    $sql = "INSERT INTO contact_form (name,  phone, address, inquiry)
            VALUES ('$name', '$phone', '$address', '$inquiry')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    title: 'Success!',
                    text: 'Your message has been sent successfully.',
                    icon: 'success'
                }).then(function() {
                    window.location = 'contact.php';
                });
            });
        </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
    <h1>CONTACT US</h1>
    <br>
    <p class="thank "> Thank you for your interest in We-Wash Laundry! Whether you have a question, need assistance, or want to<br>
    
    provide feedback, we're here to help. You can reach us through the following channels:</p>
    <div class="container">
        <div class="inquiries">

           <img src="./image/Logo.png" class="image" alt="">

            <div class="icons">
                <a href="mailto:example@example.com"><i class="fas fa-envelope"><span>connect.wewash2gmail.com </span> </i></a>
                <a href="tel:+123456789"><i class="fas fa-phone-alt"><span>0939425295 </span> </i></a>
                <a href="https://www.facebook.com/yourpage" target="_blank"><i class="fab fa-facebook"><span>We-wash Laundry </span> </i></a>
            </div>
        </div>

        <div class="form-container">
        
            <form action="#" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="phone">Phone Number:</label>
                <input type="text" id="phone" name="phone" required>

                <label for="address">Address:</label>
                <textarea id="address" name="address" required></textarea>

                <label for="inquiry">Inquiry/Comments:</label>
                <textarea id="inquiry" name="inquiry" required></textarea>

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
<?php
require_once __DIR__ . '../config/process_db.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first-name'];
    $last_name = $_POST['last-name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $inquiry = $_POST['inquiry'];

    $sql = "INSERT INTO inquiries (first_name, last_name, phone, address, inquiry)
            VALUES ('$first_name', '$last_name', '$phone', '$address', '$inquiry')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    title: 'Success!',
                    text: 'Your message has been sent successfully.',
                    icon: 'success'
                }).then(function() {
                    window.location = 'contact.php';
                });
            });
        </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>


    <h1 class="main-title">Contact Form Inspo</h1>
    <div class="contact-container">
        <div class="inquiries-section">
            <p>Contact us</p>
            <img src="./image/logo.png" class="logo-image">
            <div class="contact-icons">
                <div>
                    <i class="fas fa-map-marker-alt"></i>
                    <span class="white-text">Anuva Residences, East Service Road, Vrgy<br>Buli, Muntinlupa City, Metro
                        Manila 1771</span>
                </div>
                <div>
                    <i class="fas fa-phone-alt"></i>
                    <span class="white-text">0998810805</a></span>
                </div>
                <div>
                    <i class="fas fa-envelope"></i>
                    <span class="white-text">inquiries@lababo.com</a></span>
                </div>
            </div>
        </div>
    
        <div class="form-section">
            <h4 class="form-title">Drop us a Message</h4>
            <form action="#" method="POST">
                <div class="form-row">
                    <div class="form-group">
                        <label for="first-name">First Name:</label>
                        <input type="text" id="first-name" name="first-name" required>
                    </div>
                    <div class="form-group">
                        <label for="last-name">Last Name:</label>
                        <input type="text" id="last-name" name="last-name" required>
                    </div>
                </div>
                <label for="phone">Phone Number:</label>
                <input type="text" id="phone" name="phone" required>
    
                <label for="address">Address:</label>
                <textarea id="address" name="address" required></textarea>
    
                <label for="inquiry">Inquiry/Comments:</label>
                <textarea id="inquiry" name="inquiry" required></textarea>
    
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
    <br>
    <br> <footer>
    <!-- <p><a href="https://www.facebook.com/wewashlaundry" target="_blank"><i class="fab fa-facebook-f"></i> Facebook</a></p>
    <p><a href="mailto:info@wewashlaundry.com"><i class="far fa-envelope"></i> Email</a></p><br> -->
        </div>
       <div class="footer-bottom">
    <p>&copy; 2024 We-Wash Laundry. All rights reserved.</p>
</div>
</footer>
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