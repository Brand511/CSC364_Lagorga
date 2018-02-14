<?php

require_once(FS_TEMPLATES . 'templateEngine.php');

class mainFooterTemplate extends templateEngine
{
    public function __construct(){

        $temp = <<<HTML


<footer class = "container footer">
<p>
</p>
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; FlyPoleVault 2018</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="Public/assets/vendor/jquery/jquery.min.js"></script>
<script src="Public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
HTML;
        $this->template = $temp;
    }



}