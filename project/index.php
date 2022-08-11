<? include 'head.sub.php' ?>
<main>
    <section class="MainVisual">
        <div class="MainSlider">
            <figure class="item01"></figure>
            <figure class="item02"></figure>
            <figure class="item03"></figure>
            <figure class="item04"></figure>
        </div>
        <div class="slogan">
            <h2><?= $c_slogan ?></h2>
            <p><?= $e_slogan ?></p>
        </div>
    </section>
    <section class="Customer">
        <ul class="container">
            <li>
                <div class="list">
                    <h3>news &amp notice <small><a href=""><i class="xi-arrow-right"></i></a></small></h3>
                    <ul>
                        <li><a href="">왜 슬라이드가 안 돌아가는걸까?<span>2022.08.11</span></a></li>
                        <li><a href="">정말로 서터레서 받는다...<span>2022.08.11</span></a></li>
                        <li><a href="">이미지는 왜 안 떠서 날 당황하게 만드는걸까?<span>2022.08.11</span></a></li>
                        <li><a href="">도움! 절대 도움!!!<span>2022.08.11</span></a></li>
                    </ul>
                </div>
            </li>
            <li>
                <div class="slider">
                    <div class="ProductSlider">
                        <figure>
                            <img src="./img/item01.jpg" alt="">
                        </figure>
                        <figure>
                            <img src="./img/item02.jpg" alt="">
                        </figure>
                        <figure>
                            <img src="./img/item03.jpg" alt="">
                        </figure>
                    </div>
                    <div class="product_arrows">
                        <i class="xi-arrow-left"></i>
                        <i class="xi-arrow-right"></i>
                    </div>
                </div>
            </li>
            <li>
                <? include 'customer.php' ?>
            </li>
        </ul>
    </section>
</main>
<? include 'tail.sub.php' ?>