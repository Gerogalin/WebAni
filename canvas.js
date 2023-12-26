document.addEventListener("DOMContentLoaded", function () {
    var canvas = document.getElementById("animationCanvas");
    var ctx = canvas.getContext("2d");

    var car = {
        x: 50,
        y: 180,
        width: 200,
        height: 80,
        speed: 2
    };

    function drawBackground() {

        ctx.fillStyle = "#664058"; 
        ctx.fillRect(0, 0, canvas.width, canvas.height);

        ctx.fillStyle = "#232542";
        ctx.fillRect(0, 250, canvas.width, canvas.height - 250);
    }

    function drawCar() {

        ctx.fillStyle = "#FACC53";
        ctx.fillRect(car.x, car.y, car.width, car.height);

        ctx.fillStyle = "#B0AAAE"; 
        ctx.fillRect(car.x + 20, car.y + 10, 60, 40);
        ctx.fillRect(car.x + 120, car.y + 10, 60, 40);

        ctx.beginPath();
        ctx.arc(car.x + 40, car.y + 80, 20, 0, Math.PI * 2);
        ctx.arc(car.x + 160, car.y + 80, 20, 0, Math.PI * 2);
        ctx.fillStyle = "#1C2330";
        ctx.fill();
    }

    function animate() {

        drawBackground();

        car.x += car.speed;

        if (car.x > canvas.width) {
            car.x = -car.width;
        }

        drawCar();

        requestAnimationFrame(animate);
    }

    animate();
});
