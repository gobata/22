<?php
/**
 * Template Name: page-tokyo-contents
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage SpacePanda22
 * @since SpacePanda22
 */

get_header(); ?>


<div class="wrap">

  <div id='office_contents'>

    <div class='sub_menu'>
      <?php get_sidebar('tokyo'); ?>
    </div>

    <div class='top_office_header'>


      <div class="office_main">

        <div class='office_main_contents'>

          <div class='content_title'>
            <span class="glyphicon glyphicon-list"></span>
            <?php if (is_page('tokyo/company')) : ?>会社案内
            <?php elseif(is_page('tokyo/news')) : ?>ニュース
            <?php elseif(is_page('tokyo/works')) : ?>制作実績
            <?php elseif(is_page('tokyo/message')) : ?>仕事紹介
            <?php elseif(is_page('tokyo/recruit')) : ?>採用情報
            <?php elseif(is_page('tokyo/contact')) : ?>お問合わせ
            <?php endif; ?>
          </div>



            <?php if (is_page('tokyo/news')) : ?>
              <div class='content_box with_border' style='max-width:initial;'>
                <!-- ニュースの投稿を読み込み -->
                <?php echo get_post( 114 )->post_content; ?>
              </div>
            <?php elseif (is_page('tokyo/message')) : ?>
              <div class='message_contents'>

                <div class="work_img worktop" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/worktop.jpg')">
                </div>
                <div class="message_detail message_detail01">
                  <!-- <img class="work_img work01" src='<?php echo get_template_directory_uri(); ?>/images/work01.png'/> -->
                  <div class='about_our_job'>
                    <h2 class='about_title'>「テレビ番組制作会社の仕事とは？」</h2>
                    “テレビ番組を作ることに興味はあるけど、どんな仕事なのかよくわからない”<br/>
                    おそらく、この文章を読んでいる人のほとんどがそうだと思います。<br/>
                    <br/>
                    番組を放送するのはテレビ局の仕事…<br/>
                    タレントのマネージメントをするのは芸能事務所の仕事…<br/>
                    カメラでタレントや商品を撮影するのはテレビ技術会社の仕事… <br/>(※厳密に言えば我々も自分でカメラを扱いますが…）<br/>
                    では、テレビ番組における制作会社の仕事は一体何なのか？<br/>
                    分かりやすいかどうか自分たちでも謎ですが、<br/>
                    制作スタッフの役割を野球チームに例えて説明します。
                  </div>
                </div>

                <div class='work_images'>
                  <img class="work_img work01" src='<?php echo get_template_directory_uri(); ?>/images/work01.png'/>
                  <img class="work_img work02" src='<?php echo get_template_directory_uri(); ?>/images/work02.png'/>
                  <img class="work_img work03" src='<?php echo get_template_directory_uri(); ?>/images/work03.png'/>
                  <img class="work_img work04" src='<?php echo get_template_directory_uri(); ?>/images/work04.png'/>
                </div>

                <div class='about_producer'>
                  <div class='about_our_job'>
                    <p class='about_title'>プロデューサーは番組全体の責任者です。</p>
                    番組制作がスムーズに進むように指揮を執ります。<br/>
                    ディレクター（監督）と相談しながら番組全体の流れを考え、<br/>
                    【スタッフの配置】や【予算管理】や【コンプライアンス判断】などを行います。<br/>
                    <br/>
                    また、タレントのキャスティング（出演依頼）もプロデューサーの大きい仕事。<br/>
                    芸能事務所に所属しているタレントさんに出演依頼（キャスティング）をすることです。<br/>
                    <br/>
                    少しミーハーなお話ですが、収録終わりにタレントと飲みに行くことも楽しみの１つです笑
                  </div>
                </div>

                <div class='about_director'>
                  <div class='about_our_job'>
                    <p class='about_title'>ディレクターは番組作りの“監督”的な役割を担います。</p>
                    「企画を考え、ロケやスタジオ収録を仕切り、編集して番組に仕上げる」<br/>
                    オンエアまですべての制作に関わります。<br/>
                    番組が面白くなるかどうかはディレクターの演出力で大きく変わります。<br/>
                    効率も大事ですが、作品のクオリティを高めるために、<br/>
                    時には時間や予算を度外視で作業に没頭する職人的ポジションです。<br/>
                    <br/>
                    自分の面白いと思った事や人の心を動かすVTRを自由に表現出来る…<br/>
                    それはディレクターに与えられた特権です。
                  </div>
                </div>

                <div class='about_ad'>
                  <div class='about_our_job'>
                    <p class='about_title'>テレビ番組の制作に携わる場合、<br/>まずはAD（アシスタントディレクター）からのスタートです。</p>
                    「ADって雑用でしょ？」そんなイメージをもっている人も多いでしょう。<br/>
                    実際に調べ物、買い出し、会議の準備etc.…<br/>
                    下積みならではの仕事も当然ありますが、そればかりでもありません！！！<br/>
                    <br/>
                    企画会議でディレクターや作家と同じように意見出すのもADの仕事。<br/>
                    出来るADの出した企画が採用されることだってあります！<br/>
                    信頼が厚いADともなれば、簡単なロケを任せられます。<br/>
                    そして、番組制作に関わる関係各所のスケジュール調整や取り仕切りもADの役割。<br/>
                    いわばADは制作チームの心臓部なんです。
                  </div>
                </div>
              </div>

            <?php else : ?>
              <div class='content_box' style='max-width:initial;'>
                <?php if (is_page('tokyo/company')) : ?>
                  <div class="company_tab">
                    <button class="company_menu_button about_company">会社概要</button>
                    <button class="company_menu_button access_company">アクセス</button>
                    <button class="company_menu_button greeting_company">ご挨拶</button>
                  </div>
                <?php endif; ?>

                <!-- 固定ページ読み込み -->
                <?php if(have_posts()): while(have_posts()): the_post(); ?>
                  <?php the_content(); ?>
                <?php endwhile; endif; ?>



              </div>
            <?php endif; ?>
        </div>


        <div class='office_link_list office_main_contents'>
          <a href='<?php echo home_url(); ?>/tokyo/company'>
            <div class='office_link_contents'>
              <img src='<?php echo get_template_directory_uri(); ?>/images/works/company.jpg'/>
              <div class=''>会社案内</div>
            </div>
          </a>
          <a href='<?php echo home_url(); ?>/tokyo/works'>
            <div class='office_link_contents'>
              <img src='<?php echo get_template_directory_uri(); ?>/images/works.jpg'/>
              <div class=''>制作実績</div>
            </div>
          </a>
          <a href='<?php echo home_url(); ?>/tokyo/message'>
            <div class='office_link_contents'>
              <img src='<?php echo get_template_directory_uri(); ?>/images/message.jpg'/>
              <div class=''>仕事紹介</div>
            </div>
          </a>
          <a href='<?php echo home_url(); ?>/tokyo/recruit'>
            <div class='office_link_contents'>
              <img src='<?php echo get_template_directory_uri(); ?>/images/recruit.jpg'/>
              <div class=''>採用情報</div>
            </div>
          </a>
        </div>

        <div class='main'>
          <div class='content_title'>
            <span class="glyphicon glyphicon-star-empty"></span>
            SpacePanda22の事業
          </div>
          <div class='main_contents'>
            <a href='<?php echo home_url(); ?>/tokyo/'>
              <div class='inbound_department department'>
                <img src='<?php echo get_template_directory_uri(); ?>/images/works/tokyo.jpg'/>
                <div class='department_name'>東京オフィス</div>
              </div>
            </a>

            <a href='<?php echo home_url(); ?>/fukuoka/'>
              <div class='inbound_department department'>
                <img src='<?php echo get_template_directory_uri(); ?>/images/works/fukuoka.jpg'/>
                <div class='department_name'>福岡オフィス</div>
              </div>
            </a>

            <a href='<?php echo home_url(); ?>/inbound/'>
              <div class='inbound_department department'>
                <img src='<?php echo get_template_directory_uri(); ?>/images/works/inbound.jpg'/>
                <div class='department_name'>インバウンド事業</div>
              </div>
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>




</div><!--wrap-->


<?php get_footer(); ?>
