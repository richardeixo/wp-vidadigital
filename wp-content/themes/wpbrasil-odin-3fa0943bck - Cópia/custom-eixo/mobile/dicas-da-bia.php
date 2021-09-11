<section class="titulo">
    <div class="container">
        <img src="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/imagens/dicas/icone-bia.png">
        <h1>Dicas da Bia</h1>
    </div>
</section>

<section class="cards-post">
    <div class="container">
        <div class="filtro-search">
            <select class="selecionar">
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                <option value="mercedes">Mercedes</option>
                <option value="audi">Audi</option>
            </select>
            <div class="searchblog">
                <a href=""><button><img src="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/imagens/dicas/lupa.png" class=""></button></a>
            </div>
        </div>
        <div class="cards-blog">
            <?php
                include('componentes-mobile/cards-conteudo.php');
            ?>
            <?php
                include('componentes-mobile/cards-conteudo.php');
            ?>
            <?php
                include('componentes-mobile/cards-conteudo.php');
            ?>
            <?php
                include('componentes-mobile/cards-conteudo.php');
            ?>
            <?php
                include('componentes-mobile/cards-conteudo.php');
            ?>
            <?php
                include('componentes-mobile/cards-conteudo.php');
            ?>
        </div>
        <hr>
        <section class="paginador">
            <a href=""><img src="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/imagens/dicas/seta-esquerda.png"></a>
            <a href=""><img src="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/imagens/dicas/seta-direita.png"></a>
        </section>
        <?php
                include('componentes-mobile/newsletter.php');
            ?>
    </div>
</section>
