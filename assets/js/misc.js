function getCurrentLangISO() {
    const searchParams = new URLSearchParams(window.location.search);
    return searchParams.has('lang') ? searchParams.get('lang').toString().toLowerCase() : 'en';
}