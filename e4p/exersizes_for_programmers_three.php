<style>
    .output {
        text-align: center;
    }

    form {
        display: flex;
        flex-direction: row;
        justify-content: center;
        margin-bottom: 20vh;
        
    }

    .form {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .form h1 {
        text-align: center;
        
    }
    .form label {
        text-align: center;
        margin-bottom: 2vh;
    }
     button[type='submit'] {
        margin: 1vh ;
    }
    input {
        margin-bottom: 2vh;
    }
    div {
        width: 400px;
        height: 400px;
    }
    
    
</style>


<!-- NOT SURE WHAT TO DO HERE, ASK DEREK -->

<?php 


        $order_amount = null;
        $state_name = null;
        $subtotal = null;
        $tax = null;
        $total =  null;
        $wi = null;
        $wisconsin = null;
        

    $st_array = [
        $order_amount,
        $state_name,
        $subtotal,
        $tax,
        $total,
        $wi,
        $wisconsin,
    ];
        

    if ( isset($_POST['st_submitted']) ) {

        $order_amount = $_POST['order-amount'];
        $order_amount = round($order_amount);
        $state_name = $_POST['state-name'];
        $total = $order_amount;
        $st_result = "Total: \$" . $total ;
        $wi = "wi";
        $wisconsin = "wisconsin";
        $wi = strtolower($wi);
        $wisconsin = strtolower($wisconsin);

    } 

        
        

    if ($state_name == in_array($st_array, [$wi, $wisconsin]) ) {

        $tax = 0.55;
        $st_total = $order_amount + $tax;

        $st_result = "Subtotal: \$" . $order_amount . "<br>" . 
        "Tax: \$" . $tax . "<br>" .  
        "Total: \$" . $total ;

    }

    
 ?>

<form method="POST">
    <div class="form tax-calculator">
        <h1>Tax Calculator</h1>

        <label>What is the order amount?</label>
        <input type="number" name="order-amount" step="0.01" value="<?=$order_amount?>">

        <label>What is the state?</label>
        <input type="text" name="state-name"  value="<?=$state_name?>">

        <button type='submit' name="st_submitted">Exchange</button>

        <p class='output st_output'><?=$st_result?></p>

    </div>
</form>













<script>
        document.addEventListener("DOMContentLoaded", function(event) { 
            var scrollpos = localStorage.getItem('scrollpos');
            if (scrollpos) window.scrollTo(0, scrollpos);
        });

        window.onbeforeunload = function(e) {
            localStorage.setItem('scrollpos', window.scrollY);
        };
    </script>
