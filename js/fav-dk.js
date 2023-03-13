const userPrefersDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
if (userPrefersDark) {
    var link = document.querySelector("link[rel~='icon']");
    if (!link) {
        link = document.createElement('link');
        link.rel = 'icon';
        document.getElementsByTagName('head')[0].appendChild(link);
    }
    link.href = 'image/favicon-dark.svg';
} 