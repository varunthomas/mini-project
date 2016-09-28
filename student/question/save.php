 <?php
    if (isset($_POST['q1'])){
        $q1 = $_POST['q1'];
        mysql_query("INSERT INTO assessment (q1) VALUES ('$q1')");
    }
    ?>