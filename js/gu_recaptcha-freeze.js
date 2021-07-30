window.addEventListener('load', function () {

    let isguFormsubmit = false;
    let isrecaptchaStatevalid = false;
    const recaptchaSettings = recaptchaIntialize();

    const guFormcomponent = document.createElement('div');
    guFormcomponent.setAttribute('id', 'guFormcomponent');

    const guCheckboxlabel = document.createElement('label');
    guCheckboxlabel.setAttribute('for', 'guAutoregister');
    guFormcomponent.appendChild(guCheckboxlabel);

    const guCheckbox = document.createElement('input');
    guCheckbox.setAttribute('type', 'checkbox');
    guCheckbox.setAttribute('id', 'guAutoregister');
    guCheckbox.setAttribute('name', 'guAutoregister');
    guCheckboxlabel.appendChild(guCheckbox);

    const guCheckboxtext = document.createTextNode('Autoregister me to GeniusU');
    guCheckboxlabel.appendChild(guCheckboxtext);

    const recaptcha = document.createElement('div');
    recaptcha.setAttribute('id', 'gu_recaptcha');
    recaptcha.setAttribute('class', 'g-recaptcha recaptcha-padding-y-15 recaptcha-flex__row--center-center');
    recaptcha.setAttribute('data-sitekey', recaptchaSettings.sitekey);
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
                'sitekey': recaptchaSettings.sitekey,
                'type': 'image'
            }
        )

        guForm.elements.submit.disabled = true;
        const validationMode = getValidationmode(guForm.getAttribute('data-guform-validationMode'));
        const recaptchaUtilityscreen = this.document.getElementById('recaptcha-utility_screen');
        guForm.addEventListener('submit', () => geniusuAutoregistration(guForm, recaptchaUtilityscreen, validationMode, isrecaptchaStatevalid));

    } else {
        console.log('ERROR : reCAPTCHA loading failed');
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
                'first_name': typeof (form.elements.firstname) != 'undefined' ? form.elements.firstname.value : 'first_name',
                'last_name': typeof (form.elements.lastname) != 'undefined' ? form.elements.lastname.value : 'last_name',
                'email': typeof (form.elements.email) != 'undefined' ? form.elements.email.value : 'email',
                'event_name': typeof (form.elements.event_name) != 'undefined' ? form.elements.event_name.value : 'event_name',
                'phone': typeof (form.elements.mobile_no) != 'undefined' ? form.elements.mobile_no.value : 'phone',
            }

            if (validationMode === 'strict') {
                const {
                    first_name,
                    last_name,
                    email,
                    event_name,
                    phone
                } = data;

                formData = `first_name=${first_name}&last_name=${last_name}&email=${email}&event_name=${event_name}&phone=${phone}&mode=${validationMode}`;

            } else {
                const {
                    first_name,
                    last_name,
                    email
                } = data;

                formData = `first_name=${first_name}&last_name=${last_name}&email=${email}&mode=${validationMode}`;

            }

            pushData(formData)
                .then(() => {
                    console.log('success');
                    isguFormsubmit = true;
                    guForm.elements.submit.click();
                })
                .catch(error => {
                    let errorStatement = 'Please check following error(s) before resubmitting the form again ,'
                    for (const property in error.errors) {
                        errorStatement += `<br><b>${error.errors[property]}</b>`;
                    }
                    errorStatement += `<br><button type="button" onclick="removeUtilityscreen()" class="recaptcha-button">Try Again</button>`
                    recaptchaUtilityscreen.innerHTML = `<p>${errorStatement}</p>`;
                    console.log(error);
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
        return mode === 'lite' ? 'lite' : 'strict';
    }

    async function isRecaptchavalid() {
        return await isRecaptchavalidServer(grecaptcha.getResponse());
    }

    function isRecaptchavalidServer(data) {

        let recaptchaCheck = new Promise(function (resolve, reject) {

            httpRequest = new XMLHttpRequest();
            if (!httpRequest) {
                console.error('Giving up :( Cannot create an XMLHTTP instance');
                reject('Giving up :( Cannot create an XMLHTTP instance');
            }

            httpRequest.onreadystatechange = requestResult;
            httpRequest.open('POST', recaptchaSettings.recaptcha_verify_apiEndpoint, true);
            httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            httpRequest.send("userdata=" + data);

            function requestResult() {
                if (httpRequest.readyState === XMLHttpRequest.DONE) {
                    if (httpRequest.status === 200) {
                        httpRequest.responseText === 'success' ? resolve(true) : reject(httpRequest.responseText);
                    } else {
                        console.error('There was a problem with the request.');
                        reject('There was a problem with the request.');
                    }
                }
            }

        });

        return recaptchaCheck;

    }

    function setSubmitionstate() {

        isRecaptchavalid()
            .then((isRecaptchaValidresult) => {
                console.log('reCAPTCHA :)', isRecaptchaValidresult);
                isrecaptchaStatevalid = true;
                guForm.elements.submit.disabled = false;
            })
            .catch((err) => {
                console.log('reCAPTCHA :(', err);
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
                console.error('Giving up :( Cannot create an XMLHTTP instance');
                reject('Giving up :( Cannot create an XMLHTTP instance');
            }

            data = `${data}&geniusuRequest=${recaptchaSettings.geniusu_apiEndpoint}`;

            httpRequest.onreadystatechange = requestResult;
            httpRequest.open('POST', recaptchaSettings.client_geniusu_apiEndpoint, true);
            httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            httpRequest.send(data);

            function requestResult() {
                if (httpRequest.readyState === XMLHttpRequest.DONE) {
                    if (httpRequest.status === 200) {

                        const serverResponse = JSON.parse(httpRequest.responseText);
                        if (serverResponse.hasOwnProperty('success')) {
                            resolve(true);
                        } else {
                            console.error(serverResponse);
                            reject(serverResponse);
                        }

                    } else {
                        console.error('There was a problem with the request.');
                        reject('There was a problem with the request.');
                    }
                }
            }
        });

        return dataHandover;

    }

});
