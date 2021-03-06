  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 text-center">
            <h4>Our Newsletter</h4>
            <p>Subscribe to our news letter to get updates on our new resourses.</p>
          </div>
          <div class="col-lg-6">
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <p class="alert"></p>
              <input type="email" name="email" id="email" /><input type="button" class="btn btn-warning" onclick="sub()" value="Subscribe" />
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="assets/img/logo.png" alt="">
              <span>Programming_Droid</span>
            </a>
            <p>We serve you with great resourses... <br /> <b>follow us on ....</b>  </p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram bx bxl-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin bx bxl-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">an Others..</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              <strong>Phone:</strong> +234 906 6730 090<br>
              <strong>Email:</strong> peogrammingdroid2200@gmail.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Programming_Droid</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
        Designed by <a href="index.php">Programming_Droid</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


<!-- Vendor JS Files -->
<script src="./assets/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="./assets/aos/aos.js"></script>
  <script src="./assets/php-email-form/validate.js"></script>
  <script src="./assets/swiper/swiper-bundle.min.js"></script>
  <script src="./assets/purecounter/purecounter.js"></script>
  <script src="./assets/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="./assets/glightbox/js/glightbox.min.js"></script>

<script src="./assets/js/main.js"></script>
<script>

  // cursor Section
  const cursor = document.querySelector('.cursor');

document.addEventListener('mousemove', e => {
    cursor.setAttribute("style", "top: "+(e.pageY - 10)+"px; left: "+(e.pageX - 10)+"px;")
})

document.addEventListener('click', () => {
    cursor.classList.add("expand");

    setTimeout(() => {
        cursor.classList.remove("expand");
    }, 500);
})


  // subscription section 
sub =()=>{
 const mail = $('#mail');

  if(mail !=="" || mail == null){
    setTimeout(()=>{
      $("#loader").css('display','block');
      $.ajax({
        url:"./inc/function.php",
        method:"POST",
        dataType:"json",
        data:{
          email: mail.val()
        },
        success: (res)=>{
			if (res.response =="confirmation email has been sent to ") {
				$('#response').html("<center><p class='text-success'>"+res.status+ " " +res.response+mail.val()+"</p></center>");
				setTimeout(()=>{
					const rootElement = document.documentElement;
					$('#loader').css('display','none');
					rootElement.scrollTo({
						top: 0,
						behavior: "smooth"
					});
					setTimeout(()=>{
						location.href = './index.html';

					},3000);
				},1000);

			}else {
				$('#response').html("<center><p class='text-danger'>"+res.status+ " " +res.response+"</p></center>");
                const rootElement = document.documentElement;
                setTimeout(()=>{
                rootElement.scrollTo({
						top: 0,
						behavior: "smooth"
					});
				$('#loader').css('display','none');
					// location.href = './login.html';

					},3000);
			}
		}
      })
    })
  }

}

</script>
</body>
</html>