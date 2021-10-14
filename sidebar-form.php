<!-- recaptcha V3 -->
<script src="https://www.google.com/recaptcha/api.js?render=6LewWswcAAAAADc9ybT7eu2Xt2rEvicWUB56OAEl"></script>
<script>
    function onClick(e) {
    e.preventDefault();
    grecaptcha.ready(function() {
        grecaptcha.execute('6LewWswcAAAAADc9ybT7eu2Xt2rEvicWUB56OAEl', {action: 'submit'}).then(function(token) {
            // Add your logic to submit to your backend server here.
        });
    });
    }
</script>
<div class="apartment2_area">
    <div class="apartment_text">
        <h1>¿Tienes alguna duda?</h1>
        <h2>Contáctanos</h2>
    </div>
    <div class="witr_apartment_form form2 contact_top">
        <form action="mail.php" method="post" id="contact-form">
            <div class="witr_form_controls2">
                <div class="witr_field1">
                    <div class="witr_form_field1">
                        <span><input type="text" name="name" placeholder="Nombre y Apellido*"></span>
                    </div>
                    <div class="witr_form_field1">
                        <span><input type="email" name="email" placeholder="Correo*"></span>
                    </div>
                </div>
                <div class="witr_field1">
                    <div class="witr_form_field1">
                        <span><input type="number" name="phone" placeholder="Célular*"></span>
                    </div>
                </div>
                <div class="witr_field1">
                    <div class="witr_text_area1">
                        <span>
                            <textarea name="comment" placeholder="Déjanos tu comentario..."></textarea>
                        </span>
                    </div>
                </div>
                <div class="witr_field1">
                    <div class=" witr_con_btn1">
                        <button class="btn btn-primary" type="submit" name="ok">Consultar</button>
                        <!-- <button class="g-recaptcha" data-sitekey="6LewWswcAAAAADc9ybT7eu2Xt2rEvicWUB56OAEl" data-callback='onSubmit' data-action='submit'>Submit</button> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p class="form-messege"></p>
                </div>
            </div>
        </form>
    </div>
</div>