<template>
    <div class="panel py-5 my-5 container" :style="panelStyle" ref="panel">
        <div class="row">
            <div class="col-12 mobile-image p-5"
                 v-if="shouldShow">
                <img :src="this.image" class="w-100">
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12" :class="isRight() && !shouldShow ? 'offset-6' : '' ">
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
        this.shouldShow = isMobile;
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
            if (isMobile)
                return '';

            return 'background-image: url("' + this.image + '"); '
                + 'background-position: ' + (this.isLeft() ? 'right' : 'left');
        },
    }
}
</script>

<style scoped>
.panel {
    background-size: contain;
    background-repeat: no-repeat;
}
</style>
