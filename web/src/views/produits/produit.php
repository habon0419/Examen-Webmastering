
<?php 
ob_start();

?>
<br><br><br>

<div class="container">
    <div class="row">
        <div class="col-md-6 ">
            <div class="card">
            <div class="card-header bg-primary">
				<h4 class="text-white">Ajouter un commentaire</h4>
			</div>
                <div class="card-body">
                    <form action="" method="post">
                      
                        <div class="form-group">
                            <label for="">Nom</label>
                            <input type="text" name="libProd" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        
                        <div class="form-group">
                            <label for="">Email </label>
                            <input type="text" name="qty" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Page Accueil</label>
                            <input type="text" name="price" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Commentaire</label>
                            <textarea rows="5" cols="15">
                                
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Format</label>
                            <select>
                                <option>Simple</option>
                                <option>Plaint</option>
                            </select>
                        </div>
                        
                        <!--
                        <div class="form-group">
                            <form enctype="multipart/form-data" action="#" method="post">
                            <input type="hidden" name="MAX_FILE_SIZE" value="250000" />
                            <input type="file" name="fic" size=50 />
                            <input type="submit" value="Envoyer" />
                            </form>
                        </div>
                        !-->
                        <div class="form-group">
                            <button type="submit" name="addProduit" value="btn_product" class="btn btn-primary">Ajouter</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <div class="col-md-6">
            <h3 class="text-center">Liste des commentaires</h3>
            <table class="table table-striped" border=1>
                <thead class="table_header">
                    <tr>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Page Accueil</th>
                        <th>Commentaire</th>
                        <th>Format</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($arr_data['lesProduits'] as $produit) 
                    {
                ?> 
                    <tr>
                        <td><?=$produit->libProd?></td>
                        <td><?=$produit->qty?></td>
                        <td><?=$produit->price?></td>
                        <td></td>
                        <td></td>
                        
                    </tr>
                    <?php 
                    }
                ?>
                </tbody>
            </table>
        </div><!-- fin md 6 table -->
    </div><!-- fin row -->

</div><!-- fin container -->

<?php 
$content_for_layout = ob_get_clean();
include_once SRC_VIEWS."layout/layout_produits.php";
?>