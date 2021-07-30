window.addEventListener('load', function () {

    const defaultSettings = {
        'sitekey': '6LcLy74aAAAAAGticsLft2xjrANPjcnxCRCc1gvj',
        'geniusu_apiEndpoint': 'https://genius-u-v2-pr-1615.herokuapp.com/api/v3/users/create_temp_user',
        'recaptcha_verify_apiEndpoint': 'https://invest.geniusu.com/webinar/verify_recaptcha.php',
        'client_geniusu_apiEndpoint': 'https://invest.geniusu.com/webinar/gu_request.php',
        'event_name' : null
    }
    Object.freeze(defaultSettings);

    let isguFormsubmit = false;
    let isrecaptchaStatevalid = false;

    const user_settings = gurIntialize();

    const settings = set_settings(user_settings);
    Object.freeze(settings);

    if(settings.event_name == null){
        this.alert('Please set event name');
        return false;
    }

    const guFormcomponent = document.createElement('div');
    guFormcomponent.setAttribute('id', 'guFormcomponent');

    const guCheckboxlabel = document.createElement('label');
    guCheckboxlabel.setAttribute('for', 'guAutoregister');
    guFormcomponent.appendChild(guCheckboxlabel);

    const guCheckbox = document.createElement('input');
    guCheckbox.setAttribute('type', 'hidden');
    guCheckbox.setAttribute('id', 'guAutoregister');
    guCheckbox.setAttribute('name', 'guAutoregister');
    guCheckbox.setAttribute('checked', true);
    guCheckboxlabel.appendChild(guCheckbox);

    // const guCheckboxtext = document.createTextNode('REGISTER ME TO GENIUSU');
    // guCheckboxlabel.appendChild(guCheckboxtext);

    const recaptcha = document.createElement('div');
    recaptcha.setAttribute('id', 'gu_recaptcha');
    recaptcha.setAttribute('class', 'g-recaptcha recaptcha-padding-y-15 recaptcha-flex__row--center-center');
    recaptcha.setAttribute('data-sitekey', settings.sitekey);
    recaptcha.setAttribute('data-callback', 'setSubmitionstate');
    recaptcha.setAttribute('data-error-callback', 'setSubmitionstateError');
    recaptcha.setAttribute('data-expired-callback', 'setSubmitionstateExpired');
    guFormcomponent.appendChild(recaptcha);

    const guFormcomponentUtilityscreen = document.createElement('div');
    guFormcomponentUtilityscreen.setAttribute('id', 'recaptcha-utility_screen');
    guFormcomponentUtilityscreen.setAttribute('class', 'recaptcha-flex__row--center-center recaptcha-display-none');

    this.window.setSubmitionstate = setSubmitionstate;
    this.window.setSubmitionstateError = setSubmitionstateError;
    this.window.setSubmitionstateExpired = setSubmitionstateExpired;
    this.window.removeUtilityscreen = removeUtilityscreen;

    let form = document.forms;
    form = Array.from(form);
    let guForm = null;

    form.filter(element => {
        if (element.getAttribute('data-guform-id')) {
            guForm = element;
        }
    });

    if (isFormexist()) {

        guForm.classList.add('recaptcha-position-relative');
        guForm.insertBefore(guFormcomponent, guForm.lastElementChild);
        guForm.appendChild(guFormcomponentUtilityscreen);

        grecaptcha.render(
            gu_recaptcha, {
                'sitekey': settings.sitekey,
                'type': 'image'
            }
        )

        guForm.elements.submit.disabled = true;
        const validationMode = getValidationmode(guForm.getAttribute('data-guform-validationMode'));
        const recaptchaUtilityscreen = this.document.getElementById('recaptcha-utility_screen');
        guForm.addEventListener('submit', () => geniusuAutoregistration(guForm, recaptchaUtilityscreen, validationMode, isrecaptchaStatevalid));

    } else {
        console.error('😭 reCAPTCHA loading failed');
    }

    function geniusuAutoregistration(form, recaptchaUtilityscreen, validationMode, isrecaptchaStatevalid) {

        if (!isrecaptchaStatevalid) {
            event.preventDefault();
            event.stopPropagation();
            return false;
        }

        if (form.elements.guAutoregister.checked && !isguFormsubmit) {
            recaptchaUtilityscreen.classList.toggle('recaptcha-display-none');
            recaptchaUtilityscreen.innerHTML = "<p><b>Processing...</b></p>";
            event.preventDefault();
            event.stopPropagation();
        }

        if (form.elements.guAutoregister.checked && !isguFormsubmit) {

            console.log('gu form included');

            let data = new Object();
            let formData = '';

            data = {
                'first_name': get_formElementvalue(form, 'firstname'),
                'last_name': get_formElementvalue(form, 'lastname'),
                'email': get_formElementvalue(form, 'email'),
                'event_name': settings.event_name,
                'phone': get_phoneNumber(form),
            }

            Object.freeze(data);

            if (validationMode === 'strict') {
                const {
                    first_name,
                    last_name,
                    email,
                    event_name,
                    phone,
                } = data;

                formData = `first_name=${first_name}&last_name=${last_name}&email=${email}&event_name=${event_name}&phone=${phone}&mode=${validationMode}`;

            } else {
                const {
                    first_name,
                    last_name,
                    email,
                    event_name,
                    phone
                } = data;

                formData = `first_name=${first_name}&last_name=${last_name}&email=${email}&event_name=${event_name}&phone=${phone}&mode=${validationMode}`;

            }

            pushData(formData)
                .then(() => {
                    console.log('success 😍');
                    isguFormsubmit = true;
                    guForm.elements.submit.click();
                })
                .catch(error => {
                    let errorStatement;
                    if (error.hasOwnProperty('errors')) {
                        errorStatement = 'Please check following error(s) before resubmitting the form again ,';
                        for (const property in error.errors) {
                            errorStatement += `<br><b>${error.errors[property]}</b>`;
                        }
                        errorStatement += `<br><button type="button" onclick="removeUtilityscreen()" class="recaptcha-button">Try Again</button>`
                    }
                    errorStatement = 'We are facing some issue(s) handling your request. We regret the inconvenience caused.';
                    recaptchaUtilityscreen.innerHTML = `<p>${errorStatement}</p>`;
                    console.error(error);
                });


        } else {
            recaptchaUtilityscreen.classList.contains('recaptcha-display-none') && removeUtilityscreen();
            recaptchaUtilityscreen.innerHTML = "<p><b>Processing...</b></p>";
        }

    }

    function removeUtilityscreen() {
        document.getElementById("recaptcha-utility_screen").classList.toggle('recaptcha-display-none');
    }

    function getValidationmode(mode) {
        return mode === 'strict' ? 'strict' : 'lite';
    }

    async function isRecaptchavalid() {
        return await isRecaptchavalidServer(grecaptcha.getResponse());
    }

    function isRecaptchavalidServer(data) {

        let recaptchaCheck = new Promise(function (resolve, reject) {

            httpRequest = new XMLHttpRequest();
            if (!httpRequest) {
                console.error('Giving up 😭 Cannot create an XMLHTTP instance');
                reject('Giving up 😭 Cannot create an XMLHTTP instance');
            }

            httpRequest.onreadystatechange = requestResult;
            httpRequest.open('POST', settings.recaptcha_verify_apiEndpoint, true);
            httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            httpRequest.send("userdata=" + data);

            function requestResult() {
                if (httpRequest.readyState === XMLHttpRequest.DONE) {
                    if (httpRequest.status === 200) {
                        httpRequest.responseText === 'success' ? resolve(true) : reject(httpRequest.responseText);
                    } else {
                        console.error('😭 There was a problem with the request 🤖');
                        reject('😭 There was a problem with the request 🤖');
                    }
                }
            }

        });

        return recaptchaCheck;

    }

    function setSubmitionstate() {

        isRecaptchavalid()
            .then((isRecaptchaValidresult) => {
                console.log('😍 reCAPTCHA', isRecaptchaValidresult);
                isrecaptchaStatevalid = true;
                guForm.elements.submit.disabled = false;
            })
            .catch((err) => {
                console.log('😭 reCAPTCHA', err);
                isrecaptchaStatevalid = false;
                grecaptcha.reset();
                guForm.elements.submit.disabled = true;
            });

    }

    function setSubmitionstateError() {
        isrecaptchaStatevalid = false;
        guForm.elements.submit.disabled = true;
    }

    function setSubmitionstateExpired() {
        isrecaptchaStatevalid = false;
        guForm.elements.submit.disabled = true;
    }

    function isFormexist() {
        return guForm ? (typeof (grecaptcha) != undefined ? true : false) : false;
    }

    function pushData(data) {

        let dataHandover = new Promise(function (resolve, reject) {

            httpRequest = new XMLHttpRequest();
            if (!httpRequest) {
                console.error('Giving up 😭 Cannot create an XMLHTTP instance');
                reject('Giving up 😭 Cannot create an XMLHTTP instance');
            }

            data = `${data}&geniusuRequest=${settings.geniusu_apiEndpoint}`;

            httpRequest.onreadystatechange = requestResult;
            httpRequest.open('POST', settings.client_geniusu_apiEndpoint, true);
            httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            httpRequest.send(data);

            function requestResult() {
                if (httpRequest.readyState === XMLHttpRequest.DONE) {
                    if (httpRequest.status === 200) {

                        try {
                            const serverResponse = JSON.parse(httpRequest.responseText);
                            if (serverResponse.hasOwnProperty('success')) {
                                resolve(true);
                            } else {
                                console.error('😭 ', serverResponse);
                                reject(serverResponse);
                            }
                        } catch (e) {
                            console.error('😭 There was a problem with the server 🌏');
                            reject('😭 There was a problem with the server 🌏');
                        }

                    } else {
                        console.error('😭 There was a problem with the request 🤖');
                        reject('😭 There was a problem with the request 🤖');
                    }
                }
            }
        });

        return dataHandover;

    }

    function set_settings({
        sitekey = defaultSettings.sitekey,
        geniusu_apiEndpoint = defaultSettings.geniusu_apiEndpoint,
        recaptcha_verify_apiEndpoint = defaultSettings.recaptcha_verify_apiEndpoint,
        client_geniusu_apiEndpoint = defaultSettings.client_geniusu_apiEndpoint,
        event_name = defaultSettings.event_name
    } = {}) {
        {
            return {
                sitekey,
                geniusu_apiEndpoint,
                recaptcha_verify_apiEndpoint,
                client_geniusu_apiEndpoint,
                event_name
            };
        }
    }

    function get_phoneNumber(form) {
        let phone = null;

        if (form.elements.smsenabler.checked) {

            let countryCode, phoneNumber = null;
            countryCode = typeof (form.elements.payment_mobile_country_code) != 'undefined' && form.elements.payment_mobile_country_code.value;
            phoneNumber = typeof (form.elements.phonec) != 'undefined' && form.elements.phonec.value;
            if (countryCode && phoneNumber) {
                phone = countryCode + phoneNumber;
            }

        }

        return phone;
    }

    function get_formElementvalue(form, element) {
        return typeof (form.elements[element]) != 'undefined' ? form.elements[element].value : null;
    }

    // function set_formElementvalue(form,element,value){
    //     const checkValue = get_formElementvalue(form,element);
    //     return checkValue ? checkValue : value;
    // }
});
