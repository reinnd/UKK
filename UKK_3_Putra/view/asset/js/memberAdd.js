document.addEventListener('DOMContentLoaded', function() {
    const roleIn = document.getElementById('role');
    const classValue = document.getElementById('kelas');
    const nisValue = document.getElementById('nis');
    const actMod = document.getElementById('act_mod');

    function roleExtras() {
        if (roleIn.value === 'siswa') {
            classValue.disabled = false;
            nisValue.disabled = false;
        } else {
            classValue.disabled = true;
            nisValue.disabled = true;
            classValue.value = ''; // Clear kelas input jika bukan siswa
            nisValue.value = '';
        }

        // Update form action berdasarkan role
        if (roleIn.value === 'admin') {
            actMod.action = '../../controller/c_user.php?action=register&type=primary';
        } else if (roleIn.value === 'siswa') {
            actMod.action = '../../controller/c_user.php?action=register';
        } else {
            actMod.action = '';
        }
    }

    roleIn.addEventListener('change', roleExtras);
    roleExtras();

    const urlParams = new URLSearchParams(window.location.search);
    const type = urlParams.get('type');
});