<?php include("header.php"); ?>
    <header class="header">
        <div class="inner clearfix">
            <h1 class="site-title"><a href="#"><img src="img/logo.png" alt="Cheese Academy Tokyo"></a></h1>
            <ul class="list-header text-right">
                <li>CHEESE DEVELOPMENT</li>
                <li>GROWTH CHEESE</li>
                <li>CHEESE PERSPECTIVE</li>
                <li>CHEESE GENERATOR</li>
            </ul>
        </div>
    </header>
    

        <?php
        $pdo = new PDO("mysql:host=localhost;dbname=cs_academy;charset=utf8", "root", "");
        $sql = "SELECT CAST(create_date AS DATE) AS create_date,news_title,news_detail FROM news WHERE news_id =".$news_id;
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($results as $row) {
            echo "<h2 class='section-title text-center'>";
            echo "<span class='section-title__yellow'>News</span>";
            echo "<span class='section-title-ja text-center'>".$row["create_date"]."</span>";
            echo "</h2>";
            echo "<article class='news-detail'>";
            echo "<dl class='clearfix'>";
            echo "<dd class='news-title'>".$row["news_title"]."</dd>";
            echo "<dd>ニュース詳細：".$row["news_detail"]."</dd>";
        }
        $pdo = null;
        ?>
        
<ul id="postList">
<li><a href="http://gsacademy.tokyo/news/2015/09/000051.html">

<p class="img" style="background-image: url(http://gsacademy.tokyo/news/assets_c/2015/09/DSC04397-thumb-400xauto-291.jpg);"><img src="http://gsacademy.tokyo/news/assets_c/2015/09/DSC04397-thumb-400xauto-291.jpg" width="400" alt="【後編】Skyland Ventures 木下慶彦氏が語る「起業したいと思った人がまず最初にやるべきこと」"></p>
<div class="body">
<time class="date">2015.09.03</time>
<p class="category">COLUMN</p>
<h2 class="title">【後編】Skyland Ventures 木下慶彦氏が語る「起業したいと思った人がまず最初にやるべきこと」</h2>
</div>


</a></li>


<li><a href="http://gsacademy.tokyo/news/2015/08/000050.html">

<p class="img" style="background-image: url(http://gsacademy.tokyo/news/assets_c/2015/08/DSC00559-thumb-400xauto-287.jpg);"><img src="http://gsacademy.tokyo/news/assets_c/2015/08/DSC00559-thumb-400xauto-287.jpg" width="400" alt="【前編】Skyland Ventures 木下慶彦氏インタビュー｜VCから資金調達するメリット・デメリットとは？"></p>
<div class="body">
<time class="date">2015.08.27</time>
<p class="category">COLUMN</p>
<h2 class="title">【前編】Skyland Ventures 木下慶彦氏インタビュー｜VCから資金調達するメリット・デメリットとは？</h2>
</div>


</a></li>


    <!--#information-->
    <footer class="footer contents-box">
    <h2 class="section-title text-center"><span class="section-title__white">Information</span><span class="section-title-ja section-title__white text-center">基本情報</span></h2>

        <div class="inner">
            <ul class="list-footer clearfix">
                <li class="text-center"><img src="img/kunsei_cheese.png" alt="space_image" width="175" height="127"></li>
                <li class="maps"><iframe width="300" height="222" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1620.879730972407!2d139.70531929996108!3d35.65829752117608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xff3d912f43a54715!2z5riL6LC344Kv44Ot44K544K_44Ov44O8!5e0!3m2!1sja!2sjp!4v1437965881707" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></li>
                <li class="text-center"><img src="img/kunsei_cheese.png" alt="space_image" width="175" height="127"></li>
            </ul>
        <p class="footer-caution">※実際にはチーズアカデミーという学校は存在しません。<br />
くれぐれも間違ってデジタルハリウッドにお問い合わせすることのないようにご注意ください。</p>
        </div>
    </section>
    <!--end #information-->
<p class="btn-pageTop"><a href="#"><img src="img/btn-pagetop.png" alt=""></a></p>
<?php include("footer.php"); ?>