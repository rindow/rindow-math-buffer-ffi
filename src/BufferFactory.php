<?php
namespace Rindow\Math\Buffer\FFI;

use FFI;

class BufferFactory
{
    public function isAvailable() : bool
    {
        return extension_loaded('ffi');
    }

    public function Buffer(int $size, int $dtype) : Buffer
    {
        return new Buffer($size, $dtype);
    }
}