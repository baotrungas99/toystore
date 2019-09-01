<?php
if(isset($_POST["id"])&&isset($_POST["name"])){
    $eid=$_POST["id"];
    $name=$_POST["name"];
    if(empty(getenv("DATABASE_URL"))){
        $dpo = new PDO('pgsql:host=localhost;port=5432;
        dbnname=MyDatabase','postgres','Trung123');
    } else{
        $db = parse_url(getenv("DATABASE_URL"));
        $dpo = new PDO("pgsql:".sprintf(
            "host=%s;port=%s;user=%s;password=%s;dbname=%s",
            $db["host"],
            $db["port"],
            $db["user"],
            $db["pass"],
            ltrim($db["path"],"/")
        ));
    }
}
?>