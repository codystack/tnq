      <!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-muted">
            &copy; <script>document.write(new Date().getFullYear());</script> All Rights Reserved :: Powered by <a href="https://voteonline.com.ng" class="font-weight-bold ml-1 text-default-color" target="_blank">Vote Online&trade;</a>
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="https://voteonline.com.ng/contact/" class="nav-link" target="_blank">Get Support</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="./assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="./assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="./assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="./assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="./assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="./assets/js/voteonline.js?v=1.2.0"></script>

   <!-- Contestant Code Copy Function -->
    <script>
        function myFunction() {
        /* Get the text field */
        var copyText = document.getElementById("conCode");

        /* Select the text field */
        copyText.select();
        copyText.setSelectionRange(0, 99999); /*For mobile devices*/

        /* Copy the text inside the text field */
        document.execCommand("copy");

        /* Alert the copied text */
        alert("Copied to clipboard: " + copyText.value);
        }
    </script>
    <!-- Contestant Code Copy Function -->

              <script>
                var time = new Date().getHours();
                if (time < 12) {
                  greeting = "Good morning";
                } else if (time < 16) {
                  greeting = "Good Afternoon";
                } else {
                  greeting = "Good evening";
                }
                document.getElementById("greet").innerHTML = greeting;
              </script>
</body>

</html>