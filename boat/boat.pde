int rad = 60;        // Width of the shape
float xpos, ypos;    // Starting position of shape    

float xspeed = 2.8;  // Speed of the shape
float yspeed = 2.2;  // Speed of the shape

int xdirection = 1;  // Left or Right
int ydirection = 1;  // Top to Bottom
int counter = 1;
float yoff = 0.0; 
float r2 = 18;
float b2 = 18;
float g2 = 18;
float boat_y = 0;
float boatincrement = 0;
float x_cloud = 0;
/* @pjs preload="sail_boat.png"; */
/* @pjs preload="blue-cloud.png"; */
/* @pjs preload="mountain.png"; */
PImage img, img2, img3;

int daycounter = 0;

int k= 0;


void setup() 
{
  size(window.innerWidth, 230);
 // size(900, 230);
//size( 900, 230 );  
  //ProcessingInit();  
  
  noStroke();
  frameRate(30);
  ellipseMode(RADIUS);
  // Set the starting position of the shape
  xpos = width/2;
  ypos = height;
  img = loadImage("sail_boat.png");  // Load the image into the program
  img2 = loadImage("blue-cloud.png"); 
  img3= loadImage("mountain.png");
}
void draw() 
{
   
  background(r2,b2,g2);  
  ypos = ypos + ( yspeed * ydirection );
  
 //change the sun direction 
 
   image(img3, width/2 - 350, 130, img3.width/3, img3.height/2);
   image(img3, width/2-100, 100, img3.width/2, img3.height);
   image(img3, width/2 + 200, 130, img3.width/3, img3.height/2);
 
if (ypos > 1.5 * height || ypos < 0)
{
  ydirection *= -1;
  if(counter == 100)
  {
    counter = 1;
    
  }
  if(ypos < 0 && counter % 100 != 0){
   counter++;  
  if(counter != 100) 
  ypos = ypos - ( yspeed * ydirection );
  else
    daycounter ++;
  }

}
//System.out.println(counter);
//System.out.println(daycounter);
//change backgroun color accordingly
  if(ydirection == -1)
  {
  b2+= 5;
  g2+=5; 
  }
  else
  {
  b2-= 5;
  g2-=5;    
  }
  //color the sun yellow
  fill(240,219,84);
  
  //draw the sun
  pushMatrix();
  translate(width - 300, ypos);
  rotate(frameCount / 50.0);
  star(0, 0, rad - 20, rad, 40); 
  popMatrix();
  
  //color star white
  fill(255,255,255);
  //Draing stars when the sun is at the bottom.
  if(ypos > height)
  {
  pushMatrix();
  translate(width*0.2, height*0.2);
  rotate(frameCount / 100.0);
  star(0, 0, 5, 10, 5); 
  popMatrix();
  
  pushMatrix();
  translate(width*0.3, height*0.2);
  rotate(frameCount / 100.0);
  star(0, 0, 5, 10, 5); 
  popMatrix();
  
  pushMatrix();
  translate(width*0.35, height*0.1);
  rotate(frameCount / 100.0);
  star(0, 0, 5, 10, 5); 
  popMatrix();
  
  
  
  pushMatrix();
  translate(width - 300, height*0.2);
  rotate(frameCount / 100.0);
  star(0, 0, 5, 10, 5); 
  popMatrix();
  
  pushMatrix();
  translate(width - 250, height*0.1);
  rotate(frameCount / 100.0);
  star(0, 0, 5, 10, 5); 
  popMatrix();

  pushMatrix();
  translate(width - 350, height*0.2);
  rotate(frameCount / 100.0);
  star(0, 0, 5, 10, 5); 
  popMatrix();  
  pushMatrix();
  
  fill(255);
  translate(width - 200, height*0.2);
  rotate(-PI/2);
  
  arc(0, 0, 35, 35, 0, PI*4);
  fill(r2,b2,g2);
  k=((daycounter%10)*5)+5;
  arc(k, k, 35, 35, 0, PI*4);
  
  popMatrix();
  
  
  x_cloud = 0;
  }
else
{
  
  x_cloud += 1;
  image(img2, 100 - x_cloud, 10, img.width/4, img.height/8);
  image(img2, 200  - x_cloud, 20, img.width/4, img.height/8);
  image(img2, 300 - x_cloud, 0, img.width/4, img.height/8);
  
    image(img2, 500 - x_cloud, 0, img.width/4, img.height/8);
    image(img2, 550 - x_cloud, 0, img.width/4, img.height/8);
    
    image(img2, width - x_cloud, 0, img.width/4, img.height/8);
    image(img2, width - 100 - x_cloud, 0, img.width/4, img.height/8);
    image(img2, width - 200 - x_cloud, 10, img.width/4, img.height/8);
    image(img2, width - 150 - x_cloud, 30, img.width/4, img.height/8);
   // image(img2, width - x_cloud, 0, img.width/4, img.height/8);
    //image(img2, width - x_cloud, 0, img.width/4, img.height/8);    
}
  
  
  fill(18, 131,201);

  beginShape(); 
  

   float xoff = yoff; 
  

  for (float x = 0; x <= width; x += 20) {
    float y = map(noise(xoff), 0, 1, 150,250);
    
   // if(x > 40 + boatincrement && x < 60 + boatincrement)
   if(x < 60 + boatincrement)
    {
    boat_y = y;
    
    }
    vertex(x, y); 
    xoff += 0.05;
  }
  yoff += 0.01;
  vertex(width+ 50, height);
  vertex(0, height);
  endShape(CLOSE);  
  boatincrement += 1;
  
  if(boatincrement > width) 
    boatincrement = -100;
  image(img, boatincrement, boat_y -110, img.width/4, img.height/4);
  
  
 //System.out.println("");
  
}

//Function to draw star shape
void star(float x, float y, float radius1, float radius2, int npoints) {
  float angle = TWO_PI / npoints;
  float halfAngle = angle/2.0;
  beginShape();
  for (float a = 0; a < TWO_PI; a += angle) {
    float sx = x + cos(a) * radius2;
    float sy = y + sin(a) * radius2;
    vertex(sx, sy);
    sx = x + cos(a+halfAngle) * radius1;
    sy = y + sin(a+halfAngle) * radius1;
    vertex(sx, sy);
  }
  endShape(CLOSE);
}



