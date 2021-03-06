export class Particle {
    constructor(sketch) {
        this.sketch = sketch;

        this.x = sketch.random(0, this.sketch.width);
        this.y = sketch.random(0, this.sketch.height);
        this.r = sketch.random(1, 5);
        this.xSpeed = sketch.random(-1, 1);
        this.ySpeed = sketch.random(-1, 1);

        this.lineDistance = 20;
    }

    setDistance(distance) {
        this.lineDistance = distance;

        return this;
    }

    createParticle() {
        this.sketch.noStroke();
        this.sketch.fill('rgba(220,220,220,0.9)');
        this.sketch.circle(this.x, this.y, this.r);

        return this;
    }

    moveParticle() {
        if (this.x < 0 || this.x > this.sketch.width)
            this.xSpeed *= -1;
        if (this.y < 0 || this.y > this.sketch.height)
            this.ySpeed *= -1;
        this.x += this.xSpeed;
        this.y += this.ySpeed;

        return this;
    }

    joinParticles(particles) {
        particles.forEach(element => {
            let dis = this.sketch.dist(this.x, this.y, element.x, element.y);
            if (dis < this.lineDistance + element.lineDistance) {
                this.sketch.stroke('rgba(255,255,255,0.1)');
                this.sketch.line(this.x, this.y, element.x, element.y);
            }
        });

        return this;
    }

    drag(px, py) {
        if (this.sketch.dist(this.x, this.y, px, py) < 2 * this.lineDistance) {
            this.x -= 0.05 * (this.x - px);
            this.y -= 0.05 * (this.y - py);
        }

        return this;
    }
}

export class StaticParticle extends Particle {
    constructor(sketch, x, y) {
        super(sketch);

        this.x = x;
        this.y = y;
        this.xSpeed = 0;
        this.ySpeed = 0;
        this.r = sketch.random(2, 7);

        this.lineDistance = 60;
    }

    drag() {
        return this;
    }
}
