# digital-body-scale-custom-with-esp8226-using-php-and-MySQL
Displays the data on the weighing results in a web browser in real time and saves it to a MySQL database

materials:
digital body scale custom, esp8266, HX711 load cell amplifier, psu 5v/3A, jumper cable. 

![alt text](https://github.com/jenizar/digital-body-scale-custom-with-esp8226-using-php-and-MySQL/blob/main/Screenshot/esp8266_body_weight_scale1.jpg)

![alt text](https://github.com/jenizar/digital-body-scale-custom-with-esp8226-using-php-and-MySQL/blob/main/Screenshot/esp8266_body_weight_scale2.jpg)

![alt text](https://github.com/jenizar/digital-body-scale-custom-with-esp8226-using-php-and-MySQL/blob/main/Screenshot/esp8266_body_weight_scale3.jpg)

![alt text](https://github.com/jenizar/digital-body-scale-custom-with-esp8226-using-php-and-MySQL/blob/main/Screenshot/esp8266_body_weight_scale4.jpg)

![alt text](https://github.com/jenizar/digital-body-scale-custom-with-esp8226-using-php-and-MySQL/blob/main/Screenshot/esp8266_body_weight_scale5.jpg)

![alt text](https://github.com/jenizar/digital-body-scale-custom-with-esp8226-using-php-and-MySQL/blob/main/Screenshot/esp8266_body_weight_scale6.jpg)

![alt text](https://github.com/jenizar/digital-body-scale-custom-with-esp8226-using-php-and-MySQL/blob/main/Screenshot/esp8266_body_weight_scale7.jpg)

![alt text](https://github.com/jenizar/digital-body-scale-custom-with-esp8226-using-php-and-MySQL/blob/main/Screenshot/esp8266_body_weight_scale8.jpg)

![alt text](https://github.com/jenizar/digital-body-scale-custom-with-esp8226-using-php-and-MySQL/blob/main/Screenshot/esp8266_body_weight_scale9.jpg)

Instructions:
1. open the back case with a screwdriver
2. disconnect the pin header male connecting the display and battery pcb with the loadcell cable pcb
3. use the pcb piece as a place to connect the 4 wires (red-black-green-blue) coming from the loadcell pcb scales.
4. solder the jumper cables from the pcb pieces to 4 wires (red-black-green-blue) the weighing loadcell pcb.
5. use a mouse cable or speaker cable containing 4 wires and solder it to the jumper cable pcb piece.
6. match the 4 wires coming from the weighing sensor to the load cell amplifier HX711 red - red, black - black, white - white, green - green
7. adjust the 4 pins on the HX711 load cell amplifier with the pins on the esp8266 board:

VCC&nbsp;&nbsp; -- &nbsp;&nbsp;&nbsp;5v, 

DAT&nbsp;&nbsp; -- &nbsp;&nbsp;&nbsp;D5, 

CLK&nbsp;&nbsp; -- &nbsp;&nbsp;&nbsp;D6, 

GND&nbsp;&nbsp; -- &nbsp;&nbsp;&nbsp;GND


loadcell pin connect to  HX711 green pcb pin 

E+ &nbsp;&nbsp;&nbsp; --  &nbsp;&nbsp;&nbsp;&nbsp;E+

S+ &nbsp;&nbsp;&nbsp; --  &nbsp;&nbsp;&nbsp;&nbsp;A+

E- &nbsp;&nbsp;&nbsp; --  &nbsp;&nbsp;&nbsp;&nbsp;E-

S- &nbsp;&nbsp;&nbsp; --  &nbsp;&nbsp;&nbsp;&nbsp;A-

loadcell pin connect to  HX711 purple pcb pin 

E+ &nbsp;&nbsp;&nbsp; --  &nbsp;&nbsp;&nbsp;&nbsp;E+

S+ &nbsp;&nbsp;&nbsp; --  &nbsp;&nbsp;&nbsp;&nbsp;A+

E- &nbsp;&nbsp;&nbsp; --  &nbsp;&nbsp;&nbsp;&nbsp;E-

S- &nbsp;&nbsp;&nbsp; --  &nbsp;&nbsp;&nbsp;&nbsp;A-

References:

1. https://github.com/jenizar/nodemcu-displays-and-inserts-weighing-data-into-the-MySQL-using-php
2. https://learn.sparkfun.com/tutorials/load-cell-amplifier-hx711-breakout-hookup-guide/all
3. https://www.instructables.com/Arduino-Bathroom-Scale-With-50-Kg-Load-Cells-and-H/
4. https://youtu.be/LIuf2egMioA
