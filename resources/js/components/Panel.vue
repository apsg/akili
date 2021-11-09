<template>
    <div class="panel py-5 px-3 my-5 container" :style="panelStyle" ref="panel">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12  mobile-image p-5">
                <img :src="this.image" class="w-100">
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 slot">
                <slot></slot>
            </div>
        </div>
    </div>
</template>

<script>
import {isMobile} from 'mobile-device-detect';

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

    data() {
        return {
            shouldShow: false
        }
    },

    mounted() {
        this.shouldShow = true;
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
            if (true)
                return '';

            return 'background-image: url("' + this.image + '"); '
                + 'background-position: ' + (this.isLeft() ? 'right' : 'left');
        },

        showLeftImage() {
            return isMobile || this.isRight();
        },

        showRightImage() {
            if (isMobile)
                return false;

            return this.isLeft();
        }
    }
}
</script>

<style lang="scss" scoped>
.panel {
    background-size: contain;
    background-repeat: no-repeat;
}
</style>
