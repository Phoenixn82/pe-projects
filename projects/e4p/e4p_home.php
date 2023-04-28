<script>
        document.addEventListener("DOMContentLoaded", function(event) { 
            var scrollpos = localStorage.getItem('scrollpos');
            if (scrollpos) window.scrollTo(0, scrollpos);
        });

        window.onbeforeunload = function(e) {
            localStorage.setItem('scrollpos', window.scrollY);
        };
</script>
   



<section class="e4p-body">
<?php 
include("php_only/e4p_1.php");
include("php_only/e4p_2.php");
include("php_only/e4p_3.php");
include("js_only/e4p_1_js.php");
include("js_only/e4p_2_js.php");


 ?>
</section>

    
    <script src="projects/e4p/js_only/e4p_1.js" defer></script>
    <script src="projects/e4p/js_only/e4p_2.js" defer></script>
 