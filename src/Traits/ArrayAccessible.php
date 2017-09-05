<?php

namespace LinkedInResumeParser\Traits;

/**
 * Class ArrayAccessible
 *
 * @package LinkedInResumeParser\Traits
 */
trait ArrayAccessible
{
    /**
     * @param string $offset
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }

    /**
     * @param string $offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }

    /**
     * @param string $offset
     * @param mixed  $value
     * @return $this
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
        return $this;
    }

    /**
     * @param string $offset
     * @return $this
     */
    public function offsetUnset($offset)
    {
        $this->$offset = null;
        return $this;
    }
}