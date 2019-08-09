<?php


namespace Daniesy\Record;


class Records implements \Iterator
{
    /**
     * @var array
     */
    private $data = [];
    /**
     * @var int
     */
    private $index = 0;

    /**
     * Records constructor.
     * @param string $type
     * @param array $data
     */
    public function __construct(string $type, array $data = [])
    {
        $this->index = 0;
        $this->data = [];

        foreach ($data as $line) {
            $data = explode(' ', preg_replace('!\s+!', ' ', $line));
            $className = '\\Daniesy\\Record\\' .ucfirst(strtolower($type));
            $this->data[] = new $className($data);
        }
    }

    public function has($value) : bool
    {
        foreach ($this->data as $item) {
            /** @var Record $item */
            if ($item->has($value)) {
                return true;
            }
        }
        return false;
    }

    /**
     * Return the current element
     * @link https://php.net/manual/en/iterator.current.php
     * @return mixed Can return any type.
     * @since 5.0.0
     */
    public function current()
    {
        return $this->data[$this->index];
    }

    /**
     * Move forward to next element
     * @link https://php.net/manual/en/iterator.next.php
     * @return void Any returned value is ignored.
     * @since 5.0.0
     */
    public function next()
    {
        $this->index += 1;
    }

    /**
     * Return the key of the current element
     * @link https://php.net/manual/en/iterator.key.php
     * @return mixed scalar on success, or null on failure.
     * @since 5.0.0
     */
    public function key()
    {
        return $this->index;
    }

    /**
     * Checks if current position is valid
     * @link https://php.net/manual/en/iterator.valid.php
     * @return boolean The return value will be casted to boolean and then evaluated.
     * Returns true on success or false on failure.
     * @since 5.0.0
     */
    public function valid()
    {
        return $this->index < count($this->data);
    }

    /**
     * Rewind the Iterator to the first element
     * @link https://php.net/manual/en/iterator.rewind.php
     * @return void Any returned value is ignored.
     * @since 5.0.0
     */
    public function rewind()
    {
        $this->index = 0;
    }
}