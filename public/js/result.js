
// googleMapsAPIを持ってくるときに,callback=initMapと記述しているため、initMap関数を作成
function initMap() {
    // index.blade.phpで描画領域を設定するときに、id=Acceseとしたため、その領域を取得し、Acceseに格納します。
    Accese = document.getElementById("Accese");
    // 東京タワーの緯度は35.6585769,経度は139.7454506と事前に調べておいた
    let hairsalon = { lat: 33.23267123972891, lng: 131.60222551719784 };
    // オプションを設定
    opt = {
        zoom: 13, //地図の縮尺を指定
        center: hairsalon, //センターをhairsalonに設定
    };
    // 地図のインスタンスを作成します。第一引数にはマップを描画する領域、第二引数にはオプションを指定
    mapObj = new google.maps.Map(Accese, opt);

    // 追加
    marker = new google.maps.Marker({
        // ピンを差す位置を決めます。
        position: hairsalon,
        // ピンを差すマップを決めます。
        map: mapObj,
        // ホバーしたときに「tokyotower」と表示されるようにします。
        title: "hair & nail salon M&Co.",
    });
}
