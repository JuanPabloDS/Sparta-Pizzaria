 <div class="principal ">
  <div class="menu-fixo">
  <div class="menu ">
      <nav class="navbar navbar-expand-lg ">
          <div class="collapse navbar-collapse navegacao" id="conteudoNavbarSuportado">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link btn-outline-warning cor"  href="../index.php">SPARTA PIZZARIA <span class="sr-only">(página atual)</span></a>
              </li>
               <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle btn-outline-warning cor" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Pizza
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="pizzas.php">Listar</a>
                <a class="dropdown-item" href="form_pizza.php">Cadastrar</a>
              </div>
              </li>
               <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle btn-outline-warning cor" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Bebidas
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="bebidas.php">Listar</a>
                <a class="dropdown-item" href="form_bebida.php">Cadastrar</a>
              </div>
              </li>
               <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle btn-outline-warning cor" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Clientes
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="clientes.php">Listar</a>
                <a class="dropdown-item" href="form_cliente.php">Cadastrar</a>
              </div>
              </li>
               <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle btn-outline-warning cor" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Usuários
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="usuarios.php">Listar</a>
                <a class="dropdown-item" href="form_usuario.php">Cadastrar</a>
              </div>
              </li>
            </ul>


            <div class="container col-4" style="padding-bottom: 11px; padding-left: 0px;">
              <img class="logo" src="..\assets\img\logo1.png" class="logo" alt="Logo" title="Logo Sparta Pizzaria">
            </div>
            
             <span class="navbar-text" style="text-decoration:none;">
               <a href="form_usuario.php?id=<?= $_SESSION['id_usuario'] ?>">
            <strong class=" botao-menu" style="text-decoration:none;">
              <?= $_SESSION['nome'] ?>
            </strong>
            <img src="/SpartaPizzaria/administrativo/assets/img/usuarios/<?= ($_SESSION['imagem'] != '' && file_exists('assets/img/usuarios/'.$_SESSION['imagem']) ? $_SESSION['imagem'] : 'usuario.png' ) ?>" class="rounded-circle user-img-menu">
          </a>
      <small>  <a class="btn btn-outline-warning  botao-menu" href="logout.php" onclick="return confirm('Deseja realmente sair?')">Sair</a></small>
    </span>

            
          </div>
      </nav>
        
                  
    <div class="linha">
    </div>
      </div>
    </div>
  </div>
</nav>
</div>
</div>
</div>
</div>
<div class="container " style="margin-top:40px; background-color: black; color: white;">