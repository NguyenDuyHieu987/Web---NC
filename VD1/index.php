<?php
$tien_cong = 100;
$ngay_cong = 0;

function SoNgayCong($n)
{
    global $ngay_cong;
    $ngay_cong = $n;
}
function TinhLuong()
{
    global $ngay_cong, $tien_cong;
    return $tien_cong *  $ngay_cong;
}
SoNgayCong(100);
echo TinhLuong();