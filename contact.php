<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require ('inc/links.php');?>
    <link rel="stylesheet" href="CSS/common.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <title>My Hotel Website - CONTACT</title>
</head>
<body class="bg-light">

 <?php require ('inc/header.php');?>

 <div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center">Contact Us</h2>
  <div class="h-line bg-dark"></div>
  <p class="text-center mt-3">Lorem ipsum dolor sit amet consectetur 
    adipisicing elit. Dignissimos </br> obcaecati earum est vitae dolores, perferendis libero saepe officiis ad dolorem.</p>
 </div>

 <div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4">
         <iframe class="w-100 mb-4  rounded" height="320px"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d147259.2918962582!2d14.970801709288285!3d12.087717338446696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x111963cd18fcf74f%3A0xb8a3e92c76d2aa3b!2sN&#39;Djamena%2C%20Tchad!5e0!3m2!1sfr!2str!4v1749042105526!5m2!1sfr!2str" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <h5><strong>Address</strong></h5>
          <a href="https://maps.app.goo.gl/dg8zihJghmVeZxMn8" target="_blank" class="d-inline-block text-decoration-none text-green mb-2"><i class="bi bi-geo-alt-fill"></i> Hiton HOTEL of Ndjamena</a>
          <h5 class="mt-4"><strong>Call Us</strong></h5>
            <a href="tel: +905449299436" class="d-inline-block mb-2 text-decoration-none text-green">
              <i class="bi bi-telephone-outbound"></i>+905449299436
            </a>
            <br>
            <a href="tel: +905449299436" class="d-inline-block  text-decoration-none  text-green">
              <i class="bi bi-telephone-outbound"></i>+905451032236
            </a>
            <h5 class="mt-4"><strong>Email</strong></h5>
            <a href="mailto:cnarcom2829@gmail.com" class="d-inline-block text-decoration-none text-green mb-2"><i class="bi bi-envelope"></i> cnarcom2829@gmail.com</a>
            <h5 class="mt-4"><strong>Follow Us</strong></h5>
            <a href="https://x.com/semexcellence?s=21"  target="_blank" class="d-inline-block mb-3 text-dark fs-5 me-2"> <i class="bi bi-twitter-x"></i>
            </a>
             <a href="https://www.facebook.com/@aliabdelkerimsem.ousman/" target="_blank" class="d-inline-block text-dark fs-5 me-2"> <i class="bi bi-facebook"></i>
            </a>
            <a href="http://www.youtube.com/@SemExcellence" target="_blank" class="d-inline-block text-dark fs-5 me-2"> <i class="bi bi-youtube"></i>
            </a>
             <a href="https://www.linkedin.com/in/ali-abdelkerim-sem" target="_blank" class="d-inline-block text-dark fs-5 me-2"> <i class="bi bi-linkedin"></i>
            </a>
            <a href="https://www.instagram.com/excellence_ina_madaga?igsh=MTRtbGswa3Eya2pqcw%3D%3D&utm_source=qr" target="_blank"   class="d-inline-block text-dark fs-5">
              <i class="bi bi-instagram"></i>
            </a>
      </div>
    </div>
    <!-- Contact Form -->
    <div class="col-lg-6 col-md-6 px-4">
      <div class="bg-white rounded shadow p-4 ">
        <form action="">
          <h5>Send a message</h5>
          <div class="mt-3">
           <label class="form-label" style="font-weight: 500;">Enter The Name</label>
           <input type="text" class="form-control shadow-none" placeholder="Enter name" required>
        </div>
        <div class="mt-3">
           <label class="form-label" style="font-weight: 500;">Enter Email</label>
           <input type="email" class="form-control shadow-none" placeholder="Enter Email" required>
        </div>
        <div class="mt-3">
           <label class="form-label" style="font-weight: 500;">Subject</label>
           <input type="text" class="form-control shadow-none" placeholder="Enter text" required>
        </div>
        <div class="mt-3">
           <label class="form-label" style="font-weight: 500;">Enter your message</label>
           <textarea class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
        </div>
        <button type="submit" class="btn text-white custom-bg mt-2" type="submit" data-bs-dismiss="modal">
            SEND
        </button>
        </form>
      </div>
    </div>
 </div>
</div>

  <?php require ('inc/footer.php');?>

</body>
</html>