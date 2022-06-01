<?php 
    //Template Name: Contact
?>
<?php get_header(); ?>

<section id="contact">
    <form  action="https://formspree.io/f/myylzpnw" method="POST" class="form">
        <h2 class="form-title">Quer falar com a gente?</h2>
        <p class="form-text">Preencha as informações abaixo, ou entre em contato diretamente pela nossas redes sociais</p>
        <div class="input-form">
            <label for="name">Nome</label>
            <input type="text" name="name" id="name" placeholder="Sacy Rossi">
        </div>
        <div class="input-form">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" placeholder="johndoe@email.com">
        </div>
        <div class="input-form">
            <label for="message">Mensagem</label>
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Olá gostaria de enviar uma sugestão de notícia...."></textarea>
        </div>

        <div class="input-form">
           <button class="btn" type="submit">Enviar</button>
        </div>

    </form>
</section>

<?php get_footer(); ?>