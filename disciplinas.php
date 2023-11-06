<?php include_once 'includes/headermenu.php'   ?>
      <section class="section section-xs">
        <div class="container">
          <!-- Bootstrap tabs-->
          <center><h4>Puedes Explorar y Conocer Detalles de tus Áreas Favoritas</h4></center>
          <div class="tabs-custom tabs-horizontal tabs-corporate" id="tabs-1">
            
            <!-- Nav tabs-->
            <ul class="nav nav-tabs">
              <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-1-1" data-toggle="tab"><span class="nav-link-main">Área</span></a></li>
              <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-2" data-toggle="tab"><span class="nav-link-main">Arte y Letras</span></a></li>
              <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-3" data-toggle="tab"><span class="nav-link-main">Arte Publicitario</span></a></li>
              <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-4" data-toggle="tab"><span class="nav-link-main">Lenguas</span></a></li>
            </ul>
            <!-- Tab panes-->
            <div class="tab-content">
            <?php include_once 'modals/Artes.php'   ?>
              
              

               
            </div>
          </div>
        </div>
      </section>
      <!-- Page Footer-->



<?php include_once 'includes/footer.php'   ?>