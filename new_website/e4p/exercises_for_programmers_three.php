
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
<section class='form-parent'>
<form method="POST">
    <div class="form tax-calculator">
        <h1>Tax Calculator</h1>

        <label>What is the order amount?</label>
        <input type="number" name="order-amount" step="0.01" value="<?=$order_amount?>">
        <label>What is the state?</label>
        <input type="text" name="state-name"  value="<?=$state_name?>">
        <p class='output st_output'><?=$st_result?></p>
        <button type='submit' name="st_submitted">Exchange</button>

        

    </div>
</form>
</section>













