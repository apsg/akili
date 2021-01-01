<template>
    <div :class="classProp">
        <a :href="scrollto" class="btn btn-akili" @click.prevent="onClick">
            <slot></slot>
        </a>
    </div>
</template>

<script>
export default {
    name: "ScrollButton",

    props: ['scrollto', 'interest' ],

    methods: {
        onClick() {

            this.$emit('clicked-button', this.interest);

            $('html, body').animate({
                scrollTop: $(this.scrollto).offset().top
            }, 500);
        }
    }
}
</script>

<style scoped>

</style>
