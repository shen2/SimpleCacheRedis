<?php

namespace SimpleCache;

/**
 * Exception interface for invalid cache arguments.
 *
 * When an invalid argument is passed it must throw an exception which implements
 * this interface
 */
class InvalidArgumentException extends CacheException implements \Psr\SimpleCache\InvalidArgumentException
{
}
