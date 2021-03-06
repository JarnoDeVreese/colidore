<div class="recepttoevoegen" style="overflow-y: scroll;">
    <form class="voegrecept" action="recept.php" method="Post" enctype="multipart/form-data">
        <div class="boxlinks">
            <div class="titelgerecht">
                <a class="titelgerecht">Titel gerecht</a></br>
                <input type="txtText" name="Titel" class="TGR" required data-errormessage-value-missing="Vul dit veld in">

                <div class="divprijs">
                    <a class="prijs">Prijs 1-5</a></br>
                    <input type="txtText" class="TGR"  name="Prijs" id="PRI" required data-errormessage-value-missing="Vul dit veld in">
                </div>
            </div>
            <div class="divbereiding">
                <a class="bereiding">Omschrijving</a></br>

                <textarea  name="Bereiding"  required data-errormessage-value-missing="Vul dit veld in"></textarea>
            </div>
            <div class="divprijs">
                <a class="soort">Soort</a></br>
                <select required data-errormessage-value-missing="Vul dit veld in" name="Soort">
                    <option>Ontbijt</option>
                    <option>Middageten</option>
                    <option>Avondeten</option>
                </select>
            </div>
            <div class="divfoto">
                <?php include('test.php');?>
            </div>
            <input class="divinputknop" type="submit" name="Toevoegen" value="Toevoegen">
        </div>


        <div class="boxrechts">
            <div class="divomschrijving">
                <a class="rating">Bereiding</a></br>
                <textarea class="textareaomschrijving" name="textareaomschrijving"  required data-errormessage-value-missing="Vul dit veld in"></textarea>
            </div>
            <div id="ingdiv" class="divvaningredienten">
                <?php include('ingredientarray.php');?>

            </div>
        </div>
    </form>
</div>