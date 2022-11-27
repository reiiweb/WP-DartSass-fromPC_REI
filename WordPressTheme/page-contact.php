<?php get_header(); ?>
<main>

    <section class="p-contact l-contact">
        <div class="p-contact__inner l-inner">
            <p class="p-contact__text">
                お問い合わせ・ご相談等がございましたら、お気軽に下記コメント欄よりお寄せください。
            </p>

            <!-- Contact Form7のショートコードの読み込み -->
            <?php echo do_shortcode('ショートコード名'); ?>

            <div class="p-contact__contents p-form">

                <div class="p-form__content p-form__content--textarea">
                    <div class="p-form__head">
                        <label class="p-form__title" for="comment">コメント</label>
                        <span class="p-form__add">必須</span>
                    </div>
                    <div class="p-form__item">
                        <textarea class="p-form__textarea" id="comment" placeholder="入力して下さい"></textarea>
                    </div>
                </div>
                <div class="p-form__content">
                    <div class="p-form__head">
                        <label class="p-form__title" for="name">お名前</label>
                        <span class="p-form__add p-form__add--any">必須</span>
                    </div>
                    <div class="p-form__item">
                        <input class="p-form__text" type="text" id="name" />
                    </div>
                </div>

                <div class="p-form__content">
                    <div class="p-form__head">
                        <label class="p-form__title" for="name">お名前</label>
                        <span class="p-form__add">必須</span>
                    </div>
                    <div class="p-form__item">
                        <input class="p-form__text" type="text" id="name" />
                    </div>
                </div>

                <!-- セレクトボックス -->
                <!-- <div class="p-form__content">
          <div class="p-form__head">
            <label class="p-form__title">お問い合わせ内容</label>
            <span class="p-form__add">必須</span>
          </div>
          <div class="p-form__item p-form__item--select">
            <select name="content" class="p-form__select">
              <option value="" disabled selected>選択してください</option>
              <option value="">泥状掘削機について</option>
              <option value="">採用について</option>
              <option value="">その他</option>
            </select>
          </div>
        </div> -->

                <!-- ラジオボタン -->
                <!-- <div class="p-form__content p-form__content--radio">
          <div class="p-form__head">
            <p class="p-form__title">選択してください</p>
            <span class="p-form__add">必須</span>
          </div>
          <div class="p-form__item">
            <div class="p-form__radios">
              <label>
                <input class="p-form__radio" type="radio" name="radio-name" /><span>商談のご相談</span>
              </label>
              <label>
                <input class="p-form__radio" type="radio" name="radio-name" /><span>サービスに関するお問い合わせ</span>
              </label>
              <label>
                <input class="p-form__radio" type="radio" name="radio-name" /><span>資料請求</span>
              </label>
              <label>
                <input class="p-form__radio" type="radio" name="radio-name" /><span>その他</span>
              </label>
            </div>
          </div>
        </div> -->

                <!-- チェックボックス -->
                <!-- <div class="p-form__privacy">
          <p class="p-form__privacy-text">
            <a href="#!">プライバシーポリシー</a>に同意の上、送信ください。
          </p>
          <div class="p-form__check-block">
            <label>
              <input class="p-form__check" type="checkbox" name="check-name" /><span>プライバシーポリシーに同意する</span>
            </label>
          </div>
        </div> -->

                <div class="p-form__btn">
                    <input class="c-btn" type="submit" value="確認する" />
                </div>
            </div>



        </div>
    </section>

</main>
<?php get_footer(); ?>