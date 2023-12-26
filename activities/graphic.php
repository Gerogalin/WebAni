<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    canvas {
      margin: 10px;
      border: 1px solid #ccc;
    }
  </style>
</head>
<body>

  <canvas id="spiralCanvas" width="200" height="200"></canvas>
  <canvas id="flowerCanvas" width="200" height="200"></canvas>
  <canvas id="wavesCanvas" width="200" height="200"></canvas>
  <canvas id="mountainsCanvas" width="200" height="200"></canvas>

  <canvas id="hexagonCanvas" width="200" height="200"></canvas>
  <canvas id="cubeCanvas" width="200" height="200"></canvas>
  <canvas id="fishCanvas" width="200" height="200"></canvas>
  <canvas id="cloudCanvas" width="200" height="200"></canvas>

  <script>
    // Spiral
    const spiralCanvas = document.getElementById('spiralCanvas');
    const spiralCtx = spiralCanvas.getContext('2d');
    spiralCtx.strokeStyle = 'blue';
    spiralCtx.beginPath();
    for (let t = 0; t < Math.PI * 10; t += 0.1) {
      const x = t * Math.cos(t);
      const y = t * Math.sin(t);
      spiralCtx.lineTo(100 + x, 100 + y);
    }
    spiralCtx.stroke();

    // Flower
    const flowerCanvas = document.getElementById('flowerCanvas');
    const flowerCtx = flowerCanvas.getContext('2d');
    flowerCtx.fillStyle = 'purple';
    for (let i = 0; i < 12; i++) {
      const angle = (i * 2 * Math.PI) / 12;
      const x = 100 + 50 * Math.cos(angle);
      const y = 100 + 50 * Math.sin(angle);
      flowerCtx.beginPath();
      flowerCtx.arc(x, y, 10, 0, 2 * Math.PI);
      flowerCtx.fill();
    }

    // Waves
    const wavesCanvas = document.getElementById('wavesCanvas');
    const wavesCtx = wavesCanvas.getContext('2d');
    wavesCtx.strokeStyle = 'green';
    wavesCtx.lineWidth = 2;
    wavesCtx.beginPath();
    for (let x = 0; x < 200; x += 10) {
      const y = 100 + 10 * Math.sin(x / 10);
      wavesCtx.lineTo(x, y);
    }
    wavesCtx.stroke();

    // Mountains
    const mountainsCanvas = document.getElementById('mountainsCanvas');
    const mountainsCtx = mountainsCanvas.getContext('2d');
    mountainsCtx.fillStyle = 'gray';
    mountainsCtx.beginPath();
    mountainsCtx.moveTo(0, 200);
    mountainsCtx.lineTo(100, 50);
    mountainsCtx.lineTo(200, 200);
    mountainsCtx.closePath();
    mountainsCtx.fill();

    // Hexagon
    const hexagonCanvas = document.getElementById('hexagonCanvas');
    const hexagonCtx = hexagonCanvas.getContext('2d');
    hexagonCtx.fillStyle = 'orange';
    hexagonCtx.beginPath();
    for (let i = 0; i < 6; i++) {
      const angle = (i * 2 * Math.PI) / 6;
      const x = 100 + 50 * Math.cos(angle);
      const y = 100 + 50 * Math.sin(angle);
      hexagonCtx.lineTo(x, y);
    }
    hexagonCtx.closePath();
    hexagonCtx.fill();

    // Cube
    const cubeCanvas = document.getElementById('cubeCanvas');
    const cubeCtx = cubeCanvas.getContext('2d');
    cubeCtx.strokeStyle = 'brown';
    cubeCtx.beginPath();
    cubeCtx.moveTo(100, 100);
    cubeCtx.lineTo(150, 50);
    cubeCtx.lineTo(250, 50);
    cubeCtx.lineTo(200, 100);
    cubeCtx.lineTo(200, 200);
    cubeCtx.lineTo(150, 250);
    cubeCtx.closePath();
    cubeCtx.stroke();

    // Fish
    const fishCanvas = document.getElementById('fishCanvas');
    const fishCtx = fishCanvas.getContext('2d');
    fishCtx.fillStyle = 'gold';
    fishCtx.beginPath();
    fishCtx.moveTo(100, 100);
    fishCtx.lineTo(130, 70);
    fishCtx.lineTo(130, 130);
    fishCtx.closePath();
    fishCtx.fill();

    // Cloud
    const cloudCanvas = document.getElementById('cloudCanvas');
    const cloudCtx = cloudCanvas.getContext('2d');
    cloudCtx.fillStyle = 'lightblue';
    cloudCtx.beginPath();
    cloudCtx.arc(80, 100, 20, 0, 2 * Math.PI);
    cloudCtx.arc(100, 90, 25, 0, 2 * Math.PI);
    cloudCtx.arc(120, 100, 20, 0, 2 * Math.PI);
    cloudCtx.arc(100, 110, 30, 0, 2 * Math.PI);
    cloudCtx.fill();
  </script>
</body>
</html>
