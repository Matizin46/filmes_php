<?php
include "cabecalho.php";
include "banner.php";

?>
<div class="container">
    <h2 class="display-5">Melhores avaliações</h2>

    <div class="row mb-5">
        <?php

        include "conexao.php";

        $sql = "select * from filmes order by avaliacao desc limit 4";
        // trazendo só os mais avaliados e limitando para 4 filmes
        
        $resultado = mysqli_query($conexao, $sql);

        while ($linha = mysqli_fetch_assoc($resultado)) {
        ?>
            <div class="col-md-3 mb-4">
                <div style="width: 18rem;">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= $linha['foto']; ?>" class="card-img-top" style="width:100%; height:500px; object-fit: cover;">
                        <div class="card-body">
                            <h3 class="card-title">
                                <?= mb_strimwidth($linha['filmes'], 0, 18, '...') ?>
                            </h3>
                            <p class="card-text">⭐<?= $linha['avaliacao']; ?>/10</p>
                            <p class="card-text" style="height: 100px;">
                                <?= mb_strimwidth($linha['historia'], 0, 100, '...') ?>
                                <!-- mb_strimwidth limita o tanto de caracteres -->
                            </p>
                            <span class="card-text"><?= $linha['categoria'] . "<br>" ?></span>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        // echo "parou aqui";
        // echo "<pre>";
        // print_r($resultado);
        // exit();
        // echo "nem chegou aqui";
        mysqli_close($conexao);
        // Conexão fechada
        ?>


    </div>

    <div class="row mt-5">
        <div class="col-8">
            <img src="img/banner.jpg" class="img-fluid">
        </div>
        <div class="col-4 align-content-center">
            <p class="fs-5 fw-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis suscipit, quibusdam dicta fugit nostrum voluptatem dolor dolorum sint deleniti, itaque ex iusto culpa recusandae velit sapiente. Explicabo nemo necessitatibus non.</p>
            <a href="https://youtube.com" class="btn btn-success btn-lg">ASSISTA AO TRAILER AGORA</a>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-4 align-content-center">
            <p class="fs-5 fw-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis suscipit, quibusdam dicta fugit nostrum voluptatem dolor dolorum sint deleniti, itaque ex iusto culpa recusandae velit sapiente. Explicabo nemo necessitatibus non.</p>
            <a href="https://youtube.com" class="btn btn-success btn-lg">ASSISTA AO TRAILER AGORA</a>
        </div>

        <div class="col-8">
            <img src="img/banner.jpg" class="img-fluid">
        </div>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-warning btn-lg mt-5 fs-5 fw-bold text-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Precisa de ajuda? Clique aqui!
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Ajuda</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Entre em contato através dos nossos canais de comunicação:</p>
                        <p>E-mail: filme@filme.com.br <br> Whatsapp: (11)99999-9999 <br><a href="contato.php">Formulário de contato</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php
include "rodape.php"
?>