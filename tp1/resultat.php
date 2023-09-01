
    <?php
        $name = $_GET['name'] ;
        $fname = $_GET['fname'] ; 
        $tel = $_GET['tel'] ;
        $date = $_GET['date'] ;
        $x = date ('Y') ;
        $y = $x - date("Y",strtotime($date)) ;
        echo 'Nom :' .$name. '<br>';
        echo 'Prénoms :' .$fname. '<br>';
        echo 'Tel :' .$tel. '<br>';
        echo 'Vous avez  <strong>' .$y. '<strong>ans';
    ?>