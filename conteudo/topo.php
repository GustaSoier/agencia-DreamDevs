<body style="background-color: rgb(9, 10, 36);">
<header class="topo" id="topoFixo">

<img src="img/novologo.png" alt="Logo da Dreams Devs">
    
  <button class="abrir-menu"></button>
    <nav class="menu">
    <button class="fechar-menu"></button>

    <?php 
        $url = $_SERVER ['REQUEST_URI'];
        $urlBase = basename ($url);
        //echo $urlBase
        
        ?>

        <ul>
          <li><a href="index.php" <?php if ($urlBase == 'index.php') echo 'class="ativo"'; ?>>Home </a></li>
          <li><a href="etapas.php" <?php if ($urlBase == 'etapas.php') echo 'class="ativo"'; ?>>etapas</a></li>
          <li><a href="apresentacao.php" <?php if ($urlBase == 'apresentacao.php') echo 'class="ativo"'; ?>>apresentacao</a></li>
          <li><a href="solicitarcontato.php" <?php if ($urlBase == 'solicitarcontato.php') echo 'class="ativo"'; ?>>solicitar contato</a></li>
          <li><a href="equipe.php" <?php if ($urlBase == 'equipe.php') echo 'class="ativo"'; ?>>equipe</a></li>
        </ul>

    </nav>
    <button>LOGIN</button>
    </header>
   