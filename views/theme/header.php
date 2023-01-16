<header class="p-0 m-0 fixed-top nav-bar-list" id="nav-bar-list-id">
    <div class="container-md p-0">
        <nav class="navbar navbar-expand-md" id="navbar">
            <div class="row d-flex flex-row flex-nowrap justify-content-end">
                <div class="col-md">
                    <a class="navbar-brand py-0" href="#"><img src="./assets/images/Logo.svg" width="75px"></a>
                    <button class="navbar-toggler ms-auto me-0 text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa-sharp fa-solid fa-bars text-white fs-2"></i>
                    </button>
                </div>
                <div class="col-md bg-danger collapse navbar-collapse fw-bold" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item mx-4">
                            <a class="nav-link active text-white" aria-current="page" href="#inicio">Início</a>
                        </li>
                        <li class="nav-item mx-4">
                            <a class="nav-link text-white" href="#sobre">Sobre</a>
                        </li>
                        <li class="nav-item mx-4">
                            <a class="nav-link text-white" href="#produtos">Produtos</a>
                        </li>
                        <li class="nav-item mx-4">
                            <a class="nav-link text-white" href="#servicos">Serviços</a>
                        </li>
                        <li class="nav-item mx-4">
                            <a class="nav-link text-white" href="#representacao">Representação</a>
                        </li>                        
                        <li class="nav-item mx-4">
                            <a class="nav-link text-white" href="#contato">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>


  <script>
    
  const desiredElement = document.getElementById('nav-bar-list-id'); // elemento alvo
  const pixelsAmount = '50'; // Quantidade de pixels a contar do TOP até definir a cor

  window.addEventListener('scroll', function() {
      if (window.scrollY > pixelsAmount) {
        desiredElement.classList.add('changeStyle'); // adiciona classe "changeColor"
      } else {
        desiredElement.classList.remove('changeStyle'); // remove classe "changeColor"
      }
  });
  </script>