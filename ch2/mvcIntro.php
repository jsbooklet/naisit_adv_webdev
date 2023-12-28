<?php
    if(isset($_GET["page"])) {
        $page = $_GET["page"];

        switch ($page) {
            case "dashboard":
                include("dashboard.php");
                break;
            case "profile":
                include("profile.php");
                break;
        }
    }
?>