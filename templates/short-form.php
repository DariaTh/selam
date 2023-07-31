<form class="short-form">
    <div class="row1">
        <div class="input-wrapper">
            <label class="form-label" for="full-name-first">*שם מלא</label>
            <input type="text" name="full-name" class="form-input" id="full-name-first" aria-describedby="full-name-error">
            <span class="error-message" id="full-name-error"></span>
        </div>

        <div class="input-wrapper">
            <label class="form-label" for="phone-first">*טלפון</label>
            <input type="text" name="phone" class="form-input" id="phone-first" aria-describedby="phone-error">
            <span class="error-message" id="phone-error"></span>
        </div>
    </div>

    <div class="row2">
        <div class="input-wrapper">
            <label class="form-label" for="email-first">*מייל"</label>
            <input type="text" name="email" class="form-input" id="email-first" aria-describedby="email-error">
            <span class="error-message" id="email-error"></span>
        </div>

        <button type="submit" id="fake_submit">שליחה</button>
    </div>

</form>