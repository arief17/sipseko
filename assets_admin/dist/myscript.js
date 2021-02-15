const flashData = $('.flash-data').data('flashdata');

if(flashData){
    Swal.fire({
        title: 'Berita ' ,
        text: 'Berhasil ' + flashData,
        icon: 'success'
    });
}

// tombol hapus
$('.tombol-hapus').on('click', function(e){
    e.preventDefault();
    const href = $(this).attr('href');
    Swal.fire({
        title: 'Apakah anda yakin?',
        text: "Berita akan dihapus",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus Berita'
      }).then((result) => {
        if (result.value) {
          
            document.location.href = href;
          
        }
      })

});


const flashData2 = $('.flash-data2').data('flashdata2');

if(flashData2){
    Swal.fire({
        title: 'Galeri ' ,
        text: 'Berhasil ' + flashData2,
        icon: 'success',
    })
}

// tombol hapus
$('.tombol-hapus2').on('click', function(e){
    e.preventDefault();
    const href = $(this).attr('href');
    Swal.fire({
        title: 'Apakah anda yakin?',
        text: "Galeri akan dihapus",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus Galeri'
      }).then((result) => {
        if (result.value) {
          
            document.location.href = href;
          
        }
      })

});

const flashData3 = $('.flash-data3').data('flashdata3');

if(flashData3){
    Swal.fire({
        title: 'Data Guru ' ,
        text: 'Berhasil ' + flashData3,
        icon: 'success',
    })
}

// tombol hapus
$('.tombol-hapus3').on('click', function(e){
    e.preventDefault();
    const href = $(this).attr('href');
    Swal.fire({
        title: 'Apakah anda yakin?',
        text: "Data Guru akan dihapus",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus Data Guru'
      }).then((result) => {
        if (result.value) {
          
            document.location.href = href;
          
        }
      })

});

const flashData4 = $('.flash-data4').data('flashdata4');

if(flashData4){
    Swal.fire({
        title: 'Data Ekstrakulikuler ' ,
        text: 'Berhasil ' + flashData4,
        icon: 'success',
    })
}

// tombol hapus
$('.tombol-hapus4').on('click', function(e){
    e.preventDefault();
    const href = $(this).attr('href');
    Swal.fire({
        title: 'Apakah anda yakin?',
        text: "Data Ekstrakulikuler akan dihapus",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus Data Ekstrakulikuler'
        }).then((result) => {
        if (result.value) {
            
            document.location.href = href;
            
        }
        })

});

const flashData5 = $('.flash-data5').data('flashdata5');

if(flashData5){
    Swal.fire({
        title: 'Data Prestasi ' ,
        text: 'Berhasil ' + flashData5,
        icon: 'success',
    })
}

// tombol hapus
$('.tombol-hapus5').on('click', function(e){
    e.preventDefault();
    const href = $(this).attr('href');
    Swal.fire({
        title: 'Apakah anda yakin?',
        text: "Data Prestasi akan dihapus",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus Data Prestasi'
        }).then((result) => {
        if (result.value) {
            
            document.location.href = href;
            
        }
        })

});

const flashData6= $('.flash-data6').data('flashdata6');

if(flashData6){
    Swal.fire({
        title: 'Akun Siswa' ,
        text: 'Berhasil ' + flashData6,
        icon: 'success',
    })
}

// tombol hapus
$('.tombol-hapus6').on('click', function(e){
    e.preventDefault();
    const href = $(this).attr('href');
    Swal.fire({
        title: 'Apakah anda yakin?',
        text: 'Akun Siswa akan dihapus',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus Akun Siswa'
        }).then((result) => {
        if (result.value) {
            
            document.location.href = href;
            
        }
        })

});

const flashData7= $('.flash-data7').data('flashdata7');

if(flashData7){
    Swal.fire({
        title: 'Data Slider ' ,
        text: 'Berhasil ' + flashData7,
        icon: 'success',
    })
}
