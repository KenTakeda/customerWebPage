<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:type" content="website">
    <meta property="og:title" content="title">
    <meta property="og:discription" content="discription">
    <meta property="og:image" content="画像の絶対パスをここに記入">
    <meta property="og:site_name" content="Site Name">
    <title>集客に苦慮される飲食店様との協業について</title>
    <link rel="stylesheet" href="topPage.css">
</head>
<body>
    <div id="all">
        <div id="top">
            <div>
                <img src="topPic.jpg" id="topPic">
            </div>
            <div id="topMesse">
                <h1>Fun Eating</h1>
                <p>外食をもっと楽しく。<br>外食にもっと自由を。</p>
            </div>
        </div>
        <div id="service">
            <div id="serviceAbout">
                <h2>次世代メニュー・オーダーアプリ『わがままグルメ』開発中</h2>
                <h3>コンセプトは「お客さま・飲食店さま、両方ハッピーに」</h3>
                <ul id="merit">
                    <li id="customer">
                        お客様ができること
                        <ul id="customerWords">
                            <li>自分の好みにぴったりの料理を食べることができる</li>
                            <li>価格も自分で設定可能</li>
                        </ul>
                    </li>
                    <div id="bender">
                    <li >
                        飲食店様が達成できること
                        <ul id="benderWords">
                            <li>単価をあげることができる</li>
                            <li>他店との違いをはっきり出すことができる</li>
                            <li>リピーターが増える</li>
                        </ul>
                    </li>
                    </div>
                </ul>
            </div>
            <div id="serviceMesse">
                <h2 id="messeTop">飲食店オーナー様・料理人様へのお願い</h2>
                <p id="words">飲食店様・お客様両方にとって、よりよいサービスにするためにご意見お聞かせください。
                <br>
                また、「わがままグルメ」のテスト運用にご協力いただける飲食店様、料理人様も募っております。<br>
                初期投資や費用はかかりませんので、ご興味ある方は是非以下のフォームから、もしくはお電話にてお問い合わせお願いいたします。<br>
                </p>
            </div>
        </div>
        <div id="aboutus">
            <h2>About Us</h2>
            <div id="syo">
                <div id="syoPic">
                    <img src="syoImg.jpg" id="syoImg">
                </div>
                <div id="syoProf">
                    <p>佐藤　翔</p>
                    <p>1995年、北海道湧別町生まれ。早稲田大学政治経済学部経済学科卒。<br>
                        早稲田大学政治経済学部経済学科卒。18歳で上京し、居酒屋でのアルバイト・美味しいラーメン屋居酒屋巡りが楽しすぎて大学に行かなくなり留年。<br>
                        大学卒業後は、新規事業やマーケティングのコンサルティング会社であるD4DR株式会社に入社し、主にマーケティングのコンサルティングを担当。<br>
                        現在も飲食関連のサービスを開発しながらサラリーマンとして働いてる。
                    </p>
                </div>
            </div>
            <div id="ken">
                <div id="kenPic">
                    <img src="kenImg.jpeg" id="kenImg">
                </div>
                <div id="kenProf">
                    <p>竹田　健</p>
                    <P>1995年、北海道札幌市生まれ。青山学院大学文学部史学科卒。<br>
                        大学時代はワインバルでキッチンを４年間つづけ、卒業後はNTTドコモに入社。<br>
                        法人向け営業としてお客様の業務のデジタル化をお客様に寄り添って提案・実行している。<br>
                        料理が趣味で、ハンバーグが得意料理。幼少期の夢はコックさんになること。
                    </P>
                </div>
            </div>
        </div>
        <div id="contact">
            <h2>Contact</h2>
            <form method="POST" action="result.php" id="form">
                <p>※がついているものは必須となります。</p>
                <p>店舗名<br>
                    <?php
                    echo '<input type="text" value="" name="shopName">';
                    ?>    
                </p>
                <p>氏名※<br>
                    <?php
                        echo '<input type="text" value="" name="name" required>';
                    ?>
                </p>
                <p>役職<br>
                <?php
                    echo '<input type="text" value="" name="job">';
                ?>
                </p>
                <p>電話番号<br>
                    <?php
                        echo '<input type="text" value="" name="tel">';
                    ?>
                    </p>
                <p>メールアドレス※<br>                
                    <?php
                        echo '<input type="text" value="" name="address" required>';
                    ?>
                </p>
                <p>お問い合わせ内容<br>                
                    <?php
                        echo '<textarea name="question" rows="4" cols="40"></textarea>';
                    ?>
                </p>
                <input type="submit" value="送信"></input>
            </form>
        </div>
    </div>
</body>
</html>