document.addEventListener('DOMContentLoaded', function () {
    const pwBtn = document.getElementById('pwSwitch');
    const thePw = document.getElementById('password');
    const pwEye = document.getElementById('pw_eye');
    const pwHolder = document.getElementById('pw_holder');
    
    if (pwBtn && thePw && pwEye && pwHolder) {
        pwBtn.addEventListener('click', function () {
            if (thePw.type === 'password') {
                thePw.type = 'text';
                pwEye.classList.remove('fa-eye-slash');
                pwEye.classList.add('fa-eye')

            } else {
                thePw.type = 'password';
                pwEye.classList.remove('fa-eye');
                pwEye.classList.add('fa-eye-slash')
            }
        });

        thePw.addEventListener('focus', function () {
            pwHolder.classList.add('input-container2-focus');
        });

        thePw.addEventListener('blur', function () {
            pwHolder.classList.remove('input-container2-focus');
        });
    }
    console.log('pw eye swither enabled');
});