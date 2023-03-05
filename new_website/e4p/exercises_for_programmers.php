<section class="e4p-body">
<?php 
include("exercises_for_programmers_one.php");
include("exercises_for_programmers_two.php");
include("exercises_for_programmers_three.php");

 ?>
</section>

<script>
        document.addEventListener("DOMContentLoaded", function(event) { 
            var scrollpos = localStorage.getItem('scrollpos');
            if (scrollpos) window.scrollTo(0, scrollpos);
        });

        window.onbeforeunload = function(e) {
            localStorage.setItem('scrollpos', window.scrollY);
        };
    </script>


