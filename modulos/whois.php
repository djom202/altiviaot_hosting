<table class="offset2 table table-condensed">
    <thead>
        <tr>
            <th>Dominio</th>
            <th>Estado</th>
            <th>Mas informacion</th>
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
                <a href="http://www.">WWW</a> <a href="http://www.">WHOIS</a>
            </td>
        </tr>
    </tbody>
</table>