<template>
    <div class="particles" :style="wrapperStyle" ref="particles">
        <div class="slot">
            <slot></slot>
        </div>
        <vue-p5 class="p5" v-on="{setup, draw}" v-if="shouldShow"></vue-p5>
    </div>
</template>
<script>
import VueP5 from 'vue-p5';
import {Particle, StaticParticle} from "./particles";
import {image} from "../demo_image";
import {isMobile} from 'mobile-device-detect';

export default {
    name: 'particles',

    props: {
        width: {
            type: Number,
            required: false,
            default: null
        },
        height: {
            type: Number,
            required: false,
            default: null
        },
        background: {
            type: String,
        },
        count: {
            type: Number,
            default: 250
        },
        lineDistance: {
            type: Number,
            default: 30
        },
        staticDistance: {
            type: Number,
            default: 70
        }
    },

    components: {
        VueP5,
    },

    data() {
        return {
            particles: [],
            image: null
        };
    },

    mounted() {
        console.log(isMobile);
    },

    methods: {
        setup(sketch) {
            sketch.createCanvas(
                this.$refs.particles.getBoundingClientRect().width,
                this.$refs.particles.getBoundingClientRect().height
            );
            for (let i = 0; i < this.count; i++) {
                this.particles.push((new Particle(sketch)).setDistance(this.lineDistance));
            }

            if (!this.image) {
                this.image = image;
            }

            let scale = this.image.scale ? this.image.scale : 1;
            let size = this.image.size ? this.image.size : {
                x: Math.max(...this.image.coords.map(c => c[0])),
                y: Math.max(...this.image.coords.map(c => c[1])),
            };

            // calculate image offset to center it on drawing area
            let xOffset = sketch.width / 2 - scale * size.x / 2;
            let yOffset = sketch.height / 2 - scale * size.y / 2;

            if (this.image && this.image.coords)
                // Add static points to create and image
                for (let points of this.image.coords) {
                    this.particles.push((new StaticParticle(sketch,
                            xOffset + scale * points[0],
                            yOffset + scale * points[1])
                    ).setDistance(this.staticDistance));
                }
        },

        draw(sketch) {
            sketch.clear()
            for (let i = 0; i < this.particles.length; i++) {
                this.particles[i].createParticle()
                    .moveParticle()
                    .drag(sketch.mouseX, sketch.mouseY)
                    .joinParticles(this.particles.slice(i));
            }
        }
    },

    computed: {
        wrapperStyle() {
            return (this.width ? 'width: ' + this.width + 'px; ' : 'width: 100%;')
                + (this.height ? 'height: ' + this.height + 'px;' : 'height: 100%')
                + (this.background ? this.background : '');
        },

        shouldShow() {
            return !isMobile;
        }
    }
}
</script>
<style>
.particles {
    width: 100%;
    height: 100%;
    position: relative;
    background-image: url("/images/bg.jpg");
    background-position: center center;
    background-size: cover;
}

.particles .p5 {
    position: absolute;
    z-index: 1;
    top: 0;
    left: 0;
}

.particles .slot {
    position: absolute;
    z-index: 2;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
}
</style>
