<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/hamu.css') }}">
    <title>キャンベルハムスター</title>
</head>
<body>
    <div class="main">
        <h1>キャンベルハムスター</h1>
        <h3>Campbell’s Hamster</h3>

        <img src="{{ asset('/画像/しめじ.png') }}" alt="画像">

        <table border="1">
            <tr>
                <th>体長</th><th>体重</th><th>なつきやすさ</th>
            </tr>

            <tr>
                <td>７〜１３cm</td><td>30〜40g</td><td>△</td>
            </tr>
        </table>

        <div class="Characteristic">
            <h2>特徴</h2>
                <p>見た目はジャンガリアンによく似ているが、違う種類である</p>
                <p>ジャンガリアンとの大きな違いは、耳が大きく尻尾が太くしっかりしている</p>
                <p>カラーバリエーションが多いのも特徴</p>
        </div>

        <div class="color">
            <h2>毛色</h2>

            <h3 class="color_2">アグーチ（背中側とお腹側で色が分かれる）</h3>
                <h3>ノーマル（アグーチ）</h3>
                    <p>茶色の野生色。お腹側は白っぽい色をしている</p>

                <h3>イエロー（アージェント）</h3>
                    <p>全体的にオレンジがかった毛色。シナモンとも呼ばれている</p>
                    <p>色の濃淡には幅がありレモンイエローからキツネ色まである</p>
                    <p>目は赤色になる。劣勢遺伝子突然変異p/pが発現したもの</p>

                <h3>オパール</h3>
                    <p>ノーマルに比べてやや毛が薄くなった毛色</p>
                    <p>ジャンガリアンのブルーサファイアより茶色がかった色をしている</p>
                    <p>劣勢突然変異遺伝子d/dが発現したもの</p>

                <h3>黒目イエロー（サンディ）</h3>
                    <p>全体的に黄褐色になる毛色</p>
                    <p>劣勢突然変異遺伝子b/bが発現したもの</p>

                <h3>ブルーフォーン</h3>
                    <p>青みがかった淡い黄色の毛色。目の色は赤色</p>
                    <p>イエロー（p/p）ブルー（d/d）が同時に発現したもの</p>

                <h3>ライラックフォーン</h3>
                    <p>青みがかった淡い黄色の毛色。目の色は黒色</p>
                    <p>オパール（d/d）黒目イエロー（b/b）が同時に発現した物</p>

                <h3>ベージュ</h3>
                    <p>明るいベージュ色。目の色は黒色</p>
                    <p>イエロー（p/p）黒目イエロー（b/b）が同時に発現したもの</p>

                <h3>ブルーベージュ</h3>
                    <p>青みがかったベージュ色。目の色は赤色</p>
                    <p>イエロー（p/p）オパール（d/d）黒目イエロー（b/b）が同時に発現したもの</p>

                <h3 class="color_2">セルフ（全身一色）</h3>

                <h3>ブラック（ノンアグーチ）</h3>
                    <p>全身が黒一色</p>

                <h3>ブルー</h3>
                    <p>全身が青みがかったグレーの毛色</p>
                    <p>ブラック（a/a）オパール（d/d）が同時に発現したもの</p>

                <h3>チョコレート</h3>
                    <p>全身がチョコレート色</p>
                    <p>ブラック（a/a）イエロー（b/b）が同時に発現した物</p>

                <h3>ダウ（パープル）</h3>
                    <p>全身が紫がかったグレーの毛色。目の色は赤色</p>
                    <p>ブラック（a/a）黒目イエロー（p/p）</p>

                <h3>赤目ライラック</h3>
                    <p>全身がパープルを柔らかくしたような毛色。目は赤色</p>
                    <p>ブラック（a/a）オパール（d/d）イエロー（b/b）が同時に発現した物</p>

                <h3>黒目ライラック</h3>
                    <p>全身がパープルを柔らかくしたような毛色。目は黒色</p>
                    <p>ブラック（a/a）黒目イエロー（b/b）オパール（d/d）が同時に発現した物</p>

                <h3>ダークベージュ</h3>
                    <p>全身がパ深いベージュ色。目は赤色</p>
                    <p>ブラック（a/a）黒目イエロー（b/b）イエロー（p/p）が同時に発現した物</p>

                <h3>シャンパン</h3>
                    <p>全身がパ薄いベージュ色。目は赤色</p>
                    <p>ブラック（a/a）黒目イエロー（b/b）イエロー（p/p）オパール（d/d）が同時に発現した物</p>

                <h3>アルビノ</h3>
                    <p>メラニン色素が作られないため全身白色。目は赤色</p>
                    <p>劣勢突然変異遺伝子（c/c）が発現した物</p>

                <h3>黒目ホワイト</h3>
                    <p>全体的に白色だが元来の色が毛先に残ることがある。目は黒色</p>
                    <p>大ルートとプラチナ（c/c）がアグーチやオパールと同時に発現したもの</p>

                <h3 class="color_2">毛質</h3>

                <h3>サテン</h3>
                    <p>光沢のある毛質。同じ毛色でもサテンとそうでないものでは違う色に見えることがある</p>

                <h3>ロングコート</h3>
                    <p>毛が長い種類。ただしゴールデンハムスターのロングほど長くはならない</p>
                <h3>レックス</h3>
                    <p>毛が根元からカールしたようになる。ヒゲもカールする</p>

        </div>

        <div class="Personality">
            <h2>性格</h2>
            <p>性格は活発でどちらかと言うと人には慣れにくい種類</p>
            <p>ただ噛むのは臆病なため、人間を怖がって噛んでいるだけなので</p>
            <p>次第に環境に慣れれば大人しく、よく懐く事が多い。当然だが個体差があるので</p>
            <p>キャンベルだからと言って必ずしも臆病な訳だはない</p>
        </div>
    </div>
</body>
</html>