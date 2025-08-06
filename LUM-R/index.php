<?php
/**
 * Template Name: LUM-Rランディングページ
 */
get_header('lp');
?>
<!-- main -->
<main class="lumr-content">
  <!-- TOPページ -->
  <section class="top-section" id="top">
    <!-- バナー -->
    <div class="top-bunner sp-d-none">
      <h2>
        <img src="<?php echo get_template_directory_uri(); ?>/asset\lumr_lp_test2.png" alt="中古車オークションLUM入札会の新コーナーLUM-Rとは?">
      </h2>
    </div>
    <!-- PC版 -->
    <div class="top-bunner pc-d-none">
      <h2>
        <img src="<?php echo get_template_directory_uri(); ?>/asset\lumr_lp_test2.png" alt="中古車オークションLUM入札会の新コーナーLUM-Rとは?">
      </h2>
    </div>  
    <!-- SP版 -->

    <!-- メイン -->
    <div class="top-wrapper">
      <div class="top-inner">
        <!-- LUM-Rの概要 -->
        <section class="about-lumr">
          <div class="container">
            <h2 class="section-title">中古車オークションLUM入札会の<br>新コーナーLUM-Rとは？</h2>
            <div class="about-content">
              <div class="about-img-box">
                <img src="<?php echo get_template_directory_uri(); ?>/asset\lum-r-01.png" alt="中古車オークションLUM入札会の新コーナーLUM-Rについて" class="about-image">
              </div>
              <p class="about-text">
                中古車オークション「LUM入札会」を<br>
                運営する株式会社ユニケットが、<br>
                画像出品専用の新コーナー<span>「LUM-R」</span>をスタートしました！<br>
                <span>「LUM-R」</span>には、特設出品コーナーを設置しています。<br>
                <br>
                <span style="color:#de397b;">イチセレ</span>：大手買取店とコラボ！<br>
                ユーザー様からの買取車両がいち早くに手に入るかも？<br>
				        <br>
				        <span style="color:#a802f5;">ニコレン</span>：大手レンタカー会社<br>
                ニコニコレンタカー様からレンタアップ車両が続々出品<br>
                御社の中古車仕入れに、<br class="pc-d-none">ぜひ<span>「LUM-R」</span>をご活用ください！
              </p>
            </div>
          </div>
        </section>
        <!-- 入札方法 -->
        <section class="how-to-bid">
          <div class="container">
            <h2 class="section-title">入札方法</h2>
            <!-- 手順01 -->
            <div class="steps">
              <div class="step-img-box">
                <img src="<?php echo get_template_directory_uri(); ?>/asset\img-how-to-bid-01.png" alt="中古車仕入れの手順01" class="step-img-box-01">
                <img src="<?php echo get_template_directory_uri(); ?>/asset\img-how-to-bid-02.png" alt="中古車仕入れの手順02" class="step-img-box-02">              
              </div>
              <div class="step-exp-box-01">
                <p>
                  ①ログイン後、入札ページを表示<br>
                  <br>
                  ②上部メニュー「入札/照会」を選択後、<br>
                  検索条件のLUM-Rにチェック<br>
                  (エリア選択可能)<br>
                  <br>
                  ③入札金額を設定し、入札
                  <br>
                </p>
              </div>
            </div>  
            <!-- 手順02 -->
            <div class="steps">
              <div class="step-img-box-03">
                <img src="<?php echo get_template_directory_uri(); ?>/asset\ccs.png" alt="中古車仕入れの手順03">
              </div>
              <div class="step-exp-box-02">
                <p>
                   Q. LUMとLUM-Rの見分け方<br>
                   A. 出品票のLOGOマークが目印
                </p>   
                <p>
                   Q. 「画像出品」だから現車場所を確認したい<br>
                   A. 出品票「ccs」の右下「取引先」欄に<br>
                      所在地の記載があります。<br>
                      是非中古車の仕入れ先としてご利用下さい。
                </p>             
              </div>              
            </div>
          </div>
        </section>
        <!-- Q&A -->
        <section class="faq-section">
          <div class="container">
            <h2 class="section-title">よくあるご質問</h2>
            <dl class="faq-items">
              <?php
                $args = array (
                  'post_type' => 'q-a-post', /* 投稿タイプを指定 */
                  'posts_per_page' => 10, /* 表示するページ数 */
                  'order', 'ASC'
                ); 
                  query_posts( $args );
                    if ( have_posts() ) while ( have_posts() ) : the_post();
              ?>                
                <dt class="faq-question"><span>Q.</span><p><?php the_title();?></p></dt>
                <dd class="faq-answer"><span>A.</span><?php the_content();?></dd>
              <?php 
                    endwhile; // end of the loop. 
                  wp_reset_postdata();
              ?>                    
            </dl>
          </div>
        </section>
      </div>
    </div>
    <!-- 申し込み -->
    <div class="cta-section">
      <!-- 既存バイヤー向けボタン -->
      <div class="container link-btn-box">
        <a href="https://swat.spacemove.co.jp/bid/login" target="_blank" rel="noopener noreferrer" class="link-btn">
          <span>LUM-Rの入札画面はこちら</span>
          <img src="<?php echo get_template_directory_uri(); ?>/asset\link-btn-arrow.svg" alt="中古車オークションの仕入れはこちらから→" class="link-btn-arrow">
        </a>
      </div>
      <!-- 新規会員向け -->
      <a href="https://swat.spacemove.co.jp/bid/memberNew" target="_blank" rel="noopener noreferrer" class="new-link">新規会員の方はこちら</a>
    </div>
  </section>
  <!-- イチセレ紹介 -->
  <section class="feature-section ichisere" id="ichisere">
    <h2 class="section-title">イチセレ</h2>
    <div class="container">
      <ul class="points-grid">
        <!-- poinin01 -->
        <li class="point-card">
          <header class="point-header">POINT.01</header>
          <div class="point-card-inner">
            <div class="point-card-illust-wrapper">
              <img src="<?php echo get_template_directory_uri(); ?>/asset\point1.svg" alt="中古車仕入れのポイントその1">
            </div>
            <p> 
              未公開在庫だからこそ<br>
              見つかる掘り出し物！<br>
              買取契約したばかりの車が<br>
              続々出品中。<br>
              リース車メインの<br>
              LUM入札会では見られない車両に<br>
              出会えるかも？
            </p>
          </div>  
        </li>
        <!-- poinin02 -->
        <li class="point-card">
          <header class="point-header">POINT.02</header>
          <div class="point-card-inner">
            <div class="point-card-illust-wrapper">
              <img src="<?php echo get_template_directory_uri(); ?>/asset\point2.svg" alt="中古車仕入れのポイントその2">
            </div>             
            <p>
              全国350店舗の<br>
				      買取在庫を毎週出品中！<br>
              日本各地からの出品だから、<br>
				      エリアを絞っての入札も可能！<br>
              陸送費の負担も減らせて、<br>
				      お得に仕入れできるチャンス！
            </p>
          </div>
        </li>
        <!-- poinin03 -->
        <li class="point-card">
          <header class="point-header">POINT.03</header>
          <div class="point-card-inner">
            <div class="point-card-illust-wrapper">
              <img src="<?php echo get_template_directory_uri(); ?>/asset\point3.svg" alt="中古車仕入れのポイントその3">
            </div>             
            <p>
             	大手買取店のお墨付き！<br>
            	営業担当が自信を持って選んだ、<br>
				      売れるクルマが勢ぞろい！<br>
            	もちろん買取時に<br>
				      出張査定を行っているので、<br>
				      車両の状態も安心です。<br>
            </p>
          </div>
        </li>
      </ul>
    </div>
    <!-- イチセレ推しポイント -->
    <div class="container text-intoroduce-wrapper">
      <p class="text-intoroduce-small">
        「イチセレ」は、ユーザー買取の未公開在庫を<br>
          どこよりも早く落札できるコーナーです。
      </p>
      <p class="ichisere-text-intoroduce">
        中古車仕入れを強力に<br class="pc-d-none">
        サポート!!
      </p>
    </div>
    <!-- ボタン -->
    <div class="container link-btn-box">
      <a href="https://swat.spacemove.co.jp/bid/login" target="_blank" rel="noopener noreferrer"  class="link-btn">
        <span>LUM-Rの入札画面はこちら</span>
        <img src="<?php echo get_template_directory_uri(); ?>/asset\link-btn-arrow.svg" alt="中古車オークションの仕入れはこちらから→" class="link-btn-arrow">
      </a>
    </div>    
  </section> 
  <!-- ニコレン紹介 -->
  <section class="feature-section nicoren" id="nicoren">
    <h2 class="section-title">ニコレン</h2>
    <div class="container"> 
      <ul class="nicoren-points">
        <!-- poinin01 -->
        <li class="point-block">
          <div class="point-illust-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/asset\n-point-01.svg" alt="中古車オークションLUM入札会の新コーナーのメンテナンス車両">
          </div>
          <div class="point-text-area">
            <p class="point-label"><span class="point-text">POINT</span><span class="bg-text">01</span></p>
            <p>
              レンタカーとして使われていた車は、<br>
              点検がしっかりされているから安心。<br>
              日常点検も法定点検もきちんと行われている<br>
              レンタアップ車両なら、<br>
              メンテナンス面も心配いりません！
            </p>
          </div>
        </li>
        <!-- poinin02 -->
        <li class="point-block">
          <div class="point-illust-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/asset\n-point-02.svg" alt="中古車オークションLUM入札会の新コーナーのセリ市場の車">
          </div>
          <div class="point-text-area">
            <p class="point-label"><span class="point-text">POINT</span><span class="bg-text">02</span></p>
            <p>
              ニコニコレンタカーFC加盟店と<br>
              直契約の実現により、<br>
              レンタアップ車両が多数出品！<br>
              多数の車両が貴重なオークション初出品です！
            </p>
          </div>
        </li>
        <!-- poinin03 -->
        <li class="point-block">
          <div class="point-illust-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/asset\n-point-03.svg" alt="中古車オークションLUM入札会の新コーナーの出品エリア">
          </div>
          <div class="point-text-area">
            <p class="point-label"><span class="point-text">POINT</span><span class="bg-text">03</span></p>
            <p>
              出品エリア、順次拡大中！<br>
              現在は関東・関西エリアを中心に展開。<br>
              今後は全国約1500店舗からの出品予定！<br>
              仕入れにおける陸送費の問題も解決できるかも？
            </p>
          </div>
        </li>
      </ul>      
      <!-- ニコレン推しポイント -->
      <div class="container text-intoroduce-wrapper">
        <p class="text-intoroduce-small">
          あのニコニコレンタカーと<br>
          コラボが実現！？
        </p>
        <p class="nicoren-text-intoroduce">ニコレンコーナー<br class="pc-d-none">LUM入札会初登場</p>
      </div>
      <!-- ボタン -->
      <div class="container link-btn-box">
        <a href="https://swat.spacemove.co.jp/bid/login" target="_blank" rel="noopener noreferrer" class="link-btn">
          <span>LUM-Rの入札画面はこちら</span>
          <img src="<?php echo get_template_directory_uri(); ?>/asset\link-btn-arrow.svg" alt="中古車オークションの仕入れはこちらから→" class="link-btn-arrow">
        </a>
      </div>
    </div>
  </section>
  <!-- 出品アプリのバナー -->
  <div class="last-bunner-area sp-d-none">
    <img src="<?php echo get_template_directory_uri(); ?>/asset\syuppin-bunner.png" alt="中古車オークションLUM入札会から出品アプリが登場">
  </div>
  <!-- PC版 -->
  <div class="last-bunner-area pc-d-none">
    <img src="<?php echo get_template_directory_uri(); ?>/asset\syuppin-bunner.png" alt="中古車オークションLUM入札会から出品アプリが登場">
  </div>  
  <!-- SP版 -->
</main>
<?php get_footer('lp'); ?>