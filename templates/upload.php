<?php
?>
<form action="data.php" type="post" enctype="multipart/form-data" >
<input type="file" name="nom" />
</form>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Partie V - Chapitre 5 - Exemple 5</title>

    <style>
      div {
        margin: 50px auto;
        text-align: center;
      }

      #draggable {
        padding: 5px;
        width: 150px;
        background-color: #CCC;
      }

      #dropper {
        padding-top: 40px;
        width: 400px;
        height: 100px;
        border: 2px solid #222;
        background-color: #888;
      }
    </style>
  </head>

  <body>

    <!--<div id="dropper">Fichier a enregistrer !</div>-->
    <form action="../data.php" method="post">
    	<div id="dropper">Fichier a enregistrer !</div>
    	<input type="submit" value="Upload" name="action" />
    </form>
    <script>
    var dropper = document.querySelector('#dropper');

    dropper.addEventListener('dragover', function(e) {
        e.preventDefault(); // Annule l'interdiction de "drop"
    }, false);

    dropper.addEventListener('drop', function(e) {
        e.preventDefault();

        var files = e.dataTransfer.files,
            filesLen = files.length,
            filenames = "";

        for(var i = 0 ; i < filesLen ; i++) {
            filenames += '\n' + files[i].name;

        }
        alert(files.length + ' fichier(s) :\n' + filenames);
    }, false);
    </script>
 
  </body>
</html>
<?php
	//$fichier=$_FILES['dropper'];
	//echo "$fichier";
?>