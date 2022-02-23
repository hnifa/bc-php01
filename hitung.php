<form method="POST">
    <table>
        <tr>
            <td>Input 1:</td>
            <td>
                <input type="number" namespace="angka 1" name="angka_1">
            </td>
        </tr>
        <tr>
            <td>Input 2:</td>
            <td>
                <input type="number" namespace="angka 2" name="angka_2">
            </td>
        </tr>
    </table>
    <button type="submit" name="hasil">submit</button>
</form>

<?php
    $result = 0;
    if(isset($_POST['hasil'])) { //isset() untuk validasi nilai true/false
        $a1 = $_POST['angka_1'];
        $a2 = $_POST['angka_2'];
        $result = $a1 ** $a2;
    }
?>

<table>
    <tr>
        <td>Hasil :</td>
        <td><?php echo $result; ?></td>
    </tr>
</table>