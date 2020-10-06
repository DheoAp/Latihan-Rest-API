/* Mengambil lokasi file json */
// append = tambahkan di akhir sebuah element baru
/* toLowerCase() = memaksa tulisan menjadi huruf kecil semua */
/* html = menganti apapun isinya */

function tampikanSemuaMenu(){
  $.getJSON('data/pizza.json', function(data){
    let menu = data.menu;
    $.each(menu, function(i, data){
      $('#daftar-menu').append('<div class="col-md-4"><div class="card mb-3"><img class="card-img-top" src="img/data/'+ data.gambar +'"><div class="card-body"><h5 class="card-title">'+ data.nama +'</h5><p class="card-text">'+ data.deskripsi +'</p><h5 class="card-title">Rp.'+ data.harga +'</h5><a href="#" class="btn btn-primary">Pesan Sekarang</a></div></div></div>'); /* Jquery cari elemen yang idnya daftar-menu */
    });
  });
}

tampikanSemuaMenu();



$('.nav-link').on('click', function(){
  $('.nav-link').removeClass('active'); /* Hilangkan semua class active-nya yang ada di class nav-link */
  $(this).addClass('active'); /* khusus li yang kita click ( tambah class active di class nav-link)*/

  let kategori = $(this).html(); /* $(this).html() -> ambil html-nya */
  $('h1').html(kategori);

  if(kategori == 'All Menu'){
    $('#daftar-menu').html('');
    tampikanSemuaMenu();
    return;
  }

  /* Menampilkan menu sesuai kategorinya. Lakukan Ajax sekali lagi */

  $.getJSON('data/pizza.json', function (data) {
    /* tampilkan data sesuai yang di klik pada menu */
    let menu = data.menu;
    let content = '';

    $.each(menu, function(i,data){ /* lakukan looping */
      if(data.kategori == kategori.toLowerCase()){ /* kategori.toLowerCase() = kategori di dapat dari tulisan pada navbar */
        content += '<div class="col-md-4"><div class="card mb-3"><img class="card-img-top" src="img/data/'+ data.gambar +'"><div class="card-body"><h5 class="card-title">'+ data.nama +'</h5><p class="card-text">'+ data.deskripsi +'</p><h5 class="card-title">Rp.'+ data.harga +'</h5><a href="#" class="btn btn-primary">Pesan Sekarang</a></div></div></div>';
      } 
    });

    $('#daftar-menu').html(content);/* html = timpa apapun isinya dengan content */
  });


});