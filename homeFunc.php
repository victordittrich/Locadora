<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8"/> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>

  <style>* {
    margin: 0;
    padding: 0;
    text-decoration: none;
    list-style: none;
  }
  
  body{
    background-color: black;
  }

  a {
    color: rgba(235, 223, 223, 0.719);
    text-decoration: none;
    transition: 0.3s;
  }
  
  a:hover {
    color: white;
  }
  
  .logo {
    font-size: 24px;
    text-transform: uppercase;
    letter-spacing: 4px;
  }
  
  nav {
    display: flex;
    justify-content: space-around;
    align-items: center;
    font-family: system-ui, -apple-system, Helvetica, Arial, sans-serif;
    background: #23232e;
    height: 8vh;
  }
  
  main {
    background: url("images/bg.gif") no-repeat center center;
    background-size: cover;
    height: 92vh;
    opacity: 0.6;
  }
  
  .nav-list {
    list-style: none;
    display: flex;
  }
  
  .nav-list li {
    letter-spacing: 3px;
    margin-left: 40px;
  }
  
  .mobile-menu {
    display: none;
    cursor: pointer;
  }
  
  .mobile-menu div {
    width: 32px;
    height: 2px;
    background: #fff;
    margin: 8px;
    transition: 0.3s;
  }
  
  @media (max-width: 999px) {
    body {
      overflow-x: hidden;
    }
    .nav-list {
      position: absolute;
      top: 8vh;
      right: 0;
      width: 50vw;
      height: 92vh;
      background: #23232e;
      flex-direction: column;
      align-items: center;
      justify-content: space-around;
      transform: translateX(100%);
      transition: transform 0.3s ease-in;
      font-size: 24px;
    }
    .nav-list li {
      margin-left: 0;
      opacity: 0;
    }
    .mobile-menu {
      display: block;
    }
  }
  
  .nav-list.active {
    transform: translateX(0);
  }
  
  @keyframes navLinkFade {
    from {
      opacity: 0;
      transform: translateX(50px);
    }
    to {
      opacity: 1;
      transform: translateX(0);
    }
  }
  
  .mobile-menu.active .line1 {
    transform: rotate(-45deg) translate(-8px, 8px);
  }
  
  .mobile-menu.active .line2 {
    opacity: 0;
  }
  
  .mobile-menu.active .line3 {
    transform: rotate(45deg) translate(-5px, -7px);
  }


  .tooltip {
    position: relative;
    display: inline-block;
    border-bottom: 1px dotted black; /* If you want dots under the hoverable text */
  }

  .tooltip .tooltiptext {
    visibility: hidden;
    width: 450px;
    background-color: #555;
    color: #fff;
    text-align: center;
    padding: 5px 0;
    border-radius: 6px;
  
    /* Position the tooltip text */
    position: absolute;
    z-index: 1;
    bottom: -870%;
    left: 50%;
    margin-left: -60px;
  
    /* Fade in tooltip */
    opacity: 0;
    transition: opacity 0.3s;
  }
  
  /* Tooltip arrow */
  .tooltip .tooltiptext::after {
    content: "";
    position: absolute;
    top: -6%;
    left: 13%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #555 transparent transparent transparent;
    transform: rotate(180deg);
  }
  
  /* Show the tooltip text when you mouse over the tooltip container */
  .tooltip:hover .tooltiptext {
    visibility: visible;
    opacity: 1;
  }

  ul li a:hover{
    border-bottom: 1px solid white;
  }

</style>

  </head>

  <body>
  <?php
			//session_start inicia a sessão
			session_start();

      if(isset($_SESSION['cpf'])){
			if ($_SESSION['cpf'] == '09720639946'){
        session_destroy();
				header('Location: index.php');
				exit;
			}
    }else{
        session_destroy();
				header('Location: index.php');
				exit;
    }

		?>
    <header>
      <nav>
        <a class="logo" href="home.php">Locadora | Funcionário</a>
        <div class="mobile-menu">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
          <ul class="nav-list">
            <li><a href="cadastrarFunc.php">CDT. CLIENT.</a></li>
            <li><a href="#">ADD CARROS</a></li>
            <li><a href="perfil.php"><img src="images/perfil.png" height="30px" alt=""></a></li>
          </ul>
      </nav>
    </header>
    
    <main>
    </main>

    <script src="mobile-navbar.js"></script>
  </body>
</html>