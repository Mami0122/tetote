<?php
  get_header();
  $template_uri = get_template_directory_uri();
?>


<?php
  get_template_part('template-parts/breadcrumb', null, array('text' => ['entry']) ); 
?>
<main>
<section class="p-entryForm">
  <div class="p-entryForm__container">
    <div class="p-entryForm__inner">

      <div class="p-entryForm__introContainer">
        <h1 class="p-entryForm__heading">
          <span class="p-entryForm__headingEn">entry form</span>
          <span class="p-entryForm__headingJa"><span class="color-accentDark">新卒・中途採用</span><br class="only-sp">エントリーフォーム</span>
        </h1>
        <p class="p-entryForm__introText">
          当社へ入社ご希望の方は、下記の送信フォームより送信して下さい。<br>
          <span class="color-accentDark">※</span>は必須項目になります。
        </p>
      </div>

      <form action="" class="p-entryForm__form">
        <div class="p-entryForm__fieldGroup">
          <label for="" class="p-entryForm__label required">お名前</label>
          <div class="p-entryForm__inputWrap"><input type="text" name="" id="" class="p-entryForm__input text" placeholder="例：山田太郎"></div>
        </div>
        <div class="p-entryForm__fieldGroup">
          <label for="" class="p-entryForm__label required">お名前カナ</label>
          <div class="p-entryForm__inputWrap"><input type="text" name="" id="" class="p-entryForm__input text" placeholder="ヤマダタロウ"></div>
        </div>
        <div class="p-entryForm__fieldGroup">
          <label for="" class="p-entryForm__label required">メールアドレス</label>
          <div class="p-entryForm__inputWrap"><input type="text" name="" id="" class="p-entryForm__input text" placeholder="メールアドレス"></div>
        </div>
        <div class="p-entryForm__fieldGroup">
          <label for="" class="p-entryForm__label required">電話番号</label>
          <div class="p-entryForm__inputWrap"><input type="text" name="" id="" class="p-entryForm__input text" placeholder="電話番号"></div>
        </div>

        <div class="p-entryForm__fieldGroup">
          <label for="" class="p-entryForm__label birth alignself-start required">生年月日</label>
          <div class="p-entryForm__inputWrap">
            <div class="p-entryForm__birthInputContainer">
              <div class="p-entryForm__birthInputWrap year">
                <input type="text" name="" id="" class="p-entryForm__input text year" placeholder="例：2000">
                年
              </div>
              <div class="p-entryForm__birthInputWrap month">
                <div class="p-entryForm__selectWrap">
                  <select type="text" class="p-entryForm__input select month">
                    <option value="例：2000" diabled>選択してください</option>
                  </select>
                </div>
                月
              </div>
              <div class="p-entryForm__birthInputWrap date">
                <div class="p-entryForm__selectWrap">                
                  <select type="text" class="p-entryForm__input select date">
                    <option value="例：2000" diabled>選択してください</option>
                  </select>
                </div>
                日
              </div>
            </div>
          </div>
        </div>
        <div class="p-entryForm__fieldGroup aimedRole">
          <fieldset class="p-entryForm__fieldset">
            <legend  class="p-entryForm__label alignself-start required">希望職種</legend>
            <div class="p-entryForm__inputWrap">
              <div class="p-entryForm__radiosContainer">
                <label  class="p-entryForm__radioLabel">
                  <input type="radio"  name="job" class="p-entryForm__radio">コンサルタント
                </label>
                <label class="p-entryForm__radioLabel">
                  <input type="radio" name="job" class="p-entryForm__radio">ソリューション営業
                </label>
                <label class="p-entryForm__radioLabel">
                  <input type="radio" name="job" class="p-entryForm__radio">システムエンジニア
                </label>
              </div>
            </div>
          </fieldset>
        </div>

        <div class="p-entryForm__fieldGroup">
          <label for="" class="p-entryForm__label strength alignself-start required">自己PR</label>
          <div class="p-entryForm__inputWrap">
            <textarea name="" id="" class="p-entryForm__input textarea" placeholder="例：志望動機、自己PR"></textarea>
          </div>
        </div>

        <div class="p-entryForm__fieldGroup trigger">
          <fieldset class="p-entryForm__fieldset">
            <legend class="p-entryForm__label alignself-start">当社を知ったきっかけを教えて下さい。</legend>
            <div class="p-entryForm__inputWrap">
              <div class="p-entryForm__checkboxesContainer">
                <label class="p-entryForm__checkboxLabel">
                  <input class="p-entryForm__checkbox" type="checkbox" name="trigger[]" value="X(旧Twitter)" >X(旧Twitter)
                </label>
                <label class="p-entryForm__checkboxLabel">
                  <input class="p-entryForm__checkbox" type="checkbox" name="trigger[]" value="Instagram" >Instagram
                </label>
                <label class="p-entryForm__checkboxLabel">
                  <input   class="p-entryForm__checkbox" type="checkbox" name="trigger[]" value="検索広告">検索広告
                </label>
                <label class="p-entryForm__checkboxLabel">
                  <input class="p-entryForm__checkbox" type="checkbox" name="trigger[]" value="知人友人・親戚">知人友人・親戚
                </label>
                <label class="p-entryForm__checkboxLabel">
                  <input class="p-entryForm__checkbox" type="checkbox" name="trigger[]" value="その他" >その他
                </label>
              </div>
            </div>
          </fieldset>
        </div>

        <div class="p-entryForm__privacyRow">
          <label class="p-entryForm__privacyRowLabel">
            <input type="checkbox" class="p-entryForm__checkbox privacy" required>
            <span class="p-entryForm__privacyCheckboxText">個人情報保護方針に同意する</span>
          </label>
        </div>
        <div class="p-entryForm__submitBtnWrap">
          <button type="submit" class="p-entryForm__submitBtn">送信する</button>
        </div>
      </form>
    </div>
  </div>
</section>
</main>

<?php 
  get_template_part('template-parts/cta'); 
  get_footer();
?>

