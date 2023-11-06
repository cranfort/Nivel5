<?php include_once 'includes/header.php'   ?>
      <!-- Mailform-->
    
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row row-50 justify-content-xl-between flex-lg-row-reverse">
            <div class="col-lg-4 col-xl-3">
              <div class="row row-30 row-xl-60">
                <div class="col-sm-4 col-lg-12">
                  <h4>Dirección</h4>
                  <p class="offset-top-1"><a class="link-default" href="#">La Tigra San Carlos, <br class="d-none d-md-block">Costa Rica</a></p>
                </div>
                <div class="col-sm-4 col-lg-12">
                  <h4>Teléfonos</h4>
                  <ul class="list-0 offset-top-1">
                    <li><a class="link-default" href="tel:#">8487-1825</a></li>
                    <li><a class="link-default" href="tel:#">6381-5603</a></li>
                  </ul>
                </div>
                <div class="col-sm-4 col-lg-12">
                  <h4>E-mails</h4>
                  <ul class="list-0 offset-top-1">
                    <li><a class="link-default" href="mailto:#">encuentratucarrera@gmail.com</a></li>
                    <li><a class="link-default" href="mailto:#">miltonurielleivagarcia@gmail.com</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-8">
              <h2>Póngase en contacto con nosotros</h2>
              <!-- RD Mailform-->
              <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                <div class="row row-30">
                  <div class="col-md-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-first-name" type="text" name="first-name" data-constraints="@Required">
                      <label class="form-label" for="contact-first-name">Nombre</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-last-name" type="text" name="last-name" data-constraints="@Required">
                      <label class="form-label" for="contact-last-name">Apellido</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-wrap">
                      <label class="form-label" for="contact-email">E-mail</label>
                      <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Required @Email">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-wrap">
                      <label class="form-label" for="contact-phone">Teléfono</label>
                      <input class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@Required @PhoneNumber">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-wrap">
                      <label class="form-label" for="contact-message">Mensaje</label>
                      <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                    </div>
                  </div>
                  <div class="col-12">
                    <button class="button button-lg button-primary button-raven" type="submit">Enviar</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      
      
      <?php include_once 'includes/footer.php'   ?>