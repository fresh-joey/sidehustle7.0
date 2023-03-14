<?php
    // Using a value of age to be 21
    $age = 17;
    $pvc = "true";
    $ward = 020;

    // if ($age >= 18) {
    //     echo "Voter is eligible to vote";
    // }else {
    //     echo "Voter is below 18, therefore cannot vote";
    // }


    // if ($pvc == "true") {
    //     echo "The voter has PVC";
    // }else {
    //     echo "The voter doesn't have PVC";
    // }


    // if ($ward == 020) {
    //     echo "The voter belongs to this ward, therefore can vote";
    // } else {
    //     echo "This voter does not belong to this ward, and cannot be allowed to vote here";
    // }


    if ($age >= 18 && $pvc == "true" && $ward == 020) {
        echo "Voter is eligible to vote";
    }else {
        echo "Voter is <b>NOT</b> eligible to vote";
    }