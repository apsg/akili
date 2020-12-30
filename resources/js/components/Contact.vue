<template>
    <section id="#contact" class="contact ">
        <div class="container-contact2">
            <div class="wrap-contact2">
                <form class="contact2-form validate-form">
					<span class="contact2-form-title">
						Skontaktuj się ze mną
					</span>

                    <div class="wrap-input2 validate-input" data-validate="Podaj imię">
                        <input class="input2" type="text" name="name">
                        <span class="focus-input2" data-placeholder="IMIĘ"></span>
                    </div>

                    <div class="wrap-input2 validate-input" data-validate="Podaj adres email">
                        <input class="input2" type="text" name="email">
                        <span class="focus-input2" data-placeholder="EMAIL"></span>
                    </div>

                    <div class="wrap-input2 validate-input" data-validate="Wpisz wiadomość">
                        <textarea class="input2" name="message"></textarea>
                        <span class="focus-input2" data-placeholder="WIADOMOŚĆ"></span>
                    </div>

                    <div class="container-contact2-form-btn">
                        <div class="wrap-contact2-form-btn">
                            <div class="contact2-form-bgbtn"></div>
                            <button class="contact2-form-btn">
                                Wyślij wiadomość
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "Contact",

    computed: {
        mail() {
            return 'kontakt@wzmocnienie.pl';
        }
    }

}
</script>

<style lang="scss" scoped>
.contact {
    background-image: url("/images/contact-bg.jpg");
    background-position: center center;
    background-size: cover;
    //
    //.container {
    //    min-height: 600px;
    //}

    //.left {
    //    border-bottom-left-radius: 30px;
    //    border-top-left-radius: 30px;
    //}
    //
    //.right {
    //    border-bottom-right-radius: 30px;
    //    border-top-right-radius: 30px;
    //}
}
</style>
