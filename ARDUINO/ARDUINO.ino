//#include <SoftwareSerial.h>

#include <SoftwareSerial.h>
#include <LiquidCrystal_I2C.h>
LiquidCrystal_I2C lcd(0x27, 16, 2); //lcd address, row, colom

SoftwareSerial uno(1, 0);
//data tampung
int kelembaban = 0;


//mendeklarasikan sensor dari pin A0
const int sensor = A0;

//deklarasi relay di pin 4
const int relay = 4;

void setup() {
  Serial.begin(9600);
  //  serial port dalam monitor
  uno.begin(9600);
  lcd.init();
  lcd.backlight();
  lcd.clear();
  pinMode(relay, OUTPUT);
  pinMode(sensor, INPUT);
  //  digitalWrite(relay, HIGH);
  delay (2000);

  //setting tata letak pada lcd
  lcd.setCursor(2, 0);
  lcd.print("HAI NURWAHID");
  lcd.setCursor(0, 1);
  lcd.print("LOADING");
  for (int a = 8; a <= 11; a++) {
    lcd.setCursor(a, 1);
    lcd.print(".");
    delay(1500);
  }
  lcd.clear();
}

void loop() {

  //  // membaca sensor
  kelembaban = analogRead(sensor);
  Serial.println(kelembaban);
  if (kelembaban > 400) {
    digitalWrite(relay, LOW);
    lcd.setCursor(0, 0);
    lcd.print("POMPA HIDUP");
    delay(1000);
  } else {
    digitalWrite(relay, HIGH);
    lcd.setCursor(0, 0);
    lcd.print("POMPA MATI  ");
    delay(1000);
  }

  if (kelembaban < 300) {
    lcd.setCursor(0, 1);
    lcd.print("TINGKAT : TINGGI");

  } else if (kelembaban > 300 && kelembaban < 400) {
    lcd.setCursor(0, 1);
    lcd.print("TINGKAT : SEDANG");

  } else if (kelembaban > 400 ) {
    lcd.setCursor(0, 1);
    lcd.print("TINGKAT : RENDAH");
  }


  Serial.println(kelembaban);
  delay(10000);
}
