<?php
/**
* Template Name: page-product
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

  <div id='product_flow_contents'>
    <div class='submenu-box'>
      <div class='sub_menu product_flow_sub_menu'>
        <?php get_sidebar('product'); ?>
      </div>
    </div>

    <div class='product_flow_contents'>

      <div class='flow_contents' id='planning'>
        <h2 class='title'>
          企画について
        </h2>
        <div class='contents'>
          <h3>
            全国放送のゴールデンタイムのテレビ番組を制作している<br/>
            ディレクターと構成作家が1から企画・構成を行います。
          </h3>
          <div class='detail'>
            テレビの花形の時間帯とも言われる、<br/>
            19時～22時に放送される番組を弊社は何本も制作しております。<br/>
            その実績と企画力を生かし、<br/>
            同業他社とは一味違う動画コンテンツ制作を行います。<br/>
          </div>

          <div class='box'>
            【弊社番組制作実績】<br/>

            NHK	　	　	　「天才てれびくんYOU」<br/>
            日本テレビ	　「有吉ゼミ」「有吉の壁」<br/>
            テレビ朝日	　「橋下×羽鳥の番組」「世界が驚いたニッポン! スゴイ～デスネ‼視察団」<br/>
            TBS	　	　	　 「ニンゲン観察バラエティ モニタリング」「白熱ライブ ビビット」<br/>
            テレビ東京	　「カンブリア宮殿」<br/>
            フジテレビ	　「モシモノフタリ」「はじめてのマルマル」
          </div>

        </div>
      </div>

      <div class='flow_contents' id='production'>
        <h2 class='title'>
          演出について
        </h2>
        <div class='contents'>
          <h3>
            スタッフはテレビ業界で活躍するプロフェッショナル！<br/>
            ハイクオリティな映像コンテンツを制作します。
          </h3>
          <div class='detail'>
            これまで数々の番組制作に携わってきたスタッフが、<br/>
            その経験をフルに活かし、貴社の商品やサービスを輝かせるような<br/>
            映像コンテンツ制作を行います。<br/>
            <br/>
            機材を扱うカメラマンや音響・照明スタッフも<br/>
            各業界で活躍するその道のプロたちを用意。技術面もご安心ください！
          </div>
          <div class='images'>
            <img src='<?php echo get_template_directory_uri(); ?>/images/product_flow/01.png'/>
            <img src='<?php echo get_template_directory_uri(); ?>/images/product_flow/02.png'/>
            <img src='<?php echo get_template_directory_uri(); ?>/images/product_flow/03.png'/>
          </div>
        </div>
      </div>


  <div class='flow_contents' id='step'>
    <h2 class='title'>
      動画完成までの5STEP
    </h2>
    <div class='contents'>
      <div class='step'>
        <div class='step-box'>
          <span class='step-title'>①ヒアリング</span>
          <span class='step-detail'>
            お客様の発信したい情報やご要望をお伺いします。</br>
            どんなことでも構いませんのでお気軽にご相談ください。
          </span>
        </div>
        <img src='<?php echo get_template_directory_uri(); ?>/images/product_flow/step1.png'/>
      </div>

      <img class='step_arrow' src='<?php echo get_template_directory_uri(); ?>/images/product_flow/step_arrow.png'/>

      <div class='step step2'>
        <div class='step-box'>
        <span class='step-title'>②スタッフ調整</span>
        <span class='step-detail'>
          プランに応じて、人員・提携会社（技術会社やアニメーション会社など）の選定や</br>
          撮影・編集スケジュールの調整を行います。
        </span>
      </div>
        <img src='<?php echo get_template_directory_uri(); ?>/images/product_flow/step2.png'/>
      </div>

      <img class='step_arrow' src='<?php echo get_template_directory_uri(); ?>/images/product_flow/step_arrow.png'/>

      <div class='step step3'>
        <div class='step-box'>
        <span class='step-title'>③ご提案</span>
        <span class='step-detail'>
          お客様からのご要望を織り込んだうえで、魅力的で訴求力の高い映像コンテンツ案を複数ご提案いたします。</br>
          プランの決定後、スタッフの手配を行います。
        </span>
      </div>
        <img src='<?php echo get_template_directory_uri(); ?>/images/product_flow/step3.png'/>
      </div>

      <img class='step_arrow' src='<?php echo get_template_directory_uri(); ?>/images/product_flow/step_arrow.png'/>

      <div class='step step4'>
        <div class='step-box'>
        <span class='step-title'>④撮影・編集</span>
        <span class='step-detail'>
          完成したプランを元に、最適な映像コンテンツの撮影・編集を行います。</br>
          編集中は随時チェックと修正が可能です。
        </span>
      </div>
        <img src='<?php echo get_template_directory_uri(); ?>/images/product_flow/step4.png'/>
      </div>

      <img class='step_arrow' src='<?php echo get_template_directory_uri(); ?>/images/product_flow/step_arrow.png'/>

      <div class='step step5'>
        <div class='step-box'>
        <span class='step-title'>⑤納品</span>
        <span class='step-detail'>
          最終チェック後、動画ファイル・DVD・ブルーレイディスクなど、</br>
          ご希望の形式で納品します。
        </span>
      </div>
        <img src='<?php echo get_template_directory_uri(); ?>/images/product_flow/step5.png'/>
      </div>
    </div>
  </div>

  <div class='flow_contents' id='tarent'>
    <h2 class='title'>
      出演者について
    </h2>
    <div class='contents'>
      <h3>
        大手タレント事務所にオファー可能！
        映像コンテンツ制作に華を添えます。
      </h3>
      <div class='detail'>
        映像出演者は、大手タレント事務所から厳選。<br/>
        各種SNSやブログ等で人気のタレントやアイドルにもオファーをかけることができます。<br/>
        <br/>
        さらに映像コンテンツは、常時設置することができるため、今後、出演者が売れていけばいくほど、<br/>
        コンテンツの価値は高まっていき、広告効果がアップしていくことが見込めます。
        <div class='images'>
          <img src='<?php echo get_template_directory_uri(); ?>/images/product_flow/09.png'/>
        </div>
      </div>

    </div>
  </div>

  <div class='flow_contents' id='cost'>
    <h2 class='title'>
      費用について
    </h2>
    <div class='contents'>
      <h3>
        10万円から受注を行っております。
        まずは、お気軽にお問い合わせください！
      </h3>
      <div class='detail'>
        弊社では、リーズナブルな価格帯から制作を受注しておりますが、
        費用はVTRの長さで決まるわけではありません。<br/>
        出演者や撮影スケジュールによって、わかりづらい点もあります。<br/>
        下記サンプル動画と制作時の参考価格を掲載して
        おりますので、こちらをご覧ください。
      </div>

      <div class='movies'>
        <div class='movie01'>
          <div class='movie-title'>
            【照明器具メーカーの商品紹介】（税抜）２６万円
          </div>
          <iframe width="600" height="315" src="https://www.youtube.com/embed/CHkzH4d8W9w?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          <div class='movie-detail'>
            <table>
              <tr>
                <td>撮影日数</td>
                <td>１日（６時間）</td>
              </tr>
              <tr>
                <td>制作費＋諸経費</td>
                <td>ナレーション約24万円  ＋ 約2万円</td>
              </tr>
            </table>
          </div>
        </div>

        <div class='movie02'>
          <div class='movie-title'>
            【外国人向け相撲体験教室のPR】（税抜）１６万円
          </div>
          <iframe width="600" height="315" src="https://www.youtube.com/embed/5UEoL4AfUSU?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          <div class='movie-detail'>
            <table>
              <tr>
                <td>撮影日数</td>
                <td>１日（３時間）</td>
              </tr>
              <tr>
                <td>制作費＋諸経費</td>
                <td>約１３万円</td>
              </tr>
              <tr>
                <td>オプション機材費</td>
                <td>約３万円</td>
              </tr>
            </table>
          </div>
        </div>

        <div class='movie03'>
          <div class='movie-title'>
            【飲食店のPR】（税抜）２１.５万円
          </div>
          <iframe width="600" height="315" src="https://www.youtube.com/embed/f8DfIeXBEb8?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          <div class='movie-detail'>
            <table>
              <tr>
                <td>撮影日数</td>
                <td>１日（４.５時間）</td>
              </tr>
              <tr>
                <td>制作費＋諸経費</td>
                <td>約１６万円</td>
              </tr>
              <tr>
                <td>ナレーション</td>
                <td>約5,000円（作業料のみ）</td>
              </tr>
              <tr>
                <td>オプション機材費</td>
                <td>約３万円</td>
              </tr>
              <tr>
                <td>出演費</td>
                <td>約２万円<br/>※知名度がないタレントやディレクターを起用した場合</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class='flow_contents' id='caution'>
    <h2 class='title'>
      注意事項
    </h2>
    <div class='contents'>
      <div class='detail'>
        <ul>
          <li>・映像コンテンツの著作権は、スペースパンダ22とタレント事務所にあります。</li>
          <li>・スケジュールはクオリティ担保のため、余裕を持たせた日数でご提案させていただきます。</li>
        </ul>
      </div>
    </div>
  </div>

  <div class='flow_contents' id='inqury'>
    <h2 class='title'>
      動画制作依頼に関するお問い合わせ
    </h2>
    <div class='contents'>
      <div class='detail'>
        株式会社スペースパンダ インバウンド動画制作部 担当 大保<br/>
        【TEL】<a href="tel:0364354238">03-6435-4238</a><br/>
        <!-- 【Mail】<a href="mailto:info@space-panda22.com" target='_blank'>info@space-panda22.com</a> -->
      </div>
    </div>
  </div>

  <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <?php the_content(); ?>
  <?php endwhile; endif; ?>

</div>
</div>

<?php get_footer(); ?>
