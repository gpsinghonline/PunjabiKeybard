
<head>
<title>Online Punjabi Keyboard</title>
</head> 

<center><H2>Online Punjabi Keyboard</H2></center><br/>

<div class="sahil" id="h">

</div>

<hr>


<div class="style18"><h3><center>Type any Word in English and Press "Space" Button, Your Text will be converted to Punjabi </h3></center></div>

<script src="https://www.google.com/jsapi?key=ABQIAAAAnj1TD2b2reXE4BJKVLGoBRQqsz6uH7-PdxH1VZcIizz6FCPPYhR7xbb9dHNFBOt0uvVXlXPETm_i9Q" type="text/javascript"></script>
<script type="text/javascript">

      // Load the Google Transliterate API
      google.load("elements", "1", {
            packages: "transliteration"
          });

      function onLoad() {
        var options = {
            sourceLanguage:
                google.elements.transliteration.LanguageCode.ENGLISH,
            destinationLanguage:
                [google.elements.transliteration.LanguageCode.PUNJABI],
            shortcutKey: 'ctrl+g',
            transliterationEnabled: true
        };

        // Create an instance on TransliterationControl with the required
        // options.
        var control =
            new google.elements.transliteration.TransliterationControl(options);

        // Enable transliteration in the textbox with id
        // 'transliterateTextarea'.
        control.makeTransliteratable(['transliterateTextarea']);
      }
      google.setOnLoadCallback(onLoad);
    </script>
<center><h4>Type Below:<br></center>
<center>
<textarea id="transliterateTextarea" style="width:600px;height:400px"></textarea> 
</center>
<br />


