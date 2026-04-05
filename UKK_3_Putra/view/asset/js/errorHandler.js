const urlParam = new URLSearchParams(window.location.search);

if(urlParam.get('error') == 'dupe') {
    alert('Data sudah ada');
    console.log('Duplicate data');
    window.history.replaceState({}, document.title, window.location.pathname);
}