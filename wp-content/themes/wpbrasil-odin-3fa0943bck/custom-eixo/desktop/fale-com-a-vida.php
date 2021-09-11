<section class="banner">
    <img src="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/imagens/banner-fale.png" class="d-block w-100" alt="...">
</section>
<section class="formulario">
    <div class="container">
    <h1>Fale com a Vida Digital</h1>
    <div class="card-formulario">
        <strong>Enviar Mensagem</strong>
        <form>
            <label>Nome</label><input type="text" id="nome" placeholder="Nome e Sobrenome">
            <input type="email" id="email" placeholder="E-mail">
            <textarea id="mensagem" placeholder="Sua mensagem" rows="5" cols="33">

            </textarea>
            <input type="submit" class="btn-enviar" value="Enviar">
        </form>
    </div>
    <div class="informacoes">
        <div class="locali">
            <img src="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/imagens/fale/ico-local.png" alt="...">
            <a href="">Localização</a>
        </div>
        <div class="sac">
            <img src="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/imagens/fale/ico-fone.png" alt="...">
            <a href="">SAC:  +55 (61) 99121-2171</a>
        </div>
        <div class="email">
            <img src="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/imagens/fale/ico-email.png" alt="...">
            <a href="">contato@vidadigitalcelular.com.br</a>
        </div>
        <div class="social-icons">
			<a href=""><img class="yt" src="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/imagens/fale/ico-yt-r.png"></a>
			<a href=""><img class="ig" src="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/imagens/fale/ico-ig-r.png"></a>
			<a href=""><img class="fb" src="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/imagens/fale/ico-fb-r.png"></a>
			<a href=""><img class="tw" src="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/imagens/fale/ico-tw-r.png"></a>
		</div>
        <div class="mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d959.6126787696148!2d-47.95544937082516!3d-15.83289130908871!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a318b16636ff7%3A0x23f19628558682e6!2sVida%20digital%20Park%20shopping!5e0!3m2!1spt-BR!2sbr!4v1631206879521!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
    </div>
</section>

<section id="unidadesfale">
<?php
include('componentes-desk/unidades-fale.php');
?>
</section>
