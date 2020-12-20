 <!-- Footer -->
 <footer class="py-5" id="footer-main">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-xl-6">
          <div class="copyright text-center text-muted">
          &copy; <script>document.write(new Date().getFullYear());</script> All Rights Reserved :: Built by <a href="https://www.thankgodokoro.codes" class="font-weight-bold ml-1 text-default-color" target="_blank">TeeGee</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Vote Online Scripts -->
  <!-- Core -->
  <script src="./assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="./assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="./assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Vote Online JS -->
  <script src="./assets/js/voteonline.js?v=1.2.0"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script src="./assets/js/custom.js"></script>
  <script src="https://js.paystack.co/v1/inline.js"></script>
  <script src="assets/js/pay.js"></script>
  <script type="text/javascript">
    window.onload = function () {
        var txtPassword = document.getElementById("txtPassword");
        var txtConfirmPassword = document.getElementById("txtConfirmPassword");
        txtPassword.onchange = ConfirmPassword;
        txtConfirmPassword.onkeyup = ConfirmPassword;
        function ConfirmPassword() {
            txtConfirmPassword.setCustomValidity("");
            if (txtPassword.value != txtConfirmPassword.value) {
                txtConfirmPassword.setCustomValidity("Passwords do not match.");
            }
        }
    }
  </script>

</body>

</html>