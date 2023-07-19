var container = document.getElementById("retainable-rss-embed");
if (container) {
    var css = document.createElement('link');
    css.href = "assets_retainable_rss-embed_retainable.css";
    css.rel = "stylesheet"
    document.getElementsByTagName('head')[0].appendChild(css);
    var script = document.createElement('script');
    script.src = "assets_retainable_rss-embed_retainable.js";
    document.getElementsByTagName('body')[0].appendChild(script);
}
