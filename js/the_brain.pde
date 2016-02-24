//////////////////////
// Julio Montás //////
// Version 0.01 //////
// juliomontas.com ///
//////////////////////

theRedPill [] lineStroke = new theRedPill [240];
int maxDistance;

void setup() {
  //size(displayWidth, displayHeight);
  size(window.innerWidth, window.innerHeight-10);
  frameRate(10);
  smooth();
  
  //INITIALIZE
  for (int i = 0; i < lineStroke.length; i++) {
    lineStroke[i] = new theRedPill(random(width), random(height),0);
  }
}
 
void draw() {
  background(246,246,246);
  //CALL FUNCTIONALITY
  for (int i = 0; i < lineStroke.length; i++) {
  lineStroke[i].run();
  }
    // define maximum distance
  maxDistance = 80;
 
  // look of the lines
  stroke(255, 207, 1);
  strokeWeight(0.25);
 
  for (int i=0; i< lineStroke.length; i++) {
    // compare circle to other theRedPillCircle
    for (int j=i+1; j< lineStroke.length; j++) {
      // draw line if distance is below 'maxDistance'
      if (dist(lineStroke[i].x, lineStroke[i].y, lineStroke[j].x, lineStroke[j].y) < maxDistance) {
        line(lineStroke[i].x, lineStroke[i].y, lineStroke[j].x, lineStroke[j].y);
      }
    }
  }
}
class theRedPill {
  // GLOBAL VARIABLES
  float x = 0;
  float y = 0;
  float speedX = random(-1,1);
  float speedY =  random(1,10);
  float capacity = random(0);
  // CONSTRUCTOR
  theRedPill(float _x, float _y, float capacity) {
    x = _x;
    y = _y;
    capacity = capacity;
  }

  // FUNCTIONS
  void run() {
    display();
    move();
    bounce();
  }

  void display() {
    ellipse(x , y, capacity, capacity);
  }
  
  void move() {
   x += speedX;
   y += speedY;
  }

  void bounce() {
    if (x > width-10) {
      speedX = speedX * -1;
    }
    if (x < 0+10 ) {
      speedX = speedX * -1;
    }
    if (y > height-10) {
      speedY = speedY * -1;
    }
    if (y < 0) {
      speedY = speedY * -1;
    }
  }
}
