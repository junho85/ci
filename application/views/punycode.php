<script src="assets/punycode.js"></script>

<h1>Punycode</h1>

<h2>references</h2>
<ul>
    <li>https://github.com/bestiejs/punycode.js/</li>
    <input type="text" id="unicode" />
    <input type="text" id="ascii" />
</ul>

<script>
    $("#unicode").val(punycode.toASCII('준호씨'));
    $("#ascii").val(punycode.toUnicode('xn--od5b93ecup'));
</script>
