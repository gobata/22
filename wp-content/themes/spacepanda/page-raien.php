<?php
/**
 * Template Name: page-raien
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

<?php $is_japan = false; ?>
<?php $url = $_SERVER['REQUEST_URI']; ?>

<?php if(strstr($url,'lang')): ?>
<?php $is_japan = true; ?>
<?php else: ?>
<?php $is_japan = false; ?>
<?php endif; ?>

<div class='wrap' id='raien'>



  <div class="raien-img-holder" data-image="/wp-content/uploads/2018/02/ARON7433.jpg" >
  </div>

  <div class='about_raien'>
    <div class='raien-language'>
      <?php if($is_japan): ?>
        <a href='/raien'>English</a> | <a href='/raien?lang=jp' style="font-weight:bold;">日本語</a>
      <?php else: ?>
        <a href='/raien' style="font-weight:bold;">English</a> | <a href='/raien?lang=jp'>Japanese</a>
      <?php endif; ?>
    </div>
    <div class='top_contents'>
      <div class='content_title'>
        <?php if($is_japan): ?>
          <span class='raien-sub-name'>外国人向け 相撲体験教室</span><br/>
        <?php else: ?>
          <span class='raien-sub-name'>Sumo Experience Lesson for Foreigners/Tourists<br/>In Tokyo</span><br/>
        <?php endif; ?>
        <span class='raien-name'>
          <img style="" src='<?php echo get_template_directory_uri(); ?>/images/raien_logo.png'/>
        </span>
      </div>
      <!-- <span class='sub_content_title'>Raien</span> -->
      <!-- <div class='line_content'></div> -->

    </div>
  </div>

  <section>
    <div class='raien-contents raien-program'>
      <?php if($is_japan): ?>
        <h2 class='title'>ご挨拶</h2>
        <div class='description'>
          相撲は、土俵の上で力士が戦う日本古来の神事です。 <br/>
          近年、欧米を中心に相撲関連ページのネット検索が増えており、外国人からの高い相撲人気 が顕著に現れています。 <br/>
          「雷炎-RAIEN-」では、インバウンド(外国人観光客)向けの相撲教室を開催しております。<br/>
          本来、土俵は神聖な場所とされており、普段はなかなか入ることが出来ませんが、<br/>
          当教室ではどなたでもお気軽に相撲体験が可能です。<br/>
        </div>

      <?php else: ?>
        <h2 class='title'>Introduction</h2>
        <div class='description'>
          Sumo wrestling is an ancient Japanese Shinto ritual where a Rikishi (sumo wrestler) wrestles on a Dohyo (sumo ring).<br/>
          In recent years, Sumo related websites and web searches have been increasing throughout Europe and America.<br/>
          RAIEN provides special Sumo experience lessons for foreign tourists.<br/>
          Dohyos are usually considered sacred and ordinarily are off-limits to people other than rikishi.<br/>
          However,RAIEN has made it possible for everyone to join this rare and unique experience.
        </div>
      <?php endif; ?>
    </div>
  <!-- </section> -->
  <!-- <div class="raien-img-holder" data-height="2000" data-image="/wp-content/uploads/2018/02/IMG_5319.jpg" >
  </div>
  <section> -->

    <div class='raien-contents raien-program'>
      <?php if($is_japan): ?>
        <h2 class='title'>プログラム</h2>
        <h3 class='sub_title'>相撲体験教室</h3>
        <div class='description'>
          相撲経験者の講師2名と通訳2名によって、相撲体験の説明・指導をいたします。<br/>
          実際に土俵を使って、まわしの締め方から四股踏みなど、相撲における基本的な所作を懇 切丁寧かつ楽しく指導していきます。<br/>
          最後には模擬取り組みも行います。
        </div>
        <div class='description'>
          ※参加者の人数は 1 回につき見学者含め 5~15名程度を予定しております。<br/>
          ※最小催行人数は5名です。<br/>
          ※所要時間は120分を予定しています。
        </div>

      <?php else: ?>
        <h2 class='title'>Program</h2>
        <h3 class='sub_title'>Sumo experience lesson</h3>
        <div class='description'>
          Lessons will be conducted by two former Japanese sumo wrestlers and two translators who will translate instructions.<br/>
          Participants will use the dohyo and learn the basics of sumo wrestling;<br/>
          such as how to wear the mawashi(belt) and how to do the shikofumi steps.<br/>
          The lesson will be very enjoyable yet thorough and carefully instructed. <br/>
          There will also be a practice match at the end of each lesson.
        </div>
        <div class='description'>
          ※Each lesson will host about 5-15 participants (including spectators)<br/>
          ※Minimum participant of 5 required per lesson<br/>
          ※Duration of each lesson will be approximately 2 hours
        </div>
      <?php endif; ?>

    </div>


    <div class='raien-contents raien-fee'>
      <?php if($is_japan): ?>
        <h2 class='title'>料金</h2>
        <div class='description'>
          相撲体験 16,500 円/人(税込)<br/>
          ※10〜16歳未満 9,500　円/人(税込)
        </div>
        <div class='description'>
          見学 5,500 円/人(税込)<br/>
          ※10〜16歳未満 3,500　円/人(税込)
        </div>
      <?php else: ?>
        <h2 class='title'>Fee</h2>
        <div class='description'>
          Sumo experience: 16,500JPY (tax incl.) / per person<br/>
          ※Children under the age of 16 will be 9,500yen/ per child
        </div>
        <div class='description'>
          Sumo lesson spectators : 5,500JP (tax incl.) / per person<br/>
          ※Children under the age of 16 will be 3,500yen/ per child
        </div>
      <?php endif; ?>

    </div>

    <div class='raien-contents raien-location'>
      <?php if($is_japan): ?>
        <h2 class='title'>相撲体験教室会場</h2>
        <div class='description'>
          <strong>SUBARU 総合スポーツセンター</strong>
          <a href='https://www.google.co.jp/maps/place/SUBARU%E7%B7%8F%E5%90%88%E3%82%B9%E3%83%9D%E3%83%BC%E3%83%84%E3%82%BB%E3%83%B3%E3%82%BF%E3%83%BC/@35.6818691,139.5626255,15z/data=!4m5!3m4!1s0x0:0x65a94ded49ff4057!8m2!3d35.6818691!4d139.5626255' target='_blank'>
            [地図]
          </a>
          <br/><br/>
          小田急バス、京王バスでバス停「三鷹市役所前」下車徒歩5分 ※集合時間の10分前までは、<br/>
          JR 三鷹駅改札に案内役のスタッフが立っております。<br/>
          会場までの詳しいアクセス方法が書かれたプリントをお渡ししておりますので、ぜひ話しかけてください
        </div>
        <div class='description'>
          タクシーで<br/>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/2HY1SCGAIxU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          <br/>
          バスで<br/>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/t8tOQZiJCPw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
      <?php else: ?>
        <h2 class='title'>Location/Access</h2>
        <div class='description'>
          <strong>Lessons will be held at SUBARU Comprehensive Sports Center.</strong>
          <a href='https://www.google.co.jp/maps/place/SUBARU%E7%B7%8F%E5%90%88%E3%82%B9%E3%83%9D%E3%83%BC%E3%83%84%E3%82%BB%E3%83%B3%E3%82%BF%E3%83%BC/@35.6818691,139.5626255,15z/data=!4m5!3m4!1s0x0:0x65a94ded49ff4057!8m2!3d35.6818691!4d139.5626255' target='_blank'>
            [MAP]
          </a>
          <br/><br/>
          Access to SUBARU Comprehensive Sports Center<br/>
          5-minute walk from Mikatashi Yakusho- Mae Stop (Odakyu Bus and Keio Bus)<br/>
          Our staff will be waiting for you at JR Mitaka station with a detailed map to the sports center.<br/>
          ※Up until 10 minutes before the lesson starts. Please do not hesitate to ask for help!
        </div>

        <div class='description'>
          English videos will be released soon！！<br/>
          Via Taxi<br/>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/2HY1SCGAIxU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          <br/>
          Via Bus<br/>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/t8tOQZiJCPw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
      <?php endif; ?>

    </div>

    <div class='raien-contents raien-schedule'>
      <?php if($is_japan): ?>
        <?php echo get_post( 369 )->post_content; ?>
      <?php else: ?>
        <?php echo get_post( 373 )->post_content; ?>
      <?php endif; ?>

    </div>

    <div class='raien-contents raien-gallery'>
      <?php if($is_japan): ?>
        <h2 class='title'>ギャラリー</h2>
      <?php else: ?>
        <h2 class='title'>Gallery</h2>
      <?php endif; ?>

      <div class='description'>
        <div class='gallery'>
          <a href="/wp-content/uploads/2018/02/ARON7433.jpg" rel="lightbox[sumo]">
            <img src="/wp-content/uploads/2018/02/ARON7433.jpg" alt=""  />
          </a>
          <a href="/wp-content/uploads/2018/02/ARON7439.jpg" rel="lightbox[sumo]">
            <img src="/wp-content/uploads/2018/02/ARON7439.jpg" alt=""  />
          </a>

          <a href="/wp-content/uploads/2018/02/IMG_5319.jpg" rel="lightbox[sumo]">
            <img src="/wp-content/uploads/2018/02/IMG_5319.jpg" alt=""  />
          </a>
          <a href="/wp-content/uploads/2018/02/ARON7441.jpg" rel="lightbox[sumo]">
            <img src="/wp-content/uploads/2018/02/ARON7441.jpg" alt=""/>
          </a>
          <a href="/wp-content/uploads/2018/02/ARON7363.jpg" rel="lightbox[sumo]">
            <img src="/wp-content/uploads/2018/02/ARON7363.jpg" alt=""/>
          </a>
          <a href="/wp-content/uploads/2018/02/ARON7268.jpg" rel="lightbox[sumo]">
            <img src="/wp-content/uploads/2018/02/ARON7268.jpg" alt=""/>
          </a>
          <a href="/wp-content/uploads/2018/02/ARON7244.jpg" rel="lightbox[sumo]">
            <img src="/wp-content/uploads/2018/02/ARON7244.jpg" alt=""/>
          </a>
          <a href="/wp-content/uploads/2018/02/ARON7176.jpg" rel="lightbox[sumo]">
            <img src="/wp-content/uploads/2018/02/ARON7176.jpg" alt=""/>
          </a>
          <a href="/wp-content/uploads/2018/02/ARON7135.jpg" rel="lightbox[sumo]">
            <img src="/wp-content/uploads/2018/02/ARON7135.jpg" alt=""/>
          </a>
          <a href="/wp-content/uploads/2018/02/ARON7102.jpg" rel="lightbox[sumo]">
            <img src="/wp-content/uploads/2018/02/ARON7102.jpg" alt=""/>
          </a>
        </div>
      </div>
    </div>

    <div class='raien-contents raien-term'>
      <?php if($is_japan): ?>
        <h2 class='title'>注意事項・利用規約</h2>
        <div class='description'>
          <?php echo get_post( 341 )->post_content; ?>
        </div>
      <?php else: ?>
        <h2 class='title'>Terms of Service/Notes</h2>
        <div class='description'>
          <?php echo get_post( 339 )->post_content; ?>
        </div>
      <?php endif; ?>

    </div>


    <div class='raien-contents raien-agreement'>
      <?php if($is_japan): ?>
        <h2 class='title'>参加にあたって、以下の項目について同意をお願いいたします。</h2>
        <div class='description'>
          私は、私自身及び私と同グループの申込者（以下、併せて単に「申込者」という。）を代表して、<br/>
          貴社が運営及び管理を行う外国人観光客向け相撲教室「雷炎－RAIEN－」（以下「本件イベント」という。）に参加するにあたり、下記の事項に同意します
        </div>
        <div class='description agreement'>
          <ol>
            <li>
              申込者は、本件イベントに参加する時点において、以下のいずれの身体状況でないこと。<br/>
              ・体調不良<br/>
              ・妊娠中<br/>
              ・飲酒、二日酔いその他アルコール影響下にあること<br/>
              ・薬物の影響下にあること<br/>
              ・心臓疾患その他重大な傷病<br/>
              ・その他本件イベントに参加するにふさわしくない身体状況
            </li>
            <li>
              本件イベント中に生じた申込者の負傷、疾病、障害、死亡その他の人身障害について、一切の責任を申込者が負い、貴社に対する一切の請求権を放棄すること。
            </li>
            <li>
              申込者は、本件イベント中、医療的処置が必要と判断された場合、申込者の家族又は保護者への連絡なく、医療機関に搬送され又は医療処置を受けること。また、申込者は、当該医療処置等にかかる費用を負担すること。
            </li>
            <li>
              本件イベント中に生じた荷物の紛失、盗難、破損、汚損その他の事故について、一切の責任を申込者が負い、貴社に対する一切の請求権を放棄すること。
            <li>
              本件イベントに申込み後、申込者が申込者の都合により本件イベントの参加をキャンセルした場合、如何なる理由があっても、申込者が既に支払った本件イベントに対する費用は一切返金できないこと。
            </li>
            <li>
              申込者が本件イベントに遅刻した場合若しくは本件イベントに参加できなかった場合又は本件イベントを早退した場合、如何なる理由があっても、申込者が既に支払った本件イベントに対する費用は一切返金できないこと。
            </li>
            <li>
              本件イベントに申込み後、申込者が申込者の都合により本件イベントの参加内容を変更した場合（相撲教室の体験から相撲教室の見学への変更を含む。）、申込者が既に支払った本件イベントに対する費用は一切返金できないこと。
            </li>
            <li>
              本件イベント中の申込者の氏名、住所、声、写真、映像その他の記録が、本件イベントの広告活動のために、テレビ、インターネットウェブサイト、SNS、新聞その他メディアにおいて無償で公開されること。
            </li>
          </ol>

          <br/>
          <div class='check_term'>
            <label>私は以上の項目に全て同意します</lable>
            <input type='checkbox'></input>
          </div>
        </div>
      <?php else: ?>
        <h2 class='title'>Agreement for participation</h2>
        <div class='description'>
          Please tick the box 「agree」to show that you agree with all the terms below.<br/>
          <br/>
          I and my group members (hereinafter referred to as “participants”) attending the SUMO experience lesson “RAIEN” (hereinafter referred to as “this lesson”) held by your company will agree to the items mentioned below.
        </div>

        <div class='description agreement'>
          <ol>
            <li>
              Participants are not under below health conditions at the point when attending this lesson.<br/>
              ・in poor physical condition<br/>
              ・pregnant<br/>
              ・under the influence of alcohol<br/>
              ・under the influence of drugs<br/>
              ・having heart disease or other critical injuries and diseases<br/>
            </li>
            <li>
              Participants shall be responsible for any injures and diseases,<br/>
              disability and death that may occur through this lesson, and resign all claims against your company.
            </li>
            <li>
              When participants are judged that he/she requires medical procedure during this lesson,
              <br/>he/she must be sent to a medical institution and undergo a medical procedure without his/her family or guardian’s permission.
              <br/>Participants shall take on the expenses associated with those medical procedure.
            </li>
            <li>
              Participants will take complete responsibility for loss, robbery, damage, and other accidents occurring during this event, and resign all claims against your company.
            </li>
            <li>
              If participants cancel this lesson for personal reasons, the lesson fee will not be refunded under any circumstances.
            </li>
            <li>
              Although participants arrive late or leave early, the lesson fee once payed will not be refunded under any circumstances.
            </li>
            <li>
              Although participants decide to change from experiencing to spectating this lesson, the lesson fee once payed will not be refunded under any circumstances
            </li>
            <li>
              Participants will agree that his/her name, country, voice, photos, movies and other records may be used to advertise this lesson through TV, websites, social media, newspaper and other media without pay.
            </li>
          </ol>

          <br/>
          <div class='check_term'>
            <label>agree</lable>
            <input type='checkbox'></input>
          </div>
        </div>
      <?php endif; ?>

    </div>

    <div class='raien-contents raien-reservation' style='display:none;'>
      <?php if($is_japan): ?>
        <h2 class='title'>予約・お問い合わせフォーム</h2>
        <div class='description'>
          <?php if(have_posts()): while(have_posts()): the_post(); ?>
          <?php the_content(); ?>
          <?php endwhile; endif; ?>
        </div>
      <?php else: ?>
        <h2 class='title'>Reservation Form</h2>
        <div class='description' style='padding:3px;'>
          <?php if(have_posts()): while(have_posts()): the_post(); ?>
          <?php the_content(); ?>
          <?php endwhile; endif; ?>
        </div>
      <?php endif; ?>

    </div>
  </section>










</div>
<?php get_footer(); ?>
