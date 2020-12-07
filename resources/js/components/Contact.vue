<template>
    <section id="#contact" class="contact py-3">
        <div class="container">
            <div class="d-flex align-items-stretch h-100">
                <div class="col-6 left">
                    a
                </div>
                <div class="col-6 right">
                    b
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "Contact"

}
</script>

<style lang="scss" scoped>
.contact {
    background-image: url("/images/contact-bg.jpg");
    background-position: center center;
    background-size: cover;

    .container {
        min-height: 600px;
    }

    .left {
        background-repeat: no-repeat;
        background-image: -webkit-linear-gradient(45deg, #3e3b84, #5b1c84);
        background-image: linear-gradient(45deg, #3e3b84, #5b1c84);
        opacity: .85;
    }
}
</style>
