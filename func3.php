<?php

function test(){
    print func_num_args();
    print_r(func_get_args());
    print func_get_arg(0);
}

test("posew","7","phy");