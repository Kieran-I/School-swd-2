// Get a reference to the canvas and its 2D context
const canvas = document.getElementById("game-canvas");
const context = canvas.getContext("2d");

// Define the blue square's initial position and dimensions
let squareX = 250;
let squareY = canvas.height-50;
const squareSize = 50;
const squareSpeed = 3;

// Define the smaller square's initial position and dimensions
let smallerSquareX = Math.random() * canvas.width; // Random X position
let smallerSquareY = 0;
const smallerSquareSize = 20;
const smallerSquareSpeed = 5;

// Initialize the score variable
let score = 0;

// Add event listeners for keydown and keyup events
document.addEventListener("keydown", handleKeyDown);
document.addEventListener("keyup", handleKeyUp);

// Set up an object to track the state of the arrow keys
const arrowKeys = {
  w: false,
  a: false,
  s: false,
  d: false,
};

// Event handler for keydown event
function handleKeyDown(event) {
  const { key } = event;
  
  // Update the state of the arrow keys
  if (arrowKeys.hasOwnProperty(key)) {
    arrowKeys[key] = true;
  }
}

// Event handler for keyup event
function handleKeyUp(event) {
  const { key } = event;
  
  // Update the state of the arrow keys
  if (arrowKeys.hasOwnProperty(key)) {
    arrowKeys[key] = false;
  }
}

// Function to check if two rectangles overlap
function isOverlap(rect1, rect2) {
  return (
    rect1.x < rect2.x + rect2.width &&
    rect1.x + rect1.width > rect2.x &&
    rect1.y < rect2.y + rect2.height &&
    rect1.y + rect1.height > rect2.y
  );
}
function TeleportRed(){
  // Teleport the smaller square to the top at a random X position
  if (smallerSquareY > canvas.height) {
    smallerSquareX = Math.random() * canvas.width;
    smallerSquareY = 0;
  }
}

// Update function called in the game loop
function update() {

  // Draw the blue square
  context.fillStyle = "blue";
  context.fillRect(squareX, squareY, squareSize, squareSize);

  // Draw the smaller square
  context.fillStyle = "red";
  context.fillRect(smallerSquareX, smallerSquareY, smallerSquareSize, smallerSquareSize);

  // Display the score
  context.fillStyle = "white";
  context.font = "20px Arial";
  context.fillText("Score: " + score, 10, 30);

  // Call update function recursively in the game loop
  requestAnimationFrame(update); 
  
}

// Start the game loop
update();



function updateScreenScore(){
    // Check for overlap between the blue square and the smaller square
    const blueSquare = { x: squareX, y: squareY, width: squareSize, height: squareSize };
    const redSquare = { x: smallerSquareX, y: smallerSquareY, width: smallerSquareSize, height: smallerSquareSize };
    if (isOverlap(blueSquare, redSquare)) {
      // Increment the score when the squares overlap
      score++;
  
      smallerSquareX = Math.random() * canvas.width;
    smallerSquareY = 0;
    }  
  // Clear the canvas
  context.clearRect(0, 0, canvas.width, canvas.height);
}

setInterval(updateScreenScore, 7 
  );


  function updateSquares(){
    // Move the blue square based on the arrow key states
    if (arrowKeys.w && squareY > 0) {
      squareY -= squareSpeed;
    }
    if (arrowKeys.a && squareX > 0) {
      squareX -= squareSpeed;
    }
    if (arrowKeys.s && squareY + squareSize < canvas.height) {
      squareY += squareSpeed;
    }
    if (arrowKeys.d && squareX + squareSize < canvas.width) {
      squareX += squareSpeed;
    }
    
  // Move the smaller square downwards
  smallerSquareY += smallerSquareSpeed;
  
  TeleportRed();
  }

  setInterval(updateSquares, 5
    );