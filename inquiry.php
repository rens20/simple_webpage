<?php
require_once __DIR__ . '../config/process_db.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $inquiry = $_POST['inquiry'];

    $sql = "INSERT INTO contact_form (name, phone, address, inquiry) VALUES ('$first_name', '$phone', '$address', '$inquiry')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    title: 'Success!',
                    text: 'Your message has been sent successfully.',
                    icon: 'success'
                }).then(function() {
                    window.location = 'inquiry.php';
                });
            });
        </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Self-Service Laundry</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
    <br><br><br><br><br><br>
    <h1>INQUIRY</h1>
    <div class="container">
        <div class="inquiries" id="container">
            <div class="inquiry">
                <h3 class="question" data-toggle="answer1">1. What are your operating hours?</h3>
                <p class="answer" id="answer1">WE-Wash Laundry full service is open 24 hours.</p>
            </div>
            <div class="inquiry">
                <h3 class="question" data-toggle="answer2">2. How do I use the self-service machines?</h3>
                <p class="answer" id="answer2">Using our self-service machines is easy! Load your laundry into the washer, add detergent, select your cycle, and start. Transfer clothes to the dryer when washing is complete.</p>
            </div>
            <div class="inquiry">
                <h3 class="question" data-toggle="answer3">3. Do you provide detergent and other supplies?</h3>
                <p class="answer" id="answer3">Yes, we offer high-quality detergent and other laundry essentials for purchase at our facility, but you can bring your own!</p>
            </div>
            <div class="inquiry">
                <h3 class="question" data-toggle="answer4">4. What services do you offer in your full-service laundry?</h3>
                <p class="answer" id="answer4">Our full-service includes pick-up and delivery, professional washing, folding or hanging, and accommodating special requests.</p>
            </div>
            <div class="inquiry">
                <h3 class="question" data-toggle="answer5">5. How do I schedule a pick-up for full-service laundry?</h3>
                <p class="answer" id="answer5">You can schedule a pick-up by contacting us via phone or through our website. We'll arrange a convenient time for collection.</p>
            </div>
        </div>
        <div class="form-container">
            <h2>Do you have any other concerns? Submit your inquiries below!</h2>
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
    <footer>
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
                    const answer = document.getElementById(answerId);
                    if (answer.style.display === 'none' || answer.style.display === "") {
                        answer.style.display = 'block';
                        setTimeout(function () {
                            answer.style.display = 'none';
                        }, 5000);
                    } else {
                        answer.style.display = 'none';
                    }
                });
            });
        });
    </script>
</body>
</html>

  <style>
        body {
            font-family: Arial, sans-serif;
            /* background-color: #395cbb; */
   font-family: cursive;
            
        }
        h1{
            text-align: center;
        color:#fff;
        }
 .answer{
    display: none;
    margin-left: 30px;
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

        .inquiry h3 {
            margin-top: 0;
        }

        .inquiry-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;

            background-size: cover;
            z-index: -1;
        }

        .read-more {
            position: absolute;
            background-color: #a3e635;
            color: rgb(15, 15, 15);
            padding: 18px;
            margin-left: 520px;
            border: none;
            border-radius: 20px;
            cursor: pointer;
              font-family: cursive;
        
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
        h1{
            color:#1d4ed8;
            text-align: center;
            font-family: cursive;
        }
        h2{
            text-align: center;
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