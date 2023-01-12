<!DOCTYPE html>
<html lang="en">

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Google Maps API サンプル</title>
  </head>
  <body>
    <div class="from" name="自宅">
      <p>出発</p>
      <input type="text" id="inputBegin">
    </div>

    <div class="to">
      <p>到着</p>
      <input type="text" id="inputEnd" value="明治神宮球場"><button id="searchButton">ルート検索</button>
      <!-- <input type="text" id="keyword"><button id="search">位置情報検索</button> -->
      <button id="clear">クリア</button>
    </div>

    
    <div id="map_canvas"></div>
    <div id="directionsPanel"></div>

    <div id="target" style="width:620px; height:400px"></div>

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script type="text/javascript">
      var map;
      var marker;
      var infoWindow;
      var begin ="明治神宮球場";
      var end="東京ドーム";
      var directionsDisplay;
      var directionsService;
      
    //  検索していない段階での地図表示
        function initMap() {
          var centerp = { lat:35.6359322,lng:139.8786311}
          var target = document.getElementById("target")
          var opts = {
            zoom: 14,
            center: centerp
          };
          map = new google.maps.Map(target, opts);
        };

        $(function() {
        $('#searchButton').click(function(e) {
        e.preventDefault();         // hrefが無効になり、画面遷移が行わない
 
        begin = $('#inputBegin').val();
        end   = $('#inputEnd').val();
 
        // ルート説明をクリア
        $('#directionsPanel').text(' ');
 
        google.maps.event.addDomListener(window, 'load', initialize(begin, end));
        google.maps.event.addDomListener(window, 'load', calcRoute(begin, end));
    });
});

function initialize(begin, end) {
    // インスタンス[geocoder]作成
    var geocoder = new google.maps.Geocoder();
 
    geocoder.geocode({
        // 起点のキーワード
        'address': begin
 
    }, function(result, status) {
        if (status == google.maps.GeocoderStatus.OK) {
            // 中心点を指定
            var latlng = result[0].geometry.location;
 
            // オプション
            var myOptions = {
                zoom: 14,
                center: latlng,
                scrollwheel: false,     // ホイールでの拡大・縮小
                mapTypeId: google.maps.MapTypeId.ROADMAP,
            };
 
            // #map_canvasを取得し、[mapOptions]の内容の、地図のインスタンス([map])を作成する
            map = new google.maps.Map(document.getElementById('map_canvas'), myOptions);
 
            // 経路を取得
            directionsDisplay = new google.maps.DirectionsRenderer();
            directionsDisplay.setMap(map);
            directionsDisplay.setPanel(document.getElementById('directionsPanel'));     // 経路詳細
            var directionsRenderer = new google.maps.DirectionsRenderer();

 
            // 場所
            $('#begin').text(begin);
            $('#end').text(end);
 
        } else {
            alert('取得できませんでした…');
        }
    });
}
 
// ルート取得
function calcRoute(begin, end) {
 
    var request = {
        origin: begin,         // 開始地点
        destination: end,      // 終了地点
        travelMode: google.maps.TravelMode.DRIVING,     // [自動車]でのルート
        avoidHighways: true,        // 高速道路利用フラグ
    };
 
    // インスタンス作成
    directionsService = new google.maps.DirectionsService();
 
    directionsService.route(request, function(response, status) {
        if (status == google.maps.DirectionsStatus.OK) {
            directionsDisplay.setDirections(response);
            alert("ルート発見しました")
            // ルート検索の結果を地図上に描画
			directionsRenderer.setDirections(response);
			directionsRenderer.setMap(map);
        } else {
            alert('ルートが見つかりませんでした…');
        }
    });
}
 
// キック
// google.maps.event.addDomListener(window, 'load', function() {
//     initialize(begin, end);
//     calcRoute(begin, end);
// });

      // 検索実行時の処理
      $("#search").on("click",function(){
        var place = document.getElementById('keyword').value;
        var geocoder = new google.maps.Geocoder();
        geocoder.geocode({
            address: place
          }, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {

              var bounds = new google.maps.LatLngBounds();

              for (var i in results) {
                if (results[0].geometry) {
                  // 緯度経度を取得
                  var latlng = results[0].geometry.location;
                  // 住所を取得
                  var address = results[0].formatted_address;
                  // 検索結果地が含まれるように範囲を拡大
                  bounds.extend(latlng);
                  // alert("取得できてはいるね");

                   // マーカーのセット
                   setMarker(latlng);
                  // マーカーへの吹き出しの追加
                  setInfoW(place, latlng, address);
                  // マーカーにクリックイベントを追加
                  markerEvent();
                }
              }
            } else if (status == google.maps.GeocoderStatus.ZERO_RESULTS) {
              alert("見つかりません");
            } else {
              console.log(status);
              alert("エラー発生");
            }
          });

      })

      // クリアボタン
      $("#clear").on("click",function(){
        deleteMakers();
        $("#keyword").empty();
      })
      

      // マーカーのセットを実施する
      function setMarker(setplace) {
        // 既にあるマーカーを削除
        deleteMakers();

        var iconUrl = 'http://maps.google.com/mapfiles/ms/icons/blue-dot.png';
          marker = new google.maps.Marker({
            position: setplace,
            map: map,
            icon: iconUrl
          });
        }

        //マーカーを削除する
        function deleteMakers() {
          if(marker != null){
            marker.setMap(null);
          }
          marker = null;
        }

        // マーカーへの吹き出しの追加
        function setInfoW(place, latlng, address) {
          infoWindow = new google.maps.InfoWindow({
          content: "<a href='http://www.google.com/search?q=" + place + "' target='_blank'>" + place + "</a><br><br>" + latlng + "<br><br>" + address + "<br><br><a href='http://www.google.com/search?q=" + place + "&tbm=isch' target='_blank'>画像検索 by google</a>"
        });
      }

      // クリックイベント
      function markerEvent() {
        marker.addListener('click', function() {
          infoWindow.open(map, marker);
        });
      }
      
        
  

    </script>

    <!-- APIキー -->
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD3g_e_f9kD9UTu0fv8egp_vMr_TfDtOWU&callback=initMap">
    </script>

  </body>
</html>