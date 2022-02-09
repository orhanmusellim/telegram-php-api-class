<!-- PROJECT LOGO -->
<br />
<p align="center">

  <div align="center">
  <img src="assets/om-logo.png" alt="Logo" width="180" height="180">
  </div>

  <h2 align="center">PHP - Telegram API Class</h2>
     <br />
<div align="center">
  <img src="assets/telegram-logo.png" alt="Logo" width="180">
  </div>
  <br />
  <p align="center">
    PHP Projelerinize dahil ederek kullanabileceğiniz Telegram API Entegrasyonu için hazırlanmış basit bir Class'dır.
    <br />
    
  </p>

</p>


## Kullanım

### Telegram Üzerinde Bot Oluşturma
1. Telegram uygulamanız üzerinden arama kısmına "BotFather" yazın. Sağ tarafındaki mavi tik işaretine dikkat edin. Doğrulanmış hesap olması gerekir.
2. Gelen ekrandan mesajlaşmayı başlatın.
3. /newbot komutunu kullanarak yeni bir bot oluşturmak için gerekli aksiyonu alın.
4. Botunuzun adını yazın ve mesajı gönderin. Benzersiz bir isim olması gerekmez. Sadece botunuzun adının nasıl görünmesini istiyorsanız girebilirsiniz.
5. Bir sonraki adımda kullanıcı adı istiyor. Kullanıcı adı benzersiz olmalıdır ve sonunun _bot yada Bot bitmesi gerekmektedir. Buna dikkat edin.
6. Botunuz oluştu ve size mesaj olarak bir TOKEN döndü. Bu tokeni daha sonra kullanmak için saklayın.

### Botunuza Kütüphane Üzerinden Erişmek ve Standart Mesaj Gönderimi
1. Telegram Classını sayfanıza çağırın ve yeni bir class türetin. Aşağıdaki örnekte gösterilen adımları takip ederek standart mesaj gönderimi sağlayabilirsiniz.
```sh
include '/telebot.php';
## Token'ı Kütüphane içerisinden default olarak kayıt edebilir yada classı ilk çağırdığınızda göndererek güncelleyebilirsiniz.
$teleBot = new TeleBotLib('TOKEN');
## Public kanallar için kullanıcı adını kullanın. Kullanıcı adını kullanırken başına @ işareti eklemelisiniz. Private olan kanallar için kanal ID sini kullanmalısınız.
## Kanal ID si almak için grup yada kanal Public iken mesaj göndererek dönen cevaptaki ID değerini kayıt etmelisiniz.
$result = $teleBot->sendMessage("@kanaladiniz", "Test Mesaj");
```
### Döküman ve Mesaj Gönderimi

```sh
include '/telebot.php';
$teleBot = new TeleBotLib('TOKEN');
$result = $teleBot->sendDocument("@kanaladiniz", "Test Mesaj", "Dosya URL si https dahil olmak üzere gönderilmelidir.");
```
### Mevcut Mesajı Güncellemek

```sh
include '/telebot.php';
$teleBot = new TeleBotLib('TOKEN');
$result = $teleBot->editMessage("@kanaladiniz", "Güncellenecek Mesaj ID", "Mesaj");
```

Kütüphane içerisindeki diğer metodları kullanarak diğer metodlara ulaşabilirsiniz.

Ayrıca https://core.telegram.org/bots/api adresinden diğer tüm metodlara erişebilirsiniz.