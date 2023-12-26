<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            display: flex;
            justify-content: space-around;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #ecf0f1;
        }

        svg {
            border: 2px solid #3498db;
            border-radius: 8px;
            overflow: hidden;
        }
    </style>
    <title>Refined SVG Designs</title>
</head>
<body>
    <svg width="200" height="200">
        <circle cx="50" cy="50" r="40" fill="#3498db"/>
        <circle cx="150" cy="50" r="40" fill="#3498db"/>
        <circle cx="100" cy="150" r="40" fill="#3498db"/>
    </svg>

    <svg width="200" height="200">
        <defs>
            <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
                <stop offset="0%" style="stop-color:#3498db;stop-opacity:1" />
                <stop offset="100%" style="stop-color:#2c3e50;stop-opacity:1" />
            </linearGradient>
        </defs>
        <rect x="10" y="10" width="180" height="180" rx="10" ry="10" fill="url(#grad1)"/>
    </svg>

    <svg width="200" height="200">
        <polygon points="100,10 190,190 10,190" fill="#3498db"/>
        <circle cx="100" cy="100" r="40" fill="#2c3e50"/>
    </svg>
</body>
</html>
