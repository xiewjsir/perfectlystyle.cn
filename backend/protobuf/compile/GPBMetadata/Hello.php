<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: hello.proto

namespace GPBMetadata;

class Hello
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(hex2bin(
            "0a81010a0b68656c6c6f2e70726f746f120568656c6c6f22170a07526571" .
            "75657374120c0a046e616d6518012001280922170a08526573706f6e7365" .
            "120b0a036d736718012001280932310a03536179122a0a0548656c6c6f12" .
            "0e2e68656c6c6f2e526571756573741a0f2e68656c6c6f2e526573706f6e" .
            "73652200620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

