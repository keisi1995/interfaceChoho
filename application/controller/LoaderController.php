<?php
class LoaderController
{
    public function View($url = '', $data = array())
    {
        if (isset($_SESSION["result"]) && $_SESSION["result"]["success"]) {
            include 'application/view/layout/header.php';
            include 'application/view/layout/sidebar.php';
            include 'application/view/' . (($url != '') ? $url : 'seguridad/viewNofound.php');
            include 'application/view/layout/footer.php';
        } else {
            include 'application/view/seguridad/viewLogin.php';
        }
    }
}
