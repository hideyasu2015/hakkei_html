<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>おだし八景 Odashi Hakkei</title>
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/img/フリーアイコン/rabbit.png" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/reset_CSS.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/styles.css">
  <link href="<?php echo get_template_directory_uri() ?>/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="#">Japanese Restaurant</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
              <a class="nav-item nav-link active" href="top.html">Home <span class="sr-only">(current)</span></a>
              <a class="nav-item nav-link" href="#">Features</a>
            </div>


          </div>

        </nav>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <nav class="navbar navbar-expand-lg navbar-light navbarColor opacity">
          <img class="rabbit_icon" src="<?php echo get_template_directory_uri() ?>/img/フリーアイコン/rabbit.png" alt="">
          <a class="navbar-brand hakkei_title" href="#">おだし八景 Odashi Hakkei</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
              <a class="nav-item nav-link active mr-4 btn btn-success text-white" href="#">Reservations<span class="sr-only">(current)</span></a>
              <a class="nav-item nav-link" href="top.html">Home</a>
              <a class="nav-item nav-link" href="#">About</a>
              <a class="nav-item nav-link" href="menu.html">Menu</a>
              <a class="nav-item nav-link" href="blog.html">Blog</a>
              <a class="nav-item nav-link" href="#">News</a>
              <a class="nav-item nav-link" href="contact.html">Contact</a>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>



  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100 carousel_img" width="1250" height="704" src="<?php echo get_template_directory_uri() ?>/img/top1.jpg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: First slide">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#555" dy=".3em"></text></img>
              </div>
              <div class="carousel-item">
                <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100 carousel_img" width="1250" height="704" src="<?php echo get_template_directory_uri() ?>/img/dashi_img.jpg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Second slide">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#666" /><text x="50%" y="50%" fill="#444" dy=".3em"></text></img>
              </div>
              <div class="carousel-item">
                <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100 carousel_img" width="1250" height="704" src="<?php echo get_template_directory_uri() ?>/img/a lot of menu.jpg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Third slide">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#555" /><text x="50%" y="50%" fill="#333" dy=".3em"></text></img>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="news">
            <h2 class="py-5 text-center">News</h2>
            <div class="news_items pb-5">


              <?php if (have_posts()) : ?>
                <?php while (have_posts()) :  the_post(); ?>

                  <div class="news_item d-flex mb-3">
                    <h4 class="mb-3 pl-3 mr-5"><?php the_title(); ?></h4>
                    <p><?php the_content(); ?></p>
                  </div>
                <?php endwhile; ?>
              <?php endif; ?>






              <!-- <h4 class="mb-3 pl-3">Business Hours</h4>
                        <div class="news_item d-flex mb-3">
                          <p class="pr-5 pl-3">2020年12月20日</p>
                          <p>営業時間変更のお知らせ</p>
                        </div>
                        <h4 class="mb-3 pl-3">Business Hours</h4>
                        <div class="news_item d-flex mb-3">
                          <p class="pr-5 pl-3">2020年12月20日</p>
                          <p>営業時間変更のお知らせ</p> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>


  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="single_menu">
            <div class="single_menu_heading d-flex">
              <h3>単品メニュー</h3>
              <p class="lineheight pl-5">Single Menus</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="single_menu_items d-flex flex-wrap">
            <div class="d-flex single_menu_item col-md-6">
              <div class="row">
                <div class="col-md-12 d-flex">
                  <div class="col-md-11 d-flex">
                    <div class="single_menu_img">
                      <img src="<?php echo get_template_directory_uri() ?>/img/nasu.jpg" alt="">
                    </div>

                    <div class="single_menu_name">
                      <h4 class="m-0">茄子のおろし煮</h4>
                      <p class="m-0">Stewed Eggplant</p>
                      <h5 class="m-0">Price THB 200.00</h5>
                    </div>

                  </div>

                  <div class="col-md-1"></div>
                </div>
              </div>
            </div>

            <div class="d-flex single_menu_item col-md-6">
              <div class="single_menu_img">
                <img src="<?php echo get_template_directory_uri() ?>/img/sarada.jpg" alt="">
              </div>

              <div class="single_menu_name">
                <div>
                  <h4 class="m-0">八景サラダ</h4>
                  <p class="m-0">Hakkei Salada with Goma Dressing</p>
                  <h5 class="m-0">Price THB 220.00</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="single_menu_item d-flex col-6 pl-0">
        <div class="single_menu_img">
          <img src="<?php echo get_template_directory_uri() ?>/img/sisoage.jpg" alt="">
        </div>

        <div class="single_menu_name">
          <div>
            <h4 class="m-0">雲丹のしそ巻き天ぷら</h4>
            <p class="m-0">Sea Urchin Tempura with Shiso</p>
            <h5 class="m-0">Price THB 720.00</h5>
          </div>
        </div>
      </div>

      <div class="single_menu_item d-flex col-6 pl-0">
        <div class="single_menu_img">
          <img src="<?php echo get_template_directory_uri() ?>/img/egg.jpg" alt="">
        </div>

        <div class="single_menu_name">
          <div>
            <h4 class="m-0">だし巻き</h4>
            <p class="m-0">Japanese Dashi Omlet</p>
            <h5 class="m-0">Price THB 240.00</h5>
          </div>
        </div>
      </div>

      <div class="single_menu_item d-flex col-6 pl-0">
        <div class="single_menu_img">
          <img src="<?php echo get_template_directory_uri() ?>/img/tempura.jpg" alt="">
        </div>

        <div class="single_menu_name">
          <div>
            <h4 class="m-0">天ぷら6種盛り</h4>
            <p class="m-0">Assorted 6 Kinds of Tempura</p>
            <h5 class="m-0">Price THB 480.00</h5>
          </div>
        </div>
      </div>

      <div class="single_menu_item d-flex col-6 pl-0">
        <div class="single_menu_img">
          <img src="<?php echo get_template_directory_uri() ?>/img/karaage.jpg" alt="">
        </div>

        <div class="single_menu_name">
          <div>
            <h4 class="m-0">八景からあげ</h4>
            <p class="m-0">Japanese Fried Chicken</p>
            <h5 class="m-0">Price THB 240.00</h5>
          </div>
        </div>
      </div>

    </div>
    </div>
    </div>
    </div>
    </div>
  </section>


  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="course_menu">
            <div class="course_menu_heading d-flex">
              <h3>コースメニュー</h3>
              <p class="lineheight pl-5">Course Menus</p>
            </div>
            <div class="course_menu_items d-flex flex-wrap">

              <div class="course_menu_item d-flex col-6 pl-0">
                <div class="course_menu_img">
                  <img src="<?php echo get_template_directory_uri() ?>/img/nabe.jpg" alt="">
                </div>

                <div class="course_menu_name">
                  <div>
                    <h4 class="m-0">八景鶏味噌鍋コース</h4>
                    <p class="m-0">Hakkei Chicken Miso Pot Course</p>
                    <h5 class="m-0">Price THB 1,200.00</h5>
                  </div>
                </div>
              </div>

              <div class="course_menu_item d-flex col-6 pl-0">
                <div class="course_menu_img">
                  <img src="<?php echo get_template_directory_uri() ?>/img/course_oden.jpg" alt="">
                </div>

                <div class="course_menu_name">
                  <div>
                    <h4 class="m-0">おでんコース</h4>
                    <p class="m-0">Oden Course</p>
                    <h5 class="m-0">Price THB 1,400.00</h5>
                  </div>
                </div>
              </div>

              <div class="course_menu_item d-flex col-6 pl-0">
                <div class="course_menu_img">
                  <img src="<?php echo get_template_directory_uri() ?>/img/unityazuke.jpg" alt="">
                </div>

                <div class="course_menu_name">
                  <div>
                    <h4 class="m-0">雲丹コース</h4>
                    <p class="m-0">Sea Urchin Course</p>
                    <h5 class="m-0">Price THB 3,8000.00</h5>
                  </div>
                </div>
              </div>

              <div class="course_menu_item d-flex col-6 pl-0">
                <div class="course_menu_img">
                  <img src="<?php echo get_template_directory_uri() ?>/img/course_hakkei.jpg" alt="">
                </div>

                <div class="course_menu_name">
                  <div>
                    <h4 class="m-0">八景コース</h4>
                    <p class="m-0">Hakkei Course</p>
                    <h5 class="m-0">Price THB 2,400.00</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="oden_menu">
            <div class="oden_menu_heading d-flex">
              <h3>おでんメニュー</h3>
              <p class="lineheight pl-5">Oden Menus</p>
            </div>
            <div class="oden_menu_items d-flex flex-wrap">

              <div class="oden_menu_item d-flex col-6 pl-0">
                <div class="oden_menu_img">
                  <img src="<?php echo get_template_directory_uri() ?>/img/oden_egg.jpg" alt="">
                </div>

                <div class="oden_menu_name">
                  <div>
                    <h4 class="m-0">たまご</h4>
                    <p class="m-0">Boiled Egg</p>
                    <h5 class="m-0">Price THB 80.00</h5>
                  </div>
                </div>
              </div>
              <div class="oden_menu_item d-flex col-6 pl-0">
                <div class="oden_menu_img">
                  <img src="<?php echo get_template_directory_uri() ?>/img/nikomi.jpg" alt="">
                </div>

                <div class="oden_menu_name">
                  <div>
                    <h4 class="m-0">牛すじ</h4>
                    <p class="m-0">Beef Tendon</p>
                    <h5 class="m-0">Price THB 140.00</h5>
                  </div>
                </div>
              </div>
              <div class="oden_menu_item d-flex col-6 pl-0">
                <div class="oden_menu_img">
                  <img src="<?php echo get_template_directory_uri() ?>/img/nikumaki.jpg" alt="">
                </div>

                <div class="oden_menu_name">
                  <div>
                    <h4 class="m-0">ロールキャベツ</h4>
                    <p class="m-0">Roll cabbage</p>
                    <h5 class="m-0">Price THB 110.00</h5>
                  </div>
                </div>
              </div>
              <div class="oden_menu_item d-flex col-6 pl-0">
                <div class="oden_menu_img">
                  <img src="<?php echo get_template_directory_uri() ?>/img/tomato.jpg" alt="">
                </div>

                <div class="oden_menu_name">
                  <div>
                    <h4 class="m-0">トマト</h4>
                    <p class="m-0">Tomato</p>
                    <h5 class="m-0">Price THB 110.00</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="review">
            <div class="review_heading d-flex">
              <div><img src="<?php echo get_template_directory_uri() ?>/img/フリーアイコン/吹き出しのアイコン7.png" alt=""></div>
              <p class="heading">口コミ　Online Review</p>
              <!-- <p class="btn_all">一覧</p> -->
              <div>
                <a class="btn btn-success review_btn" href="https://www.google.com/search?q=%E3%81%8A%E3%81%A0%E3%81%97%E5%85%AB%E6%99%AF&oq=%E3%81%8A%E3%81%A0%E3%81%97%E5%85%AB%E6%99%AF&aqs=chrome..69i57j69i61l3j69i65.3329j0j4&sourceid=chrome&ie=UTF-8#lrd=0x30e29fc6ae987d03:0xc983bd0d0de65c60,1,,," role="button">一覧</a>
              </div>
            </div>
            <div class="review_examples d-flex justify-content-between">
              <div class="review_example ml-3">
                <h4>R</h4>
                <div class="review_star d-flex">
                  <div><img src="<?php echo get_template_directory_uri() ?>/img/星アイコン/ecalic024_001.png" alt=""></div>
                  <p>5ヶ月前</p>
                </div>
                <p class="review_text">おだしの味がとっても本格的で、バンコクでこれを味わえるなんて衝撃でした。
                  八景コースをいただきましたが、
                  あまり量を食べられないため事前にお伝えしたところ、
                  ちょうどいい具合に調節して下さり、
                  〆とデザートまで楽しむことができました。
                  どれも大変満足いくものでしたが、
                  特にトマトのおでんが記憶に残っています。
                  女性人気の理由が、食べた瞬間にわかりました。
                  トマトの甘さと出汁がこんなに合うなんて驚きです。
                  次回行った時も必ず頼もうと思います。
                  デリバリーも頼んだことがありますが、
                  少し冷めても美味しは全く変わらず。
                  オーナーさんや板前さんもとても気さくな方で、
                  お料理含め全ての点で楽しむことができました。<br>รานอาหารญี่ปุ่นนี้อร่อยที่สุดในกรุงเทพ ฉันเป็นคนญี่ปุ่นแต่แนะนำร้านอานี้แน่ๆค่ะ

                </p>
              </div>
              <div class="review_example ml-3">
                <h4>mutsumi takino</h4>
                <div class="review_star d-flex">
                  <div><img src="<?php echo get_template_directory_uri() ?>/img/星アイコン/ecalic024_001.png" alt=""></div>
                  <p>6ヶ月前</p>
                </div>
                <p class="review_text">個室とカウンターのあるお店で名前の通り、
                  お出汁が効いた品々が揃っています✨
                  香りも味も食感も雰囲気も良いです✨
                  今は夜間予約制で、
                  昼はデリバリー&テイクアウトのみの営業だそうです。

                  旅館一室かのような出汁の香りが漂う雰囲気と
                  こだわりの野菜に出汁が染みたおでんコース‼️
                  是非足を運んでみてください✨
                </p>
              </div>
              <div class="review_example mx-3">
                <h4>Ippei K</h4>
                <div class="review_star d-flex">
                  <div><img src="<?php echo get_template_directory_uri() ?>/img/星アイコン/ecalic024_001.png" alt=""></div>
                  <p>3ヶ月前</p>
                </div>
                <p class="review_text">上品なおだしが楽しめる人気店。
                  どの料理も本当に美味しかったです。

                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="interior">
            <div class="back_image">
              <img src="<?php echo get_template_directory_uri() ?>/img/naisou_3.jpg" alt="">
              <div class="interior_box">
                <div class="interior_box_items">
                  <h4>店内は常に清潔を心がけております。<br>洗練された空間で優雅なひとときを</h4>
                  <p>従業員一同、あなたのご来店をお待ちしております。</p>
                  <a class="btn btn-success" href="#" role="button">内装一覧</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="facebook_googlemap d-flex">
            <div class="box">
              <div class="facebook_googlemap_heading d-flex">
                <div class="facebook_img"><img src="<?php echo get_template_directory_uri() ?>/img/フリーアイコン/FACEBOOK風のアイコン素材 その3.png" alt=""></div>
                <p>Facebook</p>
                <div class="btn_">
                  <a class="btn btn-success" href="https://www.facebook.com/odashihakkei/" role="button">一覧</a>
                </div>
              </div>
            </div>
            <div class="box">
              <div class="facebook_googlemap_heading d-flex">
                <div class="googlemap_img"><img src="<?php echo get_template_directory_uri() ?>/img/フリーアイコン/目的地アイコン2.png" alt=""></div>
                <p>Google Map</p>
                <div class="btn_">
                  <a class="btn btn-success" href="https://www.google.com/maps/place/%E3%81%8A%E3%81%A0%E3%81%97%E5%85%AB%E6%99%AF(Odashi+Hakkei)/@13.7347227,100.5844265,16.94z/data=!4m5!3m4!1s0x30e29fc6ae987d03:0xc983bd0d0de65c60!8m2!3d13.7347289!4d100.5866845" role="button">地図</a>
                </div>
              </div>
              <div class="map_img">
                <img src="<?php echo get_template_directory_uri() ?>/img/スクリーンショット 2020-12-19 122544.png" alt="">
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="footer">
            <div class="footer_top d-flex">
              <div class="col-2">
                <div class="footer_item logo">
                  <img class="logo" src="<?php echo get_template_directory_uri() ?>/img/hakkei_logo.jpg" alt="">
                </div>
              </div>
              <div class="col-4">
                <div class="footer_item reservation d-flex">
                  <div>
                    <a class="btn btn-success footer_btn" href="#" role="button">Reservation</a>
                  </div>
                  <div class="business_hour">
                    <h5>Opening hour</h5>
                    <p class="text-white m-0">Open Tue.-Sun. five pm to ten thirty pm. </p>
                    <p class="text-white m-0">Sun. are closed</p>
                  </div>
                </div>
              </div>

              <div class="col-5 footer_contact_form_box d-flex">

                <div class="footer_contact col-7">
                  <h5>CONTACT</h5>
                  <div class="contact_items">
                    <div class="contact_item d-flex">
                      <img src="<?php echo get_template_directory_uri() ?>/img/フリーアイコン/スタンダードな家アイコン.png" alt="">
                      <p>267/16 Soi63 Sukhumvit
                        Klonton-Nua, Vadhana
                        Bangkok 10110</p>
                    </div>
                    <div class="contact_item d-flex">
                      <img src="<?php echo get_template_directory_uri() ?>/img/フリーアイコン/iPhone風のスマートフォンのアイコン素材.png" alt="">
                      <p>02 003 9325</p>
                    </div>
                    <div class="contact_item d-flex">
                      <img src="<?php echo get_template_directory_uri() ?>/img/フリーアイコン/メールの無料アイコン.png" alt="">
                      <p>info@domain.com</p>
                    </div>
                  </div>
                </div>

                <div class="col-5 footer_form_box">

                  <div class="footer_form">
                    <h5>KEEP IN TOUCH</h5>
                    <form class="form-inline">
                      <input class="form-control mr-sm-2" type="search" placeholder="e-mail" aria-label="Search">
                      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">></button>
                    </form>
                  </div>

                  <div class="sns">
                    <h5 class="text-white">Follow Us</h5>
                    <div class="sns_icon d-flex">
                      <div>
                        <a href="https://www.facebook.com/odashihakkei/">
                          <img src="<?php echo get_template_directory_uri() ?>/img/フリーアイコン/facebook.png" alt="">
                        </a>
                      </div>
                      <div>
                        <a href="">
                          <img src="<?php echo get_template_directory_uri() ?>/img/フリーアイコン/instagram.png" alt="">
                        </a>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>

            <div class="footer_bottom d-flex text-white">
              <p>Teams and conditions</p>
              <p class="border_">Privacy</p>
              <p>©Hakkei</p>

            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>



  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>