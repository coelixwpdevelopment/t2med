<form class="p-app-form__application-form application-form" dir="rtl">
  <input type="hidden" name="action" value="application-form-submit">

  <div class="application-form__container ml-auto mr-auto">
    <div class="row">
      <div class="col">

        <div class="application-form-field application-form__application-form-field">
          <div class="application-form-field__label">*שם פרטי בעברית</div>
          <div class="application-form-field__input">
            <input class="application-form-text-field" type="text" name="fname" placeholder="שם פרטי בעברית" required />
          </div>

        </div><!-- application-form-field 1 END -->

        <div class="application-form-field application-form__application-form-field">
          <div class="application-form-field__label">*שם משפחה בעברית</div>
          <div class="application-form-field__input">
            <input class="application-form-text-field" type="text" name="lname" placeholder="שם משפחה בעברית" required />
          </div>

        </div><!-- application-form-field 2 END -->

        
        <div class="application-form-field application-form__application-form-field">
          <div class="application-form-field__label">*מספר תעודת זהות</div>
          <div class="application-form-field__input">
            <input class="application-form-text-field" type="text" name="id" placeholder="מספר תעודת זהות" required />
          </div>

        </div><!-- application-form-field 3 END -->

        <div class="application-form-field application-form__application-form-field">
          <div class="application-form-field__label">*מייל טכניוני</div>
          <div class="application-form-field__input">
            <div class="u-flex u-align-center">
              <div class="application-form__input-prepended-text">
                campus.technion.ac.il@
              </div>
              <input class="application-form-text-field" type="text" name="tech_email" placeholder="email" required />
            </div>
          </div>

        </div><!-- application-form-field 4 END -->

        <div class="application-form-field application-form__application-form-field">
          <div class="application-form-field__label">*סיסמא</div>
          <div class="application-form-field__input">
            <input class="application-form-text-field" type="password" name="password" placeholder="סיסמא" required />
          </div>

        </div><!-- application-form-field 5 END -->

        <div class="application-form-field application-form__application-form-field">
          <div class="application-form-field__label">שנת לימודים</div>
          <div class="application-form-field__input">
            <select name="school_year" class="application-form-select">
              <option selected disabled>יש לבחור שנה</option>
              <?php for ($i = 0; $i < 8; $i++) : ?>
                <option value="<?= $i ?>"><?= $i ?></option>
              <?php endfor; ?>
            </select>
          </div>

        </div><!-- application-form-field 6 END -->
      
        <div class="application-form-field application-form__application-form-field">
          <div class="application-form-field__label">רקע וניסיון מקצועי</div>
          <div class="application-form-field__input">
            <div class="application-form-textarea">
              <textarea name="experience" class="application-form-textarea__input" maxlength="500" placeholder="במהלך התחרות? מה מייחד אותך משאר המשתתפים? יכולות והישגים מחוץ ללימודים שלדעתך יעזרו לקבוצת"></textarea>
              <div class="application-form-textarea__symbols-count"></div>
            </div>
          </div>
        </div><!-- application-form-field 7 END -->

        <div class="application-form-field application-form__application-form-field">
          <div class="application-form-field__label">העלאת תמונת פרופיל</div>
          <div class="application-form-field__input">
            <label class="application-form-file-input" data-placeholder="הוספת קובץ">
              <input accepts="*/image" class="application-form-file-input__input" type="file" name="profile_picture">
              <div class="application-form-file-input__label">
                הוספת קובץ
              </div>
            </label>
          </div>

        </div><!-- application-form-field 8 END -->

        <div class="application-form-field application-form__application-form-field">
          <div class="application-form-field__label">העלאת קורות חיים</div>
          <div class="application-form-field__input">
            <label class="application-form-file-input" data-placeholder="PDF/DOC/DOCX">
              <input accept="application/msword, application/pdf" class="application-form-file-input__input" type="file" name="resume">
              <div class="application-form-file-input__label">
                PDF/DOC/DOCX
              </div>
            </label>
          </div>

        </div><!-- application-form-field 9 END -->

      </div>

      <div class="col">

        <div class="application-form-field application-form__application-form-field">
          <div class="application-form-field__label">*שם פרטי באנגלית</div>
          <div class="application-form-field__input">
            <input class="application-form-text-field" type="text" name="eng_fname" placeholder="תילגנאב יטרפ םש" required />
          </div>
        </div><!-- application-form-field 1 END -->

        <div class="application-form-field application-form__application-form-field">
          <div class="application-form-field__label">*שם משפחה באנגלית</div>
          <div class="application-form-field__input">
            <input class="application-form-text-field" type="text" name="eng_lname" placeholder="שם משפחה באנגלית" required />
          </div>

        </div><!-- application-form-field 2 END -->

        <div class="application-form-field application-form__application-form-field">
          <div class="application-form-field__label">*מספר טלפון נייד</div>
          <div class="application-form-field__input">
            <input class="application-form-text-field" type="text" name="phone" placeholder="דיינ ןופלט רפסמ" required />
          </div>

        </div><!-- application-form-field 3 END -->

        <div class="application-form-field application-form__application-form-field">
          <div class="application-form-field__label">מייל נוסף</div>
          <div class="application-form-field__input">
            <input class="application-form-text-field" type="text" name="other_email" placeholder="מייל נוסף" />
          </div>

        </div><!-- application-form-field 4 END -->

        <div class="application-form-field application-form__application-form-field">
          <div class="application-form-field__label">פקולטה</div>
          <div class="application-form-field__input">
            <input class="application-form-text-field" type="text" name="faculty" placeholder="פקולטה" />
          </div>

        </div><!-- application-form-field 5 END -->

        <div class="application-form-field application-form__application-form-field">
          <div class="application-form-field__label">מה המוטיבציה שלך להשתתפות בכנס?</div>
          <div class="application-form-field__input">
            <div class="application-form-textarea">
              <textarea name="motivation" maxlength="500" class="application-form-textarea__input" placeholder="מה המוטיבציה שלך להשתתפות בכנס?"></textarea>
              <div class="application-form-textarea__symbols-count"></div>
            </div>
          </div>
        </div><!-- application-form-field 6 END -->

        <div class="application-form-field application-form__application-form-field">
          <div class="application-form-field__label">האם יש לך רעיון למיזם?</div>
          <div class="application-form-field__input">
            <div class="application-form-text">תינתן אופציה להעלות רעיונות גם בשלב מתקדם בתחרות</div>
            <div class="u-flex application-form__yes-no-container">
              <label class="application-form-checkbox application-form-checkbox__margin">
                <input class="application-form-checkbox__input" type="radio" name="have_idea" value="Yes" checked>
                <div class="application-form-checkbox__label">כן</div>
              </label>
              <label class="application-form-checkbox">
                <input class="application-form-checkbox__input" type="radio" name="have_idea" value="No">
                <div class="application-form-checkbox__label">לא</div>
              </label>
            </div>

          </div>

          <div class="application-form-field application-form__application-form-field js-idea-desc">
            <div class="application-form-field__input">
              <div class="application-form-textarea">
                <textarea name="idea_description" class="application-form-textarea__input" maxlength="300" placeholder=" במידה ויש לך רעיון למיזם, כתוב אותו בקצרה."></textarea>
                <div class="application-form-textarea__symbols-count"></div>
              </div>
            </div>
          </div>

          <div class="application-form-field application-form__application-form-field">
            <div class="application-form-field__input">
              <label class="application-form-checkbox">
                <input class="application-form-checkbox__input" type="checkbox" name="agree_terms_conditions" value="Yes" required>
                <div class="application-form-checkbox__label">
                  <span>קראתי והסכמתי לכל תנאי</span>
                  <a href="#" class="application-form__terms-link">תקנון התחרות</a>
                </div>
              </label>
            </div>
          </div>
        </div>


        <button class="theme-btn is-blue is-block application-form__submit application-form__submit_desktop" type="submit">שלח</button>
        <button class="theme-btn is-blue is-block application-form__submit application-form__submit_mobile" type="submit">שלח</button>
      </div>
    </div>
  </div>
</form>