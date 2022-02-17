<!DOCTYPE html>
<html lang="en">
<?php
function getParam($name, $default = "")
{
  return isset($_GET[$name]) ? $_GET[$name] : $default;
}

$domain      = getParam("domain", "adltkngs.com");
$clickPhpUrl = "//$domain/click.php";
$uclick      = getParam('uclick', false);
$offerLink   = "$clickPhpUrl?lp=1";
if ($uclick) $offerLink .= "&uclick=$uclick";
?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Get Results Naturally With Serious Skincare</title>
  <link rel="shortcut icon" href="<?=$root_fld?>images/fav-icon.png" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
  <link href="<?=$root_fld?>css/css2.css" rel="stylesheet">
  <link rel="stylesheet" href="<?=$root_fld?>css/app.css">
  <link rel="stylesheet" href="<?=$root_fld?>css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=$root_fld?>css/custom.css">
  <link rel="stylesheet" href="<?=$root_fld?>css/media.css">
</head>

<body>
  <section id="top-bar">
    <div class="container">
      <div class="add-txt text-center">
        <p class="m-0 text-uppercase f-400">Advertorial</p>
      </div>
      <div class="top-logo">
        <img src="<?=$root_fld?>images/logo.png" class="img-fluid" alt="#">
      </div>
    </div>
  </section>
  <div class="main-content">
    <div class="container">
      <div class="row">
        <div class="col-md-8 pad-right">
          <div class="left-content">
            <div class="post-one">
              <div class="news-tag">
                <p class="m-0">HOT NEWS</p>
              </div>
              <h2 class="font-poppins"> Get results naturally,<br class="hidden-mb"> without looking like you ever got any work done </h2>
              <p class="font-weight-bold mt-2 mb-0 jen-heading"> Jennifer Stallone Celebrates Over 25 Years of Changing Skincare </p>
              <div class="logo-box">
                <p class="text-uppercase">As Seen In</p>
                <div class="d-flex s-logos">
                  <img src="<?=$root_fld?>images/l-icon1.png" class="img-fluid" alt="#">
                  <img src="<?=$root_fld?>images/l-icon2.png" class="img-fluid" alt="#">
                  <img src="<?=$root_fld?>images/l-icon3.png" class="img-fluid" alt="#">
                  <img src="<?=$root_fld?>images/l-icon4.png" class="img-fluid" alt="#">
                  <img src="<?=$root_fld?>images/l-icon5.jpg" class="img-fluid" alt="#">
                  <img src="<?=$root_fld?>images/l-icon6.png" class="img-fluid" alt="#">
                </div>
              </div>
              <img src="<?=$root_fld?>images/img-1-c.jpg" class="img-fluid w-100 mt-5 mb-3" alt="#">
              <p class="font-weight-bold font-italic">Thursday, February 17, 2022 - (Los Angeles, Ca) -- FOR IMMEDIATE RELEASE</p>
              <p class="color-4"> An injection was FDA-approved on April 15th, 2002. That’s only 19 years ago. We still don’t know all the side effects of long-term use of this injection. But women who get these injections regularly will tell you, it makes visible aging worse. It really can’t be avoided either. </p>
              <p class="color-4"> Just like any muscle in your body… </p>
              <p class="color-4"> Your facial muscles need exercise to maintain a plump, tight, smooth complexion. That’s the essence of a youthful appearance… having a bright, volumized, dewy appearance. But in “exercising,” your facial muscles, you get those pesky expression wrinkles, like Crow’s Feet and Smile Lines. </p>
              <p class="color-4">That’s why millions of women are commonly getting 3-4 injections every year, sometimes starting in their teens.</p>
              <p class="color-4"> The problem is… </p>
              <p class="color-4"> In freezing your facial muscles, they lose strength… and atrophy. When that happens, your skin and tissues quickly fall prey to gravity (more than Mother Nature intended.) </p>
              <p class="color-4"> The longer you use this injection, the more your facial muscles will droop and sag… dramatically accelerating visible aging. Unfortunately, these unadvertised user warnings aren’t stopping women from getting regular injections, fillers and going under the knife. </p>
              <p class="color-4"> In 2020 alone… </p>
              <p class="color-4"> 13.3 million people got cosmetic work done. The cosmetic industry brought in over 483 billion dollars in 2020. That’s a lot of people who take their appearance… seriously. </p>
              <p class="color-4"> Speaking of serious… </p>
              <p class="color-4 mb-0"> I recently had the chance to interview Jennifer Stallone - founder of Serious Skincare, mother of 3 daughters and wife to Sylvester Stallone. </p>
              <img src="<?=$root_fld?>images/img-1-b.png" class="img-fluid w-100 mt-4 mb-4" alt="#">
              <p class="color-4"> For over 25 years… </p>
              <p class="color-4">
                <a href="<?= $offerLink ?>">Serious Skincare</a> was the <strong>#1 brand on the Home Shopping Network</strong>. “I got to reach women on their TVs for two decades and talk about their skincare. This isn’t just a business for me, science-based, natural skincare is my passion.”
              </p>
              <p class="color-4"> Last year, Jennifer left the popular TV network to expand the reach of her <a href="<?= $offerLink ?>">scientific Skincare</a>. She talked about empathizing with how frustrating it is when you buy skincare products, expecting results, but only getting disappointment. </p>
              <p class="font-italic" style="font-weight: 500;"> “When you want to see rapid results, and nothing REALLY works to reduce the appearance of Crow’s Feet and other expression wrinkles, it just sucks. So many cosmetic companies aren’t just selling hope, they’re stealing it. That’s why we developed Insta-Tox. You can instantly plump, tighten and smooth out your wrinkles, minus that ‘just got work done’ appearance.” </p>
              <p class="color-4"> Jennifer <a href="<?= $offerLink ?>">spills the tea</a> on how it’s possible to get ageless-looking results, while stimulating the Fibroblasts and boosting your natural Collagen production. </p>
            </div>
            <div class="product-box1">
              <p class="pro-hd text-uppercase">limited time offer</p>
              <p class="f-16 text-center"><span style="color: red;font-weight: bold;">(SUPPLIES RUN OUT DAILY - CLAIM YOURS NOW BEFORE THEY'RE ALL GONE)</span><br>IMPORTANT: During clinical testing it was proven that you MUST use this product DAILY to achieve similar results.</p>
              <p class="p-update"><span class="font-weight-bold">Update:</span> Supplies Still Available As Of: <span style="color: red;font-weight: bold;">Thursday, February 17, 2022</span></p>
              <div class="pro-inner-box">
                <div class="pro-inner-box-left">
                  <label class="check-container"><span>Step 1:</span> Get Up To 40% Off of INSTA-TOX™ Instant Wrinkle-Smoothing Serum <input type="checkbox" checked="checked">
                    <span class="checkmark"></span>
                  </label>
                  <div class="pro-inner-box-right d-blok d-lg-none">
                    <img src="<?=$root_fld?>images/pro-1.png" class="img-fluid" alt="#">
                  </div>
                  <div class="pro-btn">
                    <a href="<?= $offerLink ?>">
                      <img src="<?=$root_fld?>images/btn-1.png" class="img-fluid btn-img" alt="#">
                    </a>
                  </div>
                  <p class="text-center bx-p1">Take advantage of our exclusive link and get up to <strong>40% OFF + FREE SHIPPING!</strong></p>
                </div>
                <div class="pro-inner-box-right d-none d-lg-block">
                  <img src="<?=$root_fld?>images/pro-1.png" class="img-fluid" alt="#">
                </div>
              </div>
            </div>
            <hr>
            <div class="review-container">
              <div class="review-hd">
                <h4>10 Comments</h4>
              </div>
              <div class="review-box d-flex">
                <div class="review-img">
                  <img src="<?=$root_fld?>images/pa.jpg" class="img-fluid">
                </div>
                <div class="review-txt">
                  <p class="u-name"> Trisha M. </p>
                  <p class="u-cmnt mb-0">This product will not only extend your makeup to long wear, but also gives a flawless finish while tightening, I've used this product for several years &amp; keep a back on hand as I don't ever want to run out. The four tube set is a best buy. Only use a small amount for best results. </p>
                  <ul class="u-cmnt">
                    <li><a>Like</a></li>
                    <li><a>Reply</a></li>
                    <li><a style="color: #7f7f7f;"><img src="<?=$root_fld?>images/thumb-like.png"> 23</a></li>
                    <li><a style="color: #7f7f7f;">18 min</a></li>
                  </ul>
                  <div class="review-text-cmnt">
                  </div>
                </div>
              </div>
              <div class="review-box d-flex num-2">
                <div class="review-img">
                  <img src="<?=$root_fld?>images/t2.jpg" class="img-fluid">
                </div>
                <div class="review-txt">
                  <p class="u-name"> Therese P. </p>
                  <p class="u-cmnt mb-0"> It's not the cure but it's a good band aid! I highly recommend it! Buy one and give one to a friend...that's how I first came across it! </p>
                  <ul class="u-cmnt">
                    <li><a>Like</a></li>
                    <li><a>Reply</a></li>
                    <li><a style="color: #7f7f7f;"><img src="<?=$root_fld?>images/thumb-like.png"> 13</a></li>
                    <li><a style="color: #7f7f7f;">20 min</a></li>
                  </ul>
                  <div class="review-text-cmnt">
                  </div>
                </div>
              </div>
              <div class="review-box d-flex num-2">
                <div class="review-img">
                  <img src="<?=$root_fld?>images/t3.jpg" class="img-fluid">
                </div>
                <div class="review-txt">
                  <p class="u-name"> Vicky D. </p>
                  <p class="u-cmnt mb-0"> I love Insta-Tox cream. It really works to hide the bags under my eyes. It works so well that people say I look more rested. The positive comments are great. </p>
                  <ul class="u-cmnt">
                    <li><a>Like</a></li>
                    <li><a>Reply</a></li>
                    <li><a style="color: #7f7f7f;"><img src="<?=$root_fld?>images/thumb-like.png"> 4</a></li>
                    <li><a style="color: #7f7f7f;">39 min</a></li>
                  </ul>
                  <div class="review-text-cmnt">
                  </div>
                </div>
              </div>
              <div class="review-box d-flex num-2">
                <div class="review-img">
                  <img src="<?=$root_fld?>images/t4.jpg" class="img-fluid">
                </div>
                <div class="review-txt">
                  <p class="u-name"> Vanessa S. </p>
                  <p class="u-cmnt mb-0"> I've been using Insta-Tox for many years. It does help decrease the wrinkles when it is applied. Use it sparingly. It does leave a white residue if you use too much. It was delivered promptly and packaged securely since ordering from Amazon. </p>
                  <ul class="u-cmnt">
                    <li><a>Like</a></li>
                    <li><a>Reply</a></li>
                    <li><a style="color: #7f7f7f;"><img src="<?=$root_fld?>images/thumb-like.png"> 20</a></li>
                    <li><a style="color: #7f7f7f;">40 min</a></li>
                  </ul>
                  <div class="review-text-cmnt">
                  </div>
                </div>
              </div>
              <div class="review-box d-flex num-2">
                <div class="review-img">
                  <img src="<?=$root_fld?>images/t5.jpg" class="img-fluid">
                </div>
                <div class="review-txt">
                  <p class="u-name"> Donna P. </p>
                  <p class="u-cmnt mb-0"> I have used Insta-Tox for 4 years and it absolutely works. I am 62 and when applied, my face (crowsfeet &amp; around mouth) look so smooth. Just use a little and rub it upward in tiny strokes while it dries. It stays on till you wash it off. Used to buy from HSN, but since they stopped selling there I buy here now. Amazing. </p>
                  <ul class="u-cmnt">
                    <li><a>Like</a></li>
                    <li><a>Reply</a></li>
                    <li><a style="color: #7f7f7f;"><img src="<?=$root_fld?>images/thumb-like.png"> 18</a></li>
                    <li><a style="color: #7f7f7f;">50 min</a></li>
                  </ul>
                  <div class="review-text-cmnt">
                  </div>
                </div>
              </div>
              <div class="review-box d-flex num-2">
                <div class="review-img">
                  <img src="<?=$root_fld?>images/riley.jpg" class="img-fluid">
                </div>
                <div class="review-txt">
                  <p class="u-name"> Sissy Hall </p>
                  <p class="u-cmnt mb-0"> Amazed by the results! Thank you SSC for outstanding products. </p>
                  <ul class="u-cmnt">
                    <li><a>Like</a></li>
                    <li><a>Reply</a></li>
                    <li><a style="color: #7f7f7f;"><img src="<?=$root_fld?>images/thumb-like.png"> 3</a></li>
                    <li><a style="color: #7f7f7f;">1 day</a></li>
                  </ul>
                  <div class="review-text-cmnt">
                  </div>
                </div>
              </div>
              <div class="review-box d-flex num-2">
                <div class="review-img">
                  <img src="<?=$root_fld?>images/t7.jpg" class="img-fluid">
                </div>
                <div class="review-txt">
                  <p class="u-name"> Theresa Penka Williams </p>
                  <p class="u-cmnt mb-0"> Been using this product for 20+ years and I love her to death, nothing else works better nothing else works better for the money. </p>
                  <ul class="u-cmnt">
                    <li><a>Like</a></li>
                    <li><a>Reply</a></li>
                    <li><a style="color: #7f7f7f;"><img src="<?=$root_fld?>images/thumb-like.png"> 15</a></li>
                    <li><a style="color: #7f7f7f;">1 day</a></li>
                  </ul>
                  <div class="review-text-cmnt">
                  </div>
                </div>
              </div>
              <div class="review-box d-flex num-2">
                <div class="review-img">
                  <img src="<?=$root_fld?>images/t8.jpg" class="img-fluid">
                </div>
                <div class="review-txt">
                  <p class="u-name"> Sheryl Bebon </p>
                  <p class="u-cmnt mb-0"> I just bought the Insta-Tox for my mother since she just turned 40 and is showing some eye wrinkgles. I told her this product will help and she is loving it. </p>
                  <ul class="u-cmnt">
                    <li><a>Like</a></li>
                    <li><a>Reply</a></li>
                    <li><a style="color: #7f7f7f;"><img src="<?=$root_fld?>images/thumb-like.png"> 9</a></li>
                    <li><a style="color: #7f7f7f;">1 day</a></li>
                  </ul>
                  <div class="review-text-cmnt">
                  </div>
                </div>
              </div>
              <div class="review-box d-flex num-2">
                <div class="review-img">
                  <img src="<?=$root_fld?>images/t9.jpg" class="img-fluid">
                </div>
                <div class="review-txt">
                  <p class="u-name"> Tracy Wenderwicz Fesler </p>
                  <p class="u-cmnt mb-0"> I love the products. They do everything they say. I have used them for about 15 years and have no complaints. </p>
                  <ul class="u-cmnt">
                    <li><a>Like</a></li>
                    <li><a>Reply</a></li>
                    <li><a style="color: #7f7f7f;"><img src="<?=$root_fld?>images/thumb-like.png"> 8</a></li>
                    <li><a style="color: #7f7f7f;">1 day</a></li>
                  </ul>
                  <div class="review-text-cmnt">
                  </div>
                </div>
              </div>
              <div class="review-box d-flex num-2">
                <div class="review-img">
                  <img src="<?=$root_fld?>images/t10.jpg" class="img-fluid">
                </div>
                <div class="review-txt">
                  <p class="u-name"> Betty Adams </p>
                  <p class="u-cmnt mb-0"> My skin looks so much better. It's smooth and I honestly look 10 years younger. I love all of the the products. I have been using them for 3 years. My skin just keeps looking better. </p>
                  <ul class="u-cmnt">
                    <li><a>Like</a></li>
                    <li><a>Reply</a></li>
                    <li><a style="color: #7f7f7f;"><img src="<?=$root_fld?>images/thumb-like.png"> 12</a></li>
                    <li><a style="color: #7f7f7f;">1 day</a></li>
                  </ul>
                  <div class="review-text-cmnt">
                  </div>
                </div>
              </div>
              <div class="hd_portion">
                <div class="review-box d-flex num-2">
                  <div class="review-img">
                    <img src="<?=$root_fld?>images/t11.jpg" class="img-fluid">
                  </div>
                  <div class="review-txt">
                    <p class="u-name"> Sherry Fryman-Heuel </p>
                    <p class="u-cmnt mb-0"> I absolutely love Jennifer's beauty tools and her pumpkin scrub is magical as well as the glycolic line ! Thank you for making your price is affordable </p>
                    <ul class="u-cmnt">
                      <li><a>Like</a></li>
                      <li><a>Reply</a></li>
                      <li><a style="color: #7f7f7f;"><img src="<?=$root_fld?>images/thumb-like.png"> 12</a></li>
                      <li><a style="color: #7f7f7f;">1 day</a></li>
                    </ul>
                    <div class="review-text-cmnt">
                    </div>
                  </div>
                </div>
                <div class="review-box d-flex num-2">
                  <div class="review-img">
                    <img src="<?=$root_fld?>images/t12.jpg" class="img-fluid">
                  </div>
                  <div class="review-txt">
                    <p class="u-name"> Nancy Chavez </p>
                    <p class="u-cmnt mb-0"> I have used just about everything they have had over the years. I started in 1999 and we're with them on HSN. They have a very excellent Customer Service at their company in Las Vegas and do return calls. </p>
                    <ul class="u-cmnt">
                      <li><a>Like</a></li>
                      <li><a>Reply</a></li>
                      <li><a style="color: #7f7f7f;"><img src="<?=$root_fld?>images/thumb-like.png"> 12</a></li>
                      <li><a style="color: #7f7f7f;">1 day</a></li>
                    </ul>
                    <div class="review-text-cmnt">
                    </div>
                  </div>
                </div>
                <div class="review-box d-flex num-2">
                  <div class="review-img">
                    <img src="<?=$root_fld?>images/t13.jpg" class="img-fluid">
                  </div>
                  <div class="review-txt">
                    <p class="u-name"> Eppy Stevens </p>
                    <p class="u-cmnt mb-0"> The best products ever that give results and the price is unbeatable. Love your products been using them for over 25 years. </p>
                    <ul class="u-cmnt">
                      <li><a>Like</a></li>
                      <li><a>Reply</a></li>
                      <li><a style="color: #7f7f7f;"><img src="<?=$root_fld?>images/thumb-like.png"> 12</a></li>
                      <li><a style="color: #7f7f7f;">1 day</a></li>
                    </ul>
                    <div class="review-text-cmnt">
                    </div>
                  </div>
                </div>
                <div class="review-box d-flex num-2">
                  <div class="review-img">
                    <img src="<?=$root_fld?>images/t14.jpg" class="img-fluid">
                  </div>
                  <div class="review-txt">
                    <p class="u-name"> Teresa Grosse </p>
                    <p class="u-cmnt pb-0"> I have been using Serious Skincare for over 20 years, my results are amazing! </p>
                    <ul class="u-cmnt">
                      <li><a>Like</a></li>
                      <li><a>Reply</a></li>
                      <li><a style="color: #7f7f7f;"><img src="<?=$root_fld?>images/thumb-like.png"> 12</a></li>
                      <li><a style="color: #7f7f7f;">1 day</a></li>
                    </ul>
                    <div class="review-text-cmnt">
                    </div>
                  </div>
                </div>
                <div class="review-box d-flex num-2">
                  <div class="review-img">
                    <img src="<?=$root_fld?>images/t15.jpg" class="img-fluid">
                  </div>
                  <div class="review-txt">
                    <p class="u-name"> Susan Gregg </p>
                    <p class="u-cmnt pb-0"> The products do what they are advertised to do. My experience is that they are high quality skincare products for a reasonable and fair price and deliver good results. </p>
                    <ul class="u-cmnt">
                      <li><a>Like</a></li>
                      <li><a>Reply</a></li>
                      <li><a style="color: #7f7f7f;"><img src="<?=$root_fld?>images/thumb-like.png"> 12</a></li>
                      <li><a style="color: #7f7f7f;">1 day</a></li>
                    </ul>
                    <div class="review-text-cmnt">
                    </div>
                  </div>
                </div>
                <div class="review-box d-flex num-2">
                  <div class="review-img">
                    <img src="<?=$root_fld?>images/t16.jpg" class="img-fluid">
                  </div>
                  <div class="review-txt">
                    <p class="u-name"> Mikey Dowson </p>
                    <p class="u-cmnt pb-0"> Have used serious skin care products since 1999. use a wide range of products however my fav is the cleansers, in my opinion they are the best in the marketplace &amp; I have tried several excellent, more expensive lines. I miss not seeing you on hsn. Guess I will now have to watch Evine. </p>
                    <ul class="u-cmnt">
                      <li><a>Like</a></li>
                      <li><a>Reply</a></li>
                      <li><a style="color: #7f7f7f;"><img src="<?=$root_fld?>images/thumb-like.png"> 12</a></li>
                      <li><a style="color: #7f7f7f;">1 day</a></li>
                    </ul>
                    <div class="review-text-cmnt">
                    </div>
                  </div>
                </div>
                <div class="review-box d-flex num-2">
                  <div class="review-img">
                    <img src="<?=$root_fld?>images/t17.jpg" class="img-fluid">
                  </div>
                  <div class="review-txt">
                    <p class="u-name"> Cathie Bryan </p>
                    <p class="u-cmnt pb-0"> Great products and my favorite - the Gycolic Cleanser </p>
                    <ul class="u-cmnt">
                      <li><a>Like</a></li>
                      <li><a>Reply</a></li>
                      <li><a style="color: #7f7f7f;"><img src="<?=$root_fld?>images/thumb-like.png"> 12</a></li>
                      <li><a style="color: #7f7f7f;">1 day</a></li>
                    </ul>
                    <div class="review-text-cmnt">
                    </div>
                  </div>
                </div>
                <div class="review-box d-flex num-2">
                  <div class="review-img">
                    <img src="<?=$root_fld?>images/t18.jpg" class="img-fluid">
                  </div>
                  <div class="review-txt">
                    <p class="u-name"> Janey Ramirez Saenz </p>
                    <p class="u-cmnt pb-0"> Their products work, made with great ingredients, and are price right. I have used Serious Skincare since 1998! </p>
                    <ul class="u-cmnt">
                      <li><a>Like</a></li>
                      <li><a>Reply</a></li>
                      <li><a style="color: #7f7f7f;"><img src="<?=$root_fld?>images/thumb-like.png"> 12</a></li>
                      <li><a style="color: #7f7f7f;">1 day</a></li>
                    </ul>
                    <div class="review-text-cmnt">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="right-content">
            <div class="reader-result ">
              <div class="reader-result-hd">
                <h4>Readers Results</h4>
              </div>
              <p class="pt-4"> "I love the <span class="font-weight-bold">Insta-Tox Wrinkle Smoothing Serum </span>and Serious Skincare. I've been using the product for years and I'm a believer. The results speak for themselves and I'm happy in my own skin." </p>
              <p class="mb-0"><span class="font-weight-bold">— Cherry B.,</span> Texas</p>
            </div>
            <div class="pro-box2 ">
              <div class="pro-box2-hd">
                <h4>Special Offer</h4>
              </div>
              <div class="pro-box2-inr mt-4">
                <label class="check-container"><span>Step 1:</span>
                  <br>Get Up To 40% Off of INSTA-TOX™ Instant Wrinkle-Smoothing Serum <input type="checkbox" checked="checked">
                  <span class="checkmark"></span>
                </label>
                <img src="<?=$root_fld?>images/pro-2-side.png" class="img-fluid" alt="#">
                <p class="text-center f-500 mb-0">Supplies Still Available as of: <span style="color: red;
                               font-weight: bold;">Thursday, February 17, 2022</span></p>
                <div class="pro-btn my-2">
                  <a href="<?= $offerLink ?>">
                    <img src="<?=$root_fld?>images/btn-2.png" class="img-fluid btn-img" alt="#">
                  </a>
                </div>
                <p class="text-center" style="font-size: 15px;"> Take advantage of our exclusive link and get up to <strong>40% OFF + FREE SHIPPING!</strong></p>
              </div>
            </div>
            <div class="review-right ">
              <div class="review-right1">
                <p>”<span class="f-500">Insta-Tox Wrinkle Smoothing Serum</span> is my absolute favorite and my go-to gift for all of my girlfriends. I wish I knew about this product before I had injections! I would have saved a heck of a lot of money!" </p>
                <p class="mb-0"><span class="f-500">— Karry S.,</span> Georgia</p>
              </div>
              <div class="review-right2">
                <p>”<span class="f-500">Insta-Tox Wrinkle Smoothing Serum</span> is the best product and my favorite in the Serious Skincare line. I was skeptical at first, but within a few weeks of using the set I already see results. Can't wait to see how I look in the future." </p>
                <p class="mb-0"><span class="f-500">— Kim K.,</span> Virginia</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer>
    <div class="container">
      <p class="ftr-txt">
        <a style="cursor:pointer" href="<?= $offerLink ?>" class="fancybox fancybox.iframe">Terms &amp; Conditions</a> &nbsp;|&nbsp; <a style="cursor:pointer" href="<?= $offerLink ?>" class="fancybox fancybox.iframe">Privacy Policy</a> &nbsp;|&nbsp; <a style="cursor:pointer" href="<?= $offerLink ?>" class="fancybox fancybox.iframe">Shipping &amp; Returns</a> &nbsp;|&nbsp; <a style="cursor:pointer" href="<?= $offerLink ?>" class="fancybox fancybox.iframe">Contact Us</a> &nbsp;
      </p>
      <p>Disclaimer: These products are not intended to diagnose, prevent, treat, or cure any disease. The stories depicted on this site and the person(s) depicted in the story are not real unless stated otherwise. Rather, the story is based on the results that some people who have used these products have achieved. The results portrayed in the story and in the comments are illustrative, and may not be the results that you achieve with these products.<br><br>
        <a href="<?= $offerLink ?>" class="dmca-badge"> <img src="<?=$root_fld?>images/dmca_protected_sml_120l.png" alt="DMCA.com Protection Status"></a>
      </p>
    </div>
    <div class="copy-txt">
      <div class="container">
        <p class="mb-0">Copyright © 2022 Serious Skincare. All Rights Reserved.<br></p>
      </div>
    </div>
    <div class="foot-3" style="display: none;">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 col-md-9 mx-auto">
            <p>GET UP TO 40% OFF TODAY -&gt; <a href="<?= $offerLink ?>"><img src="<?=$root_fld?>images/cta-btn.png" alt="img" class="btn-img"></a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      let obs = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            document.querySelector('.foot-3').style.display = 'block';
          }
        });
      });
      obs.observe(document.querySelector('footer'));
      let obs2 = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            document.querySelector('.foot-3').style.display = 'none';
          }
        });
      });
      obs2.observe(document.querySelector('.product-box1'));
    });
  </script>
  <script type="text/javascript">
    let trackerUrl = "<?= $clickPhpUrl ?>";
  </script>
  <script type="text/javascript" src="/umg/1.1.4/ultramagic.js"></script>
</body>

</html>