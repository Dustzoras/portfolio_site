$(document).ready(function() {
    // Tüm tab içeriklerini gizle
    $(".tab-div").hide();
    $(".tab-div2").hide();
  
    // İlk butonu aktif olarak ayarla ve ilgili tab içeriğini göster
    $(".tab-button").first().addClass("tab-button-aktif");
    $(".tab-div").first().finish().slideDown("slow");
  
    $(".tab-button").click(function(e) {
      e.preventDefault();
  
      // Aktif olan butonun stilini değiştirme
      $(".tab-button").removeClass("tab-button-aktif");
      $(this).addClass("tab-button-aktif");
  
      // Tüm tab içeriklerini kapatma
      $(".tab-div").finish().slideUp("slow");
      $(".tab-div2").finish().slideUp("slow");
  
      // İlgili tab içeriğini gösterme
      var index = $(this).index();
      var tabContent = $(".tab-div").eq(index);
  
      if (tabContent.length) {
        tabContent.slideDown("slow");
      } else {
        $(".tab-div2").eq(index - $(".tab-div").length).slideDown("slow");
      }
    });
  });