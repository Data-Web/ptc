<?php
final class mycart
{

    public static function content()
    {
        if (isset($_SESSION['cart']) && $_SESSION['cart'] != null) {
            return $_SESSION['cart'];
        } else {
            return array();
        }
    }

    /**
     * @param $data
     * array('id' => value1, name => 'value2', price => 'value3')
     */
    public static function insert($data) 
    {
        if ($data == null ) return false;
        if (!isset($_SESSION['cart']) ||  $_SESSION['cart'] == null || !array_key_exists($data['id'], $_SESSION['cart'])) {
            $data['qty'] = 1;
            $_SESSION['cart'][$data['id']] = $data;
        } else {
            $_SESSION['cart'][$data['id']]['qty'] += 1;
        }
    }

    public static function update($qtys = array()) {
        if (isset($_SESSION['cart']) && $_SESSION['cart'] != null && $qtys != null) {
            foreach ($qtys as $productId=>$qty) {
                if ($qty <= 0) {
                    unset($_SESSION['cart'][$productId]);
                } else {
                    $_SESSION['cart'][$productId]['qty'] = $qty;
                }
            }
        }
    }

    /*
     * Get total product in cart
     */
    public static function total()
    {
        $total = 0;
        if (isset($_SESSION['cart']) && $_SESSION['cart'] != null) {
            foreach ($_SESSION['cart'] as $cart) {
                $total += $cart['qty'];
            }
        }
        return $total;
    }

    public static function delete($id)
    {
        if (isset($_SESSION['cart']) ||  $_SESSION['cart'] != null && array_key_exists($id, $_SESSION['cart'])) {
            unset($_SESSION['cart'][$id]);
        }
    }

    public static function deleteAll()
    {
        if (isset($_SESSION['cart']) && $_SESSION['cart'] != null) {
            unset($_SESSION['cart']);
        }
    }
}