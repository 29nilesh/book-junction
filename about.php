<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>About us</h3>
   <p> <a href="home.php"></a>  </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/book.jpg" alt="">
      </div>

      <div class="content">
         <h3><b>Why choose us?</b></h3>
         <p>Find your next great read with ease. We curate a diverse selection of books from the latest bestsellers to hidden gems.We prioritize customer satisfaction and guarantee a hassle-free shopping experience, with easy returns and fast shipping.</p>
         <p>Join our community of book lovers and discover new titles through our exclusive author interviews, book clubs, and events.</p>
         <a href="contact.php" class="btn">Contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">Client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>The prices of the books were very cheap, especially considering the high quality of the books. I found the same books in other sites at very high prices.Overall, I was extremely surprised with my experience at Book junction. The site was poorly stocked, the contact members were helpful and the prices were too much affordable. I would recommend this website to everyone one.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Vinit Mahato</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>I recently discovered this website and I am so happy that I did! The website has a great selection of books from Indian authors and the prices are very reasonable. The website is user-friendly and easy to navigate, making it simple to find the books I am interested in. The checkout process is quick and easy, and the fast delivery is a huge plus. </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Anwar Hussain</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>I recently purchased a book from this website and I was very impressed with the fast delivery and great customer service. The website is easy to navigate and I was able to find the book I was looking for quickly. The book description was detailed and accurate, and the checkout process was seamless. I highly recommend this website for anyone looking to purchase Indian author books.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sandeep kumar</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>Great selection of Indian author books at competitive prices. Quick and easy checkout process.Impressed with the quality of books and fast delivery. User-friendly website design.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Khushi Kumari</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>	Excellent customer service and attention to detail. Will definitely be a returning customer.Easy to navigate website with detailed book descriptions. Fast and secure checkout process.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Jotin Kumar</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>I am happy with the fast delivery and quality of the books I received. The website was easy to use and I had no issues with the checkout process.I had a great experience shopping on this website. The book descriptions were accurate and the checkout process was quick and easy.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Rahul Dutta</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">Greate authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/rk narayan1.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>R. K. Narayan</h3>
      </div>

      <div class="box">
         <img src="images/A._P._J._Abdul_Kalam.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Dr. A. P. J. Abdul Kalam </h3>
      </div>

      <div class="box">
         <img src="images/Author-Chetan-Bhagat.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Chetan Bhagat </h3>
      </div>

      <div class="box">
         <img src="images/Salman_Rushdie.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Salman Rushdie</h3>
      </div>

      <div class="box">
         <img src="images/jhumpa lahiri.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Jhumpa Lahiri</h3>
      </div>

      <div class="box">
         <img src="images/vikram_seth.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Vikram Seth</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>