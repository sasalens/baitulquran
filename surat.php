<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Al-Qur'an</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
  <style>
    .surat {
      font-size: 14px;
      border: none;
      border-radius: 30px;
      margin: 20px 0 20px 20px;
      background-color: #5F8D4E;
      color: white;
      padding: 7px 30px;
    }
    .menu {
      text-decoration: none;
      color: #111111;
    }
    .menu:hover {
      color: #777;
    }
  </style>
</head>
<body>

<nav class="navbar bg-light">
  <div class="container">
    <a class="navbar-brand" href="index.php" id="">
      <img src="konten/logo.png" alt="Bootstrap" width="130" height="50">
    </a>
    <a class="menu" href="#" id="surah">Al-Qur'an</a>
  </div>
</nav>

    <!-- <a href="#" id="surah"><button type="button" class="surat">Tampilkan Nama Surah</button></a> -->
      <div class="container-fluid">
        <div class="row">
    <div class="col-3" id="list-surah"></div>
    <div class="col-8" id="list-ayat"></div>
    </div>
    </div>

    <!-- API Quran -->
        <script>
            $(document).ready(() => {

        const $showData = $('#list-surah');
        const $raw = $('pre');
        $('#surah').on('click',(event) => {
            //  jangan refresh halaman    
            // event.preventDefault(); 

            $showData.text('Loading the JSON file.');

            $.getJSON('https://api.alquran.cloud/v1/surah', (respon) => {
            console.log(respon.code);
            console.log(respon.status);

        const markup = `
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Surah</th>
            </tr>
        </thead>
        <tbody>
        ${respon.data.map(item => `
        <tr ">
            <td class="col-1">${item.number}</td>
            <td><a href="#" class="ayat" data-idsurat="${item.number}">${item.name}(${item.englishNameTranslation})</a></td>
        </tr>
        `).join('')}
        </tbody>
        `;
        const table = $('<table class="table">').html(markup);

        $showData.html(table);


        const list_ayat=$('#list-ayat');

        // ayat

        $('.ayat').on('click', function (event) {
                // console.log($(event.target).data("idsurat"));
                $.getJSON("https://api.alquran.cloud/v1/surah/"+$(event.target).data("idsurat"), (respon) => {
                console.log(respon.code);
                console.log(respon.status);
            const ayah=`
            <thead style="text-align:center;">
                <tr>
                    <th>Ayat</th>
                </tr>
            </thead>
            <tbody>
            ${respon.data.ayahs.map(item => `
            <tr style="text-align:right;">
                <td>${item.numberInSurah}</td> 
                <td>${item.text}</td>
            </tr>
            `).join('')} 
            </tbody>
            `;
            const ayat=$('<table class="table table-borderless">').html(ayah);
            $('#list-ayat').html(ayat);
            
                } )
                
            });
                });
            });

            });
        </script>

 
 
</body>
</html>