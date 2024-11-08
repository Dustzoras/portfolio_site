<?php include "php/header.php"; ?> <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-move=1.0">
    <title>Özellikler</title>
    <link rel="stylesheet" href="assets/css/features.css">
  </head>
  <body>
    <div class="all-big-div">
      <span class="title">
        <h1 class="title-2 padding-3"> Özellikler</h1>
      </span>
      <div class="features-1 padding-5">
        <img src="assets/images/load-balance-failover.svg" alt="Firewall Hat Birleştirme Hat Yedekleme">
        <div class="features-1-1">
          <div class="all-min-width gap-10 features-in-1 menu-hover-move">
            <div class="paragraph">
              <h1 class="title-5">Hat Birleştirme</h1>
              <p class="all-text">XLOG, Maksimum beş adet fiziksel +(VLAN sayısı kadar) modemi cihaz üzerinde birleştirerek internet hızını arttırmakta ve tek internet hattı gibi çalışmasını sağlamaktadır.</p>
            </div>
            <button class="button-type-1" onclick="location.href='load-balance.php'" type="button" onclick="location.href='load-balance.php'" type="button">Detaylar</button>
          </div>
          <div class="all-min-width features-in-1 menu-hover-move gap-10">
            <div class="paragraph">
              <h1 class="title-5">Hat Yedekleme</h1>
              <p class="all-text">XLOG’a bağlanmış olan internet hatlarından herhangi birinde internetin kesilmesi durumunda diğer hatlar kullanıcıya kesinti yaşamadan internet sağlamaya devam eder.</p>
            </div>
            <button class="button-type-1" onclick="location.href='failover.php'" type="button" onclick="location.href='failover.php'" type="button">Detaylar</button>
          </div>
        </div>
      </div>
      <div class="ips-ids-firewall gray-background padding-5">
        <div class="all-min-width solo-container menu-hover-move">
          <div class="paragraph">
            <h1 class="title-5">IPS & IDS</h1>
            <p class="all-text">Ağınızda oluşan saldırı ve zararlı bağlantıları anlık olarak tespit ederek engellemesini gerçekleştirir.</p>
          </div>
          <button class="button-type-1" onclick="location.href='ips-ids.php'" type="button" onclick="location.href='ids-ips.php'" type="button">Detaylar</button>
        </div>
        <div class="all-min-width solo-container menu-hover-move">
          <div class="paragraph">
            <h1 class="title-5">Güvenlik Duvarı</h1>
            <p class="all-text">Güvenlik Duvarı özelliği ile port açma-kapatma ve yönlendirme işlemleri uygulanır. Dışarıdan gelen port bazlı saldırılar engellenerek sistem güvenliği sağlanır.</p>
          </div>
          <button class="button-type-1" onclick="location.href='firewall.php'" type="button" onclick="location.href='firewall.php'" type="button">Detaylar</button>
        </div>
      </div>
      <div class="features-2 padding-5">
        <img class="mac-filter" src="assets/images/mac-filter-3.png" alt="Firewall RADIUS Mac Filtreleme Dinamik VLAN">
        <div class="all-min-width features-in-2 menu-hover-move">
            <h1 class="title-5">Radius Mac Filtreleme (802.1x)</h1>
            <p class="all-text">Bu yeni özellik, hem Layer 2 hem de Layer 3 ağlarda yönetilebilen switchlerle entegre bir şekilde çalışarak, istemci cihazların ağa entegre olmadan önce engellenip engellenmeyeceğini belirlemeyi mümkün kılar.</p>
            <button class="button-type-1" onclick="location.href='mac-filtering.php'" type="button" onclick="location.href='features-in.php'" type="button">Detaylar</button>
        </div>
        <!-- ?php include "assets/images/svg/mac-filtering.svg"?>-->
      </div>
      <div class="hotspot gray-background padding-5">
        <div class="paragraph hotspot-container">
          <h1 class="title-5">Hotspot</h1>
          <p class="all-text">Hotspot özelliği ile müşterimize 20+ otantikasyon şekli sunmaktayız. TC kimlik numarası, kullanıcı adı-şifre, sms vb. giriş yöntemleri ile kullanıcılarınızı ağınıza dahil edebilirsiniz.</p>
          <button class="button-type-1" onclick="location.href='hotspot.php'" type="button" onclick="location.href='hotspot.php'" type="button">Detaylar</button>
        </div>
        <img class="hotspot" src="assets/images/hotspot-image.png" alt="Firewall Hotspot">
      </div>
      <div class="web-filter-container padding-5">
        <img class="all-min-width res-img" src="assets/images/web-filtering.png" alt="Firewall WEB HTTP HTTPS DNS Filtreleme">
        <div class="all-min-width web-filter-in menu-hover-move">
            <h1 class="title-5">Web Filtreleme</h1>
            <p class="all-text">HTTP, HTTPS ve DNS trafiğini istenmeyen kullanımları engellemek için hazır kara listeler ve özel oluşturulan listelerle kontrol edebilirsiniz. HTTPS filtreleme, SNI'dan güç alarak etkili bir engelleme sağlar. Ayrıca, web trafiğini baştan oluşmadan önce DNS filtreleme ile yönetebilirsiniz.</p>
            <button class="button-type-1" onclick="location.href='web-filter.php'" type="button" onclick="location.href='web-filter.php'" type="button">Detaylar</button>
        </div>
      </div>
      <div class="app-filter reverse gray-background padding-5">
        <div class="all-min-width app-container menu-hover-move">
            <h1 class="title-5">Uygulama Filtreleme</h1>
            <p class="all-text">Ağınızdaki cihazların, istemediğiniz uygulama kaynaklarına erişimlerini engelleyebilir veya izin verebilirsiniz.</p>
            <button class="button-type-1" onclick="location.href='application-filter.php'" type="button" onclick="location.href='application-filter.php'" type="button">Detaylar</button>
        </div>
        <img class="all-min-width application res-img-2" src="assets/images/app-filter.png" alt="Firewall Uygulama Filtreleme">
      </div>
      <div class="speed-limit padding-5">
        <img class="speed-limit-img" src="assets/images/speed-limitter.png" alt="Firewall Hız Sınırlama">
        <div class="all-min-width speed-limit-in menu-hover-move">
          <h1 class="title-5">Hız Sınırlama</h1>
          <p class="all-text">Hız sınırlama ile ağınızdaki kullanıcıların aşırı trafik oluşturmasını engelleyebilir, ağınızı rahatlatabilirsiniz.</p>
          <button class="button-type-1" onclick="location.href='speed-limit.php'" type="button" onclick="location.href='speed-limit.php'" type="button">Detaylar</button>
        </div>
      </div>
      <div class="vpn marg gray-background padding-5">
        <img src="assets/images/svg/vpn.svg" alt="Firewall Wireguard VPN SSL VPN IPsec VPN">
        <div class="paragraph menu-hover-move">
          <h1 class="title-5">Wireguard, SSL, IPSec VPN</h1>
          <!--<p class="all-text"> İnternette dolaşırken kişisel bilgilerinizi koruma ve siber tehditlere karşı güvenlik ihtiyaçlarınızı VPN ile karşılayabilirsiniz. Internet trafiğinizi şifreleyen ve gerçek IP adresinizi gizleyen bir güvenlik katmanı oluşturarak, çevrimiçi aktivitelerinizi anonim hale getirir. Ayrıca, coğrafi kısıtlamalardan kaçınmanıza ve güvenli bir şekilde herhangi bir yerdeki içeriğe erişmenize olanak tanır. İnternette özgürce dolaşın, güvende kalın ve kişisel bilgilerinizi koruyun.</p>-->
          <p class="all-text">Uzaktaki şubeleriniz için VPN ile ağlarınızı birleştirebilirsiniz. Ağlarınız arasındaki Fiziksel Uzaklığı ortadan kaldırabilirsiniz. SSL VPN yazılımsal çözümümüz ile bilgisayarınızdan ağınıza şifreli olarak anında dahil olabilirsiniz.</p>
        </div>
        <button class="button-type-1" onclick="location.href='vpn.php'" type="button" onclick="location.href='vpn.php'" type="button">Detaylar</button>
      </div>
      <div class="log syslog marg padding-5">
        <img src="assets/images/syslog.svg" alt="Firewall 5651 Loglama Kanuna Uygun Loglama">
        <div class="log-in">
          <div class="log-in-1 menu-hover-move gap-10">
            <h1 class="title-5">SYSLOG İmzalama</h1>
            <p class="all-text">Başka cihazlar tarafından oluşturulan log kayıtlarını Tübitak Zaman Damgası ile imzalar ve imza kaydıyla birlikte kendi üzerine kaydeder.</p>
          </div>
          <div class="log-in-1 menu-hover-move gap-10">
            <h1 class="title-5">5651 Loglama</h1>
            <p class="all-text">Ağınızda oluşturulan log kayıtlarını Tübitak Zaman Damgası ile imzalar ve imza kaydıyla birlikte kendi üzerine kaydeder.</p>
          </div>
        </div>
        <button class="button-type-1" onclick="location.href='log.php'" type="button" onclick="location.href='log.php'" type="button">Detaylar</button>
      </div>
    </div> <?php include "php/footer.php"; ?>