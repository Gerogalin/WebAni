<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      background-color: #FFD1DF;
    }
</style>
<body>

<svg height="300" width="800" xmlns="http://www.w3.org/2000/svg">
    <path id="my_path1" d="M 50 100 Q 25 10 180 100 T 350 100 T 520 100 T 690 100"  fill="transparent" />
    <path id="my_path2" d="M 50 100 Q 25 10 180 100 T 350 100" transform="translate(0,75)" fill="transparent" />
    <text fill="red">
        <textPath href="#my_path1"> I wanna be the very best
            Like no one ever was
            To catch them is my real test
            To train them is my cause
            I will travel across 
        </textPath>
        <textPath href="#my_path2"> the land
            Searching far and wide
            Teach Pokémon to understand
            The power that's inside
        </textPath>
    </text>
</svg>

</body>
</html>
