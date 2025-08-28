   <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="https://semfils.wixsite.com/aliabdelkerimsem" href="index.php" target="_blank">SOUROUBE SEM HOTEL</a>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active me-2" aria-current="page" href="index.php">HOME </a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="rooms.php">Rooms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="facilities.php">Fcacilities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="contact.php">Contact us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
     </ul>
     <div class="d-flex">
     <button type="button" class="btn btn-outline-dark shadow-none me-lg-2 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
      <i class="bi bi-person-circle"></i> Login
     </button>

      <button type="button" class="btn btn-outline-dark shadow-none " data-bs-toggle="modal" data-bs-target="#registerModal">
           <i class="bi bi-box-arrow-in-right"></i> Register
      </button>
      </div>
    </div>
  </div>
</nav>

<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form></form>
      <div class="modal-header">
        <h5 class="modal-title d-flex align-items-center"><i class="bi bi-person-circle fs-3 me-2"></i>User Login</h5>
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
           <label class="form-label">Email address</label>
           <input type="email" class="form-control shadow-none" placeholder="Enter email" required>
        </div>
        <div class="mb-3">
           <label class="form-label">Password</label>
           <input type="password" class="form-control shadow-none" placeholder="Enter password" required>
        </div>
        <div class="d-flex align-items-center justify-content-between mb-2">
          <button type="submit" class="btn btn-dark shadow-none" type="submit" data-bs-dismiss="modal">
            LOGIN
        </button>
        <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot password?</a>
      </div>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
  <form>
      <div class="modal-header">
    <h5 class="modal-title d-flex align-items-center"><i class="bi bi-person-lines-fill fs-3 me-2"></i>User Registration </h5>
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
    <div class="modal-body">
      <span class="badge text-bg-light text-dark mb-3 text-wrap lh-base">
        Note : Your details must match with your ID card details(Alisem card, passport, driving licence etc). This will be required during check-in.
      </span>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 ps-0 mb-3"><label class="form-label">Enter name</label>
          <input type="text" class="form-control shadow-none" placeholder="Enter your name" required>
        </div>
        <div class="col-md-6 ps-0 mb-3"><label class="form-label">Email Adress</label>
          <input type="email" class="form-control shadow-none" placeholder="Enter your email" required>
        </div>
        <div class="col-md-6 ps-0 mb-3"><label class="form-label">Phone number</label>
          <input type="number" class="form-control shadow-none" placeholder="Enter your phone number" required>
        </div>
        <div class="col-md-6 ps-0 mb-3"><label class="form-label">Pictures</label>
          <input type="file" class="form-control shadow-none" accept="image/*" required>
        </div>
         <div class="col-md-12 ps-0 mb-3"><label class="form-label">Address Info</label>
          <textarea class="form-control shadow-none" rows="1"></textarea>
        </div>
        <div class="col-md-6 ps-0 mb-3"><label class="form-label">Pincode</label>
          <input type="number" class="form-control shadow-none">
        </div>
        <div class="col-md-6 ps-0 mb-3">
          <label class="form-label">Date of birth</label>
          <input type="date" class="form-control shadow-none">
        </div>
        <div class="col-md-6 ps-0 mb-3"><label class="form-label">Password</label>
          <input type="password" class="form-control shadow-none">
        </div>
        <div class="col-md-6 ps-0 mb-3"><label class="form-label">Confirm password</label>
          <input type="password" class="form-control shadow-none">
        </div>
      </div>
    </div>
    <div class="text-center my-1">
      <button  type="submit" class="btn btn-dark shadow-none">REGISTER</button>
    </div>
    </div>
  </form>
    </div>
  </div>
</div>