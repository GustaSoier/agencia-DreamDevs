<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" integrity="sha512-HXXR0l2yMwHDrDyxJbrMD9eLvPe3z3qL3PPeozNTsiHJEENxx8DH2CxmV05iwG0dwoz5n4gQZQyYLUNt1Wdgfg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/dashboard.css">
</head>
<body>
    <header> 
        <div class="conteudo-header">
        <img src="img/logo02.svg" alt="Logo" class="logo"> 
        <div class="login">       
            <img src="img/avatar.png" alt="Foto do usuário">
            <span>Usuário</span>
        </div> 
        <div class="sair">
            <i class="ri-login-box-line"></i>
            <h3>Sair</h3>
        </div>
    </div>  
    </header>

    <div class="container">
        <aside>
            <nav>
                <span></span>
                <div>
                    <i class="ri-user-fill"></i>
                    <a href="index.php?p=login">Login</a>             
                </div>
                </a>
                <span></span>
        
                <div>
                    <i class="ri-building-4-line"></i>
                    <a href="index.php?p=sobre">Sobre</a>  
                </div>
                <span></span>    
        
                <div>
                    <i class="ri-briefcase-line"></i>
                    <a href="index.php?p=servico">Serviços</a>
                </div>
                <span></span>

                <div>
                    <i class="ri-mail-line"></i>
                    <a href="index.php?p=blog">Blog</a>
                </div>
                <span></span>
   
                <div>
                    <i class="ri-file-image-line"></i>
                    <a href="index.php?p=galeria">Galeria</a>
                </div>
                <span></span>

                <div>
                    <i class="ri-team-line"></i>
                    <a href="index.php?p=depoimento">Depoimento</a>
                </div>
                <span></span>
        
                <div>
                    <i class="ri-phone-line"></i>
                    <a href="index.php?p=contato">Contato</a>
                </div>
                <span></span>


            </nav>
        </aside>

        <main>
            <?php

                $pagina = @$_GET['p'];

                switch ($pagina){

                    case 'sobre':
                        require_once('sobre/sobre.php');
                        break;

                    case 'servico':
                        require_once('servico/servico.php');
                        break;

                    case 'blog':
                        require_once('blog/blog.php');
                        break;

                    case 'galeria':
                        require_once('galeria/galeria.php');
                        break;

                    case 'depoimento':
                        require_once('depoimento/depoimento.php');
                        break;

                    case 'contato':
                        require_once('contato/contato.php');
                        break;

                        default:
                        echo 'Dashboard';
                        break;
                }
                
                //Poderia ser feito com se e senao
                // if($pagina == NULL){
                //     echo "DASHBOARD";
                // }
                // else{
                //     if ($pagina == 'servico'){
                //         require_once('servico/servico.php');
                //     }
                // }
?>
        </main>
    </div>

</body>
</html>