<?php
    // Using values to make all conditions to be true
    $age = 18;
    $pvc = true;
    $ward = 020;

    if ($age < 18) {
        echo "Voter is below 18.";

    }elseif ($pvc != "true") {
        echo "The voter doesn't have PVC.";

    }elseif ($ward != 020) {
        echo "This voter does not belong to this ward.";

    }else {
        echo "Voter is <b>ELIGIBLE</b> to vote";
    }

?>