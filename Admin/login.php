<!DOCTYPE html>
<html lang="en">

<?php include 'pages/head.php'; ?>

<body>
  <div class="container-fluid vh-100">
  <div class="row h-100">

    <!-- Left side: Login Form -->
    <div class="col-md-6 d-flex justify-content-center align-items-center">
      <div class="card w-75">
        <form method="post">
          <h2 class="title">Sign In</h2>
          <div class="email-login">
            <label for="email"><b>Username or Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" id="email" required>
            
            <label for="password"><b>Password</b></label>
            <input type="password" name="password" id="password" placeholder="Enter Password" required>
          </div>
          <button type="button" onclick="login(this.form)" class="cta-btn">Sign In</button>
          <p class="mt-2">Don't have an account? <a href="register.php">Sign Up</a> or <a href="../index.php">Home</a></p>
        </form>
      </div>
    </div>

    <!-- Right side: Full height animation -->
    <div class="col-md-6 p-0">
      <div class="animation-fullside d-flex flex-column align-items-center justify-content-center h-100">
        <img id="authImage" src="../uploads/animation/img11.jpg" class="img-fluid rounded mb-3" style="width:550px;height:450px;">
        <h3 id="authText" class="text-danger text-center">ঢাকার ভিতর ২৪ ঘণ্টায় পার্সেল ডেলিভারি!</h3>
      </div>
    </div>

  </div>
</div>


  <script>
  // Image + Text slider
  const slides = [
    { img: '../uploads/animation/img22.jpg', text: 'ঢাকার বাহিরে ৪৮ ঘণ্টায় ডেলিভারি!' },
    { img: '../uploads/animation/img33.jpg', text: 'ঢাকার বাহিরে ৪৮ ঘণ্টায় ডেলিভারি!' },
    { img: '../uploads/animation/img44.jpg', text: 'ঢাকার ভিতর ২৪ ঘণ্টায় পার্সেল ডেলিভারি!' }
  ];

  let i = 0;
  setInterval(() => {
    i = (i + 1) % slides.length;
    document.getElementById('authImage').src = slides[i].img;
    document.getElementById('authText').innerText = slides[i].text;
  }, 3000); 
</script>

  <style>
    .card {
      font-family: sans-serif;
      border-radius: 10px;
      background-color: #fff;
      padding: 1.8rem;
      box-shadow: 2px 5px 20px rgba(0, 0, 0, 0.1);
    }

    .title {
      text-align: center;
      font-weight: bold;
      margin: 0 0 1rem 0;
    }

    .email-login {
      display: flex;
      flex-direction: column;
    }

    .email-login label {
      color: rgb(120, 120, 120);
      margin-top: 8px;
    }

    input[type="text"],
    input[type="password"] {
      padding: 12px 15px;
      margin-top: 5px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 8px;
    }

    .cta-btn {
      background-color: rgb(69, 69, 185);
      color: white;
      padding: 15px;
      margin-top: 10px;
      width: 100%;
      border-radius: 10px;
      border: none;
    }
  .animation-fullside {
  background-color:  #f0f0f0;
  height: 100vh; 
  width: 100%;
  padding: 20px;
  text-align: center;
}
  </style>
</body>
</html>
