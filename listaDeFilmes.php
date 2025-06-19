<?php
include "cabecalho.php"
?>
<h2>Todos os filmes</h2>

<div class="container mt-4">
    <div class="row">
        <?php
       
       include "conexao.php";

        $sql = "select * from filmes order by filmes asc";
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
                            </p>
                            <p class="card-text"><?= $linha['categoria'] . "<br>" ?></p>
                            <a href="umfilme.php?id=<?=$linha['id'];?>" class="btn btn-primary">Veja detalhes</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        mysqli_close($conexao);
        // Conexão fechada
        ?>
    </div>
</div>

<?php
include "rodape.php"
?>