<section class="titulo">
    <div class="container">
        <img src="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/imagens/dicas/icone-bia.png">
        <h1>Dicas da Bia</h1>
    </div>
</section>
<section class="principal">
    <div class="container">
        <img src="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/imagens/dicas/post1.png">
        <div class="post-info">
            <h2>A importância da liderança compartilhada</h2>
            <p>Vamos falar sobre liderança!?⠀
Quando penso em liderança, tenho como modelo a liderança compartilhada. Gosto de ouvir meu time. Inovações são sempre muito bem-vindas na Vida Digital....</p>
            <p class="autor-categoria">Por: Bia |Categorias: News</p>
            <a href="">Continue lendo <img src="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/imagens/dicas/seta.png"></a>
        </div>
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
                <input type="text" placeholder="Pesquisar">
                <a href=""><button><img src="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/imagens/dicas/lupa.png" class=""></button></a>
            </div>
        </div>
        <div class="cards-blog">
            <?php
                include('componentes-desk/cards-conteudo.php');
            ?>
            <?php
                include('componentes-desk/cards-conteudo.php');
            ?>
            <?php
                include('componentes-desk/cards-conteudo.php');
            ?>
            <?php
                include('componentes-desk/cards-conteudo.php');
            ?>
            <?php
                include('componentes-desk/cards-conteudo.php');
            ?>
            <?php
                include('componentes-desk/cards-conteudo.php');
            ?>
        </div>
        <hr>
        
        <?php
                include('componentes-desk/paginador.php');
            ?>
        <?php
                include('componentes-desk/newsletter.php');
            ?>
    </div>
</section>
