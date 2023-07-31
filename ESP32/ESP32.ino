
#include <WiFi.h>
#include <HTTPClient.h>
#include <SoftwareSerial.h>

//membuat variabel untuk (Rx, Tx)
SoftwareSerial DataSerial(16, 17);

//inisialisasi wifi
const char* ssid = "Note 8 Pro";
const char* pass = "engkosit";
//
//// Set web server port number to 80
//WiFiServer server(80);

const char* server = "192.168.43.185";
void setup() {
  Serial.begin(9600);
  DataSerial.begin(9600);

//  inisialisasi host
WiFi.begin(ssid,pass);

//cek koneksi
  while(WiFi.status() !=WL_CONNECTED){
    Serial.print(".");
  }
    // Print local IP address and start web server
  Serial.println("Berhasil Koneksi ke WiFi");



  

}

void loop() {
  String kelembaban = "";
  while(DataSerial.available() > 0){

    kelembaban += char(DataSerial.read());
  }
//  buang spasi 
  kelembaban.trim();

  Serial.println("kelembaban :" + kelembaban); 

//  kirim data ke data base

//  cek koneksi esp32 ke web server
  WiFiClient client;
  const int httpPort = 80;
     if(!client.connect(server,httpPort)){

      Serial.println("Gagal Terkoneksi ke webserver");
      return;
     }
//     apabila terkoneksi ke webserver
  HTTPClient http;
//  menyiapkan url untuk krim data
    String Link = "http://" + String(server) + "/kelembaban/kirimdata.php?kelembaban=" + String(kelembaban);
//    eksekusi link url
  http.begin(Link);
  http.GET();
//  tangkap respon kirimdata
  String respon = http.getString();
  Serial.println(respon);
  delay(10000); 

}
