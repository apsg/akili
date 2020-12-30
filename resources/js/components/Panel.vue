<template>
    <div class="panel py-5 my-5 container" :style="panelStyle" ref="panel">
        <div class="row">
            <div class="col-6" :class="isRight() ? 'offset-6' : '' ">
                <slot></slot>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Panel",

    props: {
        image: {
            required: true
        },
        align: {
            default: 'left'
        }
    },

    methods: {
        isLeft() {
            return this.align === 'left';
        },

        isRight() {
            return this.align === 'right';
        }
    },

    computed: {
        panelStyle() {
            return 'background-image: url("' + this.image + '"); '
                + 'background-position: ' + (this.isLeft() ? 'right' : 'left');
        }
    }
}
</script>

<style scoped>
.panel {
    background-size: contain;
    background-repeat: no-repeat;
}
</style>
