<?php /* Template Name: Application form */ 
get_header();
?>
<main id="primary" class="site-main">

  <div class="p-app-form">
      <div class="page-header">
        <div class="container-1530 ml-auto mr-auto">
          <div class="row">
            <div class="page-header__title">Application Form</div>
          </div>
        </div>
      </div>

      <div class="p-app-form__application-form application-form" dir="rtl">
        <div class="application-form__container ml-auto mr-auto">
          <div class="row">
            <div class="col">

              <div class="application-form-field application-form__application-form-field">
                <div class="application-form-field__label">*שם פרטי בעברית</div>
                <div class="application-form-field__input">
                  <input 
                    class="application-form-text-field" 
                    type="text"
                    name="fname"
                    placeholder="שם פרטי בעברית"
                    />
                </div>

              </div><!-- application-form-field 1 END -->

            </div>
            
            <div class="col"><!-- second column of inputs start -->

              <div class="application-form-field application-form__application-form-field">
                <div class="application-form-field__label">*שם פרטי באנגלית</div>
                <div class="application-form-field__input">
                  <input 
                    class="application-form-text-field" 
                    type="text"
                    name=""
                    placeholder="תילגנאב יטרפ םש"
                  />
                </div>
              </div><!-- application-form-field 1 END -->
              
              
            </div>

            <div class="col">

              <div class="application-form-field application-form__application-form-field">
                <div class="application-form-field__label">*שם משפחה בעברית</div>
                <div class="application-form-field__input">
                  <input 
                    class="application-form-text-field" 
                    type="text"
                    name=""
                    placeholder="שם משפחה בעברית"
                    />
                </div>

              </div><!-- application-form-field 2 END -->

            </div>

            <div class="col">

              <div class="application-form-field application-form__application-form-field">
                <div class="application-form-field__label">*שם משפחה באנגלית</div>
                <div class="application-form-field__input">
                  <input 
                    class="application-form-text-field" 
                    type="text"
                    name=""
                    placeholder="שם משפחה באנגלית"
                    />
                </div>

              </div><!-- application-form-field 2 END -->

            </div><!-- application form 2 row END -->

            <div class="col">

              <div class="application-form-field application-form__application-form-field">
                <div class="application-form-field__label">*מספר תעודת זהות</div>
                <div class="application-form-field__input">
                  <input 
                    class="application-form-text-field" 
                    type="text"
                    name=""
                    placeholder="מספר תעודת זהות"
                    />
                </div>

              </div><!-- application-form-field 3 END -->

            </div>
            <div class="col">

              <div class="application-form-field application-form__application-form-field">
                <div class="application-form-field__label">*מספר טלפון נייד</div>
                <div class="application-form-field__input">
                  <input 
                    class="application-form-text-field" 
                    type="text"
                    name=""
                    placeholder="דיינ ןופלט רפסמ"
                    />
                </div>

              </div><!-- application-form-field 3 END -->

            </div><!-- application form 3 row END -->

            <div class="col">

              <div class="application-form-field application-form__application-form-field">
                <div class="application-form-field__label">*מספר תעודת זהות</div>
                <div class="application-form-field__input">
                  <div class="u-flex u-align-center">
                    <div class="application-form__input-prepended-text">
                      campus.technion.ac.il@
                    </div>
                    <input 
                      class="application-form-text-field" 
                      type="text"
                      name=""
                      placeholder="מספר תעודת זהות"
                    />
                  </div>
                </div>

              </div><!-- application-form-field 4 END -->

            </div>
            <div class="col">

              <div class="application-form-field application-form__application-form-field">
                <div class="application-form-field__label">מייל נוסף</div>
                <div class="application-form-field__input">
                  <input 
                    class="application-form-text-field" 
                    type="text"
                    name=""
                    placeholder="מייל נוסף"
                    />
                </div>

              </div><!-- application-form-field 4 END -->

            </div><!-- application form 4 row END -->

            <div class="col">

              <div class="application-form-field application-form__application-form-field">
                <div class="application-form-field__label">*סיסמא</div>
                <div class="application-form-field__input">
                  <input 
                    class="application-form-text-field" 
                    type="text"
                    name=""
                    placeholder="סיסמא"
                    />
                </div>

              </div><!-- application-form-field 5 END -->

            </div>
            <div class="col">
              <div class="application-form-field application-form__application-form-field">
                <div class="application-form-field__label">פקולטה</div>
                <div class="application-form-field__input">
                  <input 
                    class="application-form-text-field" 
                    type="text"
                    name=""
                    placeholder="פקולטה"
                    />
                </div>

              </div><!-- application-form-field 5 END -->
            </div><!-- application form 5 row END -->

            <div class="col">

              <div class="application-form-field application-form__application-form-field">
                <div class="application-form-field__label">שנת לימודים</div>
                  <div class="application-form-field__input">
                      <select name="" class="application-form-select">
                        <option selected disabled>יש לבחור שנה</option>
                        <?php for($i = 0; $i < 8; $i++) : ?>
                          <option value="<?=$i?>"><?=$i?></option>
                        <?php endfor; ?>
                      </select>
                  </div>

                </div>
              </div><!-- application-form-field 6 END -->

              <div class="col">
                <div class="application-form-field application-form__application-form-field">
                  <div class="application-form-field__label">מה המוטיבציה שלך להשתתפות בכנס?</div>
                    <div class="application-form-field__input">
                      <textarea
                        name=""
                        class="application-form-textarea"
                        placeholder="מה המוטיבציה שלך להשתתפות בכנס?"
                      ></textarea>
                  </div>
                </div>
              </div><!-- application-form-field 6 END -->

              <div class="col">
                <div class="application-form-field application-form__application-form-field">
                  <div class="application-form-field__label">רקע וניסיון מקצועי</div>
                  <div class="application-form-field__input">
                    <textarea
                      name=""
                      class="application-form-textarea"
                      placeholder="במהלך התחרות? מה מייחד אותך משאר המשתתפים?
      יכולות והישגים מחוץ ללימודים שלדעתך יעזרו לקבוצת"
                    ></textarea>
                  </div>
                </div>
              </div><!-- application-form-field 7 END -->

              <div class="col">
                <div class="application-form-field application-form__application-form-field">
                  <div class="application-form-field__label">האם יש לך רעיון למיזם?</div>
                  <div class="application-form-field__input">
                    <div class="application-form-text">תינתן אופציה להעלות רעיונות גם בשלב מתקדם בתחרות</div>
                    <div class="u-flex application-form__yes-no-container">
                      <div class="application-form-checkbox application-form-checkbox__margin">
                        <input 
                          class="application-form-checkbox__input"
                          type="radio" name="have_idea" value="Yes"
                        >
                        <div class="application-form-checkbox__label">כן</div>
                      </div>
                      <div class="application-form-checkbox">
                        <input
                          class="application-form-checkbox__input"
                          type="radio" name="have_idea" value="No"
                        >
                        <div class="application-form-checkbox__label">לא</div>
                      </div>
                    </div>
                    
                    <textarea
                        name=""
                        class="application-form-textarea"
                        placeholder=" במידה ויש לך רעיון למיזם, כתוב אותו בקצרה."
                    ></textarea>
                  </div>
              </div>

              <button class="theme-btn is-blue is-block">שלח</button>

              
            </div>

            <div class="col">
                <div class="application-form-field application-form__application-form-field">
                  <div class="application-form-field__label">העלאת תמונת פרופיל</div>
                  <div class="application-form-field__input">
                    <label 
                      class="application-form-file-input"
                      data-placeholder="הוספת קובץ"
                    >
                      <input 
                        class="application-form-file-input__input"
                        type="file" name=""
                      >
                      <div class="application-form-file-input__label">
                        הוספת קובץ 
                      </div>
                    </label>
                  </div>

                </div><!-- application-form-field 8 END -->

                <div class="application-form-field application-form__application-form-field">
                  <div class="application-form-field__label">העלאת קורות חיים</div>
                  <div class="application-form-field__input">
                    <label 
                      class="application-form-file-input"
                      data-placeholder="PDF/DOC/DOCX"
                    >
                      <input 
                        class="application-form-file-input__input"
                        type="file" name=""
                      >
                      <div class="application-form-file-input__label">
                        PDF/DOC/DOCX  
                      </div>
                    </label>
                  </div>

                </div><!-- application-form-field 9 END -->
              </div>
          </div>
        </div>
      </div>

  </div>

</main>
<?php
get_footer();
?>