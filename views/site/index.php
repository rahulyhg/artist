<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="preloader">
    <div class="loading">Загрузка</div>
</div>
<div class="header" style="background-image: url(/uploads/<?php echo $headerImage; ?>)">

    <div class="header__top">

        <div class="header__top-left">

            <a class="header__musiclist" href="#"><i class="fa fa-music header__i-musiclist"></i></a>

            <p class="header__top-text-left text__right-line">Слушать плейлист</p>

        </div>

        <div class="header__top-center">

            <a href="#">

                <p class="header__logotype-text-left">albina yarullina</p>

                <img src="img/logo.png" alt="" class="header__logotype img-responsive">

                <p class="header__logotype-text-right">concert production</p>

            </a>

        </div>

        <div class="header__top-right">

            <a class="header__video" target="_blank" href="https://www.youtube.com/channel/UCLFBCWWOcXtjj6vGBfql5bQ"><i class="fa fa-play header__i-video"></i></a>

            <p class="header__top-text-right text__left-line">Посмотри меня</p>

        </div>

    </div>

    <div class="header__center">

        <div class="header__center-wrap">

            <p class="header__center-small-title">Актер, певец</p>

            <h1 class="header__center-large-title">Даниил Иванов</h1>

            <p class="header__center-text-desc">Выпускник РИТИ-ГИТИС (Мастерская народного артиста РФ, В.Б.Гаркалина)</p>

            <h1 class="header__center-medium-title">Познакомимся, может?</h1>

            <audio class="header__audio" src="/uploads/musics/<?php echo $mainMusic; ?>" preload="auto" controls></audio>

            <div class="header__center-button-wrap">

                <p class="header__market-title">Доступно в соцсетях<br> <span>скоро</span> на маркетах</p>

                <a href="<?php echo $content[0]->title; ?>"><img src="img/yand.png" alt="" class="img-responsive header__button-yand"></a>
                <a href="<?php echo $content[1]->title; ?>"><img src="img/google.png" alt="" class="img-responsive header__button-google"></a>
                <a href="<?php echo $content[2]->title; ?>"><img src="img/itunes.png" alt="" class="img-responsive header__button-itunes"></a>

            </div>

        </div>

    </div>

    <div class="header__bottom">

        <div class="header__bottom-left">

            <ul class="header__download-link">

                <li><a href="/uploads/files/<?php echo $files[0];?>" download><i class="fa fa-download"></i> Пресс-релиз</a></li>
                <li><a href="/uploads/files/<?php echo $files[1];?>" download><i class="fa fa-download"></i> Технический райдер</a></li>
                <li><a href="/uploads/files/<?php echo $files[2];?>" download><i class="fa fa-download"></i> Бытовой райдер</a></li>

            </ul>

        </div>

        <div class="header__bottom-right">

            <p class="header__bottom-text text__right-line">Я в социальных сетях</p>

            <ul class="header__social">

                <li><a href="<?php echo $content[4]->title; ?>" target="_blank"><i class="fa fa-soundcloud"></i></a></li>
                <li><a href="<?php echo $content[3]->title; ?>" target="_blank"><i class="fa fa-vk"></i></a></li>
                <li><a href="<?php echo $content[5]->title; ?>" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
                <li><a href="<?php echo $content[6]->title; ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>

            </ul>

            <p class="header__bottom-right-text">Скрольте вниз <i class="fa fa-chevron-right fadeInDown animated infinite"></i></p>

        </div>

    </div>

</div>

<section id="scrollto" class="event">

    <p class="event__left-title text__right-line text__left-line">Афиша</p>
    <p class="event__right-title">Новости</p>

    <div class="container-fluid">

        <div class="event__slider">
            <?php foreach ($events as $event): ?>
            <div class="event__main" style="background-image: url(/uploads/events/<?php echo $event->image; ?>)">

                <div class="event__main-top">

                    <div class="event__main-top-left">

                        <h2 class="event__title"><?php echo $event->title; ?></h2>

                        <p><?php echo $event->content; ?></p>

                    </div>

                    <div class="event__main-top-right">

                        <p class="event__date"><?php echo $event->day; ?> <span><?php echo $event->month; ?><br> <?php echo $event->year; ?></span></p>

                    </div>

                </div>

                <div class="event__main-bottom">

                    <p class="event__time"><?php echo $event->time; ?></p>

                </div>

            </div>
            <?php endforeach; ?>
        </div>

        <p class="event__title-decor">event</p>

    </div>

</section>

<section class="gallery">

    <p class="gallery__left-title text__right-line text__left-line">Галерея</p>
    <p class="gallery__right-title">Фотографии со мной</p>

    <div class="container-fluid">

        <div class="gallery__carousel-wrap">

            <div class="gallery__carousel">
                <?php foreach ($images as $single): ?>
                    <?php if($single->name !== 'header' && $single->name !== 'event' && $single->name !== 'footer'): ?>
                        <div class="zoom-gallery">
                            <a href="/uploads/<?php echo $single->path;?>"><img src="/uploads/<?php echo $single->path;?>" alt="" class="img-responsive"></a>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>

            <p class="gallery__title-decor">Gallery</p>

        </div>

    </div>

</section>

<section class="mass-media">

    <p class="mass-media__left-title text__right-line text__left-line">СМИ обо мне</p>
    <div class="mass-media__right-title">

        <ul class="mass-media__social">
            <li><a href="<?php echo $content[4]->title; ?>" target="_blank"><i class="fa fa-soundcloud"></i></a></li>
            <li><a href="<?php echo $content[3]->title; ?>" target="_blank"><i class="fa fa-vk"></i></a></li>
            <li><a href="<?php echo $content[5]->title; ?>" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
            <li><a href="<?php echo $content[6]->title; ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
        </ul>

    </div>

    <div class="container-fluid">

        <div class="row">

            <div class="col-lg-6">

                <div class="row">

                    <?php foreach ($articles as $article): ?>
                        <div class="col-md-4 col-sm-6">

                            <div class="mass-media__news">

                                <p class="mass-media__news-date"><?php echo $article->day;?> <span><?php echo $article->month;?><br> <?php echo $article->year;?></span></p>

                                <a target="_blank" href="<?php echo $article->url; ?>"><div class="mass-media__news-logo" style="background-image: url(/uploads/<?php echo $article->image; ?>)"></div></a>

                                <div class="mass-media__news-text-wrap">

                                    <p class="mass-media__news-title"><?php echo $article->title; ?></p>

                                    <p class="mass-media__news-autor"><?php echo $article->description; ?></p>

                                    <p class="mass-media__news-desc"><?php echo $article->content; ?></p>

                                    <a target="_blank" href="<?php echo $article->url; ?>" class="mass-media__news-button">Подробнее  <i class="fa fa-long-arrow-right"></i></a>

                                </div>

                            </div>

                        </div>
                    <?php endforeach; ?>

                </div>

            </div>

            <div class="col-lg-6">

                <div class="mass-media__contacts-logo" style="background-image: url(/uploads/<?php echo $footerImage; ?>)">

                    <div class="mass-media__contacts">

                        <p class="mass-media__contacts-title">Контакты</p>

                        <p class="mass-media__contacts-desc"><?php echo $content[8]->title; ?><br>
                            <span><?php echo $content[8]->content; ?></span></p>

                        <p class="mass-media__contacts-desc">Театр. кино (агент)<br>
                            <?php echo $content[9]->title; ?><br>
                            <span><?php echo $content[9]->content; ?></span></p>

                        <p class="mass-media__contacts-desc"><?php echo $content[10]->content; ?></p>

                    </div>

                    <div class="mass-media__title-decor">Mass<br> media</div>

                </div>

            </div>

        </div>

    </div>

</section>

<footer class="footer">

    <div class="container">

        <div class="row">

            <a href="#">

                <span class="header__logotype-text-left">albina yarullina</span>

                <img src="img/logo.png" alt="" class="footer__logotype img-responsive">

                <span class="header__logotype-text-right">concert production</span>

            </a>

            <div class="mass-media__contacts">

                <p class="mass-media__contacts-desc"><?php echo $content[8]->title; ?><br>
                    <span><?php echo $content[8]->content; ?></span><br>
                    <?php echo $content[10]->content; ?></p>

                <p class="mass-media__contacts-desc">Театр. кино (агент)<br>
                    <?php echo $content[9]->title; ?><br>
                    <span><?php echo $content[9]->content; ?></span></p>

            </div>

        </div>

    </div>

    <div class="musiclist__popup">

        <div class="close"></div>
        <iframe width="100%" height="450" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/87987851&color=%23141414&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
    </div>

    <div class="video__popup">

        <div class="close"></div>

        <div class="video__iframe-wrap">



        </div>

    </div>

    <div class="overlay"></div>

</footer>
