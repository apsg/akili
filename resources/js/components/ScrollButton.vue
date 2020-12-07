<template>
    <div>
        <a href="#" class="btn btn-akili" @click.prevent="onClick">
            <slot></slot>
        </a>
    </div>
</template>

<script>
export default {
    name: "ScrollButton",

    props: ['scrollto', 'type'],

    methods: {
        onClick() {

            this.$emit('clicked-button', this.type);

            $('html, body').animate({
                scrollTop: $(this.scrollto).offset().top
            }, 500);
        }
    }
}
</script>

<style scoped>

</style>
