<table class="offset2 table table-condensed" style="width: 45em;">
    <thead>
        <tr>
            <th>Dominio</th>
            <th>Estado</th>
            <th>Mas informacion</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <?php 
                    if (isset($_REQUEST['pagina'])) {
                        echo $_REQUEST['pagina'];
                    }
                ?>
            </td>
            <td>
                <?php 
                    if (isset($_REQUEST['estado'])) {
                        echo $_REQUEST['estado'];
                    }
                ?>
            </td>
            <td>
                <?php 
                    if (isset($_REQUEST['dominio'])) {
                        $sql='SELECT `id`,`precio` FROM `dominios` WHERE `estado` = 1 AND `nombre`="'.$_REQUEST['dominio'].'"';
                        include('../clases/sql.php');
                        if (mysql_affected_rows() > 0) {
                            if($row=mysql_fetch_array($result)){
                                $precio=$row['precio'];
                                echo '<form action="">';
                                echo '<input type="hidden" name="dominio" value="'.$_REQUEST['dominio'].'" />';
                                echo '<select name="" id="">';
                                for ($i=1; $i <= 3; $i++) {
                                    $row['precio']*=$i;
                                    echo '<option value="'.$row['id'].'">'.$i.' Año(s) por $'.$row['precio'].' Pesos Col.</option>';
                                }
                                echo '</select>';
                                echo ' <button type="submit" class="btn btn-warning" style="margin-bottom: 10px;"><i class="icon-shopping-cart icon-white"></i> Buy Now</button>';
                                echo '</form>';
                            }
                        }
                    }else{
                        echo '<a href="http://www.'.$_REQUEST['pagina'].'WWW</a> <a href="http://www.">WHOIS</a>';
                    }
                ?>
            </td>
        </tr>
    </tbody>
</table>