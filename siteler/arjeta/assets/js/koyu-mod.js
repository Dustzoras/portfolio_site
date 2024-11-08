function updateTime() {
    var currentTime = new Date();
    var hours = currentTime.getHours();

    // Akşam 6'dan sabah 5'e kadar olan saatlerde koyu moda geçiş
    if (hours >= 18 || hours < 5) {
        $(".div-dark").addClass("dark-mode");
        $(".div-dark  *").addClass("dark-mode");
    }
    else {
        $(".div-dark").removeClass("dark-mode");
        $(".div-dark *").removeClass("dark-mode");
    }
}

// Her saniye zamanı kontrol etmek için setInterval kullanılır
setInterval(updateTime, 1000);

// Sayfa yüklendiğinde de fonksiyonu çağır
updateTime();