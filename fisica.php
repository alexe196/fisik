<?php
namespace  fisica;
class Fisica{

    function Om($u, $r)
    {
        return !empty($u) && !empty($r) ? $u /$r : 0;
    }
}