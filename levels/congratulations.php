<?php
session_start();
if(!isset($_SESSION['username']))
{
header('Location:'.'../index'.'.php');
}
else
{
	if($_SESSION['level']<21)
	{
		header('Location:'.$_SESSION['levelname'].'.php');
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   	<title>Labyrinth 7.0 | Spring Fest 2017</title>
   	<link rel="shortcut icon" href="../images/favicon.png">
    <style>
        @import url(http://fonts.googleapis.com/css?family=Lato:100,400,900);
        body, html {
            background-color: #000;
            color: #fff;
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }
        canvas {
            position:absolute;
            top:0;
            left:0
        }
        #congrats{
            position: relative;
            text-align: center;
            top:250px;
        }
        h1,p {
            font-family: 'Lato', sans-serif;
            font-weight: 100;
            text-transform: uppercase;
            line-height: 0.5;
        }
        p{
            font-weight: 400; 
            letter-spacing: 3px; 
        }
        #hover{
            font-family: 'Lato', sans-serif;
            font-weight: 900;
            position: absolute;
            top:20px;
            left:20px;
        }
        #goBack{
            position: absolute;
            top: 20px;
            left: 40px;
            color:white;
            font-family: 'Lato', sans-serif;
            font-weight: 900;
            cursor: pointer;
        }
        #back:hover #hover{
            -webkit-animation: move 1.5s ease-out infinite;
            -moz-animation: move 1.5s ease-out infinite;
            -ms-animation: move 1.5s ease-out infinite;
            -o-animation: move 1.5s ease-out infinite;
            animation: move 1.5s ease-out infinite;
        }
        @-webkit-keyframes move {
            0% {
                -webkit-transform: translateX(0);
            }
            50% {
                -webkit-transform: translateX(5px);
            }
            100% {
                -webkit-transform: translateX(0);
            }
        }
        @-moz-keyframes move {
            0% {
                left: -4px;
                background-color: transparent;
            }
            25%,75% {
                background-color: black;
            }
            100% {
                left: calc(100% + 4px);
                background-color: transparent;
            }
        }
        @-ms-keyframes move {
            0% {
                left: -4px;
                background-color: transparent;
            }
            25%,75% {
                background-color: black;
            }
            100% {
                left: calc(100% + 4px);
                background-color: transparent;
            }
        }
        @-o-keyframes move {
            0% {
                left: -4px;
                background-color: transparent;
            }
            25%,75% {
                background-color: black;
            }
            100% {
                left: calc(100% + 4px);
                background-color: transparent;
            }
        }
        @keyframes move {
            0% {
                transform: translateX(0);
            }
            50% {
                transform: translateX(-5px);
            }
            100% {
                transform: translateX(0);
            }
        }
    </style>
</head>
<body>
	<canvas id="canvas"></canvas>
    <div id="congrats">
        <h1>congratulations</h1>
        <p>you bravely survived the labyrinth</p>
    </div>
    <div id="back">
        <div id="hover">&#10094;&#10094;</div>
        <div id="goBack">GO BACK</div>
    </div>

    <script src="../script/jquery.js" ></script>
    <script type="text/javascript">
        (function () {
            var requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
            window.requestAnimationFrame = requestAnimationFrame;
        })();


        var canvas = document.getElementById("canvas"),
            ctx = canvas.getContext("2d"),
            width = 0,
            height = 0,
            vanishPointY = 0,
            vanishPointX = 0,
            focalLength = 300,
            angleX = 180,
            angleY = 180,
            angleZ = 180,
            angle = 0,
            cycle = 0,
            colors = {r : 255, g : 0, b : 0},
            lastShot = new Date().getTime();

        canvas.width = width;
        canvas.height = height;

        /*
         *  Controls the emitter
         */
        function Emitter() {
            this.reset();
        }

        Emitter.prototype.reset = function () {
            var PART_NUM = 200,
                x = (Math.random() * 400) - 200,
                y = (Math.random() * 400) - 200,
                z = (Math.random() * 800) - 200;
            
            this.x = x || 0;
            this.y = y || 0;
            this.z = z || 0;
            
            var color = [~~(Math.random() * 150) + 10, ~~(Math.random() * 150) + 10, ~~(Math.random() * 150) + 10]
            this.particles = [];

            for (var i = 0; i < PART_NUM; i++) {
                this.particles.push(new Particle(this.x, this.y, this.z, {
                    r: colors.r,
                    g: colors.g,
                    b: colors.b
                }));
            }
        }

        Emitter.prototype.update = function () {
            var partLen = this.particles.length;

            angleY = (angle - vanishPointX) * 0.0001;
            angleX = (angle - vanishPointX) * 0.0001;

            this.particles.sort(function (a, b) {
                return b.z - a.z;
            });

            for (var i = 0; i < partLen; i++) {
                this.particles[i].update();
            }
            
            if(this.particles.length <= 0){
              this.reset();   
            }

        };

        Emitter.prototype.render = function (imgData) {
            var data = imgData.data;

            for (i = 0; i < this.particles.length; i++) {
                var particle = this.particles[i],
                    dist = Math.sqrt((particle.x - particle.ox) * (particle.x - particle.ox) + (particle.y - particle.oy) * (particle.y - particle.oy) + (particle.z - particle.oz) * (particle.z - particle.oz));

                if (dist > 255) {
                    particle.render = false;
                    this.particles.splice(i, 1);
                    this.particles.length--;
                }

                if (particle.render && particle.xPos < width && particle.xPos > 0 && particle.yPos > 0 && particle.yPos < height) {
                    for (w = 0; w < particle.size; w++) {
                        for (h = 0; h < particle.size; h++) {
                            if (particle.xPos + w < width && particle.xPos + w > 0 && particle.yPos + h > 0 && particle.yPos + h < height) {
                                pData = (~~ (particle.xPos + w) + (~~ (particle.yPos + h) * width)) * 4;
                                data[pData] = particle.color[0];
                                data[pData + 1] = particle.color[1];
                                data[pData + 2] = particle.color[2];
                                data[pData + 3] = 255 - dist;
                            }
                        }
                    }
                }
            }
        };


        /*
         *  Controls the individual particles
         */
        function Particle(x, y, z, color) {
            this.x = x;
            this.y = y;
            this.z = z;

            this.startX = this.x;
            this.startY = this.y;
            this.startZ = this.z;

            this.ox = this.x;
            this.oy = this.y;
            this.oz = this.z;

            this.xPos = 0;
            this.yPos = 0;

            this.vx = (Math.random() * 10) - 5;
            this.vy = (Math.random() * 10) - 5;
            this.vz = (Math.random() * 10) - 5;

            this.color = [color.r, color.g, color.b];
            this.render = true;

            this.size = Math.round(1 + Math.random() * 1);
        }

        Particle.prototype.rotate = function () {
            var x = this.startX * Math.cos(angleZ) - this.startY * Math.sin(angleZ),
                y = this.startY * Math.cos(angleZ) + this.startX * Math.sin(angleZ);

             this.x = x;
             this.y = y;
        }

        Particle.prototype.update = function () {
            var cosY = Math.cos(angleX),
                sinY = Math.sin(angleX);

            this.x = (this.startX += this.vx);
            this.y = (this.startY += this.vy);
            this.z = (this.startZ -= this.vz);
            this.rotate();

            this.vy += 0.1;
            this.x += this.vx;
            this.y += this.vy;
            this.z -= this.vz;

            this.render = false;

            if (this.z > -focalLength) {
                var scale = focalLength / (focalLength + this.z);

                this.size = scale * 2;
                this.xPos = vanishPointX + this.x * scale;
                this.yPos = vanishPointY + this.y * scale;
                this.render = true;
            }
        };

        function render() {
            colorCycle();
            angleY = Math.sin(angle += 0.01);
            angleX = Math.sin(angle);
            angleZ = Math.sin(angle);

            var imgData = ctx.createImageData(width, height);

            for (var e = 0; e < 30; e++) {
                emitters[e].update();
                emitters[e].render(imgData);
            }
            ctx.putImageData(imgData, 0, 0);
            requestAnimationFrame(render);
        }

        function colorCycle() {
            cycle += .6;
            if (cycle > 100) {
                cycle = 0;
            }
            colors.r = ~~ (Math.sin(.3 * cycle + 0) * 127 + 128);
            colors.g = ~~ (Math.sin(.3 * cycle + 2) * 127 + 128);
            colors.b = ~~ (Math.sin(.3 * cycle + 4) * 127 + 128);
        }

        var emitters = [];
        for (var e = 0; e < 30; e++) {
            colorCycle();
            emitters.push(new Emitter());
        }
        //render();


        // smart trick from @TimoHausmann for full screen pens
        setTimeout(function () {
            width = canvas.width = window.innerWidth;
            height = canvas.height = document.body.offsetHeight;
            vanishPointY = height / 2;
            vanishPointX = width / 2;
            render();
        }, 500);
    </script>
</body>
</html>