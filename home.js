// Get the canvas element and its context
const canvas = document.getElementById("myCanvas");
const context = canvas.getContext("2d");

// Set canvas size to match the size of the container
canvas.width = document.getElementById("canvas-container").clientWidth;
canvas.height = document.getElementById("canvas-container").clientHeight;

// Draw something on the canvas
function draw() {
  // Example: Drawing a colorful pattern
  for (let i = 0; i < 1000; i++) {
    const x = Math.random() * canvas.width;
    const y = Math.random() * canvas.height;
    const radius = Math.random() * 10;
    const r = Math.floor(Math.random() * 256);
    const g = Math.floor(Math.random() * 256);
    const b = Math.floor(Math.random() * 256);

    context.beginPath();
    context.arc(x, y, radius, 0, 2 * Math.PI);
    context.fillStyle = `rgb(${r},${g},${b})`;
    context.fill();
    context.closePath();
  }
}

// Call the draw function
draw();




