<?php

if (!function_exists('base58_encode')) {
    /**
     * Base58 encode data
     *
     * @param string $data
     * @return string|false
     */
    function base58_encode(string $data)
    {
        try {
            $base58 = new StephenHill\Base58();
            return $base58->encode($data);
        } catch (Exception $e) {
            trigger_error($e->getMessage(), E_USER_WARNING);
            return false;
        }
    }
}

if (!function_exists('base58_decode')) {
    /**
     * Base58 decode data
     *
     * @param string $encodedData
     * @return string|false
     */
    function base58_decode(string $encodedData)
    {
        try {
            $base58 = new StephenHill\Base58();
            return $base58->decode($encodedData);
        } catch (Exception $e) {
            trigger_error($e->getMessage(), E_USER_WARNING);
            return false;
        }
    }
}