<header>
        <nav class="navbar navbar-expand-md m-0">
          <div class="container-fluid p-0 m-0">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <ul class="navbar-nav mb-2  mt-2">
                <li class="nav-item px-3">
                  <a class="nav-link py-Iaria-current="page" <?php echo ($pg=="inicio")? "active":""?>"  href="index.php">Inico</a>
                </li>
                
                <li class="nav-item px-3">
                    <a class="nav-link py-I  <?php echo ($pg=="sobre-mi")? "active":""?>" href="sobre-mi.php">Sobre Mi</a>
                  </li>
                  <li class="nav-item px-3">
                    <a class="nav-link  px-3 py-I  <?php echo ($pg=="proyectos")? "active":""?>" href="proyectos.php">Proyectos</a>
                  </li>
                <li class="nav-item px-3">
                    <a class="nav-link  py-I  <?php echo ($pg=="contactos")? "active":""?>" href="contacto.php" >Conctacto</a>
                  </li>
                  <li class="nav-item ">
                  <a href="" class="btn btn-rojo2 ">Descargar mi CV <i class="fas fa-download"></i></a>
                  </li>
             
            
            </ul>
            </div>
          </div>
        </nav>
      </header>