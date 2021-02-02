<?php include 'sendmail.php'; ?>

<!--header-->
<?php include '../includes/header-page.php'; ?>




<div class="container-fluid my-5 p-8">
  <h1>Comment nous contacter ?</h1>
  <div class="row">
    <div class="col-md-12 col-lg-4 text-center">
      <h2>Passez un appel ?</h2>
      <a
        rel="noopener noreferrer"
        class="btn text-black"
        href="tel:+0468324949"
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="currentColor"
          class="bi bi-telephone"
          viewBox="0 0 16 16"
        >
          <path
            d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"
          />
        </svg>
        04.68.32.49.49
      </a>
      <div class="contact-info">
        <div><i class="fas fa-map-marker-alt"></i>Address, City, Country</div>
        <div><i class="fas fa-envelope"></i>contact@email.com</div>
        <div><i class="fas fa-phone"></i>+00 0000 000 000</div>
        <div><i class="fas fa-clock"></i>Mon - Fri 8:00 AM to 5:00 PM</div>
      </div>
    </div>
    <div class="col-md-12 col-lg-8 text-center">
      <h2 class="mb-5">Envoyer un Email ?</h2>
      <!--contact section start-->

      <!--alert messages start-->
      <?php echo $alert; ?>
      <!--alert messages end-->
      <div class="contact-section">
        <div class="contact-form">
          <form class="contact" action="" method="post">
            <input
              type="text"
              name="name"
              class="text-box"
              placeholder="Prenom"
              required
            />
            <input
              type="email"
              name="email"
              class="text-box"
              placeholder="Email"
              required
            />
            <input
              type="number"
              name="postal"
              class="text-box"
              placeholder="Code Postal"
              required
            />
            <input
              type="text"
              name="city"
              class="text-box"
              placeholder="Ville"
              required
            />
            <input
              type="text"
              name="objets"
              class="text-box w-100"
              placeholder="Objets"
              required
            />
            <textarea
              name="message"
              id=""
              cols="30"
              rows="10"
              placeholder="Message"
            ></textarea>
            <input type="submit" name="submit" class="send-btn" value="Send" />
          </form>
          <?php
            if(isset($output)){ echo $output;}
          ?>
        </div>
      </div>
      <!--contact section end-->
    </div>
    <div class="col-12 text-center">
      <h2>Venez nous voir !</h2>

      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2909.06611892999!2d3.0048772149990457!3d43.18712347913998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b1ac6e237240cd%3A0xfa638979dd755178!2s8%20Rue%20Ancienne%20Porte%20de%20B%C3%A9ziers%2C%2011100%20Narbonne!5e0!3m2!1sfr!2sfr!4v1611734652187!5m2!1sfr!2sfr"
        class="map"
        frameborder="0"
        style="border: 0"
        allowfullscreen=""
        aria-hidden="false"
        tabindex="0"
      ></iframe>
    </div>
  </div>
</div>

<?php
header('Location: contact.php');
?>

<!--footer-->
<?php include '../includes/footer-page.php'; ?>
