<script src="assets/punycode.js"></script>
<script>
    function unicode_to_ascii() {
        var src = $("#unicode_to_ascii_form input[name=src]").val();
        $("#unicode_to_ascii_form input[name=dst]").val(punycode.toASCII(src));
    }

    function ascii_to_unicode() {
        var src = $("#ascii_to_unicode_form input[name=src]").val();
        $("#ascii_to_unicode_form input[name=dst]").val(punycode.toUnicode(src));
    }
</script>

<h1>Punycode</h1>

<h2>references</h2>
<ul>
    <li>https://github.com/bestiejs/punycode.js/</li>
</ul>

<h2>unicode to ascii</h2>
<form id="unicode_to_ascii_form" class="form-inline">
    <input type="text" name="src" value="준호씨" />
    <input type="text" name="dst" />
    <input type="button" class="btn" value="transform" onclick="unicode_to_ascii()" />
</form>

<h2>ascii to unicode</h2>
<form id="ascii_to_unicode_form" class="form-inline">
    <input type="text" name="src" value="xn--od5b93ecup" />
    <input type="text" name="dst" />
    <input type="button" class="btn" value="transform" onclick="ascii_to_unicode()"/>
</form>


