<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>TTS</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" type="text/css" href="dsCrossword.css"/>
    <style type="text/css">
        body {
            padding: 20px;
        }
    </style>
</head>
<body>
    <div id="dsCrossword"><!-- puzzle area --></div>
    <script type="text/javascript" src="jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="dsCrossword.js"></script>
    <script type="text/javascript">
        var items = [
              {
                 "item_id":1423840927089,
                 "direction":"across",
                 "clue":"Suami Shinta (tokoh wayang)",
                 "answer":"rama",
                 "start_x":0,
                 "start_y":0
              },
              {
                 "item_id":1423840939829,
                 "direction":"down",
                 "clue":"Baca (inggris)",
                 "answer":"read",
                 "start_x":0,
                 "start_y":0
              },
              {
                 "item_id":1423840947847,
                 "direction":"across",
                 "clue":"Siksa",
                 "answer":"dera",
                 "start_x":0,
                 "start_y":3
              },
              {
                 "item_id":1423840965547,
                 "direction":"down",
                 "clue":"Serdadunya westerling",
                 "answer":"apra",
                 "start_x":3,
                 "start_y":0
              },
              {
                 "item_id":1423840977328,
                 "direction":"across",
                 "clue":"Paling baik",
                 "answer":"prima",
                 "start_x":3,
                 "start_y":1
              },
              {
                 "item_id":1423840995751,
                 "direction":"down",
                 "clue":"Negara beribukota Tripoli",
                 "answer":"libya",
                 "start_x":5,
                 "start_y":0
              },
              {
                 "item_id":1423841011121,
                 "direction":"down",
                 "clue":"Nama bunga",
                 "answer":"kana",
                 "start_x":7,
                 "start_y":0
              },
              {
                 "item_id":1423841022693,
                 "direction":"across",
                 "clue":"Tepat pada sasaran",
                 "answer":"kena",
                 "start_x":7,
                 "start_y":0
              },
              {
                 "item_id":1423841038556,
                 "direction":"down",
                 "clue":"Tidak menyetujui",
                 "answer":"anti",
                 "start_x":10,
                 "start_y":0
              },
              {
                 "item_id":1423841054982,
                 "direction":"across",
                 "clue":"Gelar bangsawan makassar",
                 "answer":"andi",
                 "start_x":7,
                 "start_y":3
              },
              {
                 "item_id":1423841066139,
                 "direction":"across",
                 "clue":"Stempel",
                 "answer":"cap",
                 "start_x":4,
                 "start_y":4
              },
              {
                 "item_id":1423841102020,
                 "direction":"across",
                 "clue":"Hewan khas Australia yang bisa memanjat",
                 "answer":"koala",
                 "start_x":0,
                 "start_y":5
              },
              {
                 "item_id":1423841120911,
                 "direction":"across",
                 "clue":"Ruangan salam kapal",
                 "answer":"palka",
                 "start_x":6,
                 "start_y":5
              },
              {
                 "item_id":1423841138354,
                 "direction":"down",
                 "clue":"Duduk mengeram",
                 "answer":"dekam",
                 "start_x":9,
                 "start_y":3
              },
              {
                 "item_id":1423841153259,
                 "direction":"down",
                 "clue":"Nama benua",
                 "answer":"eropa",
                 "start_x":1,
                 "start_y":3
              },
              {
                 "item_id":1423841165180,
                 "direction":"across",
                 "clue":"Garpu nada",
                 "answer":"tala",
                 "start_x":0,
                 "start_y":7,
              },
              {
                 "item_id":1423841180560,
                 "direction":"across",
                 "clue":"Radio nasional kita",
                 "answer":"rri",
                 "start_x":4,
                 "start_y":6
              },
              {
                 "item_id":1423841194060,
                 "direction":"down",
                 "clue":"Mobil (inggris)",
                 "answer":"car",
                 "start_x":4,
                 "start_y":4
              },
              {
                 "item_id":1423841208793,
                 "direction":"down",
                 "clue":"Pameran Produksi Indonesia",
                 "answer":"ppi",
                 "start_x":6,
                 "start_y":4
              },
              {
                 "item_id":1423841224123,
                 "direction":"across",
                 "clue":"Planet kita",
                 "answer":"bumi",
                 "start_x":7,
                 "start_y":7
              },
              {
                 "item_id":1423841244274,
                 "direction":"down",
                 "clue":"Ramai, gaduh",
                 "answer":"ribut",
                 "start_x":5,
                 "start_y":6
              },
              {
                 "item_id":1423841261311,
                 "direction":"across",
                 "clue":"Hewan bersel satu",
                 "answer":"amuba",
                 "start_x":3,
                 "start_y":9
              },
              {
                 "item_id":1423841273071,
                 "direction":"down",
                 "clue":"Cap",
                 "answer":"tera",
                 "start_x":0,
                 "start_y":7
              },
              {
                 "item_id":1423841282803,
                 "direction":"across",
                 "clue":"Sarana",
                 "answer":"alat",
                 "start_x":0,
                 "start_y":10
              },
              {
                 "item_id":1423841294040,
                 "direction":"down",
                 "clue":"Sangat",
                 "answer":"amat",
                 "start_x":3,
                 "start_y":7
              },
              {
                 "item_id":1423841309241,
                 "direction":"down",
                 "clue":"Omong kosong",
                 "answer":"bual",
                 "start_x":7,
                 "start_y":7
              },
              {
                 "item_id":1423841320231,
                 "direction":"across",
                 "clue":"Langkah seribu",
                 "answer":"lari",
                 "start_x":7,
                 "start_y":10
              },
              {
                 "item_id":1423841332566,
                 "direction":"down",
                 "clue":"yang ditengah",
                 "answer":"inti",
                 "start_x":10,
                 "start_y":7
              }
           ];
           jQuery('#dsCrossword').dsCrossword({
            itemsSource: items,
            cluesPosition: 'right',
            activeCluePosition: 'top',
            initAnswers: {
                '23-across':'lari'
            },
            colors: {
                puzzleBg: '',
                active: '',
                selected: '',
                puzzleFont: ''
            }
        });
    </script>
</body>
</html>
