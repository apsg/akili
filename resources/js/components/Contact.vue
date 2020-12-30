<template>
    <section id="#contact" class="contact">
        <div class="container-contact2">
            <div class="wrap-contact2">
                <form class="contact2-form validate-form" action="#" method="post">
					<span class="contact2-form-title">
						Skontaktuj się ze mną
					</span>

                    <p>opis</p>

                    <p v-if="success" class="alert alert-success">
                        <i class="fa fa-check-square"></i>
                        Twoja wiadomość została pomyślnie wysłana
                    </p>

                    <div class="wrap-input2 validate-input" data-validate="Podaj imię">
                        <input required class="input2" type="text" name="name" v-model="name">
                        <span class="focus-input2" data-placeholder="IMIĘ"></span>
                        <p class="alert alert-warning" v-if="errors && errors.name">
                            <i class="fa fa-warning"></i> <span v-for="error in errors.name">{{ error }}</span>
                        </p>
                    </div>

                    <div class="wrap-input2 validate-input" data-validate="Podaj adres email">
                        <input required class="input2" type="email" name="email" v-model="email">
                        <span class="focus-input2" data-placeholder="EMAIL"></span>
                        <p class="alert alert-warning" v-if="errors && errors.email">
                            <i class="fa fa-warning"></i> <span v-for="error in errors.email">{{ error }}</span>
                        </p>
                    </div>

                    <div class="wrap-input2 validate-input" data-validate="Wpisz wiadomość">
                        <textarea required class="input2" name="message" v-model="message"></textarea>
                        <span class="focus-input2" data-placeholder="WIADOMOŚĆ"></span>
                        <p class="alert alert-warning" v-if="errors && errors.message">
                            <i class="fa fa-warning"></i> <span v-for="error in errors.message">{{ error }}</span>
                        </p>
                    </div>

                    <div class="container-contact2-form-btn">
                        <div class="wrap-contact2-form-btn">
                            <div class="contact2-form-bgbtn"></div>
                            <button class="contact2-form-btn" @click.prevent="send">
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

    data() {
        return {
            name: '',
            email: '',
            message: '',
            type: '',
            errors: null,
            success: false
        };
    },

    methods: {
        send() {
            this.errors = null;
            this.success = false;

            axios.post('/contact', {
                name: this.name,
                email: this.email,
                message: this.message,
                type: this.type
            }).then(r => {
                console.log(r);
                this.clear();
                this.success = true;
            }).catch((r) => {
                console.log(r.response);
                this.errors = r.response.data.errors;
            });
        },

        clear() {
            this.name = '';
            this.email = '';
            this.message = '';
            this.type = '';
            this.errors = null;
        },

        hasError(name) {
            return this.errors !== null &&
                !!this.errors[name];
        }
    },

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
}
</style>
